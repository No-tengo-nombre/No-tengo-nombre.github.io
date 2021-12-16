const li = document.querySelectorAll(".nav-item");
const rows = document.querySelectorAll("row");

console.log(li);
console.log(rows);

function activeMenu() {
    let len = rows.length;
    while (--len && window.scrollY + 97 < rows[len].offsetTop) {}
    li.forEach(ltx => ltx.classList.remove("active"));
    li[len].classList.add("active");
}

activeMenu();
window.addEventListener("scroll", activeMenu);