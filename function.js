
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


const d = new Date().toLocaleString().split(',')[0]

console.log(d)
var x=4
var y=9

function getexp(){
    const rent = document.getElementById("rent")
    const utilities = document.getElementById("hello")
    const groceries = document.getElementById("groceries")
    var exp = rent + utilities + groceries
}

const submit = document.getElementById("submit")
submit.onclick = getexp

document.getElementById("Remaining_balance").innerHTML = budget - exp;
console.log(budget - exp)