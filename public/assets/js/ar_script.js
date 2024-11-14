var editor1cfg = { skin: "rounded-corner", readOnly: "false" };
editor1cfg.toolbar = "basic";
var editor1 = new RichTextEditor("#desc", editor1cfg);

var editor1cfg = { skin: "rounded-corner" };
//editor1cfg.toolbar = "basic";
var editor1 = new RichTextEditor("#comment_quality", editor1cfg);

var editor1cfg = { skin: "rounded-corner" };
//editor1cfg.toolbar = "basic";
var editor1 = new RichTextEditor("#comment_performance", editor1cfg);

// Get today's date
const today = new Date();

// Format the date as MM/DD/YYYY
const month = String(today.getMonth() + 1).padStart(2, "0");
const day = String(today.getDate()).padStart(2, "0");
const year = today.getFullYear();

const formattedDate = `${month}/${day}/${year}`;

// Display the date in the HTML
document.getElementById("currentDate").textContent = formattedDate;
document.getElementById("currentDate2").textContent = formattedDate;

const terms = document.querySelector(".terms-and-conditions");
const termsLastElement = terms.lastElementChild;
const scrollToBottom = document.querySelector(".scroll-to-bottom");
const acceptButton = document.querySelector(".accept-button");

scrollToBottom.addEventListener("click", function (e) {
    e.preventDefault();
    termsLastElement.scrollIntoView({
        block: "start",
        behavior: "smooth",
        inline: "nearest",
    });
    acceptButton.style.float = 'right';
});

function obCallback(payload) {
    if (payload[0].isIntersecting) {
        scrollToBottom.setAttribute("aria-hidden", true);
        acceptButton.setAttribute("aria-hidden", false);
        observer.unobserve(termsLastElement);
    }
}

const observer = new IntersectionObserver(obCallback, {
    root: terms,
    threshold: 0.1,
});

observer.observe(termsLastElement);

/* start script for alert */
function handel_term(e) {
    e.preventDefault(); // Prevents the form from submitting

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });
    swalWithBootstrapButtons
        .fire({
            title: "هل أنت متأكد؟",
            text: "هل تقبل بهذه الشروط وتعليمات الرعاية؟",
            icon: "warning",
            confirmButtonText: "نعم اقبل بها",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                swalWithBootstrapButtons.fire({
                    title: "مقبول",
                    text: "أنت تقبل بكافة إخلاءات المسؤولية وتعليمات الرعاية.",
                    icon: "success",
                });
                // Select the checkbox
                const checkbox = document.getElementById("term");

                // Make the checkbox visible and check it
                checkbox.style.display = "inline-block"; // Show the checkbox
                checkbox.checked = true; // Set checkbox to checked
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error",
                });
            }
        });
}
/* end script for alert */

