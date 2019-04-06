<?php
function foo()
{
    try {
        echo 'Eto vypolnitsa <br>';
        return 42;
        echo 'Eto NE vypolnitsa <br>';
    } catch (Exception $e) {
    } finally {
        echo 'I ETO TOZHE vypolnitsa <br>';
    }
}

echo foo(); //Eto vypolnitsa
//I eto Vypolnitsa
//42