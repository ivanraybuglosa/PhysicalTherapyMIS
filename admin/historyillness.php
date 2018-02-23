<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Reports - Cases</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="js/jquery.min.js"></script>
        <script src = "js/jquery.canvasjs.min.js"></script>
    </head>
    <body>
        <div class="panel-body">
            <div id="illness" style="width: 100%; height: 400px"></div>
        </div>
        <?php

$conn = new mysqli("localhost", "root", "", "ptmisdb") or die(mysqli_error());

$Alcoholism = $conn->query("SELECT Alcoholism FROM `illnesscounter`") or die(mysqli_error());
$Alcoholism = $Alcoholism->fetch_array();
$Anemia = $conn->query("SELECT Anemia FROM `illnesscounter`") or die(mysqli_error());
$Anemia = $Anemia->fetch_array();
$Anxiety = $conn->query("SELECT Anxiety FROM `illnesscounter`") or die(mysqli_error());
$Anxiety = $Anxiety->fetch_array();
$Asthma = $conn->query("SELECT Asthma FROM `illnesscounter`") or die(mysqli_error());
$Asthma = $Asthma->fetch_array();
$ArthritisRheuma = $conn->query("SELECT `ArthritisRheuma` FROM `illnesscounter`") or die(mysqli_error());
$ArthritisRheuma = $ArthritisRheuma->fetch_array();
$BloodClot = $conn->query("SELECT BloodClot FROM `illnesscounter`") or die(mysqli_error());
$BloodClot = $BloodClot->fetch_array();
$Bronchitis = $conn->query("SELECT Bronchitis FROM `illnesscounter`") or die(mysqli_error());
$Bronchitis = $Bronchitis->fetch_array();
$Bowel = $conn->query("SELECT Bowel FROM `illnesscounter`") or die(mysqli_error());
$Bowel = $Bowel->fetch_array();
$BloodTrans = $conn->query("SELECT BloodTrans FROM `illnesscounter`") or die(mysqli_error());
$BloodTrans = $BloodTrans->fetch_array();
$ArthritisOsteo = $conn->query("SELECT `ArthritisOsteo` FROM `illnesscounter`") or die(mysqli_error());
$ArthritisOsteo = $ArthritisOsteo->fetch_array();
$Cancer = $conn->query("SELECT Cancer FROM `illnesscounter`") or die(mysqli_error());
$Cancer = $Cancer->fetch_array();
$Cardiac = $conn->query("SELECT Cardiac FROM `illnesscounter`") or die(mysqli_error());
$Cardiac = $Cardiac->fetch_array();
$Coronary = $conn->query("SELECT Coronary FROM `illnesscounter`") or die(mysqli_error());
$Coronary = $Coronary->fetch_array();
$Cerebrvascular = $conn->query("SELECT Cerebrvascular FROM `illnesscounter`") or die(mysqli_error());
$Cerebrvascular = $Cerebrvascular->fetch_array();
$EyeDisease = $conn->query("SELECT EyeDisease FROM `illnesscounter`") or die(mysqli_error());
$EyeDisease = $EyeDisease->fetch_array();
$Diabetes = $conn->query("SELECT Diabetes FROM `illnesscounter`") or die(mysqli_error());
$Diabetes = $Diabetes->fetch_array();
$Depression = $conn->query("SELECT Depression FROM `illnesscounter`") or die(mysqli_error());
$Depression = $Depression->fetch_array();
$Emphysema = $conn->query("SELECT Emphysema FROM `illnesscounter`") or die(mysqli_error());
$Emphysema = $Emphysema->fetch_array();
$ChronicPulmonary = $conn->query("SELECT ChronicPulmonary FROM `illnesscounter`") or die(mysqli_error());
$ChronicPulmonary = $ChronicPulmonary->fetch_array();
$Fibromyalgia = $conn->query("SELECT Fibromyalgia FROM `illnesscounter`") or die(mysqli_error());
$Fibromyalgia = $Fibromyalgia->fetch_array();
$Gout = $conn->query("SELECT Gout FROM `illnesscounter`") or die(mysqli_error());
$Gout = $Gout->fetch_array();
$Gerd = $conn->query("SELECT Gerd FROM `illnesscounter`") or die(mysqli_error());
$Gerd = $Gerd->fetch_array();   
$Gallblader = $conn->query("SELECT Gallblader FROM `illnesscounter`") or die(mysqli_error());
$Gallblader = $Gallblader->fetch_array();
$HeartAttack = $conn->query("SELECT HeartAttack FROM `illnesscounter`") or die(mysqli_error());
$HeartAttack = $HeartAttack->fetch_array();
$Hiv = $conn->query("SELECT Hiv FROM `illnesscounter`") or die(mysqli_error());
$Hiv = $Hiv->fetch_array();
$Hormone = $conn->query("SELECT Hormone FROM `illnesscounter`") or die(mysqli_error());
$Hormone = $Hormone->fetch_array();
$Hypertension = $conn->query("SELECT Hypertension FROM `illnesscounter`") or die(mysqli_error());
$Hypertension = $Hypertension->fetch_array();
$Hypercholesterol = $conn->query("SELECT Hypercholesterol FROM `illnesscounter`") or die(mysqli_error());
$Hypercholesterol = $Hypercholesterol->fetch_array();
$Hypothyroidism = $conn->query("SELECT Hypothyroidism FROM `illnesscounter`") or die(mysqli_error());
$Hypothyroidism = $Hypothyroidism->fetch_array();
$Kidney = $conn->query("SELECT Kidney FROM `illnesscounter`") or die(mysqli_error());
$Kidney = $Kidney->fetch_array();
$LiverCirrhosis = $conn->query("SELECT LiverCirrhosis FROM `illnesscounter`") or die(mysqli_error());
$LiverCirrhosis = $LiverCirrhosis->fetch_array();
$LiverHepatitis = $conn->query("SELECT LiverHepatitis FROM `illnesscounter`") or die(mysqli_error());
$LiverHepatitis = $LiverHepatitis->fetch_array();
$ThyroidDisease = $conn->query("SELECT ThyroidDisease FROM `illnesscounter`") or die(mysqli_error());
$ThyroidDisease = $ThyroidDisease->fetch_array();
$Osteomyelitis = $conn->query("SELECT Osteomyelitis FROM `illnesscounter`") or die(mysqli_error());
$Osteomyelitis = $Osteomyelitis->fetch_array();
$StomachUlcer = $conn->query("SELECT StomachUlcer FROM `illnesscounter`") or die(mysqli_error());
$StomachUlcer = $StomachUlcer->fetch_array();
$Pacemaker = $conn->query("SELECT Pacemaker FROM `illnesscounter`") or die(mysqli_error());
$Pacemaker = $Pacemaker->fetch_array();
$Parkinsons = $conn->query("SELECT Parkinsons FROM `illnesscounter`") or die(mysqli_error());
$Parkinsons = $Parkinsons->fetch_array();
$Seizures = $conn->query("SELECT Seizures FROM `illnesscounter`") or die(mysqli_error());
$Seizures = $Seizures->fetch_array();
$Osteoporosis = $conn->query("SELECT Osteoporosis FROM `illnesscounter`") or die(mysqli_error());
$Osteoporosis = $Osteoporosis->fetch_array();


