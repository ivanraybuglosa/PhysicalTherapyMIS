 //Sampel Line Chart 
 var LineChartSampleData = {
  labels: ["January", "February", "March", "April", "May", "June", "July"],
  datasets: [{
   label: "My First dataset",
   fillColor: "rgba(220,220,220,0.2)",
   strokeColor: "rgba(220,220,220,1)",
   pointColor: "rgba(220,220,220,1)",
   pointStrokeColor: "#fff",
   pointHighlightFill: "#fff",
   pointHighlightStroke: "rgba(220,220,220,1)",
   data: [65, 59, 80, 81, 56, 55, 40]
  }, {
   label: "My Second dataset",
   fillColor: "rgba(151,187,205,0.2)",
   strokeColor: "rgba(151,187,205,1)",
   pointColor: "rgba(151,187,205,1)",
   pointStrokeColor: "#fff",
   pointHighlightFill: "#fff",
   pointHighlightStroke: "rgba(151,187,205,1)",
   data: [28, 48, 40, 19, 86, 27, 90]
  }]
 };
 

//Sampel Pie Doughnut Chart
var PieDoughnutChartSampleData = [
    {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
    },
    {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
    },
    {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
    }
]
 window.onload = function() {

  window.LineChartSample = new Chart(document.getElementById("line-chart-sample").getContext("2d")).Line(LineChartSampleData,{
   responsive:true
  });

  window.DoughnutChartSample = new Chart(document.getElementById("doughnut-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
   responsive:true
  });
  
 };
 