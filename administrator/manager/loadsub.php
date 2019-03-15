<?php 
require_once("../../dev/autoload.php");
$type = new Type;
$type_id = intval($_GET['q']);
//echo json_encode($type->getSingleBookType($_GET['q']));
$db = Database::getInstance()->getConnection();
$query = $db->prepare("SELECT * FROM product_type WHERE type_id=:type_id");
$query->bindValue(":type_id", $type_id);
$query->execute();

	while($listType = $query->fetch()) { ?>
		<option value="<?php echo  $listType['type_id'] ?>" selected>
			<?php echo $listType['type_name'] ?>	
		</option><?php
	} 
?>




