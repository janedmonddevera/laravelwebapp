











<nav class="text-white bg-slate-900 inline-block w-full  z-10 py-6 mt-0 flex">
<div class="hidden md:block p-2 ml-4">
  <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#cdd0d0}</style><path d="M224 32H64C46.3 32 32 46.3 32 64v64c0 17.7 14.3 32 32 32H441.4c4.2 0 8.3-1.7 11.3-4.7l48-48c6.2-6.2 6.2-16.4 0-22.6l-48-48c-3-3-7.1-4.7-11.3-4.7H288c0-17.7-14.3-32-32-32s-32 14.3-32 32zM480 256c0-17.7-14.3-32-32-32H288V192H224v32H70.6c-4.2 0-8.3 1.7-11.3 4.7l-48 48c-6.2 6.2-6.2 16.4 0 22.6l48 48c3 3 7.1 4.7 11.3 4.7H448c17.7 0 32-14.3 32-32V256zM288 480V384H224v96c0 17.7 14.3 32 32 32s32-14.3 32-32z"/></svg>
</div>
  <div x-data="{ open: false }" class="inline-block ml-4 md:hidden">
    <button x-on:click="open = ! open">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                          viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
    </button>
  
    <div x-show="open" x-transition   x-transition:enter.duration.500ms
    x-transition:leave.duration.400ms>
      <div class="block">
    
        <x-hamburger />
      </div>
    </div>
  </div>
  
  <div class="hidden md:block ml-2 ">
  
        <div class="flex">
      
          <ul class="flex uppercase mx-4 float-left">
            <li class="px-4 my-2  hover:bg-sky-400 rounded-md py-2 px-4">
              <a href="/">  
                home
                </a>
            </li>
            <li class="px-4 my-2  hover:bg-sky-400 rounded-md py-2 px-4">
              <a href="/">  
                about
                </a>
            </li>
            <li class="px-4 my-2  hover:bg-sky-400 rounded-md py-2 px-4">
              <a href="/">  
                contact
                </a>
            </li>
            @auth
            <li class="px-4 my-2  hover:bg-sky-400 rounded-md py-2 px-4">
              <a href="/posdata">  
                dashboard
                </a>
            </li>
            @endauth
          </ul>
        </div>
     
    
    
    
  </div>
  






   
  
    <div class="absolute right-0 mx-10">
      <x-navbar/>
    </div>
  </nav>