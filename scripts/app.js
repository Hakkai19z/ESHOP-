const menu= document.querySelector('.menu');
const burger = document.querySelector('.burger-menu');
const close= document.querySelector('.close-menu');

burger.addEventListener('click', () => {
    menu.classList.toggle('open');
    });

close.addEventListener('click', () => {
    menu.classList.remove('open');
    }
    );

console.log('Js is working');



