<script>
/* Small JS only to simulate step transitions and validation.
   This is minimal and safe for demo purposes. */

function goToPassword(){
  const emailInput = document.getElementById('email');
  const email = emailInput.value.trim();
  const err = document.getElementById('emailError');
  err.style.display = 'none';

  // Simple validation
  if(!email || !/.+@.+\..+/.test(email)){
    err.textContent = 'Please enter a valid email address.';
    err.style.display = 'block';
    emailInput.focus();
    return false;
  }

  // Populate the password card with the email
  document.getElementById('whoMail').textContent = email;
  // Set avatar initial
  const initial = email.charAt(0).toUpperCase();
  document.getElementById('avatarLetter').textContent = initial;
  document.getElementById('whoName').textContent = email.split('@')[0];

  document.getElementById('step-email').style.display = 'none';
  document.getElementById('step-password').style.display = 'block';
  document.getElementById('password').focus();
  return false;
}

function backToEmail(){
  document.getElementById('step-password').style.display = 'none';
  document.getElementById('step-email').style.display = 'block';
  document.getElementById('email').focus();
}

function signIn(){
  const pw = document.getElementById('password').value;
  const err = document.getElementById('pwError');
  err.style.display = 'none';
  if(!pw || pw.length < 4){ // demo rule
    err.textContent = 'Incorrect password. Try again.';
    err.style.display = 'block';
    document.getElementById('password').focus();
    return false;
  }

  // Demo success - in a real app you'd send credentials to your server
  alert('Signed in (demo) - replace with real auth flow for production.');
  return false;
}
</script>