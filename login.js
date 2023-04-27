let postObj = { 
    id: 1,
    title: "What is AJAX", 
    body: "AJAX stands for Asynchronous JavaScript..."
};

function response_action(perser){
    console.log("Du drägige bastard")
    if(perser = "0"){
        document.getElementById("response").innerHTML = "Login failed!Username/Password was wrong";
    }else if(perser = "1"){
        window.open("localhost/variableinput.html","_self")
    }
}

var responses ;
function login_ajax(user_log, pw_log){
    let post = JSON.stringify(postObj)
    const url = "login.php"
    let xhr = new XMLHttpRequest()
    xhr.open('POST',url, true)
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded")
    xhr.send("username="+user_log+"&password="+pw_log);
    xhr.onload = function (){
        if(xhr.status === 201){
            console.log("Post succesfully created!")
            console.log(xhr.response)
            responses = JSON.parse(xhr.response).value
            echo("kajananananananananananananan")
            response_action(responses)
        }
    }
}

function logincheck(event){
    event.preventDefault();
    if(document.getElementById("login-username") != null){
        if(document.getElementById("login-password") != null){
            console.log("good night")
            login_ajax(document.getElementById("login-username").value,document.getElementById("login-password").value)
        };
    };
};


const login = document.getElementById("submit-login");
login.onclick = logincheck;