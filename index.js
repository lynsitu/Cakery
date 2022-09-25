var express = require("express");
var http = require("http");
var path = require("path");
var nodemailer = require("nodemailer")

var app = express();
var server = http.Server(app);
var port = 500;

app.Set("port",port);
app.use(express.json());
app.use(express.urlencoded({extended:true}));
app.use(express.static(path.join(__dirname, "static")));

//Routing
app.get("/", function(req, response){
  response.sendFile(path.join(__dirname, "Contact.html"))
})

app.post("/send_email", function(req,response){
  var firstName = req.body.firstName;
  var lastName = req.body.lastName;
  var email = req.body.email;
  var message = req.body.message;

  var transporter
    service: 'gmail'
    auth:{
      user: 'lynsrealtor@gmail.com'
      password:xxxx
    }
  });

  var mailOptions = {
    firstName: firstName,
    lastName: lastName,
    email: email,
    text: message 
  };

  transporter.sendMail(mailOptions, function(error, info){
    if (error) {
      console.log(error)
    } else {
      console.log("Email Sent" + info.response)
    }

    reponse.redirect("/")
  })


// Initialize Web Server
server.listen(port, function(){
  console.log("starting server on port " + port)
})
console.clear



// Contact Page
window.addEventListener("DOMContentLoaded", function () {
  // get the form elements defined in your form HTML above

  var form = document.getElementById("my-form");
  // var button = document.getElementById("my-form-button");
  var status = document.getElementById("status");

  // Success and Error functions for after the form is submitted

  function success() {
    form.reset();
    status.classList.add("success");
    status.innerHTML = "Thanks!";
  }

  function error() {
    status.classList.add("error");
    status.innerHTML = "Oops! There was a problem.";
  }

  // handle the form submission event

  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    var data = new FormData(form);
    ajax(form.method, form.action, data, success, error);
  });
});

// helper function for sending an AJAX request

function ajax(method, url, data, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
}