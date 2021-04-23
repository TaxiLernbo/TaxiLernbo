console.log("JS Test");

var mobileMenuOpen = false;

 var element = document.getElementById("hamburger").addEventListener("click", mobileMenuClicked);

 function mobileMenuClicked()
 {
     document.getElementById("hamburger").style.display = "none";
     document.getElementById("footer").style.display = "none";
     document.getElementById("mobileMenu").classList.add("mobileMenuWithLinks");
     document.getElementById("mobileMenu").classList.remove("mobileMenu");
     document.getElementById("mobileMenuLinks").classList.add("mobileMenuVisible")
     document.getElementById("mobileMenuLinks").classList.remove("mobileMenuHidden")
 }
