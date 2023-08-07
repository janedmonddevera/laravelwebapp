

<ul class="flex ">

@auth
<li>
  <h1 class="p-2">
    name
  </h1>
</li>
<li>
  <h1 class="p-2">
    image
  </h1>
</li>
<li>
  <form action="/logout" method="POST">
    @csrf
    <button type="submit" class="p-2">Logout</button>
</form>
</li>

@else

<li>
  <a href="/create_account" class="py-1 px-2 bg-lime-100 rounded-md text-black font-bold text-base mr-4 mt-2 hover:bg-sky-500/100" type="button">Sign up</a>
</li>
<li>
  <a href="login" type="button" class="py-1 px-2 bg-zinc-200 rounded-md text-black font-bold text-base mt-2 hover:bg-sky-500/100">Sign in</a>
</li>
@endauth

   
   
  </ul>