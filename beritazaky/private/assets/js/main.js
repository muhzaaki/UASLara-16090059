
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("searchIcon").style.display = "none";
  document.getElementById("inputSearch").value="";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("searchIcon").style.display = "block";
}

function popupMobile()
{
    document.getElementById("wrap-side-menu").style.display = "block";
    document.getElementById("menuMobile").style.display = "none";
    document.getElementById("ClosemenuMobile").style.display = "block";
 
}
function closeMobile()
{
    document.getElementById("menuMobile").style.display = "block";
    document.getElementById("ClosemenuMobile").style.display = "none";
    document.getElementById("wrap-side-menu").style.display = "none";
}
