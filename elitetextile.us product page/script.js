$(document).ready(function () {
  $(".color-options input").on("change", function () {
    var selectedColor = $(this).attr("data-image");

    // Remove 'active' class from all images
    $(".image-column img").removeClass("active");

    // Add 'active' class to the selected image
    $('.image-column img[data-image="' + selectedColor + '"]').addClass(
      "active"
    );

    // Highlight the selected radio button
    $(".color-options input").removeClass("active");
    $(this).addClass("active");
  });
});

const colorInputs = document.querySelectorAll('input[name="color"]');
const selectedColorText = document.getElementById("selected-color");

colorInputs.forEach((input) => {
  input.addEventListener("change", () => {
    const colorName = input.value;
    selectedColorText.textContent = `Color: ${
      colorName.charAt(0).toUpperCase() + colorName.slice(1)
    }`;
  });
});

function showChart(chartId) {
  // Remove "active" class from all tabs
  document
    .querySelectorAll(".custom-tabs li")
    .forEach((tab) => tab.classList.remove("active"));
  // Remove "active" class from all charts
  document
    .querySelectorAll(".custom-chart")
    .forEach((chart) => chart.classList.remove("active"));
  // Add "active" class to the clicked tab
  document
    .querySelector(`.custom-tabs li[onclick="showChart('${chartId}')"]`)
    .classList.add("active");
  // Add "active" class to the respective chart
  document.getElementById(chartId).classList.add("active");
}

function handleSizeSelection(radio) {
  const clearButton = document.querySelector(".product-clear-button");
  const selectedSizeDisplay = document.getElementById("selectedSize");

  // Show clear button and selected size near "Length"
  clearButton.style.display = "block";
  selectedSizeDisplay.style.display = "inline";
  selectedSizeDisplay.textContent = `: ${radio.value}`;
}

function clearSelection() {
  const clearButton = document.querySelector(".product-clear-button");
  const selectedSizeDisplay = document.getElementById("selectedSize");
  const radios = document.querySelectorAll('input[name="product-size"]');

  // Clear all radio buttons
  radios.forEach((radio) => {
    radio.checked = false;
  });

  // Hide clear button and selected size
  clearButton.style.display = "none";
  selectedSizeDisplay.style.display = "none";
  selectedSizeDisplay.textContent = "";
}

// ✅ Set "M" as the default selection on page load
document.addEventListener("DOMContentLoaded", function () {
  const defaultSize = document.querySelector('input[name="product-size"][value="M"]');
  if (defaultSize) {
    defaultSize.checked = true;
    handleSizeSelection(defaultSize); // Trigger function to update UI
  }
});

// const decreaseQuantity = document.getElementById('decreaseQuantity');
// const increaseQuantity = document.getElementById('increaseQuantity');
// const quantityInput = document.getElementById('quantityInput');

// decreaseQuantity.addEventListener('click', () => {
//   const currentValue = parseInt(quantityInput.value);
//   if (currentValue > 1) {
//     quantityInput.value = currentValue - 1;
//   }
// });

// increaseQuantity.addEventListener('click', () => {
//   const currentValue = parseInt(quantityInput.value);
//   quantityInput.value = currentValue + 1;
// });

$(document).ready(function () {
  // Hover effect on thumbnails
  $(".slideshow-thumbnails").hover(function () {
    changeSlide($(this));
  });

  // Mousemove event for zoom effect
  $(document).mousemove(function (e) {
    var x = e.pageX;
    var y = e.pageY;

    var img = $(".slideshow-items.active");
    var imgx1 = img.offset().left;
    var imgx2 = img.outerWidth() + imgx1;
    var imgy1 = img.offset().top;
    var imgy2 = img.outerHeight() + imgy1;

    if (x > imgx1 && x < imgx2 && y > imgy1 && y < imgy2) {
      $("#lens").show();
      $("#result").show();
      imageZoom(img, $("#result"), $("#lens"), e);
    } else {
      $("#lens").hide();
      $("#result").hide();
    }
  });
});

