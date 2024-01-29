let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

document.addEventListener('click', (event) => {
  // Check if the clicked element is the menu button or part of the navigation bar
  const isMenuButton = event.target === menu || menu.contains(event.target);
  const isNavbar = event.target === navbar || navbar.contains(event.target);

  if (isMenuButton) {
    // Toggle menu button and navigation bar
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
  } else if (!isNavbar) {
    // Close menu if clicked outside the menu button and navigation bar
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
  }
});

/*var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    autoheight:true,
    autoWidth:true,
    grabCursor:true,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
*/

  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i ++){
      boxes[i].style.display ='inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
      loadMoreBtn.style.display ='none';
    }
  }





















  

$(function () {

  // TOGGLING THE NAVIGATION MENU FOR SMALL SCREENS
  $(".hamburger-menu").on("click", function () {
    $(".toggle").toggleClass("open");
    $(".nav-list").toggleClass("open");
   
  });


  // ADDING OVERLAY AND THE ADD PRODUCT MODAL
  $(".add-btn").on("click",function(){
    
    $(".overlay").addClass("overlay-show");
    $(".add-product-container").addClass("add-show");
  });v


  // REMOVING OVERLAY AND THE ADD PRODUCT MODAL
  $(".cancel").on("click",function(){
    
    $(".overlay").removeClass("overlay-show");
    $(".add-product-container").removeClass("add-show");
  });

  // // SHOPPING CART

  $(".cart-link").on("click",function(){
    $(".Cart").toggleClass("cart-show");

    
  })

  // DISPLAYING SHOPPING CART AFTER EVERY REFRESH
  setTimeout(function(){
    $(".Cart").addClass("cart-show");
  },100);

  

});



