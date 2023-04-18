<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php 
include"../includes/head.php";
include"../includes/alerts.php";
include"../includes/dbconnection.php";
?>
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
                        <div class="flash"><?php error_alert();success_alert();?></div>
                            <ul class="inline topnav--content">
                                <li class="topnav--link"><i class="fa fa-user mr-2 text-comp"></i><span class="text-comp">Admin</span></li>
                            </ul>
                        </div>
                    </header>

                    <!-- table -->
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white">Events<i class="fa fa-calendar kpi--icons kpi--icons-light"></i></h4>
                                   
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-stripped table-bordered">
                                            <thead>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Eligibility</th>
                                                <th>Description</th>
                                                <th>Venue</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th></th>
                                                <th></th>
                                            </thead>
                                            <tbody>

                                            <?php
                
                $sql= " SELECT * FROM event ORDER BY event_date DESC ";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $event_id= $row['event_id'];
                                $event_name = $row['event_name'];
                                $event_date = $row['event_date'];
                                $event_time = $row['event_time'];
                                $event_venue = $row['event_venue'];
                                $event_details = $row['event_details'];
                                $attendee = $row['event_attendee'];
                               
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo  $event_name;?></td>
                                    <td><?php echo  $attendee;?></td>
                                    <td><?php echo  $event_details;?></td>
                                    <td><?php echo  $event_venue;?></td>
                                    <td><?php echo  $event_date;?></td>
                                    <td><?php echo  $event_time;?></td>
                                    <td>
                                      <form action="../process/processevents.php" method="post" style="display: inline;">
                                            <input type='hidden'  name='eventid' value="<?php echo $event_id; ?>" />
                                            <input type='submit' name='deleteevent' class="btn btn-danger" value="Delete"/>
                                      </form>
                                    </td> 
                                    <td>
                                      <form action="editevent.php" method='get' style="display: inline;">
                                            <input type='hidden'  name='eventid' value="<?php echo $event_id; ?>" />
                                            <input type='submit' name='formedit' class="btn btn-primary" value="Edit"/>
                                      </form>
                                    </td>             
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