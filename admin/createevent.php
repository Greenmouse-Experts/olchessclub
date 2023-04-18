<?php session_start();
if(!isset($_SESSION['adminlogged'])){
    header("Location:login.php");
}
?>
<?php 
include"../includes/head.php";
include"../includes/alerts.php";
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


            
                
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white">Create Events <i class="fa fa-calendar kpi--icons kpi--icons-light"></i></h4>
                                  </div>
                                <div class="card-body">
                                    <form action="../process/processevents.php" method="post">
                                    <div class="form-group">
                                        <label for="">Event Name </label>
                                        <input type="text" name="name" class="form-control" placeholder="Event Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Event Venue </label>
                                        <input type="text" name="venue" class="form-control" placeholder="Event venue" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="">Event Description </label>
                                        <textarea  name="detail" class="form-control" placeholder="Event Description"></textarea>
                                    </div>
                                    <div class="class="form-group"">
                                            <label for="">Eligibility</label>
                                            <select name="attendee"  class="form-control" >
                                                <option value="Members Only">Members Only</option>
                                                <option value="Open">Open</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date" name="date"  class="form-control" placeholder="Date" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Time</label>
                                        <input type="time" name="time"  class="form-control" placeholder="Time" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="create" value="Create" class="btn btn-primary">
                                     </div>
        
                                    </form>
          
                                </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
     <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'detail' );
    </script>


  <?php include "../includes/footer.php";?>