?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#illness").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Bacteriological Status", 
            exportEnabled: true,
            title: { 
                text: "Bago Physical Therapy Rehab Care Center",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: "Total History Illness"
                }
            ],
            legend :{ 
                verticalAlign: "center", 
                horizontalAlign: "left" 
            }, 
            data: [ 
                { 
                    type: "doughnut", 
                    showInLegend: true, 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    dataPoints: [ 
                        { label: "Alcoholism",  y: 
                         <?php
                        if($Alcoholism == ""){
                            echo 0;
                        }else{
                            echo $Alcoholism['Alcoholism'];
                        }   
                         ?>, legendText: "Alcoholism"},

                         { label: "Anemia",  y: 
                         <?php
                        if($Anemia == ""){
                            echo 0;
                        }else{
                            echo $Anemia['Anemia'];
                        }   
                         ?>, legendText: "Anemia"},

                         { label: "Anxiety",  y: 
                         <?php
                        if($Anxiety == ""){
                            echo 0;
                        }else{
                            echo $Anxiety['Anxiety'];
                        }   
                         ?>, legendText: "Anxiety"},

                         { label: "Asthma",  y: 
                         <?php
                        if($Asthma == ""){
                            echo 0;
                        }else{
                            echo $Asthma['Asthma'];
                        }   
                         ?>, legendText: "Asthma"},

                         { label: "ArthritisRheuma",  y: 
                         <?php
                        if($ArthritisRheuma == ""){
                            echo 0;
                        }else{
                            echo $ArthritisRheuma['ArthritisRheuma'];
                        }   
                         ?>, legendText: "ArthritisRheuma"},

                         { label: "BloodClot",  y: 
                         <?php
                        if($BloodClot == ""){
                            echo 0;
                        }else{
                            echo $BloodClot['BloodClot'];
                        }   
                         ?>, legendText: "BloodClot"},

                          { label: "BloodClot",  y: 
                         <?php
                        if($BloodClot == ""){
                            echo 0;
                        }else{
                            echo $BloodClot['BloodClot'];
                        }   
                         ?>, legendText: "BloodClot"},

                          { label: "Bronchitis",  y: 
                         <?php
                        if($Bronchitis == ""){
                            echo 0;
                        }else{
                            echo $Bronchitis['Bronchitis'];
                        }   
                         ?>, legendText: "Bronchitis"},

                          { label: "Bowel",  y: 
                         <?php
                        if($Bowel == ""){
                            echo 0;
                        }else{
                            echo $Bowel['Bowel'];
                        }   
                         ?>, legendText: "Bowel"},

                          { label: "BloodTrans",  y: 
                         <?php
                        if($BloodTrans == ""){
                            echo 0;
                        }else{
                            echo $BloodTrans['BloodTrans'];
                        }   
                         ?>, legendText: "BloodTrans"},

                         { label: "BloodTrans",  y: 
                         <?php
                        if($BloodTrans == ""){
                            echo 0;
                        }else{
                            echo $BloodTrans['BloodTrans'];
                        }   
                         ?>, legendText: "BloodTrans"},

                         { label: "ArthritisOsteo",  y: 
                         <?php
                        if($ArthritisOsteo == ""){
                            echo 0;
                        }else{
                            echo $ArthritisOsteo['ArthritisOsteo'];
                        }   
                         ?>, legendText: "ArthritisOsteo"},

                          { label: "Cancer",  y: 
                         <?php
                        if($Cancer == ""){
                            echo 0;
                        }else{
                            echo $Cancer['Cancer'];
                        }   
                         ?>, legendText: "Cancer"},

                          { label: "Cardiac",  y: 
                         <?php
                        if($Cardiac == ""){
                            echo 0;
                        }else{
                            echo $Cardiac['Cardiac'];
                        }   
                         ?>, legendText: "Cardiac"},

                           { label: "Coronary",  y: 
                         <?php
                        if($Coronary == ""){
                            echo 0;
                        }else{
                            echo $Coronary['Coronary'];
                        }   
                         ?>, legendText: "Coronary"},

                            { label: "Cerebrvascular",  y: 
                         <?php
                        if($Cerebrvascular == ""){
                            echo 0;
                        }else{
                            echo $Cerebrvascular['Cerebrvascular'];
                        }   
                         ?>, legendText: "Cerebrvascular"},

                            { label: "EyeDisease",  y: 
                         <?php
                        if($EyeDisease == ""){
                            echo 0;
                        }else{
                            echo $EyeDisease['EyeDisease'];
                        }   
                         ?>, legendText: "EyeDisease"},

                             { label: "Diabetes",  y: 
                         <?php
                        if($Diabetes == ""){
                            echo 0;
                        }else{
                            echo $Diabetes['Diabetes'];
                        }   
                         ?>, legendText: "Diabetes"},

                              { label: "Emphysema",  y: 
                         <?php
                        if($Emphysema == ""){
                            echo 0;
                        }else{
                            echo $Emphysema['Emphysema'];
                        }   
                         ?>, legendText: "Emphysema"},

                              { label: "Depression",  y: 
                         <?php
                        if($Depression == ""){
                            echo 0;
                        }else{
                            echo $Depression['Depression'];
                        }   
                         ?>, legendText: "Depression"},

                               { label: "ChronicPulmonary",  y: 
                         <?php
                        if($ChronicPulmonary == ""){
                            echo 0;
                        }else{
                            echo $ChronicPulmonary['ChronicPulmonary'];
                        }   
                         ?>, legendText: "ChronicPulmonary"},

                                { label: "Fibromyalgia",  y: 
                         <?php
                        if($Fibromyalgia == ""){
                            echo 0;
                        }else{
                            echo $Fibromyalgia['Fibromyalgia'];
                        }   
                         ?>, legendText: "Fibromyalgia"},

                                { label: "Gout",  y: 
                         <?php
                        if($Gout == ""){
                            echo 0;
                        }else{
                            echo $Gout['Gout'];
                        }   
                         ?>, legendText: "Gout"},

                                { label: "Gerd",  y: 
                         <?php
                        if($Gerd == ""){
                            echo 0;
                        }else{
                            echo $Gerd['Gerd'];
                        }   
                         ?>, legendText: "Gerd"},

                                 { label: "Gallblader",  y: 
                         <?php
                        if($Gallblader == ""){
                            echo 0;
                        }else{
                            echo $Gallblader['Gallblader'];
                        }   
                         ?>, legendText: "Gallblader"},

                         { label: "HeartAttack",  y: 
                         <?php
                        if($HeartAttack == ""){
                            echo 0;
                        }else{
                            echo $HeartAttack['HeartAttack'];
                        }   
                         ?>, legendText: "HeartAttack"},

                         { label: "Hiv",  y: 
                         <?php
                        if($Hiv == ""){
                            echo 0;
                        }else{
                            echo $Hiv['Hiv'];
                        }   
                         ?>, legendText: "Hiv"},

                         { label: "Hormone",  y: 
                         <?php
                        if($Hormone == ""){
                            echo 0;
                        }else{
                            echo $Hormone['Hormone'];
                        }   
                         ?>, legendText: "Hormone"},

                          { label: "Hypertension",  y: 
                         <?php
                        if($Hypertension == ""){
                            echo 0;
                        }else{
                            echo $Hypertension['Hypertension'];
                        }   
                         ?>, legendText: "Hypertension"},

                          { label: "Hypothyroidism",  y: 
                         <?php
                        if($Hypothyroidism == ""){
                            echo 0;
                        }else{
                            echo $Hypothyroidism['Hypothyroidism'];
                        }   
                         ?>, legendText: "Hypothyroidism"},

                           { label: "Kidney",  y: 
                         <?php
                        if($Kidney == ""){
                            echo 0;
                        }else{
                            echo $Kidney['Kidney'];
                        }   
                         ?>, legendText: "Kidney"},

                           { label: "LiverCirrhosis",  y: 
                         <?php
                        if($LiverCirrhosis == ""){
                            echo 0;
                        }else{
                            echo $LiverCirrhosis['LiverCirrhosis'];
                        }   
                         ?>, legendText: "LiverCirrhosis"},

                           { label: "LiverHepatitis",  y: 
                         <?php
                        if($LiverHepatitis == ""){
                            echo 0;
                        }else{
                            echo $LiverHepatitis['LiverHepatitis'];
                        }   
                         ?>, legendText: "LiverHepatitis"},

                           { label: "ThyroidDisease",  y: 
                         <?php
                        if($ThyroidDisease == ""){
                            echo 0;
                        }else{
                            echo $ThyroidDisease['ThyroidDisease'];
                        }   
                         ?>, legendText: "ThyroidDisease"},

                           { label: "Osteomyelitis",  y: 
                         <?php
                        if($Osteomyelitis == ""){
                            echo 0;
                        }else{
                            echo $Osteomyelitis['Osteomyelitis'];
                        }   
                         ?>, legendText: "Osteomyelitis"},

                           { label: "StomachUlcer",  y: 
                         <?php
                        if($StomachUlcer == ""){
                            echo 0;
                        }else{
                            echo $StomachUlcer['StomachUlcer'];
                        }   
                         ?>, legendText: "StomachUlcer"},

                            { label: "Pacemaker",  y: 
                         <?php
                        if($Pacemaker == ""){
                            echo 0;
                        }else{
                            echo $Pacemaker['Pacemaker'];
                        }   
                         ?>, legendText: "Pacemaker"},

                            { label: "Parkinsons",  y: 
                         <?php
                        if($Parkinsons == ""){
                            echo 0;
                        }else{
                            echo $Parkinsons['Parkinsons'];
                        }   
                         ?>, legendText: "Parkinsons"},

                             { label: "Seizures",  y: 
                         <?php
                        if($Seizures == ""){
                            echo 0;
                        }else{
                            echo $Seizures['Seizures'];
                        }   
                         ?>, legendText: "Seizures"},

                             { label: "Osteoporosis",  y: 
                         <?php
                        if($Osteoporosis == ""){
                            echo 0;
                        }else{
                            echo $Osteoporosis['Osteoporosis'];
                        }   
                         ?>, legendText: "Osteoporosis"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>
    </body>
</html>