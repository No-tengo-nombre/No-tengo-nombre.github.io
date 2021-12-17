let urlData = {
    "p1-link1": "proyects/signpy.html",
};

let lang = getLanguage(true);

for (const [id, url] of Object.entries(urlData)) {
    let anchor = document.getElementById(id);
    anchor.href = url + lang;
}