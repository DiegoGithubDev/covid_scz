window.onload = function () {
   CanvasJS.addCultureInfo("es",
      {	
        months:["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","noviembre","diciembre"],
        days: ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"],
      });
  
    var chart = new CanvasJS.Chart("chartContainer", {
			 culture:  "es",
			animationEnabled: true,
      title:{
        text: "Infectador por dia"              
      },
      axisX: {
      	title:"Fecha",
      	valueFormatString: "DD-MMMM"
    	},
    	axisY: {
      	title: "Cantidad",
      	includeZero: false
    	},
      data: [//array of dataSeries              
        { 
				 type: "spline",
         xValueFormatString: "MMMM-DD",
         yValueFormatString: "#0.## infectados",
         dataPoints: [
         { x: new Date(2019, 4, 20), y: 18 },
         { x: new Date(2019, 4, 21), y: 19 },
         { x: new Date(2019, 4, 22), y: 24 },
         { x: new Date(2019, 4, 23), y: 25 },
         { x: new Date(2019, 4, 29), y: 26 },
         { x: new Date(2019, 5, 1),  y: 30 }
         ]
       }
       ]
     });

    chart.render();
  }