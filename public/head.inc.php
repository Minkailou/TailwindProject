<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imgPro/Designpro.jpg" >
    <link rel="stylesheet" href="output.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>|==DesignPro== | | Minka Sacko</title>
</head>
<body>
  <!-- component -->
<!-- I've set max-w-screen-md, you may need to change it -->
<nav class="bg-gray-800 shadow fixed max-w-screen-full z-10 mx-auto inset-x-0 top-0 flex justify-between items-center">
      
      <a href="#" class="font-extrabold m-3 uppercase inline-flex hover:text-pink-700 transition-all duration-500 text-white">
        
        <img class="h-6 w-6 mr-2"src="./imgPro/Designpro.jpg">
        
  
          
        DESIGNPRO
      </a>
    
      <button id="mobileMenuButton" class="p-3 focus:outline-none md:hidden" title="Open side menu ">
        <!-- SVG For "x" button -->
          <svg id="mobileMenuButtonClose" class="w-6 h-6 hidden text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        <!-- SVG For "Menu burger" button -->
          <svg id="mobileMenuButtonOpen" class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </button>
    
    <!-- List of nav item -->
      <div id="sideMenuHideOnMobile" class="bg-gray-800 font-mono z-10 rounded-bl-md flex absolute top-0 right-40 transition-all duration-500 transform translate-x-0
                                            w-1/2 md:w-auto
                                            px-3 md:px-0
                                            flex-col md:flex-row
                                            -translate-y-full md:translate-y-0
                                            md:mt-1 md:items-center md:mx-1 md:uppercase">
          <a href="index.php" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0 text-white">Accueil</a>
          <a href="#apropos" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0 text-white">A propos</a>
          <a href="#portfolio" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0 text-white">Portfolio</a>
          <a href="#formation" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0 text-white">Formation</a>
          <a href="#experience" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0 text-white">Experience</a>
          <a href="#" class="mx-0 sm:mx-2 my-2 border-b-2 border-transparent hover:border-pink-600 hover:text-pink-700 transition-all duration-500 py-1 sm:p-0 text-white">Contact</a>
      </div>
    
  </nav>

  <script>
  var mobileMenuButton = document.getElementById("mobileMenuButton");
  mobileMenuButton.onclick = function() {
      document.getElementById("sideMenuHideOnMobile").classList.toggle("-translate-y-full");
      document.getElementById("sideMenuHideOnMobile").classList.toggle("mt-12");
      document.getElementById("sideMenuHideOnMobile").classList.toggle("shadow");
      document.getElementById("mobileMenuButtonClose").classList.toggle("hidden");
      document.getElementById("mobileMenuButtonOpen").classList.toggle("hidden");
  }
    // Hide element when click outside nav
  var theElementContainer = document.getElementsByTagName("nav")[0];
  document.addEventListener('click', function(event) {
      if (!theElementContainer.contains(event.target)) {
          document.getElementById("sideMenuHideOnMobile").classList.add("-translate-y-full");
          document.getElementById("sideMenuHideOnMobile").classList.remove("mt-12");
          document.getElementById("sideMenuHideOnMobile").classList.remove("shadow");
          document.getElementById("mobileMenuButtonOpen").classList.remove("hidden");
          document.getElementById("mobileMenuButtonClose").classList.add("hidden");
      }
  });
  </script>


































