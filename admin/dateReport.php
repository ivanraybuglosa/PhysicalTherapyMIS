<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Patient Record</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Reports - Patient Record</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                <div class="card-panel">
                    <div class="container">
                        <div class="body">
                            <form method="post">
                            <div class="row">
                                <div id="input-select" class="section">
                                    <div class="input-field col s3">
                                        <input type="date" id="patientName" name="startDate" />

                                    </div>
                                    <div class="input-field col s3">
                                        <input type="date" id="patientName" name="endDate"   />

                                    </div>

                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s3" style="margin-top:-14px;">
                                      <label for="input-select">Report Type</label>
                                        <select name="tableReport">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="evaluation">Evaluation</option>
                                            <option value="planofcare">PT Notes</option>
                                            <option value="referral">Referral</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col s3" style="margin-top:-20px;">
                                    <button class="btn red waves-effect waves-light " type="submit" name="submit">Generate Report<i class="mdi-content-send right"></i></button>

                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <?php
                        //including the database connection file
                        include_once("config.php");

                        if(isset($_POST['submit'])) {
                           $start = $_POST['startDate'];
                           $end = $_POST['endDate'];
                            $tableReport = mysqli_real_escape_string($mysqli, $_POST['tableReport']);

                                //insert data to database

                                    switch ($_POST['tableReport']) {
                                    case 'evaluation':  ?>
                                    <div class="section">
                                    <div id="table-datatables">
                                            <div class="row">
                                                <div class="col s12 m8 l12">
                                                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Physical Therapist</th>
                                                <th>Session Qty</th>
                                                <th>Chief Complaint</th>
                                                <th>History Illnesses</th>
                                                <th>Evaluation Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $result = mysqli_query($mysqli, "SELECT * FROM evaluation WHERE Eval_Date BETWEEN '$start' AND '$end'");
                                            while ($res1 = mysqli_fetch_array($result)) {
                                                $P_id = $res1['PatientID'];
                                             ?>

                                            <tr>
                                                <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = $P_id");
                                                while ($res2 = mysqli_fetch_array($result1)) {
                                                    ?>
                                                <td><?php echo $res2['PatientName']; ?></td>
                                                <?php } ?>
                                                <td><?php echo $res1['EvalPT']; ?></td>
                                                <td><?php echo $res1['EvalSessionQty']; ?></td>
                                                <td><?php echo $res1['EvalChiefComplaint']; ?></td>
                                                <td><?php echo $res1['EvalHistoryIllness']; ?></td>
                                                <td><?php echo $res1['Eval_Date']; ?></td>
                                                <td><a href="printEval.php?id=<?php echo $res1['EvalID']; ?>"  class="btn green waves-effect waves-light" target="_blank">Print</a></td>
                                            </tr>
                                            <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                        </tbody>
                        <?php
                                        break;
                                    case 'referral':
                                         ?>
                                    <div class="section">
                                    <div id="table-datatables">
                                            <div class="row">
                                                <div class="col s12 m8 l12">
                                                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Referral Doctor</th>
                                                <th>Hospital</th>
                                                <th>Cases</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $result = mysqli_query($mysqli, "SELECT * FROM referral WHERE  Ref_Date BETWEEN '$start' AND '$end'");
                                        while ($res1 = mysqli_fetch_array($result)) {
                                                $P_id = $res1['PatientID'];
                                             ?>
                                            <tr>
                                                <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = $P_id");
                                                while ($res2 = mysqli_fetch_array($result1)) {
                                                    ?>
                                                <td><?php echo $res2['PatientName']; ?></td>
                                                <?php } ?>
                                                <td><?php echo $res1['RefDoctor']; ?></td>
                                                <td><?php echo $res1['RefHospital']; ?></td>
                                                <td><?php echo $res1['RefCases']; ?></td>
                                                <td><?php echo $res1['RefCasesDec']; ?></td>
                                                <td><a href="printRef.php?id=<?php echo $res1['RefID']; ?>" class="btn green waves-effect waves-light " target="_blank">Print</a></td>
                                            </tr>
                                            <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                        </tbody>
                                        <?php
                                        break;
                                        case 'planofcare':
                                         ?>
                                    <div class="section">
                                    <div id="table-datatables">
                                            <div class="row">
                                                <div class="col s12 m8 l12">
                                                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Physical Therapist</th>
                                                <th>Date</th>
                                                <th>Treatment</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $result = mysqli_query($mysqli, "SELECT * FROM planofcare WHERE POCSessionDate BETWEEN '$start' AND '$end'");
                                        while ($res1 = mysqli_fetch_array($result)) {
                                                $P_id = $res1['PatientID'];
                                             ?>
                                            <tr>
                                                <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = $P_id");
                                                while ($res2 = mysqli_fetch_array($result1)) {
                                                    ?>
                                                <td><?php echo $res2['PatientName']; ?></td>
                                                <?php } ?>
                                                <td><?php echo $res1['PT_ID']; ?></td>
                                                <td><?php echo $res1['POCSessionDate']; ?></td>
                                                <td><?php echo $res1['POCTreatment']; ?></td>
                                                <td><?php echo $res1['POCStatus']; ?></td>
                                            </tr>
                                            <?php } ?>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                        </tbody>
                                        <?php

                                    default:

                                        break;
                                }

                        }
                                 ?>

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

    <!-- jQuery Library -->

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
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
