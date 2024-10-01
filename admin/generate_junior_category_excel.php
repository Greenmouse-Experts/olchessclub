<?php
include "../includes/dbconnection.php";
?>
<?php
$sqlQuery = "SELECT * FROM junior_category_2024";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:" . mysqli_error($conn));
$juniorOpenData = array();
while ($juniorCategory = mysqli_fetch_assoc($resultSet)) {
	$juniorOpenData[] = $juniorCategory;
}
if (isset($_POST["dataExport"])) {
	$fileName = "junior_category_" . date('Ymd') . ".xls";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");
	$showColoumn = false;
	if (!empty($juniorOpenData)) {
		foreach ($juniorOpenData as $juniorOpenInfo) {
			if (!$showColoumn) {
				echo implode("\t", array_keys($juniorOpenInfo)) . "\n";
				$showColoumn = true;
			}
			echo implode("\t", array_values($juniorOpenInfo)) . "\n";
		}
	}
	exit;
}
?>