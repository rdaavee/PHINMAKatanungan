function backtoTop() {
    window.scrollTo(0, 0);
}

const backToTop = document.querySelector(".back-to-Top");
const observerTarget = document.getElementById("footer");

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            backToTop.classList.add("shown");
        } else {
            backToTop.classList.remove("shown");
        }
    });
}, {
    threshold: 0.5,
});

observer.observe(observerTarget);

function hideAlerts() {
    setTimeout(function () {
        document.getElementById('error').style.display = 'none';
    }, 3500);
    setTimeout(function () {
        document.getElementById('session-error').style.display = 'none';
    }, 3500);
    setTimeout(function () {
        document.getElementById('session-success').style.display = 'none';
    }, 3500);
}

window.onload = function () {
    hideAlerts();
};
