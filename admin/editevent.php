<?php session_start();
if (!isset($_SESSION['adminlogged'])) {
    header("Location:login.php");
}
?>
<?php
include "../includes/head.php";
include "../includes/dbconnection.php";
include "../includes/alerts.php";
?>
<?php

if (isset($_GET['formedit'])) {
    $eventid = $_GET['eventid'];
    $sql = " SELECT * FROM event WHERE event_id = '$eventid' ";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $event_id = $row['event_id'];
            $event_name = $row['event_name'];
            $event_venue = $row['event_venue'];
            $event_details = $row['event_details'];
            $event_date = $row['event_date'];
            $event_time = $row['event_time'];
            $attendee = $row['event_attendee'];
        }
    } else {

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

?>
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
                            <ul class="inline topnav--content">
                                <li class="topnav--link"><i class="fa fa-user mr-2 text-comp"></i><span class="text-comp">Admin</span></li>
                            </ul>
                        </div>
                    </header>

                    <div class="row mt-2 mb-2">
                    </div>

                    <!-- user info -->
                    <div class="row mt-2">
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4 class="text-white"><?php echo $event_name; ?></h4>
                                        </div>

                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <form action="../process/processevents.php" action="get">
                                        <input type="hidden" name="eventid" value="<?php echo $event_id; ?>">

                                        <div class="form-group">
                                            <label for="">Event Name</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $event_name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Event Description</label>
                                            <textarea name="detail" class="form-control"><?php echo $event_details; ?></textarea>
                                        </div>
                                        <div class="class=" form-group"">
                                            <label for="">Eligibility</label>
                                            <select name="attendee" class="form-control">
                                                <option value="<?php echo $attendee; ?>"><?php echo $attendee; ?></option>
                                                <option value="Members Only">Members Only</option>
                                                <option value="Open">Open</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Event Venue</label>
                                            <input type="text" name="venue" class="form-control" value="<?php echo $event_venue; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Event Date</label>
                                            <input type="text" name="date" class="form-control" value="<?php echo $event_date; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Event Time</label>
                                            <input type="time" name="time" class="form-control" value="<?php echo $event_time; ?>">
                                        </div>

                                        <br>
                                        <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>

    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail');
    </script>

    <?php include "../includes/footer.php"; ?>