const menu = document.querySelector('.menu');
const icon = document.querySelector('.icon');

icon.addEventListener('click', function () {
  menu.classList.toggle('isactive');
})