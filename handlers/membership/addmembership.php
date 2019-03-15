<?php
session_start();
require_once("../../dev/autoload.php");
if($_POST){
        $customers = new Customers;
        $id = $_SESSION['customerid'];
        $membership_type = trim($_POST['membership_type']);
        $state = trim($_POST['stateofresidence']);
        $rank = trim($_POST['rank']);
        $surname = trim($_POST['surname']);
        $othername = trim($_POST['othername']);
        $residentialadd = trim($_POST['residentialadd']);
        $contactadd = trim($_POST['contactadd']);
        $phonenum = trim($_POST['phonenum']);
        $email = trim($_POST['email']);
        $dateofbirth = trim($_POST['dateofbirth']);
        $sex1 = trim($_POST['sex1']);
        $bvn = trim($_POST['bvn']);
        $active_service = trim($_POST['active-service']);
        $retired = trim($_POST['retired']); 
        $officeaddress = trim($_POST['officeaddress']);
        $officetel = trim($_POST['officetel']);
        $contact_person = trim($_POST['contactperson']);
        $kin_surname = trim($_POST['kinsurname']);
        $kin_othername = trim($_POST['kinothername']);
        $kin_phone = trim($_POST['kinphone']);
        $kin_email = trim($_POST['kincontact']);
        $kin_contact = trim($_POST['kincontact']);
        $kin_relationship = trim($_POST['kinrel']);
        $kin_sex = trim($_POST['kinsex']);
        $affliation_marital_status = trim($_POST['maritalstat']);
        $affliation_family_size = trim($_POST['familisize']);
        $kin_gender = trim($_POST['kinsex']);
        $no_of_dependent = trim($_POST['numdep']);
        $credit = trim($_POST['credit']);
        $amount = trim($_POST['amt']);  
        $company = isset($_POST['company']) ? $_POST['company'] : null;
        $_SESSION['memberType'] = $membership_type;
        $save = $customers->addMembershipData($id, $company, $membership_type, $state, $rank, $surname, $othername, $residentialadd, $contactadd, $phonenum, $email, $dateofbirth, $sex1, $bvn, $active_service, $retired, $officeaddress, $officetel, $contact_person, $kin_surname, $kin_othername, $kin_phone, $kin_email, $kin_contact, $kin_relationship, $kin_sex, $affliation_marital_status, $affliation_family_size, $kin_gender, $no_of_dependent, $credit, $amount);
		if($save){
            $rowCount = $_POST['rowcount'] + 1;
            for($i = 1; $i < $rowCount; $i++){
                $name = $_POST['contactname'.$i];
                $email = $_POST['contactemail'.$i];
                $tel = $_POST['contacttel'.$i];
                $customers->addCustomerReferralContacts($id, $name, $email, $tel);
            }

			$_SESSION['success'] = "Application successful";
			General::redirectTo("../../shipping-address.php");			
		}else{
			$_SESSION['error'] = "Account failed.";
			General::redirectTo("../../membership-form.php");						
		}
}
?>