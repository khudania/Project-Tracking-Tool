<?php

include('./config/connect.php');



if(isset($_POST['submit'])){
    $dept = mysqli_real_escape_string($db, $_POST['dept']);
  

    // Check for same Category
   $query = "SELECT * FROM department WHERE dept = '$dept'";
    $result = mysqli_query($db,$query);

// if Category already exists
if(mysqli_num_rows($result))
        {
            echo "<script type='text/javascript'>
            alert('Department Already exists!')</script>";
            echo "<script>window.location.href='department.php'</script>";
        }
        else{
            $sql = "INSERT INTO department(dept) 
            VALUES('$dept')";
            $res=mysqli_query($db,$sql);
            if($res)
            {
                //if the values are successfully inserted, then move the images to respective folders
                // $msg = "Department Added successfully";
                // echo "<script type='text/javascript'>alert('$msg');window.location.href='department.php';</script>";


            }
            //if values are not inserted, show an alert
            else{
            echo "<script type='text/javascript'>
            alert('Could not Add! Try again')</script>";
            echo "<script>window.location.href='department.php'</script>";
            }
        }
}


?>

<!DOCTYPE html>
<html lang="en">

<?php include('./components/head.php'); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('./components/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('./components/navbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Department</h1>  
                    </div>

                    <div class="row">
                        <div class="col-md-4 order-12">
                            <div class="card shadow p-3">
                                <div class="card-head">
                                    <h4 class="title">Add Department</h4>
                                </div>
                                <div class="card-body">
                                    <form action="dept.php">
                                        <div class="form-group">
                                            <input type="text" name="dept" id="dept" class="form-control" placeholder="Enter New Department">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success btn-md float-right px-5">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 order-1">
                            <div class="row">
                                <div class="col-xl-4 col-md-4 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Technical</div>
                                                    <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                                                </div>
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-danger btn-sm btn-circle"><i class="fas fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('./components/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <?php include('./components/bottom.php'); ?>

</body>

</html>