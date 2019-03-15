<?php
	class Type{

		public function checkIfAlreadyAdded($product_name)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM products WHERE product_name =:product_name");
			$query->bindValue(":product_name", $product_name);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function createProduct($product_name, $slug, $image, $genre_id, $category_id, $amount, $quantity, $description, $edition, $publisher_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO products (product_name, slug, image, genre_id, category_id, amount, quantity, description, edition, publisher_id) VALUES (:product_name, :slug, :image, :genre_id, :category_id, :amount, :quantity, :description, :edition, :publisher_id)");
			$query->bindValue(":product_name", $product_name);
			$query->bindValue(":slug", $slug);
			$query->bindValue(":image", $image);
			$query->bindValue(":genre_id", $genre_id);
			$query->bindValue(":category_id", $category_id);
			$query->bindValue(":amount", $amount);
			$query->bindValue(":quantity", $quantity);
			$query->bindValue(":description", $description);
			$query->bindValue(":edition", $edition);
			$query->bindValue(":publisher_id", $publisher_id);
			
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function updateProduct($product_name, $slug, $image, $genre_id, $category_id, $amount, $quantity, $description, $edition, $publisher_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE products SET product_name=:product_name, image=:image, genre_id=:genre_id, category_id=:category_id, amount=:amount, quantity=:quantity, description=:description, edition=:edition, publisher_id=:publisher_id WHERE slug=:slug)");
			$query->bindValue(":product_name", $product_name);
			$query->bindValue(":slug", $slug);
			$query->bindValue(":image", $image);
			$query->bindValue(":genre_id", $genre_id);
			$query->bindValue(":category_id", $category_id);
			$query->bindValue(":amount", $amount);
			$query->bindValue(":quantity", $quantity);
			$query->bindValue(":description", $description);
			$query->bindValue(":edition", $edition);
			$query->bindValue(":publisher_id", $publisher_id);
			
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function checkDeuplicateProductStock($product_name, $category_id, $genre_id, $publisher_id){
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM product_stock WHERE product_name=:product_name AND category_id=:category_id AND genre_id=:genre_id AND publisher_id=:publisher_id");
			$query->bindValue(":product_name", $product_name);
			$query->bindValue(":category_id", $category_id);
			$query->bindValue(":genre_id", $genre_id);
			$query->bindValue(":publisher_id", $publisher_id);
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function addProductStock($product_name, $category_id, $type_id, $quantity, $publisher_id){
			$query = $db->prepare("INSERT INTO product_stock(product_name, category_id, genre_id, quantity, publisher_id) VALUES(:product_name, :category_id, :genre_id, :quantity, :publisher_id)");
			$query->bindValue(":product_name", $product_name);
			$query->bindValue(":category_id", $category_id);
			$query->bindValue(":genre_id", $genre_id);
			$query->bindValue(":quantity", $quantity);
			$query->bindValue(":publisher_id", $publisher_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
		}

		public function getsProductStock($product_name, $category_id, $genre_id, $manufacturer_id){
			$query = $db->prepare("SELECT * FROM product_stock WHERE product_name=:product_name AND category_id=:category_id AND genre_id=:genre_id AND publisher_id=:publisher_id");
			$query->bindValue(":product_name", $product_name);
			$query->bindValue(":category_id", $category_id);
			$query->bindValue(":genre_id", $genre_id);
			$query->bindValue(":publisher_id", $publisher_id);
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function updateProductStock($product_name, $total, $category_id, $genre_id, $publisher_id){
			
			$query = $db->prepare("UPDATE product_stock SET quantity=:total WHERE product_name=:product_name AND category_id=:category_id AND genre_id=:genre_id AND publisher_id=:publisher_id");
			$query->bindValue(":product_name", $product_name);
			$query->bindValue(":category_id", $category_id);
			$query->bindValue(":genre_id", $genre_id);
			$query->bindValue(":total", $total);
			$query->bindValue(":publisher_id", $publisher_id);
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function publishTheProducts($slug){
			
			$query = $this->db->prepare("UPDATE products SET publish=1 WHERE slug=:slug");
			$query->bindValue(":slug", $slug);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
		}

		public function unPublishTheProduct($slug){
			$query = $this->db->prepare("UPDATE products SET publish=0 WHERE slug=:slug");
			$query->bindValue(":slug", $slug);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
		}

        public function deleteProduct($slug)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("DELETE FROM products WHERE slug=:slug");
			$query->bindValue(":type_id", $type_id);
			if($query->execute()){
				return true;
			}else{
                return false;
            }
			
        }

        public function getAllProduct()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM products ORDER BY product_name desc");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getSingleProduct($slug)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM products WHERE slug=:slug");
            $query->bindValue(":type_id", $type_id);
			$query->execute();
			return $query->fetch();
		}

	}