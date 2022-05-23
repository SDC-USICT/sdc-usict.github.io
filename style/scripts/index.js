function clickUSS() {
  document.getElementById("uss_syllabus").style.display = "block";

  document.getElementById("affiliated_syllabus").style.display = "none";

  document.getElementById("aff").style.color = "white";
  document.getElementById("aff").style.backgroundColor = "#374B77";
  document.getElementById("uss").style.color = "#ffcb04";
  document.getElementById("uss").style.backgroundColor = "#40578b";
}

function clickAffiliated() {
  document.getElementById("uss_syllabus").style.display = "none";

  document.getElementById("affiliated_syllabus").style.display = "block";

  document.getElementById("uss").style.color = "white";
  document.getElementById("aff").style.backgroundColor = "#40578b";
  document.getElementById("aff").style.color = "#ffcb04";
  document.getElementById("uss").style.backgroundColor = "#374B77";
}

function clickAwards() {
  document.getElementById("vc_sir_awards").style.display = "block";
  document.getElementById("vc_sir_positions").style.display = "none";
  document.getElementById("vc_sir_publications").style.display = "none";

  document.getElementById("pos-vc").style.color = "white";
  document.getElementById("pos-vc").style.backgroundColor = "#374B77";
  document.getElementById("pub-vc").style.color = "white";
  document.getElementById("pub-vc").style.backgroundColor = "#374B77";
  document.getElementById("awa-vc").style.color = "#ffcb04";
  document.getElementById("awa-vc").style.backgroundColor = "#40578b";
}

function clickPositions() {
  document.getElementById("vc_sir_awards").style.display = "none";
  document.getElementById("vc_sir_positions").style.display = "block";
  document.getElementById("vc_sir_publications").style.display = "none";

  document.getElementById("awa-vc").style.color = "white";
  document.getElementById("awa-vc").style.backgroundColor = "#374B77";
  document.getElementById("pub-vc").style.color = "white";
  document.getElementById("pub-vc").style.backgroundColor = "#374B77";
  document.getElementById("pos-vc").style.color = "#ffcb04";
  document.getElementById("pos-vc").style.backgroundColor = "#40578b";
}

function clickPublications() {
  document.getElementById("vc_sir_awards").style.display = "none";
  document.getElementById("vc_sir_positions").style.display = "none";
  document.getElementById("vc_sir_publications").style.display = "block";

  document.getElementById("awa-vc").style.color = "white";
  document.getElementById("awa-vc").style.backgroundColor = "#374B77";
  document.getElementById("pos-vc").style.color = "white";
  document.getElementById("pos-vc").style.backgroundColor = "#374B77";
  document.getElementById("pub-vc").style.color = "#ffcb04";
  document.getElementById("pub-vc").style.backgroundColor = "#40578b";
  
}

function clickrgAwards() {
  document.getElementById("reg_awards").style.display = "block";
  document.getElementById("reg_experience").style.display = "none";

  document.getElementById("exp").style.color = "white";
  document.getElementById("exp").style.backgroundColor = "#374B77";
  document.getElementById("award-rg").style.color = "#ffcb04";
  document.getElementById("award-rg").style.backgroundColor = "#40578b";
}

function clickexperience() {
  document.getElementById("reg_awards").style.display = "none";
  document.getElementById("reg_experience").style.display = "block";

  document.getElementById("award-rg").style.color = "white";
  document.getElementById("award-rg").style.backgroundColor = "#374B77";
  document.getElementById("exp").style.color = "#ffcb04";
  document.getElementById("exp").style.backgroundColor = "#40578b";
}

// function clickSubMenu() {
//   var hdsfs = document.getElementById("mcd-menu");
//   console.log(hdsfs[0]);
//   console.log("clickSubMenu");
//   document.getElementById("mcd-menu").style.display = "none";
//   document.getElementById("back-button").style.display = "block";
//   document.getElementById("studentsAndAlumniSubMenu").style.display = "block";
// }

// function clickMainMenu() {
//   document.getElementById("back-button").style.display = "none";
//   document.getElementById("studentsAndAlumniSubMenu").style.display = "none";
//   document.getElementById("mcd-menu").style.display = "block";
// }

// let navbar_top = document.getElementById("navbar-top").offsetHeight;
// console.log(navbar_top);
// document.getElementById("header-navbar").style.marginTop = navbar_top + "!important";
//button color change

function changeColor() {
  document.getElementsById("vc_sir_awards").style.backgroundColor = "green";
}

// hamburger script for mobile menu
function hamburger_handler(){
  let nav_div = document.getElementById("navbarSupportedContent");
  if(nav_div.style.display == "none"){
    console.log("block");
    nav_div.style.display = "block";
  }
  else{
    console.log("none");
    nav_div.style.display = "none";
  }
}
