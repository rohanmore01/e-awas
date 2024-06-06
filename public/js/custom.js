$(window).ready(function () {
    $("#loaderDiv").fadeOut(2000);
});

// for toast notification
jQuery(document).ready(function () {
    const toast = document.querySelector(".toast");
    (closeIcon = document.querySelector(".close")),
        (progress = document.querySelector(".progress"));

    let timer1, timer2;

    closeIcon.addEventListener("click", () => {
        toast.classList.remove("active");

        setTimeout(() => {
            progress.classList.remove("active");
        }, 300);

        clearTimeout(timer1);
        clearTimeout(timer2);
    });
});
