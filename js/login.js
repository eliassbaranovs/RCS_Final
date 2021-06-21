const registerBtn = document.getElementById("register");
const logBtn = document.getElementById("login");
const closeBtn = document.getElementById("closebtn");
const closeBtn2 = document.getElementById("closebtn2");


registerBtn.addEventListener('click', () => {
    document.getElementById("regform").classList.add("active");
})

logBtn.addEventListener('click', () => {
    document.getElementById("loginform").classList.add("active");
})

closeBtn.addEventListener('click', () => {
    document.getElementById("regform").classList.remove("active");
})

closeBtn2.addEventListener('click', () => {
    document.getElementById("loginform").classList.remove("active");
})

