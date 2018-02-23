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
                    <h4 class="header">Patient Record</h4>
                        <div class="body">
                            <form method="post">
                            <div class="row">
                                <div class="col s2">
                                    <p style="margin-top:45px;">Report Type</p>
                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s4">
                                        <input type="text" id="patientName" name="patientName" onkeyup="autocomplet()" placeholder="Patient Name" />
                                         <div id="patientList"></div>
                                    </div>

                                </div>
                                <div class="col s2">
                                    <p>TO</p>
                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s4" style="margin:-14px 0px 0px -125px;">
                                        <select name="tableReport">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="evaluation">Evaluation</option>
                                            <option value="planofcare">Plan of Care</option>
                                            <option value="referral">Referral</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s2">
                                    <p style="margin-top:45px;">Date</p>
                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s4">
                                        <input id="evalDate" name="startDate" type="date" class="datepicker" placeholder="Starting Date">
                                    </div>
                                </div>
                                <div class="col s2">
                                    <p>TO</p>
                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s4" style="margin:-14px 0px 0px -125px;">
                                        <input id="evalDate" name="endDate" type="date" class="datepicker" placeholder="Ending Date">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center">
                                <div class="col s12">
                                    <button class="btn red waves-effect waves-light " type="submit" name="submit">Generate Report<i class="mdi-content-send right"></i></button>

                                </div>
                            </div>
                        </div>
                    </form>
                        <div class="divider"></div>
                            
                    </div>
                </div>

<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {   
    $patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
    $query = mysqli_Query($mysqli, "SELECT * FROM `patient` WHERE `PatientName`='$patientName'") or die(mysql_error());

          if( ! mysqli_num_rows($query) ) 
          { echo 'No results found.';}
          else{   
           $patient_list = mysqli_fetch_assoc($query);
           $patientID = $patient_list['PatientID'];    
          }
    $tableReport = mysqli_real_escape_string($mysqli, $_POST['tableReport']);
    $startDate = mysqli_real_escape_string($mysqli, $_POST['startDate']);
    $startDate =  date('Y-m-d',strtotime($startDate));
    $endDate = mysqli_real_escape_string($mysqli, $_POST['endDate']);
    $endDate =  date('Y-m-d',strtotime($endDate));

        //insert data to database   
        
            switch ($_POST['tableReport']) {
            case 'evaluation': ?>
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
                    </tr>
                </thead>
                <tbody>
                    <?php 
                $result = mysqli_query($mysqli, "SELECT * FROM evaluation WHERE PatientID = $patientID");
                    while ($res1 = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = $patientID"); 
                        while ($res2 = mysqli_fetch_array($result1)) {
                            ?>
                        <td><?php echo $res2['PatientName']; ?></td>
                        <?php } ?>
                        <td><?php echo $res1['EvalPT']; ?></td>
                        <td><?php echo $res1['EvalSessionQty']; ?></td>
                        <td><?php echo $res1['EvalChiefComplaint']; ?></td>
                        <td><?php echo $res1['EvalHistoryIllness']; ?></td>
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
                    </tr>
                </thead>
                <tbody>
                    <?php 
                $result = mysqli_query($mysqli, "SELECT * FROM referral WHERE PatientID = $patientID");
                    while ($res1 = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = $patientID"); 
                        while ($res2 = mysqli_fetch_array($result1)) {
                            ?>
                        <td><?php echo $res2['PatientName']; ?></td>
                        <?php } ?>
                        <td><?php echo $res1['RefDoctor']; ?></td>
                        <td><?php echo $res1['RefHospital']; ?></td>
                        <td><?php echo $res1['RefCases']; ?></td>
                        <td><?php echo $res1['RefCasesDec']; ?></td>
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
                $result = mysqli_query($mysqli, "SELECT * FROM planofcare WHERE PatientID = $patientID");
                    while ($res1 = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = $patientID"); 
                        while ($res2 = mysqli_fetch_array($result1)) {
                            ?>
                        <td><?php echo $res2['PatientName']; ?></td>
                        <?php } ?>
                        <td><?php echo $res1['POCPT']; ?></td>
                        <td><?php echo $res1['POCDateSched']; ?></td>
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
                # code...
                break;
        }

}
         ?> 
         
            
                
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
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>      
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     
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