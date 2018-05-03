<?php
	/**
	* Session Class
	*/
	class Session{
		public static function init(){
			session_start();
		}

		public static function set($key,$val){
			$_SESSION[$key] = $val;
		}

		public static function get($key){
			if(isset($_SESSION[$key])){
				return $_SESSION[$key];
			}else{
				return false;
			}
		}

		public static function CheckSession(){
			self::init();
			if(self::get("login")==false){
				self::destory();
				header("location: login.php");
			}
		}
		public static function CheckLogin(){
			self::init();
			if(self::get("login")==true){
				header("location: index.php");
			}
		}

		public static function destory(){
			session_destroy();
			header("location: login.php");
		} 

	}
?>