function imageZoom(img, result, lens, e) {
  // Set result and lens sizes based on image
  result.width(img.innerWidth());
  result.height(img.innerHeight());
  lens.width(img.innerWidth() / 2.5); // Adjust lens size (e.g., 1/3 of the image width)
  lens.height(img.innerHeight() / 2.5);

  // Position result directly on top of the image
  result.offset({ top: img.offset().top, left: img.offset().left });

  var cx = img.innerWidth() / lens.innerWidth();
  var cy = img.innerHeight() / lens.innerHeight();

  // Ensure the result background image is the active image
  result.css("backgroundImage", "url(" + img.attr("src") + ")");
  result.css(
    "backgroundSize",
    img.width() * cx + "px " + img.height() * cy + "px"
  );

  moveLens(e, img, lens, result, cx, cy);
}

function moveLens(e, img, lens, result, cx, cy) {
  // Calculate the mouse position relative to the image
  var x = e.pageX - img.offset().left - lens.width() / 11;
  var y = e.pageY - img.offset().top - lens.height() / 11;

  // Ensure lens stays within the boundaries of the image
  if (x > img.outerWidth() + img.offset().left - lens.width()) {
    x = img.outerWidth() + img.offset().left - lens.width();
  }
  if (x < img.offset().left) {
    x = img.offset().left;
  }
  if (y > img.outerHeight() + img.offset().top - lens.height()) {
    y = img.outerHeight() + img.offset().top - lens.height();
  }
  if (y < img.offset().top) {
    y = img.offset().top;
  }

  // Move lens and update the result's background position
  lens.offset({ top: y, left: x });
  result.css(
    "backgroundPosition",
    "-" +
      (x - img.offset().left) * cx +
      "px -" +
      (y - img.offset().top) * cy +
      "px"
  );
}

function changeSlide(elm) {
  $(".slideshow-items").removeClass("active");
  $(".slideshow-items").eq(elm.index()).addClass("active");
  $(".slideshow-thumbnails").removeClass("active");
  $(".slideshow-thumbnails").eq(elm.index()).addClass("active");
}

// // Toggle promo code input
// document.querySelector('.promo-toggle').addEventListener('click', () => {
//   const promoInput = document.querySelector('.promo-code-input');
//   promoInput.style.display = promoInput.style.display === 'block' ? 'none' : 'block';
// });

// // Increase/Decrease Quantity
// document.querySelectorAll('.quantity-btn').forEach((btn) => {
//   btn.addEventListener('click', function () {
//     const quantityElement = this.parentElement.querySelector('.quantity');
//     let quantity = parseInt(quantityElement.textContent, 10);
//     quantity = this.textContent === '+' ? quantity + 1 : Math.max(1, quantity - 1);
//     quantityElement.textContent = quantity;

//     // Update cart totals after quantity change
//     updateCart();
//   });
// });

// // Define cart variables
// const cartModal = document.getElementById('cartModal');
// const closeCartButton = document.getElementById('closeCart');
// const cartItemsContainer = document.getElementById('cartItems');
// const cartTotalElement = document.getElementById('cartTotal');
// const originalTotalElement = document.getElementById('originalTotal');
// const cartItemCountElement = document.getElementById('cartItemCount');
// let cart = [];

// // Define images for each color option
// const colorImages = {
//   white: 'image/white-21.jpg',
//   black: 'image/black-24.jpg',
//   blue: 'image/blue-23.jpg',
//   green: 'image/green-22.jpg',
//   yellow: 'image/yellow-19.jpg',
//   orange: 'image/orange-22.jpg',
//   purple: 'image/purple-22.jpg',
//   pink: 'image/pink-21.jpg',
//   grey: 'image/gray-20.jpg',
//   brown: 'image/brwon.jpg',
//   cyan: 'image/cyan-12.jpg',
//   red: 'image/red-20.jpg',
// };

// // Load cart from localStorage if available
// const savedCart = localStorage.getItem('cart');
// if (savedCart) {
//   cart = JSON.parse(savedCart);
//   updateCart();
// }

