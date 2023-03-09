const budget = document.getElementById("salary")

var xValues=[10,20,30,40,50,60,70]
var yValues=[0,22,11,55,23,42,58]

//new Chart("Capital_general",{
//    type: "line",
//    data:{
//        labels: xValues,
//        datasets:[{
//            fill:false,
//            backgroundColor:"rgb(22,144,148)",
//            borderColor:"rgb(22,144,148)",
//            data: yValues
//        }]
//    },
//    options:{
//        legend: {display: false},
//        scales: {
//            yAxes: [{ticks: {min: 0, max:100}}],
//        }
//    },
//});

let postObj = { 
    id: 1, 
    title: "What is AJAX", 
    body: "AJAX stands for Asynchronous JavaScript..."
}

function run() {
    let post = JSON.stringify(postObj)
    const url = "registration.php"
    let xhr = new XMLHttpRequest()
    xhr.open('POST', url, true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send("username=Henry&password=Ford");
    xhr.onload = function () {
        if(xhr.status === 201) {
            console.log("Post successfully created!") 
        }
    }
}
run()
function logincheck(){
    if (document.getElementById("username") != null){
        if (document.getElementById("password") != null){
            if (document.getElementById("password_check") != null && document.getElementById("password_check") === document.getElementById("password")){
                
            }
        }
    }
}

const login = document.getElementById("submit-login");
login.onclick = logincheck;