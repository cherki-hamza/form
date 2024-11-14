var currentTab = 0;

showTab(currentTab);

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";

    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == x.length - 1) {
        document.getElementById("nextBtn").innerHTML = "إرسال";
        document.getElementById("nextBtn").setAttribute("onclick", "submitForm()");
    } else {
        document.getElementById("nextBtn").innerHTML = "التالي";
        document.getElementById("nextBtn").setAttribute("onclick", "next(1)");
    }
    fixStepIndicator(n);
}

function next(n) {
    var x = document.getElementsByClassName("tab");

    // Validate the current tab before proceeding (optional)
    if (n == 1 && !validateForm()) return false;

    x[currentTab].style.display = "none";

    currentTab = currentTab + n;

    // If the user has reached the last step, submit the form
    if (currentTab >= x.length) {
        document.getElementById("myForm").submit();
        return false;
    }

    showTab(currentTab);
}

function next(n) {
    var x = document.getElementsByClassName("tab");



    x[currentTab].style.display = "none";
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        return false; // Prevent further execution after the last tab
    }

    showTab(currentTab);
}

function submitForm() {
    var form = document.getElementById("myForm");



    // Submit the form
    form.submit();
}

function fixStepIndicator(n) {
    var i,
        x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}
