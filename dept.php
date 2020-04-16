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
                                        <button class="btn btn-success btn-md float-right px-5">Save</button>
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