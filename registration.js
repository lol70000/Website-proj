let postObj = { 
    id: 1,
    title: "What is AJAX", 
    body: "AJAX stands for Asynchronous JavaScript..."
}

function registration_ajax(usern, passw) {
    let post = JSON.stringify(postObj)
    const url = "registration.php"
    let xhr = new XMLHttpRequest()
    xhr.open('POST', url, true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhr.send("username="+usern+"&password="+passw);
    xhr.onload = function () {
        if(xhr.status === 201) {
            console.log("Post successfully created!")
        }
    }
}

function registrationcheck(event){
    event.preventDefault();
    if (document.getElementById("username") != null){
        if (document.getElementById("password") != null){
            if (document.getElementById("password_check") != null && document.getElementById("password_check").value === document.getElementById("password").value){
                console.log("hello")
                registration_ajax(document.getElementById("username").value,document.getElementById("password").value)
            };
        };
    };
};

const button = document.getElementById("submit-registration");
button.onclick = registrationcheck;
