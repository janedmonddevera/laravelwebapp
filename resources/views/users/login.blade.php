@include('partials._header')
<body class="bg-gradient-to-r from-blue-500 to-slate-900">
<x-nav /> 
<header class="max-w-lg mx-auto text-center">
   
</header>

  
<main class="max-w-lg mx-auto bg-slate-900 rounded-lg  p-6 mt-10">
            <section class="text-center" >
                <h1 class="text-white text-2xl uppercase pb-4 font-bold">Welcome back to POINT OF SALES</h1>
                <div class="mt-4 mb-4 grid grid-cols-3 items-center text-white">
                    <hr class="border-white" />
                    <p class="text-center text-lg uppercase">Sign In</p>
                    <hr class="border-white" />
                  </div>
            </section>
            <section class="text-white">
                <form action="/login/process" method="POST">
                    @csrf
                    @error('email')
                    <p class="text-red-500 text-sm">
                        {{$message}}
                        </p>
                @enderror
                <div class="p-3  text-white text-left ">
                    <label class="block font-bold" for="email">Email Address </label>
                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 text-black py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>

                    </div>
                   <div class="p-3  text-white text-left rounded-lg  ">
                    <label class="block font-bold" for="username">Password </label>
                    <input class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 text-black focus:bg-white focus:outline-none" type="password" name="password" id="password" placeholder="">
                   </div>
                   <div class="p-3  text-black text-left rounded-lg ">
                   <button type="submit" class="px-4  w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                   px-4 py-3 ">
                   Log In
                </button>
                    </div>
                
                </form>
                <div class="mt-4 mb-4 grid grid-cols-3 items-center text-white">
                    <hr class="border-white" />
                    <p class="text-center text-sm">OR</p>
                    <hr class="border-white" />
                  </div>
                <form action="/create_account">
                <div class="p-3  text-black text-left rounded-lg ">
                    <h1 class="text-center tex-sm text-white">Don't Have an Account?</h1>
                    <button type="submit" class="px-4  w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                    px-4 py-3 ">
                    Sign Up
                 </button>
                     </div>
                    </form>
            </section>
        </main>




@include('partials._footer')