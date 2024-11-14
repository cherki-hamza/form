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
        document.getElementById("nextBtn").innerHTML = "Submit";
        document.getElementById("nextBtn").setAttribute("onclick", "submitForm()");
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
        document.getElementById("nextBtn").setAttribute("onclick", "next(1)");
    }
    fixStepIndicator(n);
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


