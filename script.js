
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

ScrollReveal().reveal('.subscribe',{delay:400, origin: 'bottom'});*/




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



/*---------------------- Shopping Cart ---------------------------*/
var cart = {};
// Function to add a pizza item to the cart
function addToCart(button) {
  var card = button.parentNode;
  var pizzaName = card.querySelector('h5').textContent;
  var pizzaPrice = parseFloat(card.querySelector('h4').textContent);
  var pizzaImageSrc = card.querySelector('img').src;

  if (cart.hasOwnProperty(pizzaName)) {
    cart[pizzaName].quantity++;
  } else {
    cart[pizzaName] = {
      price: pizzaPrice,
      quantity: 1,
      imageSrc: pizzaImageSrc
    };
  }

  updateCart();
}
// Function to update the cart HTML
function updateCart() {
  var cartItems = document.getElementById('cart-items');
  var totalPrice = 0.0;

  // Clear the cart items
  cartItems.innerHTML = '';

  // Loop through the cart object and update the HTML
  for (var pizzaName in cart) {
    var pizza = cart[pizzaName];
    var pizzaTotalPrice = pizza.price * pizza.quantity;
    totalPrice += pizzaTotalPrice;

    var cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.innerHTML = `
      <img src="${pizza.imageSrc}" alt="Pizza" width="30px">
      <span>${pizzaName} </span>
      <button class="quantity-btn" onclick="decreaseQuantity('${pizzaName}')">-</button>
      <span>x${pizza.quantity}</span>
      <button class="quantity-btn" onclick="increaseQuantity('${pizzaName}')">+</button>
      <button class="remove-btn" onclick="removeFromCart('${pizzaName}')">Șterge</button>
    `;

    cartItems.appendChild(cartItem);
  }
  // Update the total price
  var totalPriceElement = document.getElementById('total-price');
  totalPriceElement.textContent = totalPrice.toFixed(1);

    // Update the cart count
    var cartCountElement = document.getElementById('cart-count');
    var cartCount = Object.values(cart).reduce((acc, pizza) => acc + pizza.quantity, 0);
    cartCountElement.textContent = cartCount;
    // Toggle visibility of cart icon based on cart count
  var cartIcon = document.getElementById('cart-icon');
  if (cartCount > 0) {
    cartIcon.style.display = 'block';
  } else {
    cartIcon.style.display = 'none';
  }
}

// Function to increase the quantity of a pizza item in the cart
function increaseQuantity(pizzaName) {
  if (cart.hasOwnProperty(pizzaName)) {
    cart[pizzaName].quantity++;
    updateCart();
  }
}

// Function to decrease the quantity of a pizza item in the cart
function decreaseQuantity(pizzaName) {
  if (cart.hasOwnProperty(pizzaName)) {
    if (cart[pizzaName].quantity > 1) {
      cart[pizzaName].quantity--;
    } else {
      delete cart[pizzaName];
    }
    updateCart();
  }
}

// Function to remove a pizza item from the cart
function removeFromCart(pizzaName) {
  if (cart.hasOwnProperty(pizzaName)) {
    delete cart[pizzaName];
    updateCart();
  }
}

// Initialize the cart
updateCart();


