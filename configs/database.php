<?php

/*
 * ABOUT USING 'define'
 * For more information about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Database Connection
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 * DB_PASS: the password of the above user
 * DB_PORT: database port
 * DB_TYPE: database type. mysql is default
 * DB_FILE: this is completely optional, unless you are gonna use SQLITE
 */
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "myphp_db");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_PORT", 3306);
define("DB_TYPE", 'mysql');
define("DB_FILE", 'database.db'); // FOR SQLITE!!
