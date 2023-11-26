function validateForm(){

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
else
    alert('Sign up successful');
usersInfo.push({username:email,password:password});
const csvData = '${firstname},${lastname},${email},${password}\n';

    fetch('http://localhost:3000/usersInfo.csv',{
        method:'POST',
        headers:{'Content-Type':'taxt/csv'},
        body: csvData,
    })
.then(response => {console.log(response);})
.catch(error => {console.error('Error:',error);
});
}
