<?php
	class Weight{

        public function checkIfAlreadyExist($weight_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM product_weight WHERE weight_name =:weight_name");
			$query->bindValue(":weight_name", $weight_name);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function createProductWeight($weight_name, $amount)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO product_weight (weight_name, amount) VALUES (:weight_name, :amount)");
            $query->bindValue(":weight_name", $weight_name);
            $query->bindValue(":amount", $amount);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function updateProductWeight($weight_name, $amount, $weight_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE product_weight SET weight_name=:weight_name, amount=:amount WHERE weight_id=:weight_id");
            $query->bindValue(":weight_name", $weight_name);
            $query->bindValue(":amount", $amount);
            $query->bindValue(":weight_id", $weight_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
        }

        public function deleteProductWeight($weight_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM product_weight WHERE weight_id=:weight_id");
			$query->bindValue(":weight_id", $weight_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllProductWeight()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM product_weight ORDER BY weight_name ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleBookWeight($weight_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM product_weight WHERE weight_id=:weight_id");
            $query->bindValue(":weight_id", $weight_id);
			$query->execute();
			return $query->fetch();
        }
        
        public function getSingleBookWeightList($weight_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM product_weight WHERE weight_id=:weight_id");
            $query->bindValue(":weight_id", $weight_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}


    }