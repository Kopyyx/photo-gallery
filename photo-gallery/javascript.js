document.querySelector('.navTrigger').addEventListener('click', function() {
    this.classList.toggle('active');
    console.log("Clicked menu");
    document.querySelector("#mainListDiv").classList.toggle("show_list");
    document.querySelector("#mainListDiv").style.display = "block";
});

window.addEventListener('scroll', function() {
    if (document.documentElement.scrollTop > 50) {
        document.querySelector('.nav').classList.add('affix');
        console.log("OK");
    } else {
        document.querySelector('.nav').classList.remove('affix');
    }
});

// Maintain a supported Language List
var langList = ['en', 'cs'];
// Get browser Language
var userLang = navigator.language || navigator.userLanguage;
// extract Language (en-US => en)
userLang = userLang.substring(0, 2);
// Call the function to set language
changeLang(userLang);

// function to change language
function changeLang(lang) {
    langList.forEach((langEle) => {
        // if language matches, display
        if (langEle == lang) {
            var langElems = document.querySelectorAll('.' + langEle)
            langElems.forEach((elem) => {
                elem.style.display = "block"
                var link = document.getElementById('cs');
                link.style.display = 'none';
                var link = document.getElementById('en');
                link.style.display = 'block';
            })
        }
        // hide the language text
        else {
            hideLang(langEle)
            var link = document.getElementById('en');
            link.style.display = 'none';
            var link = document.getElementById('cs');
            link.style.display = 'block';

        }
    })
}

// function to hide language
function hideLang(lang) {
    var langElems = document.querySelectorAll('.' + lang)
    langElems.forEach((elem) => {
        elem.style.display = "none"
    })
}