document.addEventListener("DOMContentLoaded", function () {
    const loader = document.querySelector(".loader");

    setTimeout(() => {
        loader.classList.add("hidden_1"); // Apply fade-out effect
        setTimeout(() => {
            loader.style.display = "none"; // Completely remove it after fade-out
        }, 500); // Wait for the transition to complete (adjust if needed)
    }, 3000); // Adjust timing if required
});


const showShipButton = document.getElementById('showShip');
    const showPickupButton = document.getElementById('showPickup');
    const shippingForm = document.getElementById('shippingForm');
    const pickupForm = document.getElementById('pickupForm');
    const billingForm = document.getElementById('billingForm');
    const billingSameCheckbox = document.getElementById('billing-same');

    // Show Shipping Form
    showShipButton.addEventListener('click', () => {
      shippingForm.classList.remove('hidden');
      pickupForm.classList.add('hidden');
      showShipButton.classList.add('active');
      showPickupButton.classList.remove('active');
    });

    // Show Pickup Form
    showPickupButton.addEventListener('click', () => {
      pickupForm.classList.remove('hidden');
      shippingForm.classList.add('hidden');
      showPickupButton.classList.add('active');
      showShipButton.classList.remove('active');
    });

 


    const toggleBtn = document.getElementById('toggleBtn');
    const apartmentInput = document.getElementById('apartmentInput');

    toggleBtn.addEventListener('click', () => {
      apartmentInput.classList.remove('hidden'); // Show the input field
      toggleBtn.classList.add('hidden'); // Hide the toggle button
    });



    const toggleBtn_2 = document.getElementById('toggleBtn-2');
    const apartmentInput_2 = document.getElementById('apartmentInput_2');

    toggleBtn_2.addEventListener('click', () => {
      apartmentInput_2.classList.remove('hidden'); // Show the input field
      toggleBtn_2.classList.add('hidden'); // Hide the toggle button
    });



    const toggleBtn_3 = document.getElementById('billing-toggleBtn');
    const apartmentInput_3 = document.getElementById('billing-apartmentInput');

    toggleBtn_3.addEventListener('click', () => {
        apartmentInput_3.classList.remove('hidden'); // Show the input field
        toggleBtn_3.classList.add('hidden'); // Hide the toggle button
        });



        document.addEventListener("DOMContentLoaded", function () {
            const billingCheckbox = document.getElementById("billing-same");
            const billingForm = document.getElementById("billingForm");
        
            // Set checkbox to checked by default
            billingCheckbox.checked = true;
            billingForm.style.display = "none"; // Hide billing form initially
        
            billingCheckbox.addEventListener("change", function () {
                if (billingCheckbox.checked) {
                    billingForm.style.display = "none"; // Hide billing form
                } else {
                    billingForm.style.display = "block"; // Show billing form
                }
            });
        });
        

      // Select all shipping options
      const shippingOptions = document.querySelectorAll('.shipping-option');

      shippingOptions.forEach(option => {
          option.addEventListener('click', function() {
              // Remove "selected" class from all options
              shippingOptions.forEach(opt => opt.classList.remove('selected'));
              
              // Add "selected" class to the clicked option
              this.classList.add('selected');

              // Select the radio button inside the clicked option
              this.querySelector('input[type="radio"]').checked = true;
          });
      });

      const addNoteCheckbox = document.getElementById('addNote'); // Checkbox
      const orderInput = document.getElementById('orderInput'); // The div to show/hide
      
      addNoteCheckbox.addEventListener('change', () => {
          if (addNoteCheckbox.checked) {
              orderInput.classList.remove('hidden'); // Show the textarea
          } else {
              orderInput.classList.add('hidden'); // Hide the textarea
          }
      });

      









































































































      