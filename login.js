const usersInfo = [
{username:'user1',password:'password1'}
];


function validateLogin(){
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    
    const enteredUsername = usernameInput.value;
    const enteredPassword = passwordInput.value;

    const user = usersInfo.find(u => u.username === enteredUsername && u.password === enteredPassword);

    if (user){
        alert('Successful login');
    }else{
        alert('invalid username or password')
    }
}
