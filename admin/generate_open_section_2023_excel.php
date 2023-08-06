<?php
include "../includes/dbconnection.php";
?>
<?php
$sqlQuery = "SELECT * FROM open_section_2023";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:" . mysqli_error($conn));
$openSectionData = array();
while ($openSection = mysqli_fetch_assoc($resultSet)) {
	$openSectionData[] = $openSection;
}
if (isset($_POST["dataExport"])) {
	$fileName = "Open Section 2023 " . date('Ymd') . ".xls";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");
	$showColoumn = false;
	if (!empty($openSectionData)) {
		foreach ($openSectionData as $openSectionInfo) {
			if (!$showColoumn) {
				echo implode("\t", array_keys($openSectionInfo)) . "\n";
				$showColoumn = true;
			}
			echo implode("\t", array_values($openSectionInfo)) . "\n";
		}
	}
	exit;
}
?>