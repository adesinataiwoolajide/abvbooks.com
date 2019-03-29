<?php 
require_once("../../dev/autoload.php");
$type = new Type;


$new = intval($_GET['genre_id']);
$db = Database::getInstance()->getConnection();
$query = $db->prepare("SELECT * FROM genre WHERE type_id=:new");
$query->bindValue(":new", $new);
$query->execute();
echo'<label for="input-6">Weight Amount </label>';
echo '<select class="form-control form-control-rounded" name="genre_id">';
	while($listType = $query->fetch()) { ?>
		<option value="<?php echo  $listType['genre_id'] ?>" selected>
			<?php echo $listType['genre_name'] ?>	
		</option><?php
	} 
echo '<select>';
echo '<span style="color: green">** This Field is Autoload **</span> '; ?>


