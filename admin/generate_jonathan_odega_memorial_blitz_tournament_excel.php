<?php
include "../includes/dbconnection.php";
?>
<?php
$sqlQuery = "SELECT * FROM jonathan_odega_memorial_blitz_tournament_2024";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:" . mysqli_error($conn));
$blitzTournamentOpenData = array();
while ($blitzTournament = mysqli_fetch_assoc($resultSet)) {
	$blitzTournamentOpenData[] = $blitzTournament;
}
if (isset($_POST["dataExport"])) {
	$fileName = "blitz_tournament_category_" . date('Ymd') . ".xls";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");
	$showColoumn = false;
	if (!empty($blitzTournamentOpenData)) {
		foreach ($blitzTournamentOpenData as $blitzTournamentOpenInfo) {
			if (!$showColoumn) {
				echo implode("\t", array_keys($blitzTournamentOpenInfo)) . "\n";
				$showColoumn = true;
			}
			echo implode("\t", array_values($blitzTournamentOpenInfo)) . "\n";
		}
	}
	exit;
}
?>