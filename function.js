const budget = document.getElementById("salary")

var xValues=[10,20,30,40,50,60,70]
var yValues=[0,22,11,55,23,42,58]

new Chart("Capital_general",{
    type: "line",
    data:{
        labels: xValues,
        datasets:[{
            fill:false,
            backgroundColor:"rgb(22,144,148)",
            borderColor:"rgb(22,144,148)",
            data: yValues
        }]
    },
    options:{
        legend: {display: false},
        scales: {
            yAxes: [{ticks: {min: 0, max:100}}],
        }
    },
})