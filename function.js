function getBudget(){
}
const budget = document.getElementById("salary")

var xValues=[10,20,30,40,50,60,70]
var yValues=[0,22,11,55,23,42,58]

new Chart("Capital_general",{
    type: "line",
    data:{
        labels: xValues,
        datasets:[{
            fill:false,
            backgroundColor:"rgb(300,0,0)",
            borderColor:"rgb(200,1,0)",
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


const d = new Date().toLocaleString().split(',')[0]

console.log(d)

document.getElementById("Remaining_balance").innerHTML = 5+7;