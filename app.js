const regBtn = document.getElementById("register");

regBtn.addEventListener('click', () =>{
  document.getElementById("regform").classList.add('active', 'transition');
})

const logBtn = document.getElementById("login");

logBtn.addEventListener('click', () =>{
  document.getElementById("logon").classList.add('active', 'transition');
})

const switchReg = document.getElementById("switchreg");

switchReg.addEventListener('click', () =>{
  document.getElementById("logon").classList.remove('active', 'transition');
  document.getElementById("regform").classList.add('active', 'transition');
})

const switchLog = document.getElementById("switchlog");

switchlog.addEventListener('click', () =>{
  document.getElementById("regform").classList.remove('active', 'transition');
  document.getElementById("logon").classList.add('active', 'transition');
})