// // Open cart modal
// document.getElementById('addToCart').addEventListener('click', function () {
//   // Collect product details
//   const selectedColor = document.querySelector('input[name="color"]:checked');
//   const color = selectedColor ? selectedColor.value : null;

//   const selectedSize = document.querySelector('input[name="product-size"]:checked');
//   const size = selectedSize ? selectedSize.value : null;

//   const quantity = parseInt(document.getElementById('quantityInput').value, 10) || 1;

//   const customizeNote = document.getElementById('customizeNote').value;

//   const productTitle = document.querySelector('.product-title').innerText;
//   const productPrice = parseFloat(document.querySelector('.prices').textContent.replace('$', '')) || 0;

//   // Validation: Ensure color and size are selected
//   if (!color || !size) {
//     alert('Please select both color and size before adding to the cart.');
//     return;
//   }

//   // Use the color to fetch the correct image URL
//   const productImage = colorImages[color] || 'image/default-placeholder.jpg'; // Fallback image

//   // Add item to cart
//   const cartItem = {
//     title: productTitle,
//     price: productPrice,
//     color,
//     size,
//     quantity,
//     note: customizeNote,
//     image: productImage,
//   };
//   cart.push(cartItem);

//   // Update modal content
//   updateCart();

//   // Show cart modal
//   cartModal.classList.add('show');
// });

// // Close cart modal
// closeCartButton.addEventListener('click', function () {
//   cartModal.classList.remove('show');
// });

// // Update cart content
// function updateCart() {
//   if (cart.length === 0) {
//     cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
//     cartTotalElement.textContent = '$0.00';
//     originalTotalElement.textContent = '$0.00';
//     cartItemCountElement.textContent = '0 items';
//     localStorage.setItem('cart', JSON.stringify(cart)); // Save empty cart
//     return;
//   }

//   // Build cart items HTML
//   let cartHTML = '';
//   let total = 0;
//   let originalTotal = 0;
//   let itemCount = 0;

//   cart.forEach((item, index) => {
//     const itemTotal = item.price * item.quantity;
//     const originalPrice = item.price / 0.58; // Example discount factor
//     const originalItemTotal = originalPrice * item.quantity;

//     total += itemTotal;
//     originalTotal += originalItemTotal;
//     itemCount += item.quantity;

//     cartHTML += `
//       <div class="cart-item">
//         <img src="${item.image}" alt="${item.title}" class="cart-item-image" />
//         <div class="cart-item-details">
//           <p><strong>${item.title}</strong></p>
//           <p>Color: ${item.color}</p>
//           <p>Size: ${item.size}</p>
//           <p>Quantity: ${item.quantity}</p>
//           <p>Note: ${item.note}</p>
//           <p>Price: $${itemTotal.toFixed(2)}</p>
//         </div>
//         <button class="remove-item" data-index="${index}">Remove</button>
//       </div>
//     `;
//   });

//   cartItemsContainer.innerHTML = cartHTML;
//   cartTotalElement.textContent = `$${total.toFixed(2)}`;
//   originalTotalElement.textContent = `$${originalTotal.toFixed(2)}`;
//   cartItemCountElement.textContent = `${itemCount} items`;

//   // Save cart to localStorage
//   localStorage.setItem('cart', JSON.stringify(cart));

//   // Add event listeners to remove buttons
//   document.querySelectorAll('.remove-item').forEach(button => {
//     button.addEventListener('click', function () {
//       const index = parseInt(this.dataset.index, 10);
//       cart.splice(index, 1);
//       updateCart();
//     });
//   });
// }
const quantityInput = document.getElementById("quantity");
const incrementBtn = document.getElementById("increment");
const decrementBtn = document.getElementById("decrement");
const addToCartBtn = document.getElementById("addToCart");
const viewCartBtn = document.getElementById("viewCart"); // New "View Cart" button
const cartDrawer = document.getElementById("cartDrawer");
const cartItems = document.getElementById("cartItem");
const subtotalElement = document.getElementById("subtotal");
const productTitle = document.querySelector(".product-title").textContent;
const productPrice = 29; // Base price of the product
let cart = []; // To store cart items

