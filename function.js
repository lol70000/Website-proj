let postObj = { 
    id: 1,
    title: "What is AJAX", 
    body: "AJAX stands for Asynchronous JavaScript..."
}


function recent(datasetl,datasetr){

}

const hello = 0
output_ajax(hello)

function response_action(data){
    const datspl = data.split(",")
    const output = datspl[0]
    const input = datspl[1]
    makechart(input,output)
}

function makechart(dataset1,dataset2){
    var xValues=[10,20,30,40,50,60,70]

    new Chart("income",{
        type: "line",
        data:{
            labels: xValues,
            datasets:[{
                fill:false,
                backgroundColor:"rgb(22,144,148)",
                borderColor:"rgb(22,144,148)",
                data: dataset1
            }]
        },
        options:{
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 0, max:100}}],
            }
        },
    })

    new Chart("outcome",{
        type: "line",
        data:{
            labels: xValues,
            datasets:[{
                fill:false,
                backgroundColor:"rgb(22,144,148)",
                borderColor:"rgb(22,144,148)",
                data: dataset2
            }]
        },
        options:{
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 0, max:100}}],
            }
        },
    })
    recent(dataset1,dataset2)
}

function output_ajax(out) {
    let post = JSON.stringify(postObj)
    const url = "registration.php"
    let xhr = new XMLHttpRequest()
    xhr.open('POST', url, true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send("output"+out);
    xhr.onload = function () {
        if(xhr.status === 201) {
            console.log("Post successfully created!")
            console.log(xhr.response)
            responses = JSON.parse(xhr.response)
            response_action(responses)
        }
    }
}

function recent(datasetl,datasetr){
    lengthr = datasetr.length()
    lengthl = datasetl.length()
    document.getElementById("one").innerHTML = datasetr[lengthr -1]
    document.getElementById("two").innerHTML = datasetl[lengthl -1]
}