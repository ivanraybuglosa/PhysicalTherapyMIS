<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Physical Trainings</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Maintenance - Physical Trainings</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->

                <?php include_once("config.php"); ?>

                 <div class="card-panel">
                    <h4 class="header2">Physical Trainings</h4>
                        <div class="divider"></div>
                        <div class="row">
                            <form class="col s12" action="trainingActionAdd.php" method="post">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="TrainingName" type="text" name="TrainingName" required>
                                        <label for="TrainingName">Training</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="TrainingDesc" type="text" name="TrainingDesc" required>
                                        <label for="TrainingDesc">Training Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit">Add Trainings<i class="mdi-content-send right"></i></button>
                                        </div>
                                </div>
                       </form>  
                </div>

                <div class="card-panel">
                    <div class="container">
                        <div class="section">
                            <div id="table-datatables">
                                <h4 class="header2">List of Trainings</h4>
                                    <div class="row">
                                        <div class="col s12 m8 l12">
                                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Physical Training</th>
                                                        <th>Physical Training Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $result = mysqli_query($mysqli, "SELECT * FROM training ORDER BY training_ID DESC");
                                                    while ($res = mysqli_fetch_array($result)) { ?>
                                                <tr>
                                                    <td><?php echo $res['training_Name']; ?></td>
                                                    <td><?php echo $res['training_Desc']; ?></td>
                                                    
                                                    <td><button href="#edit<?php echo $res['training_ID']; ?>" data-toggle="modal" class="waves-effect waves-light modal-trigger light-blue btn"><span class="glyphicon glyphicon-edit"></span> Update Record</button>
                                                        <?php include("trainingButton.php"); }?>
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
    

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>