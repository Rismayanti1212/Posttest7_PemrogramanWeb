var icon = document.getElementById('icon');
const header = document.getElementsByTagName('header');

icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        alert("Website will enter Dark Mode");
        icon.src = "darkmode.png";
        icon1.src = "Ig-dark.png";
        icon2.src = "Email-dark.png";
        icon3.src = "Wa-dark.png";
    }
    else{
        alert("Website will enter Light Mode");
        icon.src = "lightmode.png";
        icon1.src = "logo-ig.png";
        icon2.src = "Email.png";
        icon3.src = "logo-wa.png";
    }
}

document.getElementById("myBtn").addEventListener("click", function() {
    //var nama = prompt("Masukkan Nama Anda");
    //console.log(nama);
    var konfirmasi = confirm("Are you sure you want to book??")
    if(konfirmasi == true){
        console.log("Please fill in your details!");
    }
    else{
        console.log("You didn't order!")
    }
  });

function layer1(){
    document.getElementById('konten1-2').src="beverage3.jpg";
}

function layer2(){
   document.getElementById('konten1-2').src="dessert1.jpg";
}
document.getElementById('konten1-2').addEventListener('mouseover', layer1);
document.getElementById('konten1-2').addEventListener('mouseout', layer2);

function layer3(){
    document.getElementById('konten1-1').src="main-course5.jpg";
}

function layer4(){
   document.getElementById('konten1-1').src="main-course6.jpg";
}
document.getElementById('konten1-1').addEventListener('mouseover', layer3);
document.getElementById('konten1-1').addEventListener('mouseout', layer4);

function layer5(){
    document.getElementById('konten1-3').src="main-course6.jpg";
}

function layer6(){
   document.getElementById('konten1-3').src="beverage2.jpg";
}
document.getElementById('konten1-3').addEventListener('mouseover', layer5);
document.getElementById('konten1-3').addEventListener('mouseout', layer6);

function layer7(){
    document.getElementById('konten1-3').src="main-course6.jpg";
}

function layer8(){
   document.getElementById('konten1-3').src="beverage2.jpg";
}
document.getElementById('konten1-3').addEventListener('mouseover', layer5);
document.getElementById('konten1-3').addEventListener('mouseout', layer6);


document.getElementById("konten2-1").src = "beverage2.jpg";
document.getElementById("konten2-2").src = "main-course5.jpg";
document.getElementById("konten2-3").src = "main-course6.jpg";

document.getElementById("konten3").src = "chef2.jpg";
document.getElementById("konten3-1").src = "chef1.jpg";
document.getElementById("konten3-2").src = "chef3.jpg";
document.getElementById("konten3-3").src = "chef4.jpg";

