<?php
	class Author{
        private $author_name;
        private $author_id ; 

        public function getAuthor($author_name)
		{
			return $this->author_name = $author_name;
        }

        public function getAuthorId($author_id)
		{
			return $this->author_id = $author_id;
        }
        
        public function checkIfAlreadyAdded($author_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM authors WHERE author_name =:author_name");
			$query->bindValue(":author_name", $author_name);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function createAuthor($author_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO authors(author_name) VALUES(:author_name)");
			$query->bindValue(":author_name", $author_name);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function updateAuthor($author_id, $author_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE authors SET author_name=:author_name WHERE author_id=:author_id ");
            $query->bindValue(":author_name", $author_name);
            $query->bindValue(":author_id", $author_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function deleteAuthor($author_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM authors WHERE author_id=:author_id");
			$query->bindValue(":author_id", $author_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllAuthor()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM authors ORDER BY author_id ASC");
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
        }
        
        public function getSingleAuthor($author_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM authors WHERE author_id=:author_id");
            $query->bindValue(":author_id", $author_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getSingleAuthorList($author_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM authors WHERE author_id=:author_id");
            $query->bindValue(":author_id", $author_id);
			$query->execute();
			return $query->fetch();
		}
    }

?>