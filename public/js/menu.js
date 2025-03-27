const menuIcon = document.querySelector('#menu-icon');
const menuList = document.querySelector('#menu-list');
const menuBg = document.querySelector('#menu-bg');
const body = document.querySelector('body');

window.addEventListener('load', () => {
    let vwidth = window.innerWidth;

    menuIcon.addEventListener('click', () => {
        if (menuList.style.display == 'none') {
            menuList.style.display = 'block';
            menuBg.style.display = 'block';
            body.style.overflow = 'hidden';
        } else {
            menuList.style.display = 'none';
            menuBg.style.display = 'none';
            body.style.overflow = 'auto';
        }
    });

    if (vwidth < 992){
        menuList.style.display = 'none';
        menuBg.style.display = 'none';
    }

    menuBg.addEventListener('click', () => {
        menuList.style.display = 'none';
        menuBg.style.display = 'none';
    });
});

window.addEventListener('resize', () => {
    let vwidth = window.innerWidth;

    if (vwidth >= 992){
        menuList.style.display = "block";
        menuBg.style.display = "none";
    } else {
        menuList.style.display = "none";
        menuBg.style.display = "none";
    }
})

window.addEventListener('scroll', () => {
    const menu = document.querySelector('nav');
    const menuList = document.querySelector('#menu-list ul');
    const logo = document.querySelector('.right');
    let vwidth = window.innerWidth;

    if (window.scrollY > 5) {
        menu.style.backgroundColor = 'var(--logo-violeta)';
        menu.style.boxShadow = '2px 1px 15px #00000068';
        menuList.style.border = 'none';
        logo.style.border = 'none';

    } else {
        if (vwidth >= 992){
            menu.style.backgroundColor = 'transparent';
            menuList.style.borderBottom = '1px solid white';
            logo.style.borderBottom = '1px solid white';
        }
        menu.style.boxShadow = 'none';
    }
    
});