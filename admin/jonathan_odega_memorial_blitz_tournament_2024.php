<?php session_start();
if (!isset($_SESSION['adminlogged'])) {
    header("Location:login.php");
}
?>
<?php include "../includes/alerts.php"; ?>
<?php include "../includes/dbconnection.php"; ?>
<?php include "../includes/head.php"; ?>
<?php include "generate_jonathan_odega_memorial_blitz_tournament_excel.php"; ?>
<title> Admin| Dashboard </title>
</head>

<body>
    <section>
        <div class="container-fluid">
            <!-- mobile nav -->
            <?php include "../includes/adminmobile.php"; ?>

            <div class="row area">
                <!-- side nav -->
                <?php include "../includes/adminside.php"; ?>

                <!-- top navigation/header -->
                <div class="col-md-10">
                    <header class="row topnav">
                        <div class="col-md-12">
                            <div>
                                <?php success_alert();
                                error_alert(); ?>
                            </div>
                            <ul class="inline topnav--content">
                                <li class="topnav--link"><i class="fa fa-user mr-2 text-comp"></i><span class="text-comp">Admin</span></li>
                            </ul>
                        </div>
                    </header>

                    <!-- table -->
                    <div class="row mt-3">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white">Jonathan Odega Memorial Blitz Tournament
                                        <form action="generate_jonathan_odega_memorial_blitz_tournament_excel.php" method="post" style="display: inline; float: right;">
                                            <button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
                                        </form>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <th>ID</th>
                                                <th>Registration ID</th>
                                                <th>Email</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Telephone Number</th>
                                                <th>Do You Have FIDE ID</th>
                                                <th>FIDE ID</th>
                                                <th>Chess Club</th>
                                                <th>Tournament Category</th>
                                                <th>Reference Number</th>
                                                <th>Payment</th>
                                                <th>Paid At</th>
                                                <th>I Agree</th>
                                                <th>Actions</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                date_default_timezone_set('Africa/Lagos');
                                                $date = date('Y-m-d');

                                                $n = 1;
                                                foreach ($blitzTournamentOpenData as $blitzTournament) { ?>
                                                    <tr>
                                                        <td><?php echo $n; ?></td>
                                                        <td><?php echo $blitzTournament['registration_id']; ?></td>
                                                        <td><?php echo $blitzTournament['email']; ?></td>
                                                        <td><?php echo $blitzTournament['first_name']; ?> <?php echo $blitzTournament['last_name']; ?></td>
                                                        <td><?php echo $blitzTournament['gender']; ?></td>
                                                        <td><?php echo $blitzTournament['date_of_birth']; ?></td>
                                                        <td><?php echo $blitzTournament['telephone_number']; ?></td>
                                                        <td><?php echo $blitzTournament['date_of_birth']; ?></td>
                                                        <td><?php echo $blitzTournament['fide']; ?></td>
                                                        <td><?php echo $blitzTournament['chess_club']; ?></td>
                                                        <td><?php echo $blitzTournament['tournament_category']; ?></td>
                                                        <td><?php echo $blitzTournament['ref_id']; ?></td>
                                                        <td><span style="color: green"><?php echo $blitzTournament['payment']; ?></span></td>
                                                        <td><?php echo $blitzTournament['paid_at']; ?></td>
                                                        <td><?php echo $blitzTournament['I_agree']; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $blitzTournament['id']; ?>)">
                                                                Delete
                                                            </button>
                                                        </td>
                                                    </tr>

                                                <?php $n++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        function confirmDelete(id) {
            var confirmDelete = confirm("Are you sure you want to delete this record?");
            if (confirmDelete) {
                // Redirect to the delete script with the record ID
                window.location.href = "../process/delete_blitz_tournament_2024.php?id=" + id;
            }
        }
    </script>
    <?php include "../includes/footer.php"; ?>