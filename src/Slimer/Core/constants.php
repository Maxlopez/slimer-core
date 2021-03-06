<?php

/*
|-----------------------------------------------------------------------------------
| Absolute path to the Slimer Framework directory
|-----------------------------------------------------------------------------------
*/
if ( !defined('ABSPATH') ){
	define('ABSPATH',  dirname( dirname( dirname( dirname( dirname( dirname( dirname(__FILE__) ) ) ) ) ) ) );
}

/*
|-----------------------------------------------------------------------------------
| Absolute path to the "app" directory
|-----------------------------------------------------------------------------------
*/
if ( !defined('APP_PATH') ){
	define('APP_PATH',  ABSPATH . '/app');
}

/*
|-----------------------------------------------------------------------------------
| Absolute path to the "slimer" directory
|-----------------------------------------------------------------------------------
*/
if ( !defined('SLIMER_PATH') ){
	define('SLIMER_PATH',  dirname( dirname(__FILE__) ) );
}
