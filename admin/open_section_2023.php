<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php include "../includes/alerts.php";?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/head.php";?>
<?php include "generate_open_section_2023_excel.php";?>
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
                                    <h4 class="text-white">Open Section 2023
                                    <form action="generate_open_section_2023_excel.php" method="post" style="display: inline; float: right;">			
                                        <button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
                                    </form></h4>
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
                                                <th>Email</th>
                                                <th>Date of Birth</th>
                                                <th>Phone Number</th>
                                                <th>FIDE ID</th>
                                                <th>Chess Club</th>
                                                <th>Tournament Category</th>
                                                <th>Agree</th>
                                                <th>Transaction Reference ID</th>
                                                <th>Status</th>
                                                <th>Paid At</th>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                date_default_timezone_set('Africa/Lagos');
                                                $date=date('Y-m-d');

                                                $n=1;
                                                foreach($openSectionData as $openSection) { ?>
                                                <tr>
                                                <td><?php echo $n;?></td>
                                                <td><?php echo $openSection ['registration_id']; ?></td>
                                                <td><?php echo $openSection ['first_name']; ?></td>
                                                <td><?php echo $openSection ['last_name']; ?></td>
                                                <td><?php echo $openSection ['gender']; ?></td>
                                                <td><?php echo $openSection ['email']; ?></td>
                                                <td><?php echo $openSection ['date_of_birth']; ?></td>  
                                                <td><?php echo $openSection ['telephone_number']; ?></td>			   
                                                <td><?php echo $openSection ['fide']; ?></td>		   
                                                <td><?php echo $openSection ['chess_club']; ?></td>
                                                <td><?php echo $openSection ['tournament_category']; ?></td>
                                                <td><?php echo $openSection ['I_agree']; ?></td>  	   
                                                <td><?php echo $openSection ['ref_id']; ?></td>
                                                <td><span style="color: green"><?php echo $openSection ['payment']; ?></span></td>
                                                <td><?php echo $openSection ['paid_at']; ?></td>	
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