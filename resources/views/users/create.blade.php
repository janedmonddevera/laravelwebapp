@include('partials._header')
<body class="bg-gradient-to-r from-blue-500 to-slate-900">

<x-nav /> 
<header class="max-w-lg mx-auto text-center">
 
</header>

<main class="max-w-lg mx-auto bg-slate-900 rounded-lg text-center p-6  mt-10">
    <section >
        <h1 class="text-white text-2xl pb-4 font-bold">Welcome to Dick system</h1>
        <div class="mt-4 mb-4 grid grid-cols-3 items-center text-white">
            <hr class="border-white" />
            <p class="text-center text-lg uppercase">create  Account</p>
            <hr class="border-white" />
          </div>
    </section>
    <section class="text-white">
        <form action="/main" method="POST">

            @csrf
            <div class="p-3  text-white text-left ">
                <label class="block font-bold" for="email">Email Address </label>
            <input type="email" name="email" id="email" placeholder="Enter Email Address" class=" text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
            @error('email')
            <p class="text-red-500 text-sm">
                {{$message}}
                </p>
        @enderror
                </div>
           
                <div class="p-3  text-white text-left ">
                <label class="block font-bold" for="name">Username </label>
                  <input type="text" name="name" id="name" placeholder="Username" class=" text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
                @error('name')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
            @enderror
            </div>
            <div class="p-3  text-white text-left ">
            <label class="block font-bold" for="password">Password: </label>
            <input class="text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" type="password" name="password" id="password" placeholder="">
            @error('password')
            <p class="text-red-500 text-sm">
                {{$message}}
                </p>
        @enderror
        </div>
        <div class="p-3  text-white text-left ">
            <label class="block font-bold" for="password_confirmation">Confirm Password: </label>
            <input class="text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" type="password" name="password_confirmation" id="password_confirmation" placeholder="">
            @error('password')
            <p class="text-red-500 text-sm">
                {{$message}}
                </p>
        @enderror
        </div>
        <div class="p-3  text-black text-left rounded-lg ">
            <button type="submit" class="px-4  w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
            px-4 py-3 ">
            Create Account
         </button>
             </div>
        </form>
        <div class="mt-4 mb-4 grid grid-cols-3 items-center text-white">
            <hr class="border-white" />
            <p class="text-center text-sm">OR</p>
            <hr class="border-white" />
          </div>
        <form action="/login">
            <div class="p-3  text-black text-left rounded-lg ">
                <h1 class="text-center tex-sm text-white">Already Have an Account?</h1>
                <button type="submit" class="px-4  w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                px-4 py-3 ">
                Sign in
             </button>
                 </div>
                </form>
    </section>
</main>

@include('partials._footer')