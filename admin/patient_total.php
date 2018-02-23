
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Patient Total</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
        <?php require 'js/charteasy/patient_population.php' ?>
    </head>
    <body>

        <div class="panel-body">
            <div id="patient_population" style="width: 100%; height: 400px"></div>
        </div>
        <div class="btn-group pull-right">
            <div class="pull-left">
                <select id="pyear" class="validate[required] select" data-style="btn-primary" data-live-search="true">
                    <option>Select Year...</option>
                    <option value="<?php 
    if(isset($_GET['year'])){
        $value=$_GET['year']; 
        echo $value;
    }
        else{
            echo date('Y');
        }
                                   ?>">
                        <?php 
                        if(isset($_GET['year'])){
                            $value=$_GET['year']; 
                            echo $value;
                        }
                        else{
                            echo date('Y');
                        }
                        ?></option>
                    <?php
                    for($y=2013; $y<=2025; $y++){
                    ?>
                    <option value="<?php echo $y ?>"><?php echo $y; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#pyear").on('change', function(){
                    var year=$(this).val();
                    window.location = 'patient_total.php?year='+year;
                });
            });
        </script>
    </body>
</html>