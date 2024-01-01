document.getElementById("mobileMenuButton").addEventListener("click", function () {
    var mobileMenu = document.getElementById("mobileMenu");
    mobileMenu.classList.toggle("hidden");
});

(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        if (all) {
            select(el, all).forEach(e => e.addEventListener(type, listener))
        } else {
            select(el, all).addEventListener(type, listener)
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }


    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function (e) {
        if (select(this.hash)) {
            e.preventDefault()

            let navbar = select('#navbar')
            if (navbar.classList.contains('navbar-mobile')) {
                navbar.classList.remove('navbar-mobile')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash)
            }
        }
    });

    /**
     * Clients Slider
     */
    new Swiper('.clients-slider', {
        speed: 400,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
         breakpoints: {
            320: {
                slidesPerView: 1, spaceBetween: 40
            }, 480: {
                slidesPerView: 3, spaceBetween: 60
            }, 640: {
                slidesPerView: 4, spaceBetween: 80
            }, 992: {
                slidesPerView: 6, spaceBetween: 120
            }
        }
    });
    /**
     * Testimonials slider
     */
    var swiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiper = new Swiper(".testimonialSwiper", {
        effect: "coverflow",
        grabCursor: true,

        slidesPerView: "3",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    /**
     * Testimonials slider
     */
    // new Swiper('.testimonials-slider', {
    //     speed: 600, loop: true, autoplay: {
    //         delay: 5000, disableOnInteraction: false
    //     }, slidesPerView: 'auto', pagination: {
    //         el: '.swiper-pagination', type: 'bullets', clickable: true
    //     }, breakpoints: {
    //         320: {
    //             slidesPerView: 1, spaceBetween: 40
    //         },
    //
    //         1200: {
    //             slidesPerView: 3,
    //         }
    //     }
    // });

    /**
     * Animation on scroll
     */
    function aos_init() {
        AOS.init({
            duration: 500, easing: "ease-in-out", once: true, mirror: false
        });
    }

    window.addEventListener('load', () => {
        aos_init();
    });

    /**
     * Initiate Pure Counter
     */
    new PureCounter();


})();



// payment Integration by Rozar Pay

// const paymentStart = () => {
//     console.log("Payment started...");
    

//     let amount = $("#payment_amount").val();

//     console.log(amount);

//     if (amount === "" || amount === null) {
//         alert('Amount is required !!');
//         return;
//     }

  
    

//     $.ajax({
        
//         url: '/student/create_order',
//         data: JSON.stringify({ amount: amount, info: 'order_request' }),
//         contentType: 'application/json',
//         type: 'POST',
//         dataType: 'json',
//         success: function(response) {
//             console.log(response);
//         },
//         error: function(error) {
//             console.log(error);
//             alert("Something went wrong !!");
//         }}
//     )}
    