// Initially hide the "View Cart" button
viewCartBtn.style.display = "none";

// Add to Cart functionality
addToCartBtn.addEventListener("click", (e) => {
  e.stopPropagation(); // Prevent any default action

  let selectedColor =
    document.querySelector('input[name="color"]:checked')?.value || "black"; // Default to black
  let selectedLength =
    document.querySelector('input[name="product-size"]:checked')?.value ||
    "None";
  let quantity = parseInt(quantityInput.value);

  // Check if item already exists in the cart
  let existingItem = cart.find(
    (item) => item.color === selectedColor && item.length === selectedLength
  );

  if (existingItem) {
    // If item exists, increase quantity
    existingItem.quantity += quantity;
    existingItem.price = productPrice * existingItem.quantity;
  } else {
    // If item is new, add to cart
    const product = {
      title: productTitle,
      color: selectedColor,
      length: selectedLength,
      quantity: quantity,
      price: productPrice * quantity,
    };
    cart.push(product);
  }

  renderCart(); // Update cart UI

  // Show "View Cart" button after adding item
  viewCartBtn.style.display = "inline-block";

  // Open the cart drawer
  cartDrawer.classList.add("open");
});

// Quantity increment and decrement logic
incrementBtn.addEventListener("click", (e) => {
  e.stopPropagation(); // Prevent cart from closing
  quantityInput.value = parseInt(quantityInput.value) + 1;
});

