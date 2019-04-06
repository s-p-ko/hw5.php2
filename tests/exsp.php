<?php
require_once __DIR__ . '/../autoload.php';

//class MyException1 extends Exception {}
//class MyException2 extends Exception {}
//$ex = new Exception('Something happened', 42);
//var_dump($ex);
//var_dump($ex->getMessage());
//var_dump($ex->getCode());
//var_dump($ex->getLine());
//var_dump($ex->getFile());
//var_dump($ex->getTrace());
//
//echo $ex;
//
//
////1
//function foo()
//{
////        try {
//        return bar();
////    } catch (Exception $e) {
////        echo 'Возникла ошибка, level 1: ' . $e->getMessage();
////        return 0;
////    }
//
//}
//
////2
//function bar()
//{
////    return baz();
//    try {
//        return baz();
//    } catch (MyException2 | MyException1 $e) {
//        echo 'Возникла ошибка MyException2: ' . $e->getMessage() . '<br>';
//        throw $e;
//    } catch (MyException1 $e) {
//    echo 'Возникла ошибка MyException1: ' . $e->getMessage() . '<br>';
//    throw $e;
//} finally {
//        echo '<br> Connection closed <br>';
//    }
//}
//
////3
//function baz()
//{
////    return 42;
//    throw new MyException1('Error!');
//}
//
////0
//try {
//    echo foo();
//} catch (Exception $e) {
//    echo 'Возникла ошибка, level 0: ' . $e->getMessage() . '<br>';
//}

//function checkPassword(string $password) {
//    $errors = new \tests\MultiException();
//    if (strlen($password) < 6) {
//        $errors->add(new \Exception('Less than 6'));
//    }
//    if (false === strpos($password, '!')) {
//        $errors->add(new \Exception('Without !'));
//    }
//    if (!$errors->empty()) {
//       throw $errors;
//    }
//    return true;
//}
//
//try {
//    $result = checkPassword('123');
//    var_dump($result);
//    } catch (\tests\MultiException $er) {
//    foreach ($er->all() as $e) {
//        echo 'Error <br>';
//        echo $e->getMessage() . '<br>';
//    }
//}
