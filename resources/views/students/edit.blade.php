@include('partials._header')
<body class="bg-gradient-to-r from-blue-500 to-slate-900">

<x-nav /> 
<header class="max-w-lg mx-auto text-center">
 
</header>

<main class="max-w-lg mx-auto bg-slate-900 rounded-lg text-center p-6  mt-10">
    <section >
        <div class="mt-4 mb-4 grid grid-cols-3 items-center text-white">
            <hr class="border-white" />
            <p class="text-center text-lg uppercase">Edit {{$student->first_name}} {{$student->last_name}} </p>
            <hr class="border-white" />
          </div>
    </section>
    <section class="text-white">
        <form action="/index/{{$student->id}} " method="POST" >

            @method('PUT')
            @csrf
            <div class="p-3  text-white text-left ">
                <label class="block font-bold" for="first_name">First Name </label>
                  <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" class=" text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autocomplete="off" value={{$student->first_name}}>
                @error('first_name')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
            @enderror
            </div>
            <div class="p-3  text-white text-left ">
                <label class="block font-bold" for="last_name">Last Name </label>
                  <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" class=" text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autocomplete="off"   value={{$student->last_name}}>
                @error('last_name')
                <p class="text-red-500 text-sm">
                    {{$message}}
                    </p>
            @enderror
            </div>
            <div class="p-3  text-white text-left ">
                <label class="block font-bold" for="email">Email Address </label>
            <input type="email" name="email" id="email" placeholder="Enter Email Address" class=" text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"  autocomplete="off"  value={{$student->email}}>
            @error('email')
            <p class="text-red-500 text-sm">
                {{$message}}
                </p>
        @enderror
                </div>
                <div class="p-3  text-white text-left ">
                    <label class="block font-bold" for="age">Age </label>
                      <input type="number" name="age" id="age" placeholder="Enter Age" class=" text-black w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"  autocomplete="off"  value={{$student->age}}>
                    @error('age')
                    <p class="text-red-500 text-sm">
                        {{$message}}
                        </p>
                @enderror
                </div>
               
           
       
        <div class="p-3  text-black text-left rounded-lg ">
            <button type="submit" class="px-4  w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
            px-4 py-3 ">
            Update
         </button>
             </div>
        </form>
        
        <form action="/index/{{$student->id}}" method="POST">
            @csrf
            @method('PUT')
           <div class="p-3  text-black text-left rounded-lg ">
            <button type="submit" class="px-4  w-full block bg-red-600 hover:bg-red-300 focus:bg-red-200 text-white font-semibold rounded-lg
            px-4 py-3 ">
            Delete
        </button>
             </div>
        </form>
    </section>
</main>

@include('partials._footer')