<?php
    require 'simple_html_dom.php';
$html = file_get_html('https://www.prcpassers.com/show-passers.php?prcp_exam=let_elem.201809');
$pre=$html->find('pre');

$matchesArr = array();
foreach($pre as $p){
  $matches = preg_split("/[\d]+/", $p);
  array_push($matchesArr, $matches);
}

print_r($matchesArr);

//split all names
$names = array();
foreach($matchesArr as $matches){
  foreach($matches as $match){
    preg_match("/[A-Z]+,\s[A-Z\s]+/", $match, $nMatch, 0);
    if(!empty($nMatch[0])){
      array_push($names, trim($nMatch[0]));
    }
  }
}

print_r($names);

//put to csv file
$file = fopen("names.csv","w");
foreach ($names as $name) {
  $nameExplode = explode(',', $name);
  foreach($nameExplode as $key=>$ne){
    $nameExplode[$key]=trim($ne);
  }
  fputcsv($file, $nameExplode);
}

fclose($file); 


foreach($pre as $p){
echo $p;
}
?>
	