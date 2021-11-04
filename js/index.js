var ScrollTop = 0;
navbar =  document.getElementById("navbar");
window.addEventListener("scroll", function(){
var scrollTop = window.pageYOffset || document
.documentElement.scrollTop;
if (scrollTop){
navbar.style.top="-150px";

} else {
navbar.style.top="0";
}
})


/* menu responsivel */
let show = true;

const menuSection = document.querySelector(".menu-section")
const menuToggle = menuSection.querySelector(".menu-toggle")

menuToggle.addEventListener("click", () => {
    
    document.body.style.overflow = show ? "hidden" : "initial"
    
    menuSection.classList.toggle("on", show)
    show = !show;
})

/*login dropdown*/
var button = document.getElementById("action-btn");

button.addEventListener("click", function() {
    var container = document.getElementById("container");

    container.classList.toggle("hide");
});


// external js: flickity.pkgd.js

var flkty = new Flickity( '.carousel', {
    groupCells: true
  });
  
  var buttonGroup = document.querySelector('.button-group');
  var buttons = buttonGroup.querySelectorAll('.button');
  buttons = fizzyUIUtils.makeArray( buttons );
  
  buttonGroup.addEventListener( 'click', function( event ) {
    // filter for button clicks
    if ( !matchesSelector( event.target, '.button' ) ) {
      return;
    }
    var index = buttons.indexOf( event.target );
    flkty.selectCell( index );
  });
  

