    document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".porperty-slider");
    const slides = document.querySelectorAll(
        ".product-cart, .product-cart-1, .product-cart-2"
    );
    let index = 0;

    function showSlide(n) {
        if (n >= slides.length) {
        index = 0;
        } else if (n < 0) {
        index = slides.length - 1;
        } else {
        index = n;
        }
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    document.querySelector(".prev-button").addEventListener("click", function () {
        showSlide(index - 1);
    });

    document.querySelector(".next-button").addEventListener("click", function () {
        showSlide(index + 1);
    });

    setInterval(() => {
        showSlide(index + 1);
    }, 3000);
    });

const slider = document.querySelector(".property-slider");
const sliderLeft = document.querySelector(".slider-button-left");
const sliderRight = document.querySelector(".slider-button-right");
let currentSlide = 0;
const slideWidth = document.querySelector(".product-card").offsetWidth + 10;
const totalSlides = document.querySelectorAll(".product-card").length;

sliderRight.addEventListener("click", () => {
  if (currentSlide < totalSlides - 2) {
    currentSlide += 2;
    slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
  }
});

sliderLeft.addEventListener("click", () => {
  if (currentSlide > 0) {
    currentSlide -= 2;
    slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
  }
});

$("#property").on("input", function () {
  var query = $(this).val();
  if (query != "") {
    $.ajax({
      url: "search.php",
      method: "POST",
      data: {
        query: query,
      },
      success: function (data) {
        $("#search-result").fadeIn();
        $("#search-result").html(data);
      },
    });
  } else {
    $("#search-resul").fadeOut();
  }
});

function findProperty() {
  var propertyType = document.getElementById("pt").value;
  var budget = document.getElementById("budget").value;
  var location = document.getElementById("location").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "search_property.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = function () {
    if (this.status == 200) {
      document.getElementById("results").innerHTML = this.responseText;
    }
  };
  xhr.send(
    "pt=" + propertyType + "&budget=" + budget + "&location=" + location
  );
}

