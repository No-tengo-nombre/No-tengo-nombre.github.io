document.addEventListener("DOMContentLoaded", () => {
    let zones = document.querySelectorAll("html[lang]");
    applyStrings(zones);

    let lang = findLocaleMatch();
    let container = document.querySelector(`html [lang*=${lang}]`);
    console.log(container);
    container.className = "lang-match";
});

function applyStrings(containers) {
    containers.forEach(container => {
        let locale = container.getAttribute("lang");
        container.querySelectorAll("[data-key]").forEach(element => {
            let key = element.getAttribute("data-key");
            let lang = locale.substr(0, 2);
            if (key) {
                element.textContent = langdata.languages[lang].strings[key];
            }
        });
    });
}

function findLocaleMatch() {
    let keys = Object.keys(langdata.languages);
    let locales = Intl.getCanonicalLocales(keys);
    let lang = navigator.language;
    let locale = Intl.getCanonicalLocales(lang);

    let langMatch = document.documentElement.getAttribute("lang");
    locales = locales.filter(l => locale == l);
    langMatch = (locales.length > 0) ? locales[0] : langMatch;
    return langMatch;
}

function setLanguage(lang) {
    document.documentElement.setAttribute("lang", lang);
    location.reload();
}