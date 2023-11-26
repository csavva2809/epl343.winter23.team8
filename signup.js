function signup(){

    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmpassword = document.getElementById('confirmpassword').value;

if(password!=confirmpassword){
    alert('passwords don\'t match');
}
    else if (firstname=='' || lastname=='' || email=='' || password=='')
{
    alert('Please fill all the filds');
}
else{
    //objects for server
    var userInfo={firstname:firstname,lastname:lastname,email:email,password:password};

    fetch('/signup',{method:'POST',headers:{'Content-Type':'application/json',},body:JSON.stringify(userInfo),})
    .then(response => response.json())
    .then(data => {alert(data.message);})
    .catch((error) => {console.error('Error',error);
});

};
}
