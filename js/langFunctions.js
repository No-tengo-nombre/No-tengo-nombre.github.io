function accessLink(link) {
    document.location.href = link + getLanguage(true);
}

function applyStrings(containers, languageData) {
    containers.forEach(container => {
        let locale;
        let hashVal = location.hash;

        if (hashVal) {
            locale = hashVal.substring(1, 3);
            container.setAttribute("lang", locale);
        }
        else {
            locale = container.getAttribute("lang");
        }
        container.querySelectorAll("[data-key]").forEach(element => {
            let key = element.getAttribute("data-key");
            let lang = locale.substring(0, 2);
            if (key) {
                element.textContent = languageData.languages[lang].strings[key];
            }
        });
    });
}

function getLanguage(hash) {
    let hashVal = location.hash;
    if (hashVal) {
        return hash ? hashVal : hashVal.substring(1, 3);
    }
    else {
        let lang = document.documentElement.getAttribute("lang");
        return hash ? "#" + lang : lang;
    }
}

function setLanguage(lang) {
    document.documentElement.setAttribute("lang", lang);
    location.hash = lang;
    location.reload();
}