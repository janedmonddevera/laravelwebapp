@include('partials._header')
<x-nav /> 
<header class="max-w-lg mx-auto text-center">
    <h1 class="text-4xl p-6">
        LOGIN FORM
    </h1>
</header>

  
<main class="max-w-lg mx-auto bg-slate-500 rounded-lg text-center p-6">
            <section >
                <h1 class="text-white text-2xl pb-4 font-bold">Welcome back to POINT OF SALES</h1>
                <p class="text-white text-xl pb-4" >Sign In</p>
            </section>
            <section class="text-white">
                <form action="/login/process" method="POST">
                    @csrf
                    @error('email')
                    <p class="text-red-500 text-sm">
                        {{$message}}
                        </p>
                @enderror
                    <div class="p-3 bg-slate-100 text-black text-left rounded-lg">
                        <label class="block font-bold" for="email">Email </label>
                        <input class="w-full bg-slate-100 focus:outline-none" type="email" name="email" id="email" placeholder="">
                    </div>
                   <div class="p-3 bg-slate-100 text-black text-left rounded-lg mt-6 mb-6">
                    <label class="block font-bold" for="username">Password </label>
                    <input class="w-full bg-slate-100 focus:outline-none" type="password" name="password" id="password" placeholder="">
                   </div>
                   <button type="submit" class="bg-green-500 shadow-lg py-1 px-4 rounded-md hover:bg-green-700 hover:text-white text-black font-bold transition duration-500">
                    Sign in
                  </button>
                </form>
                
                <a href="/create_account">Don't have an account? Click here</a>
            </section>
        </main>




@include('partials._footer')