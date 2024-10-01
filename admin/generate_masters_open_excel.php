<?php
include "../includes/dbconnection.php";
?>
<?php
$sqlQuery = "SELECT * FROM masters_open_2024";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:" . mysqli_error($conn));
$mastersOpenData = array();
while ($mastersOpen = mysqli_fetch_assoc($resultSet)) {
	$mastersOpenData[] = $mastersOpen;
}
if (isset($_POST["dataExport"])) {
	$fileName = "masters_open_" . date('Ymd') . ".xls";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");
	$showColoumn = false;
	if (!empty($mastersOpenData)) {
		foreach ($mastersOpenData as $mastersOpenInfo) {
			if (!$showColoumn) {
				echo implode("\t", array_keys($mastersOpenInfo)) . "\n";
				$showColoumn = true;
			}
			echo implode("\t", array_values($mastersOpenInfo)) . "\n";
		}
	}
	exit;
}
?>