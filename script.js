gDiv = document.getElementById("Genres-div");
gArrow = document.getElementById("Genres-arrow");
gBtn = document.getElementById("Genres-btn");
gMainBTN = gBtn = document.getElementById("g-m-btn");

uDiv = document.getElementById("Univers-div");
uArrow = document.getElementById("Univers-arrow");
uBtn = document.getElementById("Univers-btn");
uMainBTN = document.getElementById("u-m-btn");

gSlider = document.getElementById("g-slider")
uSlider = document.getElementById("u-slider")
 
function start(){
    uDiv.style.opacity = 0.2;
    uDiv.style.saturate = 0;
    uArrow.style.opacity = 0;
    uBtn.style.opacity = 0;

    gMainBTN.style.display= "none";
    uMainBTN.style.display= "block";

    gSlider.classList.add("active");
    uSlider.classList.remove("active");
}

function UniversClicked(){
    uDiv.style.opacity = 1;
    uDiv.style.saturate = 1;
    uArrow.style.opacity = 1;
    uBtn.style.opacity = 1;

    gDiv.style.opacity = 0.2;
    gDiv.style.saturate = 0;
    gArrow.style.opacity = 0;
    gBtn.style.opacity = 0;

    gMainBTN.style.display= "block";
    uMainBTN.style.display= "none";

    gSlider.classList.remove("active");
    uSlider.classList.add("active");
}

function GenresClicked(){
    start();

    gDiv.style.opacity = 1;
    gDiv.style.saturate = 1;
    gArrow.style.opacity = 1;
    gBtn.style.opacity = 1;
}





tags = document.getElementsByClassName("tag");

function RemoveActiveTags(){
    for (let i = 0; i < tags.length; i++) {
        tags[i].classList.remove("active");
        tags[i].children[0].classList.add("desactive");
    }
}

function ChangeActiveTag(tagToChange){
    RemoveActiveTags();
    tags[tagToChange].classList.add("active");
    tags[tagToChange].children[0].classList.remove("desactive");
}

RemoveActiveTags();
ChangeActiveTag(0);


start();

//MAMP