(function () {
    window.requestAnimFrame = (function (callback) {
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimaitonFrame ||
            function (callback) {
                window.setTimeout(callback, 1000 / 60);
            }
        );
    })();

    var canvas = document.getElementById("sig-canvas");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#222222";
    ctx.lineWidth = 4;

    var drawing = false;
    var mousePos = { x: 0, y: 0 };
    var lastPos = mousePos;

    canvas.addEventListener(
        "mousedown",
        function (e) {
            drawing = true;
            lastPos = getMousePos(canvas, e);
        },
        false
    );

    canvas.addEventListener(
        "mouseup",
        function (e) {
            drawing = false;
        },
        false
    );

    canvas.addEventListener(
        "mousemove",
        function (e) {
            mousePos = getMousePos(canvas, e);
        },
        false
    );

    // Add touch event support for mobile
    canvas.addEventListener(
        "touchstart",
        function (e) {
            e.preventDefault();
            drawing = true;
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var me = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY,
            });
            canvas.dispatchEvent(me);
        },
        { passive: false }
    );

    canvas.addEventListener(
        "touchmove",
        function (e) {
            e.preventDefault();
            var touch = e.touches[0];
            var me = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY,
            });
            canvas.dispatchEvent(me);
        },
        { passive: false }
    );

    canvas.addEventListener(
        "touchend",
        function (e) {
            e.preventDefault();
            var me = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(me);
        },
        { passive: false }
    );

    function getMousePos(canvasDom, mouseEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
            x: mouseEvent.clientX - rect.left,
            y: mouseEvent.clientY - rect.top,
        };
    }

    function getTouchPos(canvasDom, touchEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
            x: touchEvent.touches[0].clientX - rect.left,
            y: touchEvent.touches[0].clientY - rect.top,
        };
    }

    function renderCanvas() {
        if (drawing) {
            ctx.moveTo(lastPos.x, lastPos.y);
            ctx.lineTo(mousePos.x, mousePos.y);
            ctx.stroke();
            lastPos = mousePos;
        }
    }

    // Prevent scrolling when touching the canvas
    document.body.addEventListener(
        "touchstart",
        function (e) {
            if (e.target === canvas) {
                e.preventDefault();
            }
        },
        { passive: false }
    );

    document.body.addEventListener(
        "touchend",
        function (e) {
            if (e.target === canvas) {
                e.preventDefault();
            }
        },
        { passive: false }
    );

    document.body.addEventListener(
        "touchmove",
        function (e) {
            if (e.target === canvas) {
                e.preventDefault();
            }
        },
        { passive: false }
    );

    (function drawLoop() {
        requestAnimFrame(drawLoop);
        renderCanvas();
    })();

    function clearCanvas(e) {
        e.preventDefault();
        canvas.width = canvas.width;
    }

    // Set up the UI
    var sigText = document.getElementById("sig-dataUrl");
    var sigImage = document.getElementById("sig-image");
    var clearBtn = document.getElementById("sig-clearBtn");
    var submitBtn = document.getElementById("sig-submitBtn");

    var img_signature = document.getElementById("img_signature");

    clearBtn.addEventListener(
        "click",
        function (e) {
            e.preventDefault();
            clearCanvas(e);
            sigText.innerHTML = "Data URL for your signature will go here!";
            sigImage.setAttribute(
                "src",
                "https://img.freepik.com/premium-vector/fake-signature-hand-drawn-sample-own-autograph_649512-1796.jpg?semt=ais_hybrid"
            );
        },
        false
    );

    submitBtn.addEventListener(
        "click",
        function (e) {
            e.preventDefault();
            var dataUrl = canvas.toDataURL();
            sigText.innerHTML = dataUrl;
            sigImage.setAttribute("src", dataUrl);
            img_signature.setAttribute("src",dataUrl);
            img_signature.setAttribute("value",dataUrl);
        },
        false
    );
})();

