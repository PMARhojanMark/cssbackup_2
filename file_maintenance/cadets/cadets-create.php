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

    <title>Create Cadet</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php require_once("..\message.php"); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Cadet 
                            <a href="..\cadets.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    

                    <div class="card-body">
                        <form action="..\cadets.php"
                        name="myForm"
                        method="post"
                        enctype="multipart/form-data"
                        onsubmit="return validateForm()">

                            <div class="mb-3">
                                <label>AFPSN</label>
                                <input type="text" name="afpsn" id="afpsn" placeholder="c#" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>SERVID</label>
                                <input type="text" name="servid" id="servid" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>MAJID</label>
                                <input type="text" name="majid" id="majid" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>YRGR</label>
                                <input type="text" name="yrgr" id="yrgr" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>OYRGR</label>
                                <input type="text" name="oyrgr" id="oyrgr" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>LNAME</label>
                                <input type="text" name="lname" id="lname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>FNAME</label>
                                <input type="text" name="fname" id="fname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ANAME</label>
                                <input type="text" name="aname" id="aname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>MNAME</label>
                                <input type="text" name="mname" id="mname" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>INITLS</label>
                                <input type="text" name="initls" id="initls" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>GENDER</label>
                                <input type="text" name="gender" id="gender" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>BDATE</label>
                                <input type="date" name="bdate" id="bdate" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                 <label>BPLACE</label>
                                <input type="text" name="bplace" accept="bplace" required>
                            </div>
                            <div class="mb-3">
                                <label>PAPA</label>
                                <input type="text" name="papa" id="papa" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>PADEAD</label>
                                <input type="text" name="padead" id="padead" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>MAMA</label>
                                <input type="text" name="mama" id="mama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>MADEAD</label>
                                <input type="text" name="madead" id="madead" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>GUARDIAN</label>
                                <input type="text" name="guardian" id="guardian" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ADDR1</label>
                                <input type="text" name="addr1" id="addr1" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ADDR2</label>
                                <input type="text" name="addr2" id="addr2" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ZIPCODE</label>
                                <input type="text" name="zipcode" id="zipcode" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>REGION</label>
                                <input type="text" name="region" id="region" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>HIGHSCH</label>
                                <input type="text" name="highsch" id="highsch" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>HEIGHT</label>
                                <input type="text" name="height" id="height" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>EESCORE</label>
                                <input type="text" name="eescore" id="eescore" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>MATH</label>
                                <input type="text" name="math" id="math" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>ENGL</label>
                                <input type="text" name="engl" id="engl" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>SPMA</label>
                                <input type="text" name="spma" id="spma" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>COY</label>
                                <input type="text" name="coy" id="coy" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>BATTALION</label>
                                <input type="text" name="battalion" id="battalion" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>BATTALION2</label>
                                <input type="text" name="battalion2" id="battlion2" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>CSTAT</label>
                                <input type="text" name="cstat" id="cstat" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>REMARKS</label>
                                <input type="text" name="remarks" id="remarks" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>DATEADMITTED</label>
                                <input type="text" name="dateadmitted" id="dateadmitted" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>DATEGRAD</label>
                                <input type="text" name="dategrad" id="dategrad" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>DATECOMM</label>
                                <input type="text" name="datecomm" id="datecomm" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>DEGREE</label>
                                <input type="text" name="degree" id="degree" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>MAJORIN</label>
                                <input type="text" name="majorin" id="majorin" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>GRADUATE</label>
                                <input type="text" name="graduate" id="graduate" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>LATINAWARD</label>
                                <input type="text" name="latinaward" id="latinaward" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>PASSWORD</label>
                                <input type="text" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>COYBAT</label>
                                <input type="text" name="coybat" id="coybat" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary" value="submit">Add Cadet</button>
                            </div>

                            
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="errormsg.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
