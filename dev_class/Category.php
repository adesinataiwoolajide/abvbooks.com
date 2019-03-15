<?php
	class Category{
        private $category_name;
        private $category_id ; 

        public function getcategory($category_name)
		{
			return $this->category_name = $category_name;
        }

        public function getcategoryId($category_id)
		{
			return $this->category_id = $category_id;
        }
        
        public function checkIfAlreadyAdded()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM products_category WHERE category_name = :category_name");
			$query->bindValue(":category_name", $this->category_name);
			$query->execute();
			$fetch = $query->rowCount();
			return $fetch;
		}

		public function createCategory()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO products_category (category_name) VALUES (:category_name)");
			$query->bindValue(":category_name", $this->category_name);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function updateCategory()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE products_category SET category_name=:category_name WHERE category_id=:category_id ");
            $query->bindValue(":category_name", $this->category_name);
            $query->bindValue(":category_id", $this->category_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }
        
        public function deleteCategory($category_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM products_category WHERE category_id=:category_id");
			$query->bindValue(":category_id", $category_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllCategory()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM products_category ORDER BY category_id ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleCategory()
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM products_category WHERE category_id=:category_id");
            $query->bindValue(":category_id", $category_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
    }

?>