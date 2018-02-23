<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>BPTRCC - PTMIS</title>

    <!-- Favicons-->
    <link rel="icon" href="images/logo.png" sizes="40x40">

    <!-- CORE CSS-->    
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">



  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/fullcalendar/css/fullcalendar.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<style >
    #search{
    width: 250px; margin: 0 auto; max-height: 150px; border: 1px solid #f4f4f4; overflow: hidden;
}
#searchtitle{
    width: 250px; padding: 10px; background: #fff;
}
#searchtitle:hover{
    background: #f4545f;
}
</style>


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                     <h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="images/logo.png" style="width:65px;height:20;"" alt="PTMIS-logo"> </h1></a><a href="index.php"> <span class="black-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BPTRCC - PHYSICAL THERAPY MANAGMENT INFORMATION SYSTEM</span></a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="logout.php" class="waves-effect waves-block waves-light"><i class="mdi-action-settings-power"></i></a>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
               
            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/user.png" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light black-text profile-btn"  href="#" data-activates="profile-dropdown">Joe Depp<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal black-text">Physical Therapist</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="patientRegistration.php" class="waves-effect waves-cyan"><i class="mdi-action-assignment-ind"></i> Patient Registration</a>
                    </li>
                    <li class="bold"><a href="manageReferral.php" class="waves-effect waves-cyan"><i class="mdi-maps-local-hospital"></i> Manage Referral</a>
                    </li>
                    <li class="bold"><a href="manageEvaluation.php" class="waves-effect waves-cyan"><i class="mdi-action-description"></i> Manage Evaluation</a>
                    </li>
                    <li class="bold"><a href="ManagePlanOfCare.php" class="waves-effect waves-cyan"><i class="mdi-action-favorite"></i> Manage Plan of Care</a>
                    </li>
                </ul>
            </aside>
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
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                    <input type="text" onkeyup="search(this.value)" id="text" >
                                        <div id="search"></div>
                                        <label for="patientName">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="doctor" type="text">
                                        <label for="doctor">Doctor</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="hospital" type="text">
                                        <label for="hospital">Hospital</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="hospitalAddress" type="text">
                                        <label for="hospitalAddress">Hospital Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="telephone" type="text">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="contactPerson" type="text">
                                        <label for="contactPerson">Contact Person</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="cases" type="text">
                                        <label for="cases">Cases</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="caseDescription" class="materialize-textarea"></textarea>
                                        <label for="caseDescription">Case Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn green waves-effect waves-light right" type="submit" name="action" style="margin-left:20px;">Print<i class="mdi-content-send right"></i></button>
                                        <button class="btn red waves-effect waves-light right" type="submit" name="action">Cancel<i class="mdi-content-send right"></i></button>
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action" style="margin-right:20px;">Add<i class="mdi-content-send right"></i></button>
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
     <script> function search(string){
                var xmlhttp;
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject("XMLHTTP");
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById("search").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "patientSearch.php?s="+string, true);
                xmlhttp.send(null);
            } </script>
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