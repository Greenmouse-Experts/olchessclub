<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php include "../includes/alerts.php";?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/head.php";?>
<?php include "generate_open_categories_excel.php";?>
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
                                    <h4 class="text-white">Open categories
                                    <form action="generate_open_categories_excel.php" method="post" style="display: inline; float: right;">				
                                        <button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
                                    </form>
                                    </h4>
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <th></th>
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
                                                <th>Payment</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>

                                            <?php 
                                                date_default_timezone_set('Africa/Lagos');
                                                $date=date('Y-m-d');

                                                $n=1;
                                                foreach($openCategoriessData as $openCategories) { ?>
                                                <tr>
                                                <td><?php echo $n;?></td>
                                                <td><?php echo $openCategories ['registration_id']; ?></td>
                                                <td><?php echo $openCategories ['email']; ?></td>
                                                <td><?php echo $openCategories ['full_name']; ?></td>
                                                <td><?php echo $openCategories ['gender']; ?></td>  
                                                <td><?php echo $openCategories ['date_of_birth']; ?></td>			   
                                                <td><?php echo $openCategories ['telephone_number']; ?></td>
                                                <td><?php echo $openCategories ['fide']; ?></td>
                                                <td><?php echo $openCategories ['fi_de']; ?></td>			   
                                                <td><?php echo $openCategories ['chess_club']; ?></td>
                                                <td><?php echo $openCategories ['tournament_category']; ?></td>
                                                <td>
                                                    <form action="../process/paymentopencategories.php" method="Post">
                                                        <input type='hidden'  name='opencategoriesid' value="<?php echo $openCategories ['id']; ?>" />
                                                        <select name="payment" onchange="this.form.submit()" class="btn">
                                                            <option value="<?php echo $openCategories ['payment']; ?>">
                                                            <?php echo $openCategories ['payment']; ?></option>
                                                            <option value="Paid">Paid</option>
                                                            <option value="Unpaid">Unpaid</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td>
                                                    <!-- Trigger/Open The Modal -->
                                                    <!-- <button id="myBtn" class="btn btn-danger">Delete</button> -->

                                                    <!-- The Modal -->
                                                    <!-- <div id="myModal" class="modal"> -->

                                                    <!-- Modal content -->
                                                    <!-- <div class="modal-content"> -->
                                                        <!-- <div class="modal-body text-center"> -->
                                                        <!-- <p class="pt-2">Do you really want to delete the user?</p> -->
                                                            <!-- <hr> -->
                                                            <!-- <div class="float-right pb-2"> -->
                                                                <form action="../process/deleteopencategories.php" method='post' class="pr-3" style="display: inline;">
                                                                    <input type='hidden'  name='opencategoriesid' value="<?php echo $openCategories ['id']; ?>" />
                                                                    <input type='submit' name='deleteopencategories' class="btn btn-danger accept" value="Delete" />
                                                                </form>
                                                                <!-- <span class="btn btn-success close_window">No</span> -->
                                                            <!-- </div> -->
                                                        <!-- </div> -->
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                </td>      
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