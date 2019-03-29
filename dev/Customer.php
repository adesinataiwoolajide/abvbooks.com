<?php 
    class Customer{

        public function getAllCustomer()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM customer_registration ORDER BY registration_id desc");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getAllSingleCustomer($customer_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM customer_registration WHERE reg_number=:customer_id");
            $query->bindValue(":customer_id", $customer_id);
			$query->execute();
			return $query->fetch();
        }

        public function getAllSingleCustomerOrder($customer_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM customer_order WHERE customer_id=:customer_id");
            $query->bindValue(":customer_id", $customer_id);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getAllSingleCustomerOrderAsset($customer_id)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT sum(amount) as asset FROM customer_order WHERE customer_id=:customer_id");
            $query->bindValue(":customer_id", $customer_id);
			$query->execute();
            $like = $query->fetch();
            return $like['asset'];
        }
    }
?>