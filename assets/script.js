const icon = document.querySelector(".burger");
const list = document.querySelector(".nav-list-mobile");

icon.addEventListener("click", function (){
    list.classList.toggle("list-visible");
    console.log(list);
})