decrementBtn.addEventListener("click", (e) => {
  e.stopPropagation(); // Prevent cart from closing
  if (parseInt(quantityInput.value) > 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
});

// View Cart button logic
viewCartBtn.addEventListener("click", () => {
  cartDrawer.classList.add("open");
});

// Render Cart Items
function renderCart() {
  const cartItems = document.getElementById("cartItem");
  const subtotalElement = document.getElementById("subtotalElement"); // Ensure this exists
  const totalQuantityElement = document.getElementById("totalQuantity"); // Ensure this exists

  if (!cartItems) {
    console.error("❌ Element with id 'cartItem' not found!");
    return;
  }

  if (!subtotalElement) {
    console.error(
      "❌ Element with id 'subtotalElement' not found! Make sure it's in the HTML."
    );
    return;
  }

  const imagePaths = {
    white: 'image/white-21.jpg',
       black: 'image/black-24.jpg',
       blue: 'image/blue-23.jpg',
       green: 'image/green-19.jpg',
       yellow: 'image/yellow-19.jpg',
       orange: 'image/orange-22.jpg',
       purple: 'image/purple-22.jpg',
       pink: 'image/pink-21.jpg',
       grey: 'image/gray-20.jpg',
       brown: 'image/brwon.jpg',
       cyan: 'image/cyan-12.jpg',
       gray: 'image/gray-20.jpg',
       red: 'image/red-20.jpg',
  };


  let subtotal = 0;
  let totalQuantity = 0; // Initialize total quantity

  cartItems.innerHTML = ""; // Clear previous items


  if (cart.length === 0) {
    // Display a message when the cart is empty
    cartItems.innerHTML = `<p class="empty-cart-message">Your cart is empty.</p>`;
    subtotalElement.textContent = `Subtotal - $0.00`;
    totalQuantityElement.textContent = `Total Quantity - 0`; // Show 0 quantity
    return;
  }


  cart.forEach((item, index) => {
    if (!item.price || !item.quantity) {
      console.error(`⚠️ Missing price or quantity for item`, item);
      return;
    }

    
    const price = item.price || 0;
    subtotal += price;

    totalQuantity += item.quantity; // Add to total quantity

    const cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");

    cartItem.innerHTML = `
          <div class="cart-item">
  <img src="${imagePaths[item.color]}" alt="${
      item.color
    } Product Image" class="cart-item-img" />
 
  <div class="cart-item-details">
    <p class="product-title">
        ${item.title} - <span class="product-color">${item.color}</span>, 
        <br>
        <span class="product-size">${item.length}</span>
    </p>
    <div class="cart-item-actions">
      <button class="qty-dec-btn" onclick="decrementCartItem(${index}, event)">-</button>
      <span class="quantity">${item.quantity}</span>
      <button class="qty-inc-btn" onclick="incrementCartItem(${index}, event)">+</button>
    </div>
  </div>
  <div class="cart-item-price">
    <p class="price">
      <del class="original-price">$${(50 * item.quantity).toFixed(2)}</del>
      <strong class="discounted-price">$${price.toFixed(2)}</strong>
    </p>
    <p class="discount-text">(Save 42%)</p>
    <button class="delete-btn" onclick="deleteCartItem(${index}, event)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
  </div>

</div>
  <div class="cart-item-divider"></div>

            
           

        `;

    cartItems.appendChild(cartItem);
  });

subtotalElement.innerHTML = `
  <del class="original-price-2">$${(50 * totalQuantity).toFixed(2)}</del> 
  $${subtotal.toFixed(2)}
`;
  totalQuantityElement.textContent = `Subtotal -  ${totalQuantity} items`; // Show total quantity
}

// Increment cart item quantity
function incrementCartItem(index, event) {
  event.stopPropagation(); // Prevent cart from closing
  cart[index].quantity++;
  cart[index].price = productPrice * cart[index].quantity;
  renderCart();
}

// Decrement cart item quantity
function decrementCartItem(index, event) {
  event.stopPropagation(); // Prevent cart from closing
  if (cart[index].quantity > 1) {
    cart[index].quantity--;
    cart[index].price = productPrice * cart[index].quantity;
    renderCart();
  }
}

// Delete cart item
function deleteCartItem(index, event) {
  event.stopPropagation(); // Prevent cart from closing
  cart.splice(index, 1);
  renderCart();

  

  // Hide the "View Cart" button if the cart is empty
  if (cart.length === 0) {
    viewCartBtn.style.display = "none";
  }
}

// Close Cart Drawer when clicking outside
document.addEventListener("click", (e) => {
  if (
    !cartDrawer.contains(e.target) &&
    !addToCartBtn.contains(e.target) &&
    !viewCartBtn.contains(e.target)
  ) {
    cartDrawer.classList.remove("open");
  }
});

const promoToggle = document.getElementById("promo-toggle");
const promoCodeInput = document.getElementById("promo-code-input");
const toggleIcon = document.getElementById("toggle-icon");

// Toggle visibility of the promo code input and icon rotation
promoToggle.addEventListener("click", () => {
  const isVisible = promoCodeInput.style.maxHeight === "200px"; // Check if the input is expanded

  if (isVisible) {
    promoCodeInput.style.maxHeight = "0"; // Collapse the input box
    promoCodeInput.style.opacity = "0"; // Fade out
    toggleIcon.style.transform = "rotate(180deg)"; // Reset the icon rotation
  } else {
    promoCodeInput.style.maxHeight = "200px"; // Expand the input box (max-height set for transition)
    promoCodeInput.style.opacity = "1"; // Fade in
    toggleIcon.style.transform = "rotate(0deg)"; // Rotate the icon
  }
});

window.onload = function () {
  const loader = document.getElementById("page-loader");
  if (loader) {
    loader.classList.add("hidden"); // Add the 'hidden' class to fade out the loader
    setTimeout(() => (loader.style.display = "none"), 1000); // Fully hide after transition
  }
};

// Get reference to the close button
const closeCartBtn = document.getElementById("closeCartDrawer"); 

// Close cart drawer when clicking on the close button (cross)
closeCartBtn.addEventListener("click", () => {
    cartDrawer.classList.remove("open");
});

// Ensure cart closes when clicking outside the cart
document.addEventListener("click", (e) => {
  if (
    !cartDrawer.contains(e.target) && // Clicked outside the cart drawer
    !addToCartBtn.contains(e.target) && // Clicked outside the add to cart button
    !viewCartBtn.contains(e.target)    // Clicked outside the view cart button
  ) {
    cartDrawer.classList.remove("open"); // Close the cart
  }
});

document.getElementById("buyNow").addEventListener("click", function() {
  window.location.href = "checkout.html"; // Redirects to checkout page
});


