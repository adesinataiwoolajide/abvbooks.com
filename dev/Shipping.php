<?php
	class Shipping extends Account{
		private $phone;
		private $street_address;
		private $state;
		private $country;
		private $landmark;
		private $city;
		public $locationId;
		public $location;

		public function getState($state)
		{
			return $this->state = $state;
		}

		public function getCountry($country)
		{
			return $this->country = $country;
		}

		public function getCity($city)
		{
			return $this->city = $city;
		}		

		public function getAddress($street_address)
		{
			return $this->street_address = $street_address;
		}		

		public function getPhone($phone)
		{
			return $this->phone = $phone;
		}

		public function getLandmark($landmark)
		{
			return $this->landmark = $landmark;
		}				

		public function loadShippingLocations()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->query("SELECT * FROM shipping_location_charge");
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function saveShippingAddress()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("INSERT INTO shipping_address (customer_id, phone, address, landmark, state, country, city) VALUES (:customer_id, :phone, :address, :landmark, :state, :country, :city)");
			$query->bindValue(":customer_id", $this->customerId);
			$query->bindValue(":phone", $this->phone);
			$query->bindValue(":address", $this->street_address);
			$query->bindValue(":landmark", $this->landmark);
			$query->bindValue(":state", $this->state);
			$query->bindValue(":country", $this->country);
			$query->bindValue(":city", $this->city);
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function updateShippingAddress()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("UPDATE shipping_address SET phone = :phone, address = :address, landmark = :landmark, state = :state, country = :country, city = :city WHERE customer_id = :customer_id");
			$query->bindValue(":customer_id", $this->customerId);
			$query->bindValue(":phone", $this->phone);
			$query->bindValue(":address", $this->street_address);
			$query->bindValue(":landmark", $this->landmark);
			$query->bindValue(":state", $this->state);
			$query->bindValue(":country", $this->country);
			$query->bindValue(":city", $this->city);
			if($query->execute()){
				return true;
			}
			return false;
		}

		public function getCustomerShippingAddress($customer_id)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM shipping_address WHERE customer_id = :customer_id");
			$query->bindValue(":customer_id", $customer_id);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}		

		public function getShippingAddress()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM shipping_address WHERE customer_id = :customer_id");
			$query->bindValue(":customer_id", $this->customerId);
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function getCustomerShippingLocationCharge()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM shipping_location_charge WHERE location_id = :location_id");
			$query->bindValue(":location_id", $this->locationId);
			$query->execute();
			$fetch = $query->fetch(PDO::FETCH_ASSOC);
			return $fetch['charge'];
		}

		public function getStateZone($state)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM shipping_zone WHERE state = :state");
			$query->bindValue(":state", $state);
			$query->execute();
			$fetch = $query->fetch(PDO::FETCH_ASSOC);
			return $fetch['zone'];
		}

		public function gettingStateZone($zone)
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM shipping_zone_charges WHERE zone = :zone");
			$query->bindValue(":zone", $zone);
			$query->execute();
			$fetch = $query->fetch(PDO::FETCH_ASSOC);
			return $fetch;
		}

		public function getCustomerShippingLocationCharge2()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM shipping_location_charge WHERE location = :location");
			$query->bindValue(":location", $this->locationId);
			$query->execute();
			$fetch = $query->fetch(PDO::FETCH_ASSOC);
			return $fetch['location_id'];
		}	

		public function getShippingCharge($zone, $weight){
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM shipping_zone_charges WHERE zone = '$zone'");
			$query->execute();
			$fetch = $query->fetchAll(PDO::FETCH_ASSOC);
			foreach($fetch as $result){
				if($weight <= $result['0.5']){
					$charge = $result['0.5'];
				}elseif($weight > $result['0.5'] && $weight <= $result['2.1']){
					$charge = $result['2.1'];
				}elseif($weight > $result['2.1'] && $weight <= $result['5.1']){
					$charge = $result['5.1'];
				}elseif($weight > $result['5.1']){
					$charge = $result['5.1'] + $result['range_4'];
				}
			}
			//calculate 15% of shipping
			return ((15 / 100) * $charge) + $charge;
		}

	}
?>