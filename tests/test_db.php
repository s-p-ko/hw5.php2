<?php
require_once __DIR__ . '/../autoload.php';

use App\Db;

$db = new Db();

$classArticle = '\App\Models\Article';
$classUser = '\App\Models\User';

$sql = 'SELECT * FROM news';
assert('array' === gettype($db->query($sql, [], $classArticle)));
assert('object' === gettype($db->query($sql, [], $classArticle) [0]));
assert('array' === gettype($db->query($sql)));
//var_dump($db->query($sql) );die;
//var_dump( $db->query($sql, [], $classArticle));die;

$sql = 'SELECT * FROM users';
assert('array' === gettype($db->query($sql, [], $classUser)));
assert('object' === gettype($db->query($sql, [], $classUser) [0]));
assert('array' === gettype($db->query($sql)));
//var_dump(( $db->query($sql, [], $classUser) [0])); die;
//var_dump(( $db->query($sql, [], $classUser) )); die;
//var_dump( $db->query($sql) ); die;

$sql = 'SELECT * FROM news WHERE id=:id';
assert('object' === gettype($db->query($sql, [':id' => 1], $classArticle)[0]));
assert('array' === gettype($db->query($sql, [':id' => 1])[0]));
assert(true === empty($db->query($sql, [':id' => 4000])[0]));

$sql = 'SELECT * FROM users WHERE id=:id';
assert('object' === gettype($db->query($sql, [':id' => 2], $classUser)[0]));
assert('array' === gettype($db->query($sql, [':id' => 2])[0]));
assert(true === empty($db->query($sql, [':id' => 4000])[0]));
//var_dump($db->query($sql, [':id' => 1], $classUser)[0]);
//var_dump($db->query($sql, [':id' => 1])[0]);
//var_dump($db->query($sql, [':id' => 10], $classUser)[0]);


$sql = 'INSERT INTO news (title, content) VALUES(:title, :content)';
assert(true === $db->execute($sql, [':title' => 'Title test', ':content' =>
        'Content test']));
//
//$sql = 'INSERT INTO users (email, password) VALUES(:email, :password)';
//assert( true === $db->execute($sql, [':email' => 'test1@test.com', ':password' =>
//        '121212']) );
