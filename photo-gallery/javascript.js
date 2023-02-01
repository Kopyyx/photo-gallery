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

