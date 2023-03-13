let container = document.getElementById("container");
document.getElementById("body").style.overflow = "hidden";
window.addEventListener('load', () => {
    document.getElementById("body").style.overflow = "scroll";
    document.getElementById("body").style.overflowX = "hidden";
    container.style.display = "none";
})
let mybutton = document.getElementById("myBtn");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}