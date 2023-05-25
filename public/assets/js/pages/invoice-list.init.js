flatpickr("#datepicker-range", {mode: "range"}), flatpickr("#datepicker-invoice");
var currentTab = 0;

function showTab (e) {
    var t = document.getElementsByClassName("wizard-tab");
    t[e].style.display = "block", document.getElementById("prevBtn").style.display = 0 == e ? "none" : "inline", e == t.length - 1 ? document.getElementById("nextBtn").innerHTML = "Add" : document.getElementById("nextBtn").innerHTML = "Next", fixStepIndicator(e)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("wizard-tab");

    // Hide the current tab
    x[currentTab].style.display = "none";

    // Increase or decrease the current tab by 1
    currentTab = currentTab + n;

    // If the user has reached the end of the form
    if (currentTab >= x.length) {
        // Perform form submission or any desired action here
        document.forms[0].submit(); // Submit the form

        // Reset the current tab to the last tab
        currentTab = x.length - 1;
    }

    // Otherwise, display the correct tab
    showTab(currentTab);
}

function fixStepIndicator (e) {
    for (var t = document.getElementsByClassName("list-item"), n = 0; n < t.length; n++) t[n].className = t[n].className.replace(" active", "");
    t[e].className += " active"
}

showTab(currentTab);