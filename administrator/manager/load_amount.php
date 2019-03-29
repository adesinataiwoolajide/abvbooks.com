<?php 
require_once("../../dev/autoload.php");
$weight = new Weight;


$new = intval($_GET['weight_id']);
$db = Database::getInstance()->getConnection();
$query = $db->prepare("SELECT * FROM product_weight WHERE weight_id=:new");
$query->bindValue(":new", $new);
$query->execute();
echo'<label for="input-6">Weight Amount </label>';
echo '<select class="form-control form-control-rounded" name="weight_id">';
	while($listType = $query->fetch()) { ?>
		<option value="<?php echo  $listType['weight_id'] ?>" selected>
			<?php echo $listType['amount'] ?>	
		</option><?php
	} 
echo '<select>';
echo '<span style="color: green">** This Field is Autoload **</span> '; ?>


