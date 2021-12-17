let urlData = {
    "signpy-home": "../index.html",
};

let lang = getLanguage(true);

for (const [id, url] of Object.entries(urlData)) {
    let anchor = document.getElementById(id);
    anchor.href = url + lang;
}