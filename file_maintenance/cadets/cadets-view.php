<?php
require_once("..\dbcon.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details 
                            <a href="..\cadets.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['cadet_id']))
                        {
                            $cadet_id = mysqli_real_escape_string($conn, $_GET['cadet_id']);
                            $query = "SELECT * FROM cadet WHERE cadet_id='$cadet_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>APFSN</label>
                                        <p class="form-control">
                                            <?=$student['afpsn'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>SERVID</label>
                                        <p class="form-control">
                                            <?=$student['servid'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MAJID</label>
                                        <p class="form-control">
                                            <?=$student['majid'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>YRGR</label>
                                        <p class="form-control">
                                            <?=$student['yrgr'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>OYRGR</label>
                                        <p class="form-control">
                                            <?=$student['oyrgr'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>LNAME</label>
                                        <p class="form-control">
                                            <?=$student['lname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>FNAME</label>
                                        <p class="form-control">
                                            <?=$student['fname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ANAME</label>
                                        <p class="form-control">
                                            <?=$student['aname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MNAME</label>
                                        <p class="form-control">
                                            <?=$student['mname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>INITLS</label>
                                        <p class="form-control">
                                            <?=$student['initls'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>GENDER</label>
                                        <p class="form-control">
                                            <?=$student['gender'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>BDATE</label>
                                        <p class="form-control">
                                            <?=$student['bdate'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>BPLACE</label>
                                        <p class="form-control">
                                            <?=$student['bplace'];?>
                                        </p>
                                    </div><div class="mb-3">
                                        <label>PAPA</label>
                                        <p class="form-control">
                                            <?=$student['papa'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>PADEAD</label>
                                        <p class="form-control">
                                            <?=$student['padead'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MAMA</label>
                                        <p class="form-control">
                                            <?=$student['mama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MADEAD</label>
                                        <p class="form-control">
                                            <?=$student['madead'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>GUARDIAN</label>
                                        <p class="form-control">
                                            <?=$student['guardian'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ADDR1</label>
                                        <p class="form-control">
                                            <?=$student['addr1'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ADDR2</label>
                                        <p class="form-control">
                                            <?=$student['addr2'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ZIPCODE</label>
                                        <p class="form-control">
                                            <?=$student['zipcode'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>REGION</label>
                                        <p class="form-control">
                                            <?=$student['region'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>HIGHSCH</label>
                                        <p class="form-control">
                                            <?=$student['highsch'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>HEIGHT</label>
                                        <p class="form-control">
                                            <?=$student['height'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>EESCORE</label>
                                        <p class="form-control">
                                            <?=$student['eescore'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MATH</label>
                                        <p class="form-control">
                                            <?=$student['math'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>ENGL</label>
                                        <p class="form-control">
                                            <?=$student['engl'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>SPMA</label>
                                        <p class="form-control">
                                            <?=$student['spma'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>COY</label>
                                        <p class="form-control">
                                            <?=$student['coy'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>BATTALION</label>
                                        <p class="form-control">
                                            <?=$student['battalion'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>CSTAT</label>
                                        <p class="form-control">
                                            <?=$student['cstat'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>REMARKS</label>
                                        <p class="form-control">
                                            <?=$student['remarks'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DATEADMITTED</label>
                                        <p class="form-control">
                                            <?=$student['dateadmitted'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DATEGRAD</label>
                                        <p class="form-control">
                                            <?=$student['dategrad'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DATECOMM</label>
                                        <p class="form-control">
                                            <?=$student['datecomm'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>DEGREE</label>
                                        <p class="form-control">
                                            <?=$student['degree'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>MAJORIN</label>
                                        <p class="form-control">
                                            <?=$student['majorin'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>GRADUATE</label>
                                        <p class="form-control">
                                            <?=$student['graduate'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>LATINAWARD</label>
                                        <p class="form-control">
                                            <?=$student['latinaward'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>PASSWORD</label>
                                        <p class="form-control">
                                            <?=$student['password'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>COYBAT</label>
                                        <p class="form-control">
                                            <?=$student['coybat'];?>
                                        </p>
                                    </div>


                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>