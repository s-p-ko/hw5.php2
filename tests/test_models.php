<?php
require_once __DIR__ . '/../autoload.php';

use App\Models\Article;
use App\Models\User;

assert('array' === gettype(Article::findAll()));
assert('array' === gettype(User::findAll()));
assert('object' === gettype(Article::findById(9)));
assert('object' === gettype(User::findById(1)));
assert('boolean' === gettype(Article::findById(90000)));
assert('boolean' === gettype(User::findById(90000)));
assert('array' === gettype(User::findAllLast(2)));
assert('array' === gettype(Article::findAllLast(4)));
assert('boolean' === gettype(Article::findAllLast(0)));

//$art = Article::findAll();
//var_dump($art);
//echo '<br><br>';
//$us = User::findAll();
//var_dump($us);
//var_dump(Article::findById(9));
//var_dump(Article::findById(9000));

//test public function insert() of abstract class Model
//$artcl = new Article();
//$artcl->title = 'The title: test insert method';
//$artcl->content = 'The content: test insert method';
//var_dump($artcl->insert());die;

////test public function insert() of abstract class Model
//$us = new User();
//$us->email = 'insert@test.com';
//$us->password = 'test_insert';
//var_dump($us->insert());die;

////test public function update() of abstract class Model
//$artcl = new Article();
//$artcl->id = 15;
//$artcl->title = 'Title test update1';
//$artcl->content = 'Contetnt test update1';
//var_dump($artcl->update());die;

//test public function save() of abstract class Model
//$artcl = new Article();
////$artcl->id = 15;
//$artcl->title = 'Title test save2';
//$artcl->content = 'Contetnt test save2';
//var_dump($artcl->save());die;

//$us = new User();
//$us->id = 7;
//$us->email = 'save1@test.com';
//$us->password = 'test_save1';
//var_dump($us->save());die;

//test public function delete() of abstract class Model
//$artcl = new Article();
//$artcl->id = 16;
//$us = new User();
//$us->id = 6;
//var_dump($us->delete(), $artcl->delete());die;
