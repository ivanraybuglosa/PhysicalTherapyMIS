<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">User</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Maintenance - User</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                
                <div class="card-panel">
                    <h4 class="header">User</h4>
                    <div class="divider"></div>
                        <div class="body">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="patientID" type="text">
                                        <label for="patientID">Username</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="physicalTherapist" type="text">
                                        <label for="physicalTherapist">New Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="evalID" type="text">
                                        <label for="evalID">Confirm Password</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="sessions" type="text">
                                        <label for="sessions">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="evalID" type="text">
                                        <label for="evalID">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="sessions" type="text">
                                        <label for="sessions">Position</label>
                                    </div>
                                </div>
                            </form>
                            <div class="divider"></div>
                                <div class="section">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m8 l12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Password</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>admin</td>
                                                            <td>admin</td>
                                                            <td>Jerry</td>
                                                            <td>Admin</td>
                                                            <td><button class="waves-effect waves-light btn">Edit</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>admin</td>
                                                            <td>pass123</td>
                                                            <td>Bart</td>
                                                            <td>Physical Therapist</td>
                                                            <td><button class="waves-effect waves-light btn">Edit</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>user</td>
                                                            <td>pass</td>
                                                            <td>Dan</td>
                                                            <td>Physical Therapist</td>
                                                            <td><button class="waves-effect waves-light btn">Edit</button></td>
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

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
    <!-- chartjs -->   
    
   
    
    
    <script type="text/javascript" src="js/plugins/chartjs/lineChart.js"></script>

    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>      
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     
    

    

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