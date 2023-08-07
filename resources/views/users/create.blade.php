@include('partials._header')
<x-nav /> 
<header class="max-w-lg mx-auto text-center">
    <h1 class="text-4xl p-6">
        Register Account
    </h1>
</header>

<main class="max-w-lg mx-auto bg-slate-500 rounded-lg text-center p-6">
    <section >
        <h1 class="text-white text-2xl pb-4 font-bold">Welcome to Dick system</h1>
        <p class="text-white text-xl pb-4" >Create your Account</p>
    </section>
    <section class="text-white">
        <form action="/main" method="POST">

            @csrf

            <div class="p-3 bg-slate-100 text-black text-left rounded-lg mb-6">
                <label class="block font-bold" for="email">Email </label>
                <input class="bg-slate-100 focus:outline-none w-full" type="email" name="email" id="email" placeholder="">
                    @error('email')
                        <p class="text-red-500 text-sm">
                            {{$message}}
                            </p>
                    @enderror
            </div>
            <div class="p-3 bg-slate-100 text-black text-left rounded-lg">
                <label class="block font-bold" for="name">Username </label>
                <input class="bg-slate-100 focus:outline-none w-full" type="text" name="name" id="name" placeholder="">
                @error('name')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
            @enderror
            </div>
           <div class="p-3 bg-slate-100 text-black text-left rounded-lg mt-6 mb-6">
            <label class="block font-bold" for="password">Password: </label>
            <input class="bg-slate-100 focus:outline-none w-full" type="password" name="password" id="password" placeholder="">
            @error('password')
            <p class="text-red-500 text-sm">
                {{$message}}
                </p>
        @enderror
        </div>
           <div class="p-3 bg-slate-100 text-black text-left rounded-lg mt-6 mb-6">
            <label class="block font-bold" for="password_confirmation">Confirm Password: </label>
            <input class="bg-slate-100 focus:outline-none w-full" type="password" name="password_confirmation" id="password_confirmation" placeholder="">
            @error('password')
            <p class="text-red-500 text-sm">
                {{$message}}
                </p>
        @enderror
        </div>
           <button type="submit" class="bg-green-500 shadow-lg py-1 px-4 rounded-md hover:bg-green-700 hover:text-white text-black font-bold transition duration-500">
            Create Account
          </button>
        </form>
        <a href="/login" class="p-2">Already have an account? Click here</a>
    </section>
</main>

@include('partials._footer')