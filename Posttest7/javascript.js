var icon = document.getElementById('icon');

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        alert("Website will enter Dark Mode");
        icon.src = "darkmode.png";
        icon1.src = "dark-resto.jpg";
        icon2.src = "Ig-dark.png";
        icon3.src = "Email-dark.png";
        icon4.src = "Wa-dark.png";
    }
    else{
        alert("Website will enter Light Mode");
        icon.src = "lightmode.png";
        icon1.src = "our-story.jpg";
        icon2.src = "logo-ig.png";
        icon3.src = "Email.png";
        icon4.src = "logo-wa.png";
    }
}

const box = document.getElementById("box");
box.style.background = "#7e777a8e";

box.addEventListener('mouseenter', function(){
    box.style.background = 'grey';
})

box.addEventListener('mouseout', function(){
    box.style.background = '#7e777a8e';
})

function layer1(){
    document.getElementById('img-konten2-1').src="owner.jpg";
}

function layer2(){
   document.getElementById('img-konten2-1').src="owner1.jpg";
}
document.getElementById('img-konten2-1').addEventListener('mouseover', layer1);
document.getElementById('img-konten2-1').addEventListener('mouseout', layer2);

function layer3(){
    document.getElementById('img-konten2-2').src="owner1.jpg";
}

function layer4(){
   document.getElementById('img-konten2-2').src="owner.jpg";
}
document.getElementById('img-konten2-2').addEventListener('mouseover', layer3);
document.getElementById('img-konten2-2').addEventListener('mouseout', layer4);
