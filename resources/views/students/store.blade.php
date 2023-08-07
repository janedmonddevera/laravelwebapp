@include('partials._header', [$title])

<header class="max-w-lg mx-auto text-center">
    <h1 class="text-4xl p-6">
        LOGIN FORM
    </h1>
</header>



<main class="max-w-lg mx-auto bg-slate-500 rounded-lg text-center p-6">
    <section >
        <h1 class="text-white text-2xl pb-4 font-bold">Add new item</h1>
 
    </section>
    <section class="text-white">
        <form action="/add/student" method="POST">
            @csrf
            @error('email')
            <p class="text-red-500 text-sm">
                {{$message}}
                </p>
        @enderror
            <div class="p-3 bg-slate-100 text-black text-left rounded-lg mb-4">
                <label class="block font-bold" for="first_name">First Name </label>
                <input class="w-full bg-slate-100 focus:outline-none" type="text" name="first_name" id="first_name" placeholder="">
                @error('first_name')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
            @enderror
            </div>
            <div class=" mb-4 p-3 bg-slate-100 text-black text-left rounded-lg">
                <label class="block font-bold" for="last_name">Last Name </label>
                <input class="w-full bg-slate-100 focus:outline-none" type="text" name="last_name" id="last_name" placeholder="">
                @error('last_name')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-4 p-3 bg-slate-100 text-black text-left rounded-lg">
                <label class="block font-bold" for="f">Age </label>
                <input class="w-full bg-slate-100 focus:outline-none" type="number" name="age" id="age" placeholder="">
                @error('age')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
                @enderror
            </div>
            <div class="p-3 bg-slate-100 text-black text-left rounded-lg">
                <label class="block font-bold" for="f">Email </label>
                <input class="w-full bg-slate-100 focus:outline-none" type="email" name="email" id="email" placeholder="">
                @error('email')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
                @enderror
            </div>
           
           <button type="submit" class="mt-4 bg-green-500 shadow-lg py-1 px-4 rounded-md hover:bg-green-700 hover:text-white text-black font-bold transition duration-500">
            Sign in
          </button>
        </form>
        
        <a href="/create_account">Don't have an account? Click here</a>
    </section>
</main>

@include('partials._footer')