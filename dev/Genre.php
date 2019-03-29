<?php
	class Genre{
        private $genre_name;
        private $genre_id ; 

        public function getGenre($genre_name)
		{
			return $this->genre_name = $genre_name;
        }

        public function getGenreId($genre_id)
		{
			return $this->genre_id = $genre_id;
        }
        
        public function checkIfAlreadyAdded($genre_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM genre WHERE genre_name = :genre_name");
			$query->bindValue(":genre_name", $genre_name);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function createGenre($genre_name, $type_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO genre (genre_name, type_id) VALUES (:genre_name, :type_id)");
			$query->bindValue(":genre_name", $genre_name);
			$query->bindValue(":type_id", $type_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function updateGenre($genre_name, $genre_id, $type_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE genre SET genre_name=:genre_name, type_id=:type_id WHERE genre_id=:genre_id ");
            $query->bindValue(":genre_name", $genre_name);
            $query->bindValue(":genre_id", $genre_id);
            $query->bindValue("type_id", $type_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function deleteGenre($genre_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM genre WHERE genre_id=:genre_id");
			$query->bindValue(":genre_id", $genre_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllGenre()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM genre ORDER BY genre_id ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleGenre($genre_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM genre WHERE genre_id=:genre_id");
            $query->bindValue(":genre_id", $genre_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSingleGenreType($genre_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM genre WHERE genre_id=:genre_id");
            $query->bindValue(":genre_id", $genre_id);
			$query->execute();
			return $query->fetch();
		}

		public function getSingleGenreTypeName($genre_name)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM genre WHERE genre_name=:genre_name");
            $query->bindValue(":genre_name", $genre_name);
			$query->execute();
			return $query->fetch();
		}
    }

?>