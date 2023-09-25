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

const setLocalStorage = () => {
    if (Object.is(localStorage.getItem("lang"),null)){
        localStorage.setItem("lang", "cs");
    }
    if (localStorage.getItem("lang") === "cs"){
        hideLang("en")
        document.getElementById("lang").innerText = "en";
    }
    else {
        hideLang("cs")
        document.getElementById("lang").innerText = "cs";
    }
}
setLocalStorage();

const changeLang = () => {
    if(localStorage.getItem("lang")=== "cs") {
        hideLang("cs")
        localStorage.setItem("lang", "en");
        document.getElementById("lang").innerText = "cs";
    }
    else {
        hideLang("en");
        localStorage.setItem("lang", "cs");
        document.getElementById("lang").innerText = "en";
    }
    let langElems = document.querySelectorAll("." + localStorage.getItem("lang"));
    langElems.forEach((element) => {
        element.style.display = "block";
    })
}

// function to hide language
function hideLang(lang) {
    var langElems = document.querySelectorAll('.' + lang)
    langElems.forEach((elem) => {
        elem.style.display = "none"
    })
}

