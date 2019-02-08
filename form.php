<?php
if(isset ($_GET['first_name']) && isset ($_GET['last_name'])){
	$file = fopen("form_names.csv","a");
fputcsv($file, [$_GET['first_name'], $_GET['last_name']]);
fclose($file);
echo "name added to csv";
}
?>
//echo $_GET['first_name'];
//echo '&nbsp';
//echo $_GET['last_name'];

<html>
<head>
</head>
<body>
    <form action="form.php" method="get">
        <label>First name: </label><br/>
    <input type="text" name="first_name"><br/>
        <label>Last name: </label><br/>
    <input type="text" name="last_name"><br/>
        <button type="submit">Submit</button>
    </form>
  </body>
</html>
