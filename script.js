let searchForm=document.querySelector(".search");
document.querySelector("#search-btn").onclick = () =>
{
    searchForm.classList.toggle('active');
}

let shoppingCart=document.querySelector(".log-in");
document.querySelector("#login-btn").onclick = () =>
{
    shoppingCart.classList.toggle('active');
}

let navbar=document.querySelector(".navbar");
document.querySelector("#menu-btn").onclick = () =>
{
    navbar.classList.toggle('active');
}

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay:{
        delay:7500,
        disableOnInteraction:false,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

