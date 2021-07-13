<x-app-layout>

  <div class="relative min-h-screen md:flex" id="sideBar" style="">


    <!-- mobile menu bar -->
    <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
      <!-- logo -->
      <a href="#" class="block p-4 text-white font-bold">Better Dev</a>
  
      <!-- mobile menu button -->
      <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  
    <!-- sidebar -->
    <div class="sidebar w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out" style="background-color: #060624;">
  
      <!-- logo -->
      <a href="#" class="text-white flex items-center space-x-2 px-4">
        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
        </svg>
        <span class="text-2xl font-extrabold">Better Dev</span>     
      </a>
  
      <!-- nav -->
      <nav>
        <a href="#" class="block py-2.5 px-4 rounded transition text-white duration-200 hover:bg-blue-500 hover:text-white">
          Dashboard
          {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
          </svg> --}}
        </a>
        <a href="/receive" class="block py-2.5 px-4 rounded transition text-white duration-200 hover:bg-blue-500 hover:text-white">
          Received
      
        <a href="/issue" class="block py-2.5 px-4 rounded transition text-white duration-200 hover:bg-blue-500 hover:text-white">
          Issued
        </a>
        <a href="" class="block py-2.5 px-4 rounded transition text-white duration-200 hover:bg-blue-500 hover:text-white">
          Bin/Rack
        </a>
        <a href="/summary" class="block py-2.5 px-4 rounded transition text-white duration-200 hover:bg-blue-500 hover:text-white">
            Summary
          </a>
      </nav>
    </div>
  
    <!-- content -->
    {{-- <div class="flex-1 p-10 text-2xl font-bold">
      content goes here
    </div> --}}
  
  </div>



  <style>
    .dropbtn {
      background-color: #060624;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: right;
      background-color: #060624;
      min-width: 150px;
      box-shadow: 0px 8px 16px 0px rgba(58, 56, 230, 0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: right;
    }
    
    .dropdown-content a:hover {background-color: #000061;}
    
    .dropdown:hover .dropdown-content {display: block;}
    /* 
    .dropdown:hover .dropbtn {background-color: #3e8e41;} */
    </style>

      
  
    
        
        


    <script>

      // document.getElementById("idClose").style.display = "inline";
      document.getElementById("idClose").style.display = "none";
                            // document.getElementById("sideBar").style.visibility = "hidden";
                            document.getElementById("sideBar").style.width="160px";
                            document.getElementById("sideBar").style.height="700px";
                           function openNav() {
                             document.getElementById("sideBar").style.visibility = "visible";
                            //  document.getElementById("main").style.marginLeft = "0";
                             document.getElementById("idClose").style.display = "inline";
                             document.getElementById("idOpen").style.display = "none";
                             document.getElementById("sideBar").style.width="160px";
                             document.getElementById("sideBar").style.height="700px";
                           }
                           function closeNav() {
                            document.getElementById("sideBar").style.visibility = "hidden";
                            //  document.getElementById("main").style.marginLeft = "0";
                             document.getElementById("idOpen").style.display = "inline";
                             document.getElementById("idClose").style.display = "none";
                       }


        // grab everything we need
const btn = document.querySelector(".mobile-menu-button");
const sidebar = document.querySelector(".sidebar");

// add our event listener for the click
btn.addEventListener("click", () => {
  sidebar.classList.toggle("-translate-x-full");
});
    </script>

  </x-app-layout>