<?php
$db = mysqli_connect("localhost", "root", "fagsam", "coopco");
$document_name = $_FILES["uploaded"]["name"];
$document_size = $_FILES["uploaded"]["size"];
$document_tmp = $_FILES["uploaded"]["tmp_name"];
$dir = "../../config/"; //Declaring Path for uploaded images	
$validextensions = array("xls");  //Extensions which are allowed
$ext = explode('.', basename($document_name));//explode file name from dot(.) 
$file_extension = end($ext); //store extensions in the variable
echo $passport = $dir . md5(uniqid()) . "." . $file_extension;//set the target path with a new name of image 

    if(move_uploaded_file($document_tmp, $passport)){

		require_once ('../../excel/excel_reader2.php');
		error_reporting(E_ALL ^ E_NOTICE);
		//$thefilename =$dir.$passport; 
		$thefilename = $passport; 
		//$data->read("$thefilename");
		$data = new Spreadsheet_Excel_Reader($thefilename);
		//$data->sheets[0]['numCols']
		$scount = 0; $fcount = 0;
		//echo "Total No of Lines:".$data->rowcount($sheet_index=0)."<br />";
		for ($j = 2; $j <= $data->rowcount($sheet_index=0); $j++)
		{
			
			$pname = addslashes(strtolower(trim($data->val($j,3))));
			$pcode = trim($data->val($j,4));
			$description = strtoupper($pname);
			// $description = strtoupper(addslashes(trim($data->val($j,5))));
			echo $amount = str_replace(",","",trim($data->val($j,5))); 
			echo "<br>";
			echo $largepic =  trim($data->val($j,6));

			$slug = str_replace("'","",strtolower(str_replace(" ", "-", $pname)))."-".rand(2122,565675);
			$new = 1;
			$thumbpic = $mediumpic = $largepic;
			$onsales = 0;
			$related = "none";
			$tags = "";
			$category = trim($data->val($j,7));
			$subcat = trim($data->val($j,8));
			$sizes = trim($data->val($j,9));
			$wght = "";
			$stock = 1;

			$run = $db->query("INSERT INTO tblproducts_copy (pname, pcode, description, slug, amount, new, thumbpic, mediumpic, largepic, onsales, related, tags, category, subcat, wght, stock, shoes_size) VALUES ('$pname', '$pcode', '$description', '$slug', '$amount', '$new', '$thumbpic', '$mediumpic', '$largepic', '$onsales', '$related', '$tags', '$category', '$subcat', '$wght', '$stock', '$sizes')");
		}
			
    }else{
		echo "failed1";
    	
    }


?>
