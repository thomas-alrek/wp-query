<?php
/*
    Plugin Name: WPQuery
    Plugin URI: http://github.com/apility/wp-query
    Description: Expose raw DB tables as a JSON api.
    Version: 1.0.1
    Author: Apility
    Author URI: http://apility.no
    License: MIT

    Copyright 2017 Apility AS

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

defined('ABSPATH') or die;

define('WPQUERY_ROOT', plugin_dir_path(__FILE__) . 'includes/');

require_once(WPQUERY_ROOT . 'WPQuery.php');
$wpQuery = new WPQueryPlugin();

register_activation_hook(__FILE__, [$wpQuery, 'install']);
register_uninstall_hook(__FILE__, [$wpQuery, 'uninstall']);
