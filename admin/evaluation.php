<?php include("header.php"); ?>
            <!-- CONTENT-->
    <section class="section">
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Evaluation</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Master File - Evaluation</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
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
                                                    <th>Number of Sessions</th>
                                                    <th>Remarks</th>
                                                    <th>Details</th>
                                                    <th>Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--breadcrumbs end-->
                                                <?php 
                                                $result = mysqli_query($mysqli, "SELECT * FROM evaluation ORDER BY EvalID DESC");
                                                while ($res = mysqli_fetch_array($result)) { 
                                                $patientID = $res['PatientID'];

                                                ?>
                                                <tr>
                                                <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = '$patientID'");
                                                while ($res1 = mysqli_fetch_array($result1)) { ?>
                                                    <td><?php echo $res1['PatientName']; ?></td> 
                                                    <td><?php echo $res['EvalPT']; ?></td>
                                                    <td><?php echo $res['EvalSessionQty']; ?></td>
                                                    <td><?php echo $res['Remarks']; ?></td>
                                                    <td><button class="waves-effect waves-light modal-trigger light-blue btn" href="#edit<?php echo $res['EvalID']; ?>">View Details</button>
                                                    <?php include("evaluationButtonView.php"); ?></td>
                                                    
                                                    <td><button class="waves-effect waves-light modal-trigger light-blue btn" href="#update<?php echo $res['EvalID']; ?>" >Update Record</button>
                                                    <?php include("evaluationButtonEdit.php"); ?></td>
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
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <span class="right">  Copyright © 2018 Design and Developed by Mighty Conquerors</span>
            </div>
        </div>
    </footer>

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