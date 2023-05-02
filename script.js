
/*------------------Scroll Reveal-------------------------*/
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




/*------------------Darkmode-------------------------*/

// Check if dark mode is stored in local storage
const isDarkMode = localStorage.getItem('darkMode') === 'true';

if (isDarkMode) {
  darkmode.classList.replace('bx-moon', 'bx-sun');
  document.body.classList.add('dark');
}

darkmode.onclick = () => {
  if (darkmode.classList.contains('bx-moon')) {
    darkmode.classList.replace('bx-moon', 'bx-sun');
    document.body.classList.add('dark');
    localStorage.setItem('darkMode', 'true'); // Store dark mode setting in local storage
  } else {
    darkmode.classList.replace('bx-sun', 'bx-moon');
    document.body.classList.remove('dark');
    localStorage.setItem('darkMode', 'false'); // Store light mode setting in local storage
  }
}


/*------------------Slidere Menu-------------------------*/
let left = document.getElementsByClassName('bxs-left-arrow');
let right = document.getElementsByClassName('bxs-right-arrow');
let cards = document.getElementsByClassName('cards')[2];


function scrollToCardLeft() {
   cards.scrollLeft -= 350;
  }

function scrollToCardRight() {
   cards.scrollLeft += 350;
  }

let left2 = document.getElementsByClassName('bxs-left-arrow');
let right2 = document.getElementsByClassName('bxs-right-arrow');
let cards2 = document.getElementsByClassName('cards')[1];


function scrollToCardLeft() {
   cards2.scrollLeft -= 350;
  }

function scrollToCardRight() {
   cards2.scrollLeft += 350;
  }

  let left3 = document.getElementsByClassName('bxs-left-arrow');
let right3 = document.getElementsByClassName('bxs-right-arrow');
let cards3 = document.getElementsByClassName('cards')[1];


function scrollToCardLeft() {
   cards3.scrollLeft -= 350;
  }

function scrollToCardRight() {
   cards3.scrollLeft += 350;
  }




/* JS pentru scroll icon dar interfereaza cu modal fix!!!!!
$(document).ready(function() {
    $(window).scroll(function() {
      // Get the current scroll position
      var scrollTop = $(window).scrollTop();
      // Get the window height
      var windowHeight = $(window).height();
      // Check if the scroll position is less than half of the window height
      if (scrollTop < windowHeight / 7) {
        // Hide the element with the class "scroll"
        $(".scroll").hide();
      } else {
        // Show the element if it was previously hidden
        $(".scroll").show();
      }
    });
  });

/*------------------Pop up pt. sectiunea de newsletter-------------------------*/
  function subscribe() {
    var email = document.querySelector('.subscribe-input').value;
    //verifica daca este email.
    var regex = /^\S+@\S+\.\S+$/;
    if (email === '') {
        alert('Nu ati introdus e-mail inca!');
    } else if (!regex.test(email)) {
        alert('E-mail invalid. Va rugam introduceti un email valid!');
        document.querySelector('.subscribe-input').value = '';
    } else {
        alert('Va multumim pentru abonare!');
        document.querySelector('.subscribe-input').value = '';
    }
}

