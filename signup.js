function validateForm(){

    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmpassword = document.getElementById('confirmpassword').value;

if(password!=confirmpassword){
    alert('passwords don\'t match');
}
    if (firstname=='' || lastname=='' || email=='' || password=='')
{
    alert('Please fill all the filds');
}
else{
    alert('Sign up successful');
    var userData={
        firstname: firstname,
        lastname: lastname,
        email:email,
        password:password
    };

    fetch('http://localhost:3000/usersInfo',{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify(userData),
    })
.then(Response => Response.json())
.then(data =>console.log(data))
.catch(error => console.error('Error:',error))
}
}
