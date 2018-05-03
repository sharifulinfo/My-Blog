<?php
	class Formate{
		public function FormateDate($date){
			return date('F j, Y,g:i a',strtotime($date));
		}
		
		public function TextShort($text, $limit=400){
			$text = $text." ";
			$text = substr($text, 0 ,$limit);
			$text = substr($text, 0 ,strrpos($text,' '));
			$text = $text."...";
			return $text;
		}

		public function ValiDation($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		public function title(){
			$path = $_SERVER['SCRIPT_FILENAME'];
			$title = basename($path,'.php');
			$title = str_replace('_', ' ', $title);
			if($title == 'index'){
				$title = 'home';
			}elseif($title == 'contact'){
				$title = 'contact';
			}
			$title = ucwords($title);
			return $title;
		}
		public function Role($role){
			if($role=='0'){
				$role = 'Admin';
			}elseif($role == '1'){
				$role = 'Author'; 
			}else{
				$role = 'Editor';
			}
			return $role;
		}	
	}

?>