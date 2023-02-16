function login(event){
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    if (username === "hello"  && password === "world"){
        window.open("index.html","_self")
        console.log("hello")
    }
};

const button = document.getElementById("submit");
button.onclick = login;