<?php
include "../includes/dbconnection.php";
?>
<?php
$sqlQuery = "SELECT * FROM blitz_reg";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:" . mysqli_error($conn));
$blitzRegsData = array();
while ($blitzReg = mysqli_fetch_assoc($resultSet)) {
	$blitzRegsData[] = $blitzReg;
}
if (isset($_POST["dataExport"])) {
	$fileName = "blitz_registration" . date('Ymd') . ".xls";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");
	$showColoumn = false;
	if (!empty($blitzRegsData)) {
		foreach ($blitzRegsData as $blitzRegInfo) {
			if (!$showColoumn) {
				echo implode("\t", array_keys($blitzRegInfo)) . "\n";
				$showColoumn = true;
			}
			echo implode("\t", array_values($blitzRegInfo)) . "\n";
		}
	}
	exit;
}
?>