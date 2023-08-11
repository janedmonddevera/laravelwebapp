
<ul class="flex ">

@auth

<li class="p-2">
  <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#cdd0d0}</style><path d="M224 32H64C46.3 32 32 46.3 32 64v64c0 17.7 14.3 32 32 32H441.4c4.2 0 8.3-1.7 11.3-4.7l48-48c6.2-6.2 6.2-16.4 0-22.6l-48-48c-3-3-7.1-4.7-11.3-4.7H288c0-17.7-14.3-32-32-32s-32 14.3-32 32zM480 256c0-17.7-14.3-32-32-32H288V192H224v32H70.6c-4.2 0-8.3 1.7-11.3 4.7l-48 48c-6.2 6.2-6.2 16.4 0 22.6l48 48c3 3 7.1 4.7 11.3 4.7H448c17.7 0 32-14.3 32-32V256zM288 480V384H224v96c0 17.7 14.3 32 32 32s32-14.3 32-32z"/></svg>
</li>
<li>
  <h1 class="p-2">
    name
  </h1>
</li>
<li>
  <form action="/logout" method="POST">
    @csrf
    <button type="submit" class=" py-2 px-4 hover:bg-red-500 rounded-md">Logout</button>
</form>
</li>

@else

<li>
  <a href="/create_account" class="py-1 px-2 bg-lime-100 rounded-md text-black font-bold text-base mr-4 mt-2 hover:bg-sky-500/100 transition ease-in-out delay-300" type="button">Sign up</a>
</li>
<li class="mt-2">
  <a href="/login" type="button" class="py-1 px-2 bg-transparent border-2 border-white text-white rounded-md text-black font-bold text-base  hover:bg-sky-500/100 transition ease-in-out delay-300 hover:border-0">Sign in</a>
</li>
@endauth

   
   
  </ul>