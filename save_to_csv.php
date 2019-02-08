
<?php
if(isset ($_GET['first_name']) && isset ($_GET['last_name'])){
	$file = fopen("form_names.csv","a");
fputcsv($file, [$_GET['first_name'], $_GET['last_name']]);
fclose($file);
echo "name added to csv";
}
?>