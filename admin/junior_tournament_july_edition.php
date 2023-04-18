<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php include "../includes/alerts.php";?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/head.php";?>
<?php include "generate_junior_tournament_july_editiion_excel.php";?>
<title> Admin| Dashboard </title>
</head>
<body>
    <section>
        <div class="container-fluid">
               <!-- mobile nav -->
               <?php include "../includes/adminmobile.php";?>
           
            <div class="row area">
                <!-- side nav -->
                <?php include "../includes/adminside.php";?>

                <!-- top navigation/header -->
                <div class="col-md-10">
                    <header class="row topnav">
                        <div class="col-md-12">
                            <div>
                                <?php success_alert();error_alert();?>
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
                                    <h4 class="text-white">Junior Tournament July Edition
                                    <form action="generate_junior_tournament_july_editiion_excel.php" method="post" style="display: inline; float: right;">			
                                        <button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
                                    </form></h4>
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <th>S/N</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Date of Birth</th>
                                                <th>Name of School</th>
                                                <th>FIDE ID</th>
                                                <th>Parent/Guardian Full Name</th>
                                                <th>Parent/Guardian's Phone Number</th>
                                                <th>Parent/ Guardian Email Address</th>
                                                <th>Agree</th>
                                                <th>Transaction ID</th>
                                                <th>Reference ID</th>
                                                <th>Status</th>
                                                <th>Paid At</th>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                date_default_timezone_set('Africa/Lagos');
                                                $date=date('Y-m-d');

                                                $n=1;
                                                foreach($juniorTournamentsData as $juniorTournament) { ?>
                                                <tr>
                                                <td><?php echo $n;?></td>
                                                <td><?php echo $juniorTournament ['first_name']; ?> <?php echo $juniorTournament ['last_name']; ?></td>
                                                <td><?php echo $juniorTournament ['gender']; ?></td>
                                                <td><?php echo $juniorTournament ['email']; ?></td>
                                                <td><?php echo $juniorTournament ['date_of_birth']; ?></td>  
                                                <td><?php echo $juniorTournament ['name_of_school']; ?></td>			   
                                                <td><?php echo $juniorTournament ['fide_id']; ?></td>
                                                <td><?php echo $juniorTournament ['pg_full_name']; ?></td>
                                                <td><?php echo $juniorTournament ['pg_phone_number']; ?></td>			   
                                                <td><?php echo $juniorTournament ['pg_email']; ?></td>
                                                <td><?php echo $juniorTournament ['I_agree']; ?></td>  
                                                <td><?php echo $juniorTournament ['transaction_id']; ?></td>			   
                                                <td><?php echo $juniorTournament ['ref_id']; ?></td>
                                                <td><span style="color: green"><?php echo $juniorTournament ['status']; ?></span></td>
                                                <td><?php echo $juniorTournament ['paid_at']; ?></td>	
                                                </tr>
                                                
                                                <?php $n++;   } ?>
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

    <?php include "../includes/footer.php";?>