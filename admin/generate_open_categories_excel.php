<?php
include"../includes/dbconnection.php";
?>
<?php
$sqlQuery = "SELECT * FROM open_categories";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$openCategoriessData = array();
while( $openCategories = mysqli_fetch_assoc($resultSet) ) {
	$openCategoriessData[] = $openCategories;
}	
if(isset($_POST["dataExport"])) {	
	$fileName = "open_categories".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");	
	$showColoumn = false;
	if(!empty($openCategoriessData)) {
	  foreach($openCategoriessData as $openCategoriesInfo) {
		if(!$showColoumn) {		 
		  echo implode("\t", array_keys($openCategoriesInfo)) . "\n";
		  $showColoumn = true;
		}
		echo implode("\t", array_values($openCategoriesInfo)) . "\n";
	  }
	}
	exit;  
}
?>