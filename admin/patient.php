<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Patient</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Master File - Patient</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>

<?php include_once("config.php"); ?>

                <div class="card-panel">
                    <div class="container">
                        <div class="section">
                            <a href="PatientRegistration.php" class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="add"><i class="mdi-content-add" style="margin-top:-10px;"></i>Add Patient</a>
                            <div id="table-datatables">
                                <h4 class="header2">Patient Records</h4>
                                    <div class="row">
                                        <div class="col s12 m8 l12">
                                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Birthday</th>
                                                        <th>Gender</th>
                                                        <th>Address</th>
                                                        <th>Civil Status</th>
                                                        <th>Profession</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                $result = mysqli_query($mysqli, "SELECT * FROM patient ORDER BY PatientID");
                                                    while ($res = mysqli_fetch_array($result)) { ?>
                                                    <tr>
                                                        <td><?php echo $res['PatientName']; ?></td>
                                                        <td><?php echo $res['PatientBirthdate']; ?></td>
                                                        <td><?php echo $res['PatientGender']; ?></td>
                                                        <td><?php echo $res['PatientAddress']; ?></td>
                                                        <td><?php echo $res['PatientCivilStatus']; ?></td>
                                                        <td><?php echo $res['PatientProfession']; ?></td>
                                                        <td><a href="patientEdit.php?patient_id=<?php echo $res['PatientID']; ?>" data-toggle="modal" class="waves-effect waves-light modal-trigger light-blue btn"> VIEW </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
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

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->

</body>

</html>
