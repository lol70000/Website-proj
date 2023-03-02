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
});

var dt = new Date;
var day = dt.getDate():
var month = dt.getMonth();
var year = dt.getFullYear();
document.getElementById("one").innerHTML = day.toString() + "/" + month.toString() + "/" + year.toString();
var ballance = 100;
document.getElementById("two").innerHTML = "Ballance:" + ballance.toString();

function logincheck(){
    if (document.getElementById === null){
        if 
    }
}

const login = document.getElementById("submit-login");
login.onclick() = logincheck;