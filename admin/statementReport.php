<?php include("header.php"); ?>
            <!-- CONTENT-->
            
                    <form id="form_validation" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="input-field col s3">
                                <input type="text" id="patientName" name="patientName" onkeyup="autocomplet()" />
                                <div id="patientList"></div>
                                <label for="patientName">Patient Name</label>
                            </div>
                            <div class="col-md-3">
                                <button  type="submit" name="searchPatient" class="btn waves-effect bg-green pull-right" style="margin-top:20px;">View</button>
                            </div>
                        </div>    
                    
                    <?php include("config.php");?>
                        <div class="card">
                            <div class="body">
                            <div id="table-datatables">
                                    <div class="row">
                                        <div class="col s12 m8 l12">
                                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Physical Therapy</th>
                                        <th>Date</th>
                                        <th>Treatment</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        
                                    </tr>
                                </thead>
                                <tbody> 
                            
                                <?php

                        if(isset($_POST['searchPatient'])) {   
                            $patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
                            $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientName = '$patientName'");
                            while ($res = mysqli_fetch_array($result1)) {
                            $patientID = $res['PatientID'];
                            $result = mysqli_query($mysqli, "SELECT * FROM planofcare WHERE patientID = '$patientID'");
                            ?><tr>
                                <?php
                            while ($res1 = mysqli_fetch_array($result)) { ?>
                                <td><?php echo $res['PatientName']; ?></td> 
                                <td><?php echo $res1['POCPT']; ?></td>
                                <td><?php echo $res1['POCSessionDate']; ?></td>
                                <td><?php echo $res1['POCTreatment']; ?></td>
                                <td><?php echo $res1['POCStatus']; ?></td>
                                <td><?php echo $res1['POCTreatmentBill']; ?></td>
                                
                                </tr> 

                            <?php } } ?>
                            <tr>
                                        <?php $result2 = mysqli_query($mysqli, "SELECT SUM(POCTreatmentBill) as total FROM planofcare where POCStatus = 'Unpaid' and patientID = '$patientID'"); 
                                            $res3 = mysqli_fetch_array($result2);
                                        ?>
                                        <td>REMAINING BALANCE</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="color:Green"><b><?php echo $res3['total']; ?></b></td>
                                        <td></td>
                                    </tr>

                       <?php  
                            
                   } 
                   
                   else echo "Please Select Patient";
                    ?>
                           
                            
                                  </form>  
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