let postObj = { 
    id: 1,
    title: "What is AJAX", 
    body: "AJAX stands for Asynchronous JavaScript..."
}

function variable_ajax(income,rent,food,freetime,clothes,hygiene,others) {
    let post = JSON.stringify(postObj)
    const url = "registration.php"
    let xhr = new XMLHttpRequest()
    xhr.open('POST', url, true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send("income="+income+"&rent="+rent+"&food="+food+"&freetime="+freetime+"&clothes"+clothes+"&hygiene"+hygiene+"&others"+others);
    xhr.onload = function () {
        if(xhr.status === 201) {
            console.log("Post successfully created!")
        }
    }
}

function variableinput(event){
    event.preventDefault();
    variable_ajax(document.getElementById("income"),document.getElementById("rent"),document.getElementById("food"),document.getElementById("freetime"),document.getElementById("clothes"),document.getElementById("Hygiene Articles"),document.getElementById("Others"))
};

const button = document.getElementById("variablesend");
button.onclick = variableinput;