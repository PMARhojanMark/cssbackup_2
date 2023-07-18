<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style5.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">    
    <title>CIS Admin Dashboard</title>
</head>
<body>
<nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Philippine_Military_Academy_%28PMA%29.svg/1200px-Philippine_Military_Academy_%28PMA%29.svg.png" alt="">
            </div>

            <span class="logo_name">CIS</span>
        </div>

        <div class="sue">
            <ul>
                <li class="main-link">
                    <a href="/cssbackup/user_panel.php" class="link-text">
                        <i class="uil uil-estate"></i>Dashboard</a>
                </li>
                <li class="main-link">
                    <i class="uil uil-folder"></i>
                    File Maintenance
                    <i class="uil uil-arrow-right rotate"></i>
                    <ul class="sublink"></li>
                        <li><a href="cadets.php">Cadets</a></li>
                        <li><a href="department.php">Department</a></li>
                        <li><a href="faculty.php">Faculty</a></li>
                        <li><a href="course.php">Course</a></li>
                    </ul>
                </li>
                <li class="main-link">
                    <i class="uil uil-facebook"></i>
                    Main Link 2
                    <ul class="sublink">
                        <li>Sublink 1
                            <ul class="subbuttonlink">
                                <li>Subbuttonlink 1</li>
                                <li>Subbuttonlink 2</li>
                                <li>Subbuttonlink 3</li>
                            </ul>
                        </li>
                        <li>Sublink 2</li>
                        <li>Sublink 3</li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
            <div class="norms">
                <div class="loki" onclick="menuToggle();">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVWQTWRsXnQBqP30w3bP2Il7Y9nnybYopPVg&usqp=CAU" width="50" height="50">
                </div>
                    <div class="logout">
                    <!-- Name of the profile
                        <h3>Famous<br><span>Tinapay Enjoyer</span></h3> -->
                    <ul>
                        <li><a href="logout.php">
                            <i class="uil uil-signout">Logout</i></a>
                        </li>
                        <li><a href="#">
                                <i class="uil uil-setting"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <i class="uil uil-moon"></i>
                            <span class="link-name">
                                Dark Mode
                            </span>
                            <div class="mode-toggle">
                                <span class="switch"></span>
                            </div>
                        </li>
                    </ul>
                </div>    
            </div>


           

        </div>

        <div class="dash-content">
            <div class="overview">
            
            <div class="container mt-4">
            <div class="activity">
                    

<?php include('message.php'); ?>
<?php include('cadets\cadetsconfig.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Cadets</span>
                    <a href="cadets/cadets-create.php" class="btn btn-primary float-end">Add Cadets</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>AFPSN</th>
                            <th>SERVID</th>
                            <th>MAJID</th>
                            <th>YRGR</th>
                            <th>OYRGR</th>
                            <th>LNAME</th>
                            <th>FNAME</th>
                            <th>ANAME</th>
                            <th>MNAME</th>
                            <th>INITLS</th>
                            <th>GENDER</th>
                            <th>BDATE</th>
                            <th>BPLACE</th>
                            <th>PAPA</th>
                            <th>PADEAD</th>
                            <th>MAMA</th>
                            <th>MADEAD</th>
                            <th>GUARDIAN</th>
                            <th>ADDR1</th>
                            <th>ADDR2</th>
                            <th>ZIPCODE</th>
                            <th>REGION</th>
                            <th>HIGHSCH</th>
                            <th>HEIGHT</th>
                            <th>EESCORE</th>
                            <th>MATH</th>
                            <th>ENGL</th>
                            <th>SPMA</th>
                            <th>COY</th>
                            <th>BATTALION</th>
                            <th>BATTLION2</th>
                            <th>CSTAT</th>
                            <th>REMARKS</th>
                            <!-- <th>PIX</th> -->
                            <th>DATEADMITTED</th>
                            <th>DATEGRAD</th>
                            <th>DATECOMM</th>
                            <th>DEGREE</th>
                            <th>MAJORIN</th>
                            <th>GRADUATE</th>
                            <th>LATINAWARD</th>
                            <th>PASSWORD</th>
                            <th>COYBAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM cadet";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $cadet)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $cadet['afpsn']; ?></td>
                                        <td><?= $cadet['servid']; ?></td>
                                        <td><?= $cadet['majid']; ?></td>
                                        <td><?= $cadet['yrgr']; ?></td>
                                        <td><?= $cadet['oyrgr']; ?></td>
                                        <td><?= $cadet['lname']; ?></td>
                                        <td><?= $cadet['fname']; ?></td>
                                        <td><?= $cadet['aname']; ?></td>
                                        <td><?= $cadet['mname']; ?></td>
                                        <td><?= $cadet['initls']; ?></td>
                                        <td><?= $cadet['gender']; ?></td>
                                        <td><?= $cadet['bdate']; ?></td>
                                        <td><?= $cadet['bplace']; ?></td>
                                        <td><?= $cadet['papa']; ?></td>
                                        <td><?= $cadet['padead']; ?></td>
                                        <td><?= $cadet['mama']; ?></td>
                                        <td><?= $cadet['madead']; ?></td>
                                        <td><?= $cadet['guardian']; ?></td>
                                        <td><?= $cadet['addr1']; ?></td>
                                        <td><?= $cadet['addr2']; ?></td>
                                        <td><?= $cadet['zipcode']; ?></td>
                                        <td><?= $cadet['region']; ?></td>
                                        <td><?= $cadet['highsch']; ?></td>
                                        <td><?= $cadet['height']; ?></td>
                                        <td><?= $cadet['eescore']; ?></td>
                                        <td><?= $cadet['math']; ?></td>
                                        <td><?= $cadet['engl']; ?></td>
                                        <td><?= $cadet['spma']; ?></td>
                                        <td><?= $cadet['coy']; ?></td>
                                        <td><?= $cadet['battalion']; ?></td>
                                        <td><?= $cadet['battalion2']; ?></td>
                                        <td><?= $cadet['cstat']; ?></td>
                                        <td><?= $cadet['remarks']; ?></td>
                                        <!-- <td><?= $cadet['pix']; ?></td> -->
                                        <td><?= $cadet['dateadmitted']; ?></td>
                                        <td><?= $cadet['dategrad']; ?></td>
                                        <td><?= $cadet['datecomm']; ?></td>
                                        <td><?= $cadet['degree']; ?></td>
                                        <td><?= $cadet['majorin']; ?></td>
                                        <td><?= $cadet['graduate']; ?></td>
                                        <td><?= $cadet['latinaward']; ?></td>
                                        <td><?= $cadet['password']; ?></td>
                                        <td><?= $cadet['coybat']; ?></td>
                                        <td>
                                            <a href="cadets/cadets-view.php?cadet_id=<?= $cadet['cadet_id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="cadets/cadets-edit.php?cadet_id=<?= $cadet['cadet_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="cadets.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_student" value="<?=$cadet['cadet_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>