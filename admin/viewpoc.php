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
                            <li class="active">Transaction - Manage Plan of Care</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                <?php include("config.php"); 
                $id = $_GET['id'];
                 $edit=mysqli_query($mysqli,"select * from planofcare INNER JOIN patient on planofcare.PatientID = patient.PatientID where POCID='$id'");
                $erow=mysqli_fetch_array($edit);
            ?>
                <div class="card-panel">
                    <h4 class="header">Physical Theraphy Notes</h4>
                    <div class="divider"></div>
                    <form class="col s12" action="planOfCareActionAdd.php" method="post" >
                    <div class="body">
                        <div class="row">
                            <div class="col s6 m6 l12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="hidden" name="PatientID" value="<?php echo $erow['PatientID']; ?>">
                                        <input id="patientName" name="patientName" value="<?php echo $erow['PatientName']; ?>" type="text" disabled  style="color: black;">
                                        <div id="patientList"></div>
                                        <label for="patientName" style="color: black;">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="PTName" name="PTName" value="<?php echo $erow['POCPT']; ?>" type="text" disabled  style="color: black;">
                                        <label for="PTName" style="color: black;">Physical Therapist</label>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field col s8">
                                           <input id="PTName" name="PTName" value="<?php echo $erow['POCTreatment']; ?>" type="text" disabled  style="color: black;">
                                        <label for="PTName" style="color: black;">Treatment</label>
                                        </div>
                                        <div class="input-field col s4">
                                           <input id="PTName" name="PTName" value="<?php echo $erow['POCSetRepMin']; ?>" type="text" disabled  style="color: black;">
                                        <label for="PTName" style="color: black;">Sets / Repeatitions / Mins.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="row">
                                <h5>Vital Signs</h5>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="bloodPressure" type="text" value="<?php echo $erow['POCBloodPressure']; ?>" placeholder="eg. 140/90" required disabled style="color: black;">
                                        <label for="bloodPressure" style="color: black;">Blood Pressure</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="heartRate" type="text" value="<?php echo $erow['POCHeartRate']; ?>" placeholder="eg. 140 bpm" required disabled style="color: black;">
                                        <label for="heartRate" style="color: black;">Heart Rate</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="respiratoryRate" type="text" value="<?php echo $erow['POCRespiratoryRate']; ?>" placeholder="eg. 50 bpm" required disabled style="color: black;">
                                        <label for="respiratoryRate" style="color: black;">Respiratory Rate</label>
                                    </div>
                                    <div class="input-field col s6" >
                                        <input name="pulse" type="text" value="<?php echo $erow['POCPulse']; ?>" placeholder="eg. 40 bpm" required disabled style="color: black;">
                                        <label for="pulse" style="color: black;">Pulse</label>
                                    </div>
                                </div>
                            <div class="divider"></div>
                            <h5>SOAP</h5>
                            <div class="col s3 m6 l12">
                                <div class="row">
                                    <div class="input-field col s4">
                                        <textarea name="subjective" class="materialize-textarea" value="" required disabled style="color: black;"><?php echo $erow['POC_Subjective']; ?></textarea>
                                        <label for="subjective" style="color: black;">Subjective</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <textarea name="assessment" class="materialize-textarea"  required disabled style="color: black;"><?php echo $erow['POCAssessment']; ?></textarea>
                                        <label for="assessment" style="color: black;">Assessment</label>
                                    </div>

                                    <div class="input-field col s4">
                                        <textarea name="plan" class="materialize-textarea" required disabled style="color: black;"><?php echo $erow['POCPlan']; ?></textarea>
                                        <label for="plan" style="color: black;">Plan</label>
                                    </div>
                                </div>
                                
                                    <div class="divider"></div>
                                    <h5>Next Session Schedule</h5>
                                    <div class="row">
                                    <div class="input-field col s4">
                                        <input type="text" value="<?php echo $erow['POCNextSchedDate']; ?>" name="nextSchedDate" disabled style="color: black;">
                                        
                                    </div>
                                        
                                    <div class="input-field col s4">
                                        <input type="text" value="<?php echo $erow['POCTime']; ?>" name="schedTime" disabled style="color: black;">
                                    </div>

                                    <div class="input-field col s4">
                                        <input type="number" name="billing" value="<?php echo $erow['POCTreatmentBill']; ?>" disabled style="color: black;">
                                        <label for="billing" style="color: black;">Payment (Peso)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <a class="btn red waves-effect waves-light right" href="manageplancare.php" style="margin-right:20px;">Back</a>
                                    </div>
                                </div>
                                  <?php include_once("config.php"); ?>
            </div>
                            </div>
                        </div>
                    </form>
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
    <script>  
 $(document).ready(function(){  
      $('#patientList').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"patientSearch.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#patientList').fadeIn();  
                          $('#patientList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '#patientName', function(){  
           $('#patientName').val($(this).text());  
           $('#patientList').fadeOut();  
      });  
 });  
 </script>  
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