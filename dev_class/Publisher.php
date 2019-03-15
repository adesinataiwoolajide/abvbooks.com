<?php
	class Publisher{
        private $publisher_name;
        private $publisher_id ; 

        public function getPublisher($publisher_name)
		{
			return $this->publisher_name = $publisher_name;
        }

        public function getPublisherId($publisher_id)
		{
			return $this->publisher_id = $publisher_id;
        }
        
        public function checkIfAlreadyAdded()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM publisher WHERE publisher_name = :publisher_name");
			$query->bindValue(":publisher_name", $this->publisher_name);
			$query->execute();
			$fetch = $query->rowCount();
			return $fetch;
		}

		public function createPublisher()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO publisher (publisher_name) VALUES (:publisher_name)");
			$query->bindValue(":publisher_name", $this->publisher_name);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function updatePublisher()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE publisher SET publisher_name=:publisher_name WHERE publisher_id=:publisher_id ");
            $query->bindValue(":publisher_name", $this->publisher_name);
            $query->bindValue(":publisher_id", $this->publisher_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function deletePublisher($publisher_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM publisher WHERE publisher_id=:publisher_id");
			$query->bindValue(":publisher_id", $publisher_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllPublisher()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM publisher ORDER BY publisher_id ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSinglePublisher()
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM publisher WHERE publisher_id=:publisher_id");
            $query->bindValue(":publisher_id", $publisher_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
    }

?>