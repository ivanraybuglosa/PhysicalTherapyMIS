<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Evaluation</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Transaction - Manage Evaluation</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                
             <?php include("config.php"); 
                $id = $_GET['id'];
                 $edit=mysqli_query($mysqli,"select * from evaluation INNER JOIN patient ON evaluation.PatientID = patient.PatientID where EvalID='$id'");
                $erow=mysqli_fetch_array($edit); 
            ?>
                <div class="card-panel">
                    <h4 class="header2">Evaluation Form</h4>
                        <div class="divider"></div>
                            <form class="col s12" action="evaluationActionAdd.php" method="post" >
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="hidden" name="PatientID" value="<?php echo $erow['PatientID']; ?>">
                                        <input id="patientName" name="patientName" value="<?php echo $erow['PatientName']; ?>" type="text" disabled  style="color: black;">
                                        <div id="patientList"></div>
                                        <label for="patientName" style="color: black;">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                       <input id="physicalTherapist" type="text" value="<?php echo $erow['EvalPT']; ?>" disabled  style="color: black;">
                                        <label for="physicalTherapist" disabled  style="color: black;">Physical Therapist</label>
                                    </div>
                                </div>
                                    <h4 class="header">Chief Complaint</h4>
                                    <div class="divider"></div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <textarea id="caseDescription" class="materialize-textarea" disabled style="color: black;"><?php echo $erow['EvalChiefComplaint']; ?></textarea>
                                                    <label for="caseDescription" style="color: black;">Chief Complaint</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <textarea id="caseDescription" name="PatientIllness" class="materialize-textarea" disabled style="color: black;"><?php echo $erow['EvalHistoryIllness']; ?></textarea>
                                                    <label for="caseDescription" style="color: black;">History Patient Illness</label>
                                                </div>
                                        </div>
                                </div>
                                
                                
                            </div>
                                <div class="card-panel">
                                    <h4 class="header">Occular Inspection</h4>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <textarea name="Edema" class="materialize-textarea" required disabled style="color: black;"><?php echo $erow['EvalEdema']; ?></textarea>
                                                <label for="Edema" style="color: black;">Edema</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <textarea name="Posture" class="materialize-textarea" required disabled style="color: black;"><?php echo $erow['EvalPosture']; ?></textarea>
                                                <label for="Posture" style="color: black;">Posture</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <textarea name="Skin" class="materialize-textarea" required disabled style="color: black;"><?php echo $erow['EvalSkin']; ?></textarea>
                                                <label for="Skin" style="color: black;">Skin</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <textarea name="Skin" class="materialize-textarea" required disabled style="color: black;"><?php echo $erow['Others']; ?></textarea>
                                                <label for="Skin" style="color: black;">Others</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="Assessment" class="materialize-textarea" disabled required style="color: black;"><?php echo $erow['ROM']; ?></textarea>
                                                <label for="Assessment" style="color: black;">Range of Motion</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea name="Plan" class="materialize-textarea" required disabled style="color: black;"><?php echo $erow['MMT']; ?></textarea>
                                                <label for="Plan" style="color: black;">Manual Muscle Test</label>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="Assessment" class="materialize-textarea" disabled required style="color: black;"><?php echo $erow['EvalAssessment']; ?></textarea>
                                                <label for="Assessment" style="color: black;">Assessment</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea name="Plan" class="materialize-textarea" required disabled style="color: black;"><?php echo $erow['EvalPlan']; ?></textarea>
                                                <label for="Plan" style="color: black;">Plan</label>
                                            </div>
                                            <a class="btn red waves-effect waves-light right modal-close" href="manageevaluation.php" style="margin-right:20px;">Back</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                </div>
                </form>
            </div>
        </section>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>      
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script> 

    <!-- datatables -->
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
