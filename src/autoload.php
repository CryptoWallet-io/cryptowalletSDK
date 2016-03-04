<?php

    /**
     * Created by PhpStorm.
     * User: jkirkby91
     * Date: 04/03/2016
     * Time: 18:08
     */

    if (version_compare(PHP_VERSION, '5.4.0', '<')) {
        throw new Exception('The CryptoWallet SDK requires PHP version 5.4 or higher.');
    }
    if (!function_exists('curl_init')) {
        throw new \Exception('CryptoWallet needs the CURL PHP extension.');
    }
    if (!function_exists('json_decode')) {
        throw new \Exception('CryptoWallet needs the JSON PHP extension.');
    }

    spl_autoload_register(function ($class) {

            // project-specific namespace prefix
            $prefix = 'Cryptowallet\\';

            // base directory for the namespace prefix
            $base_dir = __DIR__ . '/';

            // does the class use the namespace prefix?
            $len = strlen($prefix);
            if (strncmp($prefix, $class, $len) !== 0) {
                // no, move to the next registered autoloader
                return;
            }

            // get the relative class name
            $relative_class = substr($class, $len);

            // replace the namespace prefix with the base directory, replace namespace
            // separators with directory separators in the relative class name, append
            // with .php
            $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

            // if the file exists, require it
            if (file_exists($file)) {
                require $file;
            }
        });