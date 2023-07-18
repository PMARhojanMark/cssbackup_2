<?php
session_start();
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

    <title>Edit Cadet</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php require_once("..\message.php"); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
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
                                <form action="..\cadets.php" method="POST">
                                    <input type="hidden" name="cadet_id" value="<?= $student['cadet_id']; ?>">

                                    <div class="mb-3">
                                        <label>AFPSN</label>
                                        <input type="text" name="afpsn" value="<?=$student['afpsn'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SERVID</label>
                                        <input type="text" name="servid" value="<?=$student['servid'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MAJID</label>
                                        <input type="text" name="majid" value="<?=$student['majid'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>YRGR</label>
                                        <input type="text" name="yrgr" value="<?=$student['yrgr'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>OYRGR</label>
                                        <input type="text" name="oyrgr" value="<?=$student['oyrgr'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>LNAME</label>
                                        <input type="text" name="lname" value="<?=$student['lname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>FNAME</label>
                                        <input type="text" name="fname" value="<?=$student['fname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ANAME</label>
                                        <input type="text" name="aname" value="<?=$student['aname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MNAME</label>
                                        <input type="text" name="mname" value="<?=$student['mname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>INITLS</label>
                                        <input type="text" name="initls" value="<?=$student['initls'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>GENDER</label>
                                        <input type="text" name="gender" value="<?=$student['gender'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>BDATE</label>
                                        <input type="date" name="bdate" value="<?=$student['bdate'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>BPLACE</label>
                                        <input type="text" name="bplace" value="<?=$student['bplace'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PAPA</label>
                                        <input type="text" name="papa" value="<?=$student['papa'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PADEAD</label>
                                        <input type="text" name="padead" value="<?=$student['padead'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MAMA</label>
                                        <input type="text" name="mama" value="<?=$student['mama'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MADEAD</label>
                                        <input type="text" name="madead" value="<?=$student['madead'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>GUARDIAN</label>
                                        <input type="text" name="guardian" value="<?=$student['guardian'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ADDR1</label>
                                        <input type="text" name="addr1" value="<?=$student['addr1'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ADDR2</label>
                                        <input type="text" name="addr2" value="<?=$student['addr2'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ZIPCODE</label>
                                        <input type="text" name="zipcode" value="<?=$student['zipcode'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>REGION</label>
                                        <input type="text" name="region" value="<?=$student['region'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>HIGHSCH</label>
                                        <input type="text" name="highsch" value="<?=$student['highsch'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>HEIGHT</label>
                                        <input type="text" name="height" value="<?=$student['height'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>EESCORE</label>
                                        <input type="text" name="eescore" value="<?=$student['eescore'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MATH</label>
                                        <input type="text" name="math" value="<?=$student['math'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>ENGL</label>
                                        <input type="text" name="engl" value="<?=$student['engl'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>SPMA</label>
                                        <input type="text" name="spma" value="<?=$student['spma'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>COY</label>
                                        <input type="text" name="coy" value="<?=$student['coy'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>BATTALION</label>
                                        <input type="text" name="battalion" value="<?=$student['battalion'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>BATTALION2</label>
                                        <input type="text" name="battalion2" value="<?=$student['battalion2'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CSTAT</label>
                                        <input type="text" name="cstat" value="<?=$student['cstat'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>REMARKS</label>
                                        <input type="text" name="remarks" value="<?=$student['remarks'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DATEADMITTED</label>
                                        <input type="text" name="dateadmitted" value="<?=$student['dateadmitted'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DATEGRAD</label>
                                        <input type="text" name="dategrad" value="<?=$student['dategrad'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DATECOMM</label>
                                        <input type="text" name="datecomm" value="<?=$student['datecomm'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEGREE</label>
                                        <input type="text" name="degree" value="<?=$student['degree'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>MAJORIN</label>
                                        <input type="text" name="majorin" value="<?=$student['majorin'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>GRADUATE</label>
                                        <input type="text" name="graduate" value="<?=$student['graduate'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>LATINAWARD</label>
                                        <input type="text" name="latinaward" value="<?=$student['latinaward'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>PASSWORD</label>
                                        <input type="text" name="password" value="<?=$student['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>COYBAT</label>
                                        <input type="text" name="coybat" value="<?=$student['coybat'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary" value="submit">Update Cadet</button>
                                    </div>
                                    

                                </form>
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