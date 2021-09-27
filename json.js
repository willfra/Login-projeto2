
audio = document.getElementById('stream');
function play(){
    stream.play();
}
function pause(){
    stream.pause();
}


var hamburguer = document.querySelector(".hamburguer");

hamburguer.addEventListener("click", function () {
    document.querySelector(".menu-lateral").classList.toggle("close-menu");
});