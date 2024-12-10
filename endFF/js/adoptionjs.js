const backToTopButton = document.getElementById("back-to-top");

// Showing the button when scrolling down 100px
window.onscroll = function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopButton.style.display = "flex";
    } else {
        backToTopButton.style.display = "none";
    }
};

// Scrolling to the top 
backToTopButton.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth" 
    });
});

const popup = document.getElementById("popup-form");
const closeBtn = document.getElementById("close-popup");
const submitBtn = document.getElementById("submit-btn");
const adoptButtons = document.querySelectorAll(".bunny-card button");

// Show the popup when any "Adopt Me" button is clicked
adoptButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        popup.classList.remove("hidden");  // Remove the hidden class to show popup
    });
});

// Close the popup when the close button is clicked
closeBtn.addEventListener("click", () => {
    popup.classList.add("hidden");  // Add the hidden class to hide the popup
});

// Optional: Handle form submission (just hides the popup here)
submitBtn.addEventListener("click", (e) => {
    e.preventDefault();
    alert("Thank you for your interest in adoption!");
    popup.classList.add("hidden");  // Hide the popup after submission
});

// Hide the popup if clicked outside the popup content
popup.addEventListener("click", (e) => {
    if (e.target === popup) { // Check if the click is outside the popup content
        popup.classList.add("hidden");
    }
});
