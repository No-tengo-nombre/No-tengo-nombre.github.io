function smoothScroll(id) {
    let e = document.getElementById(id);
    e.scrollIntoView({
        block: "start",
        behavior: "smooth",
        inline: "start",
    });
}