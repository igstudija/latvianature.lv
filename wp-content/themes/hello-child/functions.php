<?php

//echo get_stylesheet_directory();

$_dirs = array(
    get_stylesheet_directory() . '/functions/*.php'
);
foreach ($_dirs as $_dir) {
    foreach (glob($_dir) as $_file) {
        require_once $_file;
    }
}