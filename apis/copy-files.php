<?php  
 
include 'header.php';
$source = $postedData['source'];
$destination = $postedData['destination'];

function custom_copy($src, $dst) {
		$dir = opendir($src);
		@mkdir($dst);
		while ($file = readdir($dir)) {
			if (($file != '.') && ($file != '..')) {
				if (is_dir($src.'/'.$file)) {
					custom_copy($src.'/'.$file, $dst.'/'.$file);
				} else {
					copy($src.'/'.$file, $dst.'/'.$file);
					//$data["copy"] = "success";
				}

			}
		}
		closedir($dir);
	}
	$src = $source;
	$dst = $destination;
	custom_copy($src, $dst);

echo json_encode($data);  
?>  