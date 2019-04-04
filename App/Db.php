<?php
namespace App;

use App\Exceptions\DbException;

class Db
{
    protected $dbh;

    /**
     * Db constructor.
     */
    public function __construct()
    {

            $config = Config::instance();
        try {
            $this->dbh = new \PDO(
                'mysql:host=' . $config->data['db']['host'] . ';dbname=' .
                $config->data['db']['dbname'],
                $config->data['db']['user'],
                $config->data['db']['password']
            );
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new DbException('No database connection: ' . $e->getMessage
                ());
        }

    }

    /**
     * Executes queries and return data
     * @param string $sql
     * @param array $params
     * @param string $class
     * @return array
     */
    public function query(string $sql, array $params = [], string $class =
    null) : array
    {
        try {
            $sth = $this->dbh->prepare($sql);
        } catch (\PDOException $e) {
            throw new DbException('Error while preparing the request: ' . $e->getMessage
                ());
        }
        try {
            $sth->execute($params);
        } catch (\PDOException $e) {
            throw new DbException('Error executing the request: ' . $e->getMessage());
        }
            if (null === $class) {
                return $sth->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     * Execution request from models
     * @param string $sql
     * @param array $params
     * @return bool
     */
    public function execute(string $sql, array $params = []) : bool
    {
        try {
            $sth = $this->dbh->prepare($sql);
        } catch (\PDOException $e) {
            throw new DbException('Error executing the request: ' . $e->getMessage());
        }
        try {
            return $sth->execute($params);
        } catch (\PDOException $e) {
            throw new DbException('Error executing the request: ' . $e->getMessage());
        }
//        return $this->dbh->prepare($sql)->execute($params);
    }

    /**
     * Gets last inserted id
     * @return string
     */
    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
