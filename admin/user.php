<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">User</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Maintenance - User</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
<?php include_once("config.php"); ?>
                <div class="card-panel">
                    <h4 class="header">User</h4>
                    <div class="divider"></div>
                    <form method="post" action="userAction.php">
                        <div class="body">
                            <form class="col s12">
                                <div class="row">
                                  <div class="input-field col s6">
                                      <input id="sessions" name="name" type="text">
                                      <label for="sessions">Name</label>
                                  </div>
                                  <div class="input-field col s6">
                                      <input id="sessions" name="position" type="text">
                                      <label for="sessions">Position</label>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s5">
                                        <input id="patientID" name="username" type="text">
                                        <label for="patientID">Username</label>
                                    </div>
                                    <div class="input-field col s5">
                                        <input id="physicalTherapist" name="password" type="text">
                                        <label for="physicalTherapist">Password</label>
                                    </div>

                                    <div class="input-field col s2">
                                        <button type="submit" name="Submit" class="waves-effect waves-light btn">SUBMIT</button>
                                    </div>
                                </div>
                            </form>


                            <div class="divider"></div>
                                <div class="section">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m8 l12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Password</th>
                                                            <th>Position</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php include("config.php");
                                                          $users=mysqli_query($mysqli,"SELECT * FROM users ORDER BY userID DESC");
                                                         while($row=mysqli_fetch_array($users)){

                                                     ?>
                                                        <tr>
                                                            <td><?php echo $row['name']?></td>
                                                            <td><?php echo $row['username']?></td>
                                                            <td><?php echo $row['password']?></td>
                                                            <td><?php echo $row['userType']?></td>
                                                            <td><a href="userEdit.php?id=<?php echo $row['userID'];?>" class="waves-effect waves-light btn">Edit</a></td>
                                                              <?php }?>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>


            </section>

        </div>

    </div>
            <!-- END LEFT SIDEBAR NAV-->




            <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">

        <div class="footer-copyright">
            <div class="container">
                <span class="right">  Copyright © 2018 Design and Developed by Mighty Conquerors</span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
    <!-- chartjs -->




    <script type="text/javascript" src="js/plugins/chartjs/lineChart.js"></script>

    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>


    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- data-tables -->
<script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>



    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>

    <script type="text/javascript" src="js/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar-script.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->

</body>

</html>
