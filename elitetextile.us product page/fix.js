const quantityInput = document.getElementById('quantity');
const incrementBtn = document.getElementById('increment');
const decrementBtn = document.getElementById('decrement');
const addToCartBtn = document.getElementById('addToCart');
const viewCartBtn = document.getElementById('viewCart'); // New "View Cart" button
const cartDrawer = document.getElementById('cartDrawer');
const cartItems = document.getElementById('cartItem');
const subtotalElement = document.getElementById('subtotal');
const productTitle = document.querySelector('.product-title').textContent;
const productPrice = 29; // Base price of the product
let cart = []; // To store cart items


// Initially hide the "View Cart" button
viewCartBtn.style.display = 'none';

// Add to Cart functionality
addToCartBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent any default action

    // Add product to cart logic here...

    // After adding the product to the cart, show the "View Cart" button
    viewCartBtn.style.display = 'inline-block';
});

// Quantity increment and decrement logic
incrementBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent cart from closing
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

decrementBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent cart from closing
    if (parseInt(quantityInput.value) > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});

// Add to Cart logic
addToCartBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent cart from closing

    let selectedColor = document.querySelector('input[name="color"]:checked')?.value || 'black'; // Default to black
    let selectedLength = document.querySelector('input[name="length"]:checked')?.value || 'None';
    let quantity = parseInt(quantityInput.value);

    const product = {
        title: productTitle,
        color: selectedColor,
        length: selectedLength,
        quantity: quantity,
        price: productPrice * quantity,
    };

    // Add product to cart
    cart.push(product);
    renderCart();

    // Open the cart drawer
    cartDrawer.classList.add('open');
});

// View Cart button logic
viewCartBtn.addEventListener('click', () => {
    // Open the cart drawer when "View Cart" is clicked
    cartDrawer.classList.add('open');
});

// Render Cart Items
function renderCart() {
    const cartItems = document.getElementById('cartItem');
    const subtotalElement = document.getElementById('subtotalElement'); // Ensure this exists

    if (!cartItems) {
        console.error("❌ Element with id 'cartItem' not found!");
        return;
    }

    if (!subtotalElement) {
        console.error("❌ Element with id 'subtotalElement' not found! Make sure it's in the HTML.");
        return;
    }

    cartItems.innerHTML = ''; // Clear previous items
    let subtotal = 0;

    cart.forEach((item, index) => {
        if (!item.price || !item.quantity) {
            console.error(`⚠️ Missing price or quantity for item`, item);
            return;
        }

        const price = item.price || 0;
        const originalPrice = item.originalPrice || price;
        subtotal += price * item.quantity;

        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');

        cartItem.innerHTML = `
            <img src="img/${item.color}-19.jpg" alt="${item.color} Product Image" class="cart-item-img">
            <div class="cart-item-details">
                <p class="product-title">${item.title} - <span class="product-color">${item.color}</span>, 
                    <span class="product-size">${item.length}</span>
                </p>
                <p class="price">
                    <del class="original-price">$${originalPrice.toFixed(2)}</del>
                    <strong class="discounted-price">$${price.toFixed(2)}</strong>
                </p>
                <p class="discount-text">(Save 42%)</p>
            </div>
            <div class="cart-item-actions">
                <button class="qty-dec-btn" onclick="decrementCartItem(${index}, event)">-</button>
                <span class="quantity">${item.quantity}</span>
                <button class="qty-inc-btn" onclick="incrementCartItem(${index}, event)">+</button>
            </div>
            <button class="delete-btn" onclick="deleteCartItem(${index}, event)">&#128465;</button>
        `;

        cartItems.appendChild(cartItem);
    });

    // ✅ Only update subtotal if element exists
    subtotalElement.textContent = `Subtotal - $${subtotal.toFixed(2)}`;
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
}

// Close Cart Drawer only when clicking outside
document.addEventListener('click', (e) => {
    if (!cartDrawer.contains(e.target) && !addToCartBtn.contains(e.target) && !viewCartBtn.contains(e.target)) {
        cartDrawer.classList.remove('open');
    }
});
