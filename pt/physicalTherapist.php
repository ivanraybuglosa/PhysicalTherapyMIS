<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Physical Therapist</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Maintenance - Physical Therapist</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->

                <?php include_once("config.php"); ?>

                 <div class="card-panel">
                    <h4 class="header2">Physical Therapist</h4>
                        <div class="divider"></div>
                        <div class="row">
                            <form class="col s12" action="PTActionAdd.php" method="post">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="PTName" type="text" name="PTName" required>
                                        <label for="PTName">Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="patientAddress" type="text" name="patientAddress" required>
                                        <label for="patientAddress">Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s4">
                                        <select name="patientGender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label for="patientGender">Gender</label>
                                    </div>
                                     <div class="input-field col s4">
                                            <input id="patientBday" type="date" class="datepicker" name="patientBday" required>
                                            <label for="patientBday">Birthdate</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <select name="patientCivilStatus">
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                                <option value="Separated">Separated</option>
                                            </select>
                                            <label for="patientCivilStatus">Civil Status</label>
                                        </div>
                                </div>
                                 <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="add">Add PT<i class="mdi-content-send right"></i></button>
                                    </div>
                            </div>

                       </form>  
                    
                </div>

                <div class="card-panel">
                    <div class="container">
                        <div class="section">
                            <div id="table-datatables">
                                <h4 class="header2">Physical Therapist Records</h4>
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
                                                        <th>Update</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $result = mysqli_query($mysqli, "SELECT * FROM PT ORDER BY PT_ID DESC");
                                                    while ($res = mysqli_fetch_array($result)) { ?>
                                                    <tr>
                                                        <td><?php echo $res['PT_Name']; ?></td>
                                                        <td><?php echo $res['PT_Address']; ?></td>
                                                        <td><?php echo $res['PT_Gender']; ?></td>
                                                        <td><?php echo $res['PT_Birthday']; ?></td>
                                                        <td><?php echo $res['PT_CivilStatus']; ?></td>
                                                        <td><button href="#edit<?php echo $res['PT_ID']; ?>" data-toggle="modal" class="waves-effect waves-light modal-trigger light-blue btn"><span class="glyphicon glyphicon-edit"></span> Update Record</button>
                                                            <?php include("PTButton.php"); }?>
                                                        </td>
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
    
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar-script.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>