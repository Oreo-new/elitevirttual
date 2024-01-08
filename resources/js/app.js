import './bootstrap';
import Swiper from 'swiper';

import {EffectFade,  Navigation, Autoplay, Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';
import 'swiper/css/effect-fade';

import AOS from 'aos';
import 'aos/dist/aos.css'; 

AOS.init({
    once: true
});

    const swiper = new Swiper('.swiper', {
        modules:  [EffectFade, Navigation, Autoplay, Pagination],
        autoplay: {
            delay: 5000,
        },
        slidesPerView: 1,
        effect: 'fade',
        loop: true,
        navigation: true,
    });

    const swiper2 = new Swiper('.swiper2', {
        modules:  [Navigation, Autoplay, Pagination],
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: 'swiper-pagination',
            type: 'bullets'
        },
        spaceBetween: 30,
        loop: true,
        navigation: true,
        breakpoints: {
        300: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        },
            
        }
    })
    

    window.addEventListener('scroll', function() {
        var myDiv = document.getElementById('header');
        var mobile = document.getElementById('mobile');

        // Get the vertical scroll position
        var scrollPosition = window.scrollY;
    
        // Adjust the threshold as needed
        var threshold = 200;
    
        // Add or remove the 'highlight' class based on the scroll position
        if (scrollPosition > threshold) {
            myDiv.classList.add('active');
            mobile.classList.add('active');
          } else {
            myDiv.classList.remove('active');
            mobile.classList.remove('active');
          }
      });

       // Smooth scroll function
    function scrollToSection(targetId) {
        var targetSection = document.getElementById(targetId);
        if (targetSection) {
        window.scrollTo({
            top: targetSection.offsetTop - 78,
            behavior: 'smooth'
        });
        }
    }

    var menuLinks = document.querySelectorAll('#header ul li a');
        menuLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
        event.preventDefault();
        var targetId = link.getAttribute('href').substring(1); // Remove the '#'
        scrollToSection(targetId);
        });
    });
    var mobilelinks = document.querySelectorAll('#mobile a');
        mobilelinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
        event.preventDefault();
        var targetId = link.getAttribute('href').substring(1); // Remove the '#'
        scrollToSection(targetId);
        });
    });

    var toggleButton = document.querySelectorAll('#blog button.blog-modal');
        // Add an event listener to the button
        toggleButton.forEach(function(link) {
            link.addEventListener('click', function() {
            // Get a reference to the body element
            var body = document.body;
            // Toggle the 'body-class' class on the body
            body.classList.toggle('stop');
        });
    });
    
    var toggleButton2 = document.getElementById('toggleBody');
    // Add an event listener to the button
    
    toggleButton2.addEventListener('click', function() {
        // Get a reference to the body element
        
        var body = document.body;
        // Toggle the 'body-class' class on the body
        body.classList.toggle('stop2');
        console.log(body)
    });