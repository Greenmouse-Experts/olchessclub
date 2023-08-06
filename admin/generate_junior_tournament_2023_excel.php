<?php
include "../includes/dbconnection.php";
?>
<?php
$sqlQuery = "SELECT * FROM junior_tournament_2023";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:" . mysqli_error($conn));
$juniorTournamentsData = array();
while ($juniorTournament = mysqli_fetch_assoc($resultSet)) {
	$juniorTournamentsData[] = $juniorTournament;
}
if (isset($_POST["dataExport"])) {
	$fileName = "Junior Tournament 2023 " . date('Ymd') . ".xls";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");
	$showColoumn = false;
	if (!empty($juniorTournamentsData)) {
		foreach ($juniorTournamentsData as $juniorTournamentInfo) {
			if (!$showColoumn) {
				echo implode("\t", array_keys($juniorTournamentInfo)) . "\n";
				$showColoumn = true;
			}
			echo implode("\t", array_values($juniorTournamentInfo)) . "\n";
		}
	}
	exit;
}
?>