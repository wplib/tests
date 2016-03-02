<?php
echo 'Welcome to the WPLib Test Suite' . PHP_EOL;
echo 'Version 0.1' . PHP_EOL;
echo 'Author: WPLib Team <team@wplib.org>' . PHP_EOL;

$working = getenv( 'WPLIB_TESTS_WORKING_DIR' );

if ( isset( $working ) && '' != $working ) {
    define( 'WPLIB_TESTS_WORKING_DIR', $working );
}

if( ! defined( 'WPLIB_TESTS_WORKING_DIR' ) ) {
    define( 'WPLIB_TESTS_WORKING_DIR', dirname( __DIR__ ) );
}

require WPLIB_TESTS_WORKING_DIR . '/vendor/wp-tests/tags/4.4.2/tests/phpunit/includes/functions.php';
require WPLIB_TESTS_WORKING_DIR . '/vendor/wp-tests/tags/4.4.2/tests/phpunit/includes/bootstrap.php';

require WPLIB_TESTS_WORKING_DIR . '/vendor/wplib/tests-wplib/phpunit/framework/test-case.php';
require WPLIB_TESTS_WORKING_DIR . '/wplib.php';