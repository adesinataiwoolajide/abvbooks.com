<?php
	class Type{
        private $type_name;
        private $type_id ; 

        public function getProductType($type_name)
		{
			return $this->type_name = $type_name;
        }

        public function getProductTId($type_id)
		{
			return $this->type_id = $type_id;
        }
        
        public function checkIfAlreadyAdded($type_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM product_type WHERE type_name =:type_name");
			$query->bindValue(":type_name", $type_name);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function createProductType($type_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO product_type (type_name) VALUES (:type_name)");
			$query->bindValue(":type_name", $type_name);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function updateProductType()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE product_type SET type_name=:type_name WHERE type_id=:type_id ");
            $query->bindValue(":type_name", $this->type_name);
            $query->bindValue(":type_id", $this->type_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function deleteProductType($type_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM product_type WHERE type_id=:type_id");
			$query->bindValue(":type_id", $type_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllProductType()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM product_type ORDER BY type_name ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleBookType($type_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM product_type WHERE type_id=:type_id");
            $query->bindValue(":type_id", $type_id);
			$query->execute();
			return $query->fetch();
		}

		public function getTypeGenre($type_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM genre WHERE type_id=:type_id");
            $query->bindValue(":type_id", $type_id);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;	
		}
    }

?>