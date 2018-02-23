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
                            <li class="active">Data Entry - Transactions</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>

<?php include_once("config.php"); ?>  
                
                <div class="card-panel">
                    <div class="container">
                        <div class="section">
                            <div class="row">
                              <div class="col s12 m12 l12">
                                <ol class="breadcrumb">
                                    <li class="active">Please Choose a Transaction</li>
                                </ol>
                              </div>
                            </div>
                            <div class="row">
                                        <div class="input-field col s4">
                                            <a href="addreferral.php" class="btn cyan waves-effect waves-light " type="submit" name="Submit" value="add">Add Referral</a>
                                        </div>
                                        <div class="input-field col s4">
                                           <a href="addevaluation.php" class="btn cyan waves-effect waves-light " type="submit" name="Submit" value="add">Add Evaluation</a>
                                        </div>
                                        <div class="input-field col s4">
                                            <a href="addPOC.php" class="btn cyan waves-effect waves-light " type="submit" name="Submit" value="add">Add Plan of Care</a>
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