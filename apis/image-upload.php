<?php 
// required headers for post
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$id = $_POST['id'];
$fileName = $_POST['fileName'];
$imagesToBeUploaded = $_POST['image'];

$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
mkdir("./media-manager/".$id, 0777, true);


$count = count($_FILES['image']);

for ($i = 0; $i < $count; $i++) {
	move_uploaded_file($_FILES["image"]["tmp_name"][$i], "./media-manager/".$id."/".$fileName[$i]);
}


echo json_encode($id);
?>