(function () {
    window.requestAnimFrame = (function (callback) {
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimaitonFrame ||
            function (callback) {
                window.setTimeout(callback, 1000 / 60);
            }
        );
    })();

    var canvas = document.getElementById("sig-canvas2");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#222222";
    ctx.lineWidth = 4;

    var drawing = false;
    var mousePos = { x: 0, y: 0 };
    var lastPos = mousePos;

    canvas.addEventListener(
        "mousedown",
        function (e) {
            drawing = true;
            lastPos = getMousePos(canvas, e);
        },
        false
    );

    canvas.addEventListener(
        "mouseup",
        function (e) {
            drawing = false;
        },
        false
    );

    canvas.addEventListener(
        "mousemove",
        function (e) {
            mousePos = getMousePos(canvas, e);
        },
        false
    );

    // Add touch event support for mobile
    canvas.addEventListener(
        "touchstart",
        function (e) {
            e.preventDefault();
            drawing = true;
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var me = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY,
            });
            canvas.dispatchEvent(me);
        },
        { passive: false }
    );

    canvas.addEventListener(
        "touchmove",
        function (e) {
            e.preventDefault();
            var touch = e.touches[0];
            var me = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY,
            });
            canvas.dispatchEvent(me);
        },
        { passive: false }
    );

    canvas.addEventListener(
        "touchend",
        function (e) {
            e.preventDefault();
            var me = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(me);
        },
        { passive: false }
    );

    function getMousePos(canvasDom, mouseEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
            x: mouseEvent.clientX - rect.left,
            y: mouseEvent.clientY - rect.top,
        };
    }

    function getTouchPos(canvasDom, touchEvent) {
        var rect = canvasDom.getBoundingClientRect();
        return {
            x: touchEvent.touches[0].clientX - rect.left,
            y: touchEvent.touches[0].clientY - rect.top,
        };
    }

    function renderCanvas() {
        if (drawing) {
            ctx.moveTo(lastPos.x, lastPos.y);
            ctx.lineTo(mousePos.x, mousePos.y);
            ctx.stroke();
            lastPos = mousePos;
        }
    }

    // Prevent scrolling when touching the canvas
    document.body.addEventListener(
        "touchstart",
        function (e) {
            if (e.target === canvas) {
                e.preventDefault();
            }
        },
        { passive: false }
    );

    document.body.addEventListener(
        "touchend",
        function (e) {
            if (e.target === canvas) {
                e.preventDefault();
            }
        },
        { passive: false }
    );

    document.body.addEventListener(
        "touchmove",
        function (e) {
            if (e.target === canvas) {
                e.preventDefault();
            }
        },
        { passive: false }
    );

    (function drawLoop() {
        requestAnimFrame(drawLoop);
        renderCanvas();
    })();

    function clearCanvas(e) {
        e.preventDefault();
        canvas.width = canvas.width;
    }

    // Set up the UI
    var sigText = document.getElementById("sig-dataUrl2");
    var sigImage = document.getElementById("sig-image2");
    var clearBtn = document.getElementById("sig-clearBtn2");
    var submitBtn = document.getElementById("sig-submitBtn2");

    var img_signature = document.getElementById("img_signature");

    clearBtn.addEventListener(
        "click",
        function (e) {
            e.preventDefault();
            clearCanvas(e);
            sigText.innerHTML = "Data URL for your signature will go here!";
            sigImage.setAttribute(
                "src",
                "https://img.freepik.com/premium-vector/fake-signature-hand-drawn-sample-own-autograph_649512-1796.jpg?semt=ais_hybrid"
            );
        },
        false
    );

    submitBtn.addEventListener(
        "click",
        function (e) {
            e.preventDefault();
            var dataUrl = canvas.toDataURL();
            sigText.innerHTML = dataUrl;
            sigImage.setAttribute("src", dataUrl);
            img_signature.setAttribute("src",dataUrl);
            img_signature.setAttribute("value",dataUrl);
        },
        false
    );
})();

function toggleRow(target) {
    var toggleParent = target.parentElement;
    var sibling = toggleParent.nextElementSibling;

    var collapseCell = sibling.querySelector("td");
    var span = toggleParent.querySelector("span");
    var i = toggleParent.querySelector("i");
    console.log(i);

    if (sibling && collapseCell.classList.contains("collapse")) {
        if (collapseCell.classList.contains("hidden")) {
            collapseCell.classList.remove("hidden");
            collapseCell.classList.add("show");
            span.textContent = "close Content";
            i.classList.add("fa-eye-slash");
            i.classList.add("text-warning");

            collapseCell.style.height =
                collapseCell
                    .querySelector("[data-collapse-content]")
                    .getBoundingClientRect().height + "px";
        } else {
            collapseCell.style.height = 0;
            collapseCell.classList.add("hidden");
            span.textContent = "open content";
            i.classList.remove("fa-eye-slash");
            i.classList.remove("text-warning");
            i.classList.add("fa-eye");
        }
    }
}

function getDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = "0" + dd;
    }
    if (mm < 10) {
        mm = "0" + mm;
    }
    today = yyyy + "-" + mm + "-" + dd;

    //console.log(today);
    document.getElementById("d_date").value = today;
}

window.onload = function () {
    getDate();
};
