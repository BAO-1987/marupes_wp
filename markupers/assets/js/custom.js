'use strict';
document.addEventListener('DOMContentLoaded', function(){
    const dropdownButtons = document.querySelectorAll(".nav__list > li.link-dropdown > a");

    for (let dropdownBtn of dropdownButtons){
        dropdownBtn.removeAttribute("href");
    }
});