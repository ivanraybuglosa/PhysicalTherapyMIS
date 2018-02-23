 function showDate(){
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
		var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
		if(dd<10) {
		    dd = '0'+dd
		} 

		if(mm<10) {
		    mm = '0'+mm
		} 

		today =  mm + '/' + dd + '/' + yyyy +' - '+ days[today.getDay()];
        document.getElementById("MyDateDisplay").innerHTML = today;
		}
showDate();