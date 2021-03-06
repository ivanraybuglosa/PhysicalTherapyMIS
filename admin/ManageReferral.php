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
                            <li class="active">Transaction - Manage Referral</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                
            
                <div class="card-panel">
                    <h4 class="header2">Referral Form</h4>
                        <div class="row">
                            <form class="col s12" method="post" action="referralActionAdd.php">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="patientName" name="patientName" type="text" onkeyup="autocomplet()">
                                        <div id="patientList"></div>
                                        <label for="patientName">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="doctor" name="doctor" type="text">
                                        <label for="doctor">Doctor</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="hospital" name="hospital" type="text">
                                        <label for="hospital">Hospital</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="hospitalAddress" name="hospitalAddress" type="text">
                                        <label for="hospitalAddress">Hospital Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="telephone" name="telephone" type="text">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="contactPerson" name="contactPerson" type="text">
                                        <label for="contactPerson">Contact Person</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="cases" name="cases" type="text">
                                        <label for="cases">Cases</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="caseDescription" name="caseDescription" class="materialize-textarea"></textarea>
                                        <label for="caseDescription">Case Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" style="margin-right:20px;">Save<i class="mdi-content-send right"></i></button>
                                    </div>
                                </div>
                            </form>
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