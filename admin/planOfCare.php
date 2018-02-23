<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Plan of Care</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Master File - Plan of Care</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                        <?php include_once("config.php"); ?>
                <div class="card-panel">
                    <div class="container">
                        <div class="section">
                            <div id="table-datatables">
                                    <div class="row">
                                        <div class="col s12 m8 l12">
                                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Patient Name</th>
                                                        <th>Physical Therapist</th>
                                                        <th>Date Scheduled</th>
                                                        <th>Treatment</th>
                                                        <th>Details</th>
                                                        <th>Update</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                $result = mysqli_query($mysqli, "SELECT * FROM planofcare ORDER BY POCID DESC");
                                                while ($res = mysqli_fetch_array($result)) { 
                                                $patientID = $res['PatientID'];
                                                ?>
                                                    <tr>
                                                        <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = '$patientID'");
                                                while ($res1 = mysqli_fetch_array($result1)) { ?>
                                                    <td><?php echo $res1['PatientName']; ?></td> 
                                                    <td><?php echo $res['POCPT']; ?></td>
                                                    <td><?php echo $res['POCDateSched']; ?></td>
                                                    <td><?php echo $res['POCTreatment']; ?></td>
                                                    <td><button class="waves-effect waves-light modal-trigger light-blue btn" href="#view<?php echo $res['POCID']; ?>">View Details</button>
                                                    <?php include("planofcareview.php"); ?></td>
                                                    
                                                    <td><button class="waves-effect waves-light modal-trigger light-blue btn" href="#update<?php echo $res['POCID']; ?>" >Update Record</button>
                                                    <?php include("planofcareedit.php"); ?></td>
                                                    <?php } } ?>
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

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

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