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
        
        public function checkIfAlreadyAdded($publisher_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM publishers WHERE publisher_name = :publisher_name");
			$query->bindValue(":publisher_name", $publisher_name);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function createPublisher($publisher_name, $publisher_logo)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO publishers (publisher_name, publisher_logo) VALUES (:publisher_name, :publisher_logo)");
			$query->bindValue(":publisher_name", $publisher_name);
			$query->bindValue(":publisher_logo", $publisher_logo);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function updatePublisherwithImage($publisher_id, $publisher_name, $publisher_logo)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE publishers SET publisher_name=:publisher_name, publisher_logo=:publisher_logo WHERE publisher_id=:publisher_id ");
            $query->bindValue(":publisher_name", $publisher_name);
            $query->bindValue(":publisher_id", $publisher_id);
            $query->bindValue(":publisher_logo", $publisher_logo);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function updatePublisherwithOutImage($publisher_id, $publisher_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE publishers SET publisher_name=:publisher_name WHERE publisher_id=:publisher_id ");
            $query->bindValue(":publisher_name", $publisher_name);
            $query->bindValue(":publisher_id", $publisher_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function deletePublisher($publisher_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM publishers WHERE publisher_id=:publisher_id");
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
			$query = $db->prepare("SELECT * FROM publishers ORDER BY publisher_id desc");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

         public function getAllPublisherSide()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM publishers ORDER BY publisher_id desc LIMIT 0,15");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSinglePublisher($publisher_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM publishers WHERE publisher_id=:publisher_id");
            $query->bindValue(":publisher_id", $publisher_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSinglePublisherList($publisher_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM publishers WHERE publisher_id=:publisher_id");
            $query->bindValue(":publisher_id", $publisher_id);
			$query->execute();
			return $query->fetch();
		}

		public function getSinglePublisherName($publisher_name)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM publishers WHERE publisher_name=:publisher_name");
            $query->bindValue(":publisher_name", $publisher_name);
			$query->execute();
			return $query->fetch();
		}
    }

?>