/*------------------Schimba Taburi menu------------------------*/
function openTab(evt, tabName) {
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



/*------------------Schimba poza de pizza de la comanda------------------------*/
const pizzaSelect = document.getElementById('pizza');
const pizzaImg = document.getElementById('pizza-img');

pizzaSelect.addEventListener('change', function() {
  const pizzaValue = pizzaSelect.value;
  const imagePath = `images/${pizzaValue}.png`;
  pizzaImg.setAttribute('src', imagePath);
});




/*------------------Calculeaza pretul la comanda------------------------*/
const pizzaSizeSelect = document.getElementById("size");
pizzaSizeSelect.addEventListener("change", calculatePrice);

const priceInput = document.getElementById("pret");

const prices = {
  'pizza-pui': {
    mini: 21,
    clasic: 27,
    party: 75,
    menuL: 32,
    menuXL: 37,
    menuXXL: 42,
    menuXXXL: 55,
    menuPasta: 35
  },
  'pizza-quattro': {
    mini: 22,
    clasic: 28,
    party: 85,
    menuL: 32,
    menuXL: 37,
    menuXXL: 42,
    menuXXXL: 52,
    menuPasta: 42
  },
  'pizza-veggy': {
    mini: 18,
    clasic: 25,
    party: 70,
    menuL: 28,
    menuXL: 33,
    menuXXL: 38,
    menuXXXL: 48,
    menuPasta: 38
  },
  'pizza-casei': {
    mini: 18,
    clasic: 26,
    party: 75,
    menuL: 28,
    menuXL: 33,
    menuXXL: 38,
    menuXXXL: 48,
    menuPasta: 38
  },
  'pizza-margherita': {
    mini: 15,
    clasic: 23,
    party: 65,
    menuL: 25,
    menuXL: 30,
    menuXXL: 35,
    menuXXXL: 45,
    menuPasta: 35
  },
  'pizza-peperonni': {
    mini: 19,
    clasic: 25,
    party: 81,
    menuL: 30,
    menuXL: 35,
    menuXXL: 40,
    menuXXXL: 50,
    menuPasta: 40
  },
  'pizza-carbonara': {
    mini: 19,
    clasic: 25,
    party: 82,
    menuL: 32,
    menuXL: 37,
    menuXXL: 42,
    menuXXXL: 52,
    menuPasta: 42
  },
  'pizza-carni': {
    mini: 21,
    clasic: 27,
    party: 85,
    menuL: 35,
    menuXL: 40,
    menuXXL: 45,
    menuXXXL: 55,
    menuPasta: 45
  },
  'pizza-ciuperci': {
    mini: 20,
    clasic: 26,
    party: 78,
    menuL: 28,
    menuXL: 33,
    menuXXL: 38,
    menuXXXL: 48,
    menuPasta: 38
  },
  'pizza-ton': {
    mini: 18,
    clasic: 25,
    party: 80,
    menuL: 30,
    menuXL: 35,
    menuXXL: 40,
    menuXXXL: 50,
    menuPasta: 40
  },
  'pizza-cheese': {
    mini: 19,
    clasic: 26,
    party: 83,
    menuL: 25,
    menuXL: 30,
    menuXXL: 35,
    menuXXXL: 45,
    menuPasta: 35
  },
  'pizza-deliciosa': {
    mini: 21,
    clasic: 27,
    party: 70,
    menuL: 25,
    menuXL: 30,
    menuXXL: 35,
    menuXXXL: 45,
    menuPasta: 35
  }


};

const quantity = document.getElementById('cantitate');

// Define a function to calculate the price based on the selected pizza, size and quantity
function calculatePrice() {
const selectedPizza = pizza.value;
const selectedSize = size.value;
const quantity = cantitate.value;

const pizzaPrice = prices[selectedPizza][selectedSize];
const totalPrice = pizzaPrice * quantity;

priceInput.value = totalPrice.toFixed(2) + ' Lei';
}
// Add an event listener to the pizza and size select elements to recalculate the price on change
pizza.addEventListener('change', calculatePrice);
size.addEventListener('change', calculatePrice);
cantitate.addEventListener('change', calculatePrice);





/*------------------card scroll   merge greu!!!!------------------------*/

// Get the container element that holds the cards
const container = document.querySelector('.cards');
let isDown = false;
let startX;
let scrollLeft;

// Add event listeners to track mouse movements
container.addEventListener('mousedown', (e) => {
  isDown = true;
  container.classList.add('active');
  startX = e.pageX - container.offsetLeft;
  scrollLeft = container.scrollLeft;
});

container.addEventListener('mouseleave',() => {
  isDown = false;
  container.classList.remove('active');
})

container.addEventListener('mouseup', () => {
  isDown = false;
  container.classList.remove('active');
});

container.addEventListener('mousemove', (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - container.offsetLeft;
  const walk = (x - startX) * 2; // Change the "3" to adjust the scroll speed
  container.scrollLeft = scrollLeft - walk;
});



