const switchButton = document.querySelector('.switch-button');
const body = document.querySelector('body');

switchButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
});
const navbar = document.querySelector('.navbar');

navbar.addEventListener('click', (event) => {
  
    if (event.target.classList.contains('nav-item')) {
     
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach((item) => {
            item.classList.remove('active');
        });

     
        event.target.classList.add('active');
    }
});