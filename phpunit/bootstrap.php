<?php
echo 'Welcome to the WPLib Test Suite' . PHP_EOL;
echo 'Version 0.1' . PHP_EOL;
echo 'Author: WPLib Team <team@wplib.org>' . PHP_EOL;

define( 'WPLIB_TESTS_WORKING_DIR', dirname( __DIR__ ) );

require WPLIB_TESTS_WORKING_DIR . '/vendor/wp-tests/trunk/tests/phpunit/includes/functions.php';
require WPLIB_TESTS_WORKING_DIR . '/vendor/wp-tests/trunk/tests/phpunit/includes/bootstrap.php';

require 'framework/test-case.php';
require WPLIB_TESTS_WORKING_DIR . '/vendor/wplib/wplib/wplib.php';