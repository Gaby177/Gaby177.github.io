
/*------------------Scroll Reveal-------------------------
ScrollReveal({
  origin: 'top',
  distance: '50px',
  duration: 1000,
  reset: true
})

ScrollReveal().reveal('.center-text',{delay:200, origin: 'bottom'});

ScrollReveal().reveal('.home',{delay:400, origin: 'top'});

ScrollReveal().reveal('.box',{delay:400, origin: 'bottom'});

ScrollReveal().reveal('#hero-carousel',{delay:400, origin: 'bottom'});

ScrollReveal().reveal('.menu-content',{delay:400, origin: 'bottom'});

ScrollReveal().reveal('.despre',{delay:400, origin: 'bottom'});

ScrollReveal().reveal('.subscribe',{delay:400, origin: 'bottom'});
*/




/*------------------Slidere Menu-------------------------*/
let left = document.getElementsByClassName('bxs-left-arrow');
let right = document.getElementsByClassName('bxs-right-arrow');
let cards1 = document.getElementsByClassName('cards')[0];
let cards2 = document.getElementsByClassName('cards')[1];
let cards3 = document.getElementsByClassName('cards')[2];


function scrollToCardLeft() {
   cards1.scrollLeft -= 450;
   cards2.scrollLeft -= 450;
   cards3.scrollLeft -= 450;
  }

function scrollToCardRight() {
   cards1.scrollLeft += 450;
   cards2.scrollLeft += 450;
   cards3.scrollLeft += 450;
  }


/*------------------Schimba Taburi Menu------------------------*/
function openTab(evt, tabName) {

  var tablinks = document.getElementsByClassName("tablinks");
 
  for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }

  evt.currentTarget.classList.add("active");
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tab");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }


/*------------------Modal------------------------*/
var modalBtns = document.querySelectorAll(".modal-open");

modalBtns.forEach(function(btn) {
  btn.onclick = function() {
    var modal = btn.getAttribute("data-modal");

    document.getElementById(modal).style.display = "block";
  };
});

var closeBtns  = document.querySelectorAll('.modal-close');

closeBtns.forEach(function(btn) {
  btn.onclick = function() {
    var modal = (btn.closest(".modal").style.display = "none");
  };
});

window.onclick = function(e) {
  if (e.target.className === "modal") {
    e.target.style.display = "none";
  }
};






var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };
  
  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];
  
    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }
  
    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
    var that = this;
    var delta = 300 - Math.random() * 100;
  
    if (this.isDeleting) { delta /= 2; }
  
    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }
  
    setTimeout(function() {
      that.tick();
    }, delta);
  };
  
  window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.10em solid #fff }";
    document.body.appendChild(css);
  };


  
  $('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div>').css({
        background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'160%', height:'160%',
        position:'fixed',
        zIndex:'10000',
        top:'-200', left:'-110',
        cursor: 'zoom-out',
        transform: 'rotate(90deg)'

    }).click(function(){
        $(this).remove();
    }).appendTo('body');
});
  