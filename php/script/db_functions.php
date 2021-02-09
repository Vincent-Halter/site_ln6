<?php
/**
 * Database functions for a MySQL with PHP tutorial
 * 
 * @copyright Eran Galperin
 * @license MIT License
 * @see http://www.binpress.com/tutorial/using-php-with-mysql-the-right-way/17
 */
 
/**7+
 * Connect to the database
 * 
 * @return bool false on failure / mysqli MySQLi object instance on success
 */
function db_connect() {
    

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
		// Load configuration as an array. Use the actual location of your configuration file
		// Put the configuration file outside of the document root
		//$config = parse_ini_file('./config.ini');
        //$connection = mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        mysqli_set_charset($connection, 'utf8' );
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }

    return $connection;
}

/**
 * Query the database
 *
 * @param $query The query string
 * @return mixed The result of the mysqli::query() function
 */
function db_query($query) {
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);

    return $result;
}

/**
 * Fetch rows from the database (SELECT query)
 *
 * @param $query The query string
 * @return bool False on failure / array Database rows on success
 */
function db_select($query) {
    $rows = array();
    $result = db_query($query);

    // If query failed, return `false`
    if($result === false) {
        return false;
    }

    // If query was successful, retrieve all the rows into an array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}

/**
 * Fetch the last error from the database
 * 
 * @return string Database error message
 */
function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}

/**
 * Quote and escape value for use in a database query
 *
 * @param string $value The value to be quoted and escaped
 * @return string The quoted and escaped string
 */
function db_quote($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}
/**
 * Retrieve the last inserted id
 * 
 * @return string Last id
 */
function db_lastId() {
    $connection = db_connect();
    $last_id = mysqli_insert_id($connection);
    return $last_id;
}

function checkSession() {
    
    $hasAccess = false;
    
    if(!isset($_SESSION['email'])) {
        $hasAccess = true;
    }
    
    return $hasAccess;
    
}