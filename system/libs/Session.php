<?php 
	/**
	 * Session Class
	 */
	class Session 
	{
		
		public static function initial(){
			session_start();
		}

		public static function set($key, $value){
			$_SESSION[$key] = $value;
		} 

		public static function get($key){
			if(isset($_SESSION[$key])){ 
				return $_SESSION[$key];
			}else{
				return FALSE;
			}
		}

		public static function checksession(){
			self::initial();
			if(self::get('login')==false){
				self::destroy();
				header('Location:'.BASED_URL.'/Login');
			}
		}

		public static function destroy(){
			session_destroy();
		}
	}
 ?>