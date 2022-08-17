/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
let nbPersonnes = document.getElementById('nbPersonnes');

let btnPlus = document.getElementById('plus');
let btnMoins = document.getElementById('moins');

btnPlus.addEventListener("click", function(){
    (nbPersonnes.innerHTML < 50) ? nbPersonnes.innerHTML++ : nbPersonnes.innerHTML = 50;
});

btnMoins.addEventListener("click", function(){
    (nbPersonnes.innerHTML > 0) ? nbPersonnes.innerHTML-- : nbPersonnes.innerHTML = 0;
});



