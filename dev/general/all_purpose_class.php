<?php
	class all_purpose{
		private $db;

		function __construct($db){
			$this->db= $db;
		}

		
		public function sanitizeInput($input){
			$input=trim($input);
			$input=strip_tags($input);
			$input=stripslashes($input);
			$input=htmlentities($input);
			return $input;
		}

		public function gettingUserdetails($user_id){
			try{
				$bringing = $this->db->prepare("SELECT * FROM admin_login WHERE useer_id=:user_id");
				$are = array(':user_id'=>$user_id);
				if($bringing->execute($are)){
					return true;
				}else{
					return false;
				}

			}catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
		}

		public function operationHistory($action, $email){
			try{
				$history = $this->db->prepare("INSERT INTO activity(action, user_details)VALUES(:action, :email)");
				$arrr = array(':action'=>$action, ':email'=>$email);
				$result = $history->execute($arrr);
				if(!empty($result)){
					return true;
				}else{
					return false;
				}
			}catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
		}

		public function redirect($url){
		    header('Location: '.$url);
		    exit();
		}

		public function userAccessLevel($access, $action, $email){
			if($access ==1){
				$nn= $this->operationHistory($action, $email);
				$_SESSION['success'] = $_SESSION['name']. " ". "Welcome to Manager Dashboard";
				$this->redirect("manager/./");
			}elseif($access ==2){
				$nn= $this->operationHistory($action, $email);
				$_SESSION['success'] = $_SESSION['name']. " ". "Welcome to Merchant Dashboard";
				$this->redirect("merchant/./");
			}else{
				$_SESSION['error'] = "Your are an Invalid User";
				$this->redirect("../.././");
			}
			return $access;
		}

		public function getUserDetailsandAddActivity($email, $action){
			try{
				$loging_out = $this->db->prepare("SELECT * FROM admin_login WHERE user_name =:email");
				$arr = array(':email' =>$email);
				$loging_out->execute($arr);
				$feting = $loging_out->fetch();	
				$new =$this->operationHistory($action, $email);
			}catch(PDOException $e){
				echo $e->getMessage();
				return false;
			}
		
		}

		public static function generateRandomHash($length)
		{
			return strtoupper(substr(md5(uniqid(rand())), 0, (-32 + $length)));
		}	

	}
?>