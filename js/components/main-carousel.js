//Acesar o browser
//Pegar HTML todo
//Pegar o botão
//Saber que está clickando o botão
//pegar elements
const btnRigth =window.document.querySelector(".button-arrow.-rigth");
const btnLeft =window.document.querySelector(".button-arrow.-left");
const elements =window.document.querySelector('.elements');
let pixels = 0;


btnRigth.addEventListener("click", function(){
    pixels=pixels+100
    elements.style = `transform: translateX(${pixels}px)`;
})

btnLeft.addEventListener("click", function(){
    pixels=pixels - 100
    elements.style = `transform: translateX(${pixels}px)`;
})