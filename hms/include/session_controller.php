<!--
	file name		:		session_controller.php
	Description		:		Module used for managing sessions
	Created by		: 		likith sai
-->

<?php

	class session_controller {
		
		function __construct() {
			self::init();
		}
		
		
		public function __destruct() {
			self::end();
		}
		
		
		public static function init() {
			return session_start();
		}
		
		
		public static function read( $name ) { 
			return isset( $_SESSION[$name] ) ? $_SESSION[$name] : "null";
		}
		
		public static function write( $name, $value ) {
			$_SESSION[$name] = $value;	
		}
		
		
		public static function delete( $name ) {
			unset( $_SESSION[$name] );
		}
		
		
		public static function end() {
			session_destroy();
		}
		
		
		public static function getSessionTime() {
			return session_cache_expire();
		}
		
		public static function printSession() {
			echo print_r( $_SESSION );
		}
		
	}
	
?>