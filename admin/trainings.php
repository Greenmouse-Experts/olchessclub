<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php include "../includes/alerts.php";?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/head.php";?>
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
                                    <h4 class="text-white">Trainings<i class="fa fa-sort-amount-asc kpi--icons kpi--icons-light"></i></h4>
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <th></th>
                                                <th>First name</th>
                                                <th>OLCC ID</th>
                                                <th>Amount</th>
                                                <th>Type</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Ref</th>
                                            </thead>
                                            <tbody>
        <?php

                date_default_timezone_set('Africa/Lagos');
                $date=date('Y-m-d');

                $sql= " SELECT * FROM trainings ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $name=$row['fullname'];
                                $code=$row['user_code'];
                                $amount=$row['amount'];
                                $duration = $row['duration'];
                                $type = $row['type'];
                                $email = $row['email'];
                                $date = $row['date'];
                                $ref = $row['tref'];
                        
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $code;?></td>
                                    <td><?php echo $amount;?></td>
                                    <td><?php echo $type;?></td>
                                    <td><?php echo $email;?></td>
                                    <td><?php echo $date;?></td>
                                    <td><?php echo $ref;?></td>             
                                </tr>
                                
                            <?php  
                            $n++;    
                        }
                        }   
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

            
            ?>
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

    <?php include "../includes/footer.php";?><?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php include "../includes/alerts.php";?>
<?php include "../includes/dbconnection.php";?>
<?php include "../includes/head.php";?>
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
                                    <h4 class="text-white">Trainings<i class="fa fa-sort-amount-asc kpi--icons kpi--icons-light"></i></h4>
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <th></th>
                                                <th>First name</th>
                                                <th>OLCC ID</th>
                                                <th>Amount</th>
                                                <th>Type</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Ref</th>
                                            </thead>
                                            <tbody>
        <?php

                date_default_timezone_set('Africa/Lagos');
                $date=date('Y-m-d');

                $sql= " SELECT * FROM trainings ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $name=$row['fullname'];
                                $code=$row['user_code'];
                                $amount=$row['amount'];
                                $duration = $row['duration'];
                                $type = $row['type'];
                                $email = $row['email'];
                                $date = $row['date'];
                                $ref = $row['tref'];
                        
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $code;?></td>
                                    <td><?php echo $amount;?></td>
                                    <td><?php echo $type;?></td>
                                    <td><?php echo $email;?></td>
                                    <td><?php echo $date;?></td>
                                    <td><?php echo $ref;?></td>             
                                </tr>
                                
                            <?php  
                            $n++;    
                        }
                        }   
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

            
            ?>
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