<?php
	class Search extends Products{
		public $query;
		public function searchAllProducts()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM tblproducts WHERE pname LIKE :query OR description LIKE :query OR pcode LIKE :query");
			$query->bindValue(":query", $this->query);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function paginateSearchAllProducts()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM tblproducts WHERE pname LIKE :query OR description LIKE :query OR pcode LIKE :query LIMIT :start, :items_per_page");
			$query->bindValue(":query", $this->query);
			$query->bindValue(":start", $this->start, PDO::PARAM_INT);
			$query->bindValue(":items_per_page", $this->itemPerPage, PDO::PARAM_INT);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;		
		}

		public function searchAllProductsByCategory()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM tblproducts WHERE pname LIKE :query OR description LIKE :query AND category = :category");
			$query->bindValue(":query", $this->query);
			$query->bindValue(":category", $this->category);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function paginateSearchAllProductsByCategory()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM tblproducts WHERE pname LIKE :query OR description LIKE :query AND category = :category LIMIT :start, :items_per_page");
			$query->bindValue(":query", $this->query);
			$query->bindValue(":category", $this->category);
			$query->bindValue(":start", $this->start, PDO::PARAM_INT);
			$query->bindValue(":items_per_page", $this->itemPerPage, PDO::PARAM_INT);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;		
		}				
	}
?>