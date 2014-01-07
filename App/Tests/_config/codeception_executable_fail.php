<?php

/*
|--------------------------------------------------------------------------
| Test Settings for Codeception
|--------------------------------------------------------------------------
|
| All of the settings in this Configuration file are intentionally broken.
|
| When Webception is run in Test Mode, we load this config to ensure all the
| error trapping works as expected.
|
*/

return array(

    /*
    |--------------------------------------------------------------------------
    | Path of the Codeception.yml
    |--------------------------------------------------------------------------
    */

    'sites' => array(

        'Webception'      => dirname(__FILE__) .'/../../codeception_pass.yml',

    ),

    /*
    |--------------------------------------------------------------------------
    | Dummy Codeception executable.
    |--------------------------------------------------------------------------
    */

    'executable' => '/not/a/real/executable',

    /*
    |--------------------------------------------------------------------------
    | You get to decide which type of tests get included.
    |--------------------------------------------------------------------------
    */

    'tests' => array(
        'acceptance' => TRUE,
        'functional' => TRUE,
        'unit'       => TRUE,
    ),

    /*
    |--------------------------------------------------------------------------
    | When we scan for the tests, we need to ignore the following files.
    |--------------------------------------------------------------------------
    */

    'ignore' => array(
        'WebGuy.php',
        'TestGuy.php',
        'CodeGuy.php',
        '_bootstrap.php',
    ),

    'location'   => __FILE__,
);
