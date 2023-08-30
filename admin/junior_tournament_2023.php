<?php session_start();
if (!isset($_SESSION['adminlogged'])) {
    header("Location:login.php");
}
?>
<?php include "../includes/alerts.php"; ?>
<?php include "../includes/dbconnection.php"; ?>
<?php include "../includes/head.php"; ?>
<?php include "generate_junior_tournament_2023_excel.php"; ?>
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
                                    <h4 class="text-white">Junior Tournament 2023
                                        <form action="generate_junior_tournament_2023_excel.php" method="post" style="display: inline; float: right;">
                                            <button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
                                        </form>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <th>S/N</th>
                                                <th>Registrattion ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Name of School</th>
                                                <th>FIDE ID</th>
                                                <th>Tournament Category</th>
                                                <th>Agree</th>
                                                <th>Parent/Guardian's Full Name</th>
                                                <th>Parent/Guardian's Phone Number</th>
                                                <th>Parent/ Guardian's Email Address</th>
                                                <th>Parent/Guardian's Consent Agree</th>
                                                <th>Transaction Reference ID</th>
                                                <th>Status</th>
                                                <th>Paid At</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                date_default_timezone_set('Africa/Lagos');
                                                $date = date('Y-m-d');

                                                $n = 1;
                                                foreach ($juniorTournamentsData as $juniorTournament) { ?>
                                                    <tr>
                                                        <td><?php echo $n; ?></td>
                                                        <td><?php echo $juniorTournament['registration_id']; ?></td>
                                                        <td><?php echo $juniorTournament['first_name']; ?></td>
                                                        <td><?php echo $juniorTournament['last_name']; ?></td>
                                                        <td><?php echo $juniorTournament['gender']; ?></td>
                                                        <td><?php echo $juniorTournament['date_of_birth']; ?></td>
                                                        <td><?php echo $juniorTournament['school_name']; ?></td>
                                                        <td><?php echo $juniorTournament['fide_id']; ?></td>
                                                        <td><?php echo $juniorTournament['tournament_category']; ?></td>
                                                        <td><?php echo $juniorTournament['I_agree']; ?></td>
                                                        <td><?php echo $juniorTournament['p_g_name']; ?></td>
                                                        <td><?php echo $juniorTournament['p_g_phone_number']; ?></td>
                                                        <td><?php echo $juniorTournament['p_g_email']; ?></td>
                                                        <td><?php echo $juniorTournament['consent_agreement']; ?></td>
                                                        <td><?php echo $juniorTournament['ref_id']; ?></td>
                                                        <td><span style="color: green"><?php echo $juniorTournament['payment']; ?></span></td>
                                                        <td><?php echo $juniorTournament['paid_at']; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $juniorTournament['id']; ?>)">
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
                window.location.href = "../process/delete_junior_tournament2023.php?id=" + id;
            }
        }
    </script>

    <?php include "../includes/footer.php"; ?>