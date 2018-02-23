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
                <div class="card-panel">
                    <h4 class="header">Physical Theraphy Notes</h4>
                    <div class="divider"></div>
                    <form class="col s12" action="planOfCareActionAdd.php" method="post" >
                    <div class="body">
                        <div class="row">
                            <div class="col s6 m6 l12">
                                <div class="row">
                                    <div class="input-field col s8">
                                        <input type="text" id="patientName" name="patientName" onkeyup="autocomplet()" />
                                            <div id="patientList"></div>
                                        <label for="patientName">Patient Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select id="PTName" name="PTName">
                                            <option value="" disabled selected>Choose Physical Therapist</option>
                                            <?php include("config.php");
                                                    $result = mysqli_query($mysqli, "SELECT * FROM PT ORDER BY PT_ID DESC");
                                                    while ($res = mysqli_fetch_array($result)) { ?>
                                            
                                            <option value="<?php echo $res['PT_Name']; ?>"><?php echo $res['PT_Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="input-field col s6">
                                        <input type="date" class="datepicker" name="dateSched">
                                        <label for="dateSched">Date Scheduled</label>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field col s8">
                                           <select name="training">
                                            <option value="" disabled selected>Choose Training</option>
                                            <?php include("config.php");
                                                    $result1 = mysqli_query($mysqli, "SELECT * FROM training ORDER BY training_ID DESC");
                                                    while ($res1 = mysqli_fetch_array($result1)) { ?>
                                            
                                            <option value="<?php echo $res1['training_Name']; ?>"><?php echo $res1['training_Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                        <div class="input-field col s2">
                                            <input name="sets" type="number">
                                            <label for="sets">Sets</label>
                                        </div>
                                        <div class="input-field col s2">
                                            <input name="repetitions" type="number">
                                            <label for="repetitions">Repetitions</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="row">
                                <h4>Vital Signs</h4>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="bloodPressure" type="text">
                                        <label for="bloodPressure">Blood Pressure</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="heartRate" type="text">
                                        <label for="heartRate">Heart Rate</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="respiratoryRate" type="text">
                                        <label for="respiratoryRate">Respiratory Rate</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="pulse" type="text">
                                        <label for="pulse">Pulse</label>
                                    </div>
                                </div>
                            <div class="divider"></div>
                            <h4>SOAP</h4>
                            <div class="col s3 m6 l12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea name="subjective" class="materialize-textarea"></textarea>
                                        <label for="subjective">Subjective</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea name="objective" class="materialize-textarea"></textarea>
                                        <label for="objective">Objective</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea name="assessment" class="materialize-textarea"></textarea>
                                        <label for="assessment">Assessment</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <textarea name="plan" class="materialize-textarea"></textarea>
                                        <label for="plan">Plan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="divider"></div>

                                    <div class="input-field col s4">
                                        <input type="date" class="datepicker" name="nextSchedDate">
                                        <label for="nextSchedDate">Next Session Schedule</label>
                                    </div>

                                    <div class="input-field col s4">
                                        <input type="time" name="schedTime">
                                    </div>

                                    <div class="input-field col s4">
                                        <input type="text" name="billing">
                                        <label for="billing">Billing (Peso)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn red waves-effect waves-light right" type="submit" name="action">Cancel<i class="mdi-content-send right"></i></button>
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" style="margin-right:20px;">Add<i class="mdi-content-send right"></i></button>
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
    
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar-script.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>