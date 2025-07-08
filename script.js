"use strict";

window.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');

    function fixedNavbar() {
        header.classList.toggle('scroll', window.pageYOffset > 0);
    }

    fixedNavbar();
    window.addEventListener('scroll', fixedNavbar);

    const menu = document.querySelector('#menu-btn');
    const userBtn = document.querySelector('#user-btn');

    if (menu) {
        menu.addEventListener('click', function () {
            const nav = document.querySelector('.navbar');
            nav.classList.toggle('active');
        });
    }

    if (userBtn) {
        userBtn.addEventListener('click', function () {
            const userBox = document.querySelector('.user-box');
            userBox.classList.toggle('active');
        });
    }

    // Slider logic
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');
    const slider = document.querySelector('.slider');

    function scrollRight() {
        if (slider.scrollWidth - slider.clientWidth === slider.scrollLeft) {
            slider.scrollTo({
                left: 0,
                behavior: 'smooth'
            });
        } else {
            slider.scrollBy({
                left: window.innerWidth,
                behavior: 'smooth'
            });
        }
    }

    function scrollLeft() {
        slider.scrollBy({
            left: -window.innerWidth,
            behavior: 'smooth'
        });
    }

    let timerId = setInterval(scrollRight, 7000);

    function resetTimer() {
        clearInterval(timerId);
        timerId = setInterval(scrollRight, 7000);
    }

    leftArrow?.addEventListener('click', function () {
        scrollLeft();
        resetTimer();
    });

    rightArrow?.addEventListener('click', function () {
        scrollRight();
        resetTimer();
    });
});
