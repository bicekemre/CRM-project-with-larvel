flatpickr("#datepicker-range", {mode: "range"}), flatpickr("#datepicker-invoice");
var currentTab = 0;

// Initialize current tab index
var currentTab = 0;

// Get all wizard tabs
var wizardTabs = document.getElementsByClassName("wizard-tab");

// Get buttons
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");
var addBtn = document.getElementById("addBtn");

// Display the current tab
showTab(currentTab);

// Event listener for Previous button
prevBtn.addEventListener("click", function () {
    if (currentTab > 0) {
        currentTab--;
        showTab(currentTab);
    }
});

// Event listener for Next button
nextBtn.addEventListener("click", function () {
    if (validateForm()) {
        if (currentTab < wizardTabs.length - 1) {
            currentTab++;
            showTab(currentTab);
        } else if (currentTab === wizardTabs.length - 1) {
            addBtn.classList.remove("d-none");
            nextBtn.classList.add("d-none");
        }
    }
});

// Function to display the specified tab of the form
function showTab(tabIndex) {
    // Hide all tabs
    for (var i = 0; i < wizardTabs.length; i++) {
        wizardTabs[i].style.display = "none";
    }

    // Show the current tab
    wizardTabs[tabIndex].style.display = "block";

    // Update the button visibility
    if (tabIndex === 0) {
        prevBtn.style.display = "none";
    } else {
        prevBtn.style.display = "block";
    }

    if (tabIndex === wizardTabs.length - 1) {
        nextBtn.style.display = "none";
        addBtn.classList.remove("d-none");
    } else {
        nextBtn.style.display = "block";
        addBtn.classList.add("d-none");
    }
}

// Function to validate the form inputs
function validateForm() {
    var inputs = wizardTabs[currentTab].getElementsByTagName("input");

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].hasAttribute("required") && inputs[i].value === "") {
            inputs[i].classList.add("is-invalid");
            return false;
        } else {
            inputs[i].classList.remove("is-invalid");
        }
    }

    var selects = wizardTabs[currentTab].getElementsByTagName("select");

    for (var i = 0; i < selects.length; i++) {
        if (selects[i].hasAttribute("required") && selects[i].value === "Select") {
            selects[i].classList.add("is-invalid");
            return false;
        } else {
            selects[i].classList.remove("is-invalid");
        }
    }

    return true;
}
function fixStepIndicator (e) {
    for (var t = document.getElementsByClassName("list-item"), n = 0; n < t.length; n++) t[n].className = t[n].className.replace(" active", "");
    t[e].className += " active"
}

showTab(currentTab);