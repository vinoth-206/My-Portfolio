function toggleForms(){

    const login = document.getElementById('login-form');
    const signup = document.getElementById('sign-form');
    if(login.style.display !== 'none'){
        login.style.display = 'none';
        signup.style.display = 'block';
    } else {
        login.style.display = 'block';
        signup.style.display = 'none';
    }
}