const addBtn = document.getElementById("addme");

addBtn.addEventListener('click', () => {
    document.getElementById("addprod").classList.add("active");
})

const closeBtn = document.getElementById("addclose");

closeBtn.addEventListener('click', () => {
    document.getElementById("addprod").classList.remove("active");
})



