$(document).ready(function () {
    $(".hamburger").click(function () {
        $(".top-menu").css("right", "0");
    });

    $(".close").click(function () {
        $(".top-menu").css("right", "-100vw");
    });
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
function toggle1() {
    var x = document.getElementById("dd1");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function toggle2() {
    var x = document.getElementById("dd2");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function toggle3() {
    var x = document.getElementById("dd3");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

$(window).scroll(function () {
    if ($(window).scrollTop() >= 80) {
        $(header).addClass("scrolled");
    } else {
        $(header).removeClass("scrolled");
    }
});
