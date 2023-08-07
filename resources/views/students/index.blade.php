
@include('partials._header', [$title])

{{-- navbar --}}





<?php 
$array = array('title' => 'Point-of-Sales Users');   
?>
<x-nav :data="$array"/>




{{--title of the page--}}
    <header class="max-w-lg mx-auto text-center">
      <h1 class="text-4xl p-6">
          POINT OF SALES
      </h1>
    </header>
    <div class="container flex w-full">


      <div class="w-2/12 max-h-screen bg-slate-900 hidden md:block text-white mr-4 rounded-lg ml-6">
        <a href="/add/student"> Create new</a>
      
      </div>
      {{-- table --}}
      <div class="overflow-x-auto overflow-y-auto overflow-y-auto max-h-screen relative bg-slate-900  w-full  float-right justify-end rounded-lg" >
        <table class=" w-full text-sm text-left bg-slate-900 text-gray-300 ">
          <thead class="text-white text-xs font-bold text-slate-900 uppercase border border-slate-300 bg-slate-500 text-center">
            <tr>
              <th class="p-6 border border-slate-300 " scope="col">
                <h1>First Name</h1>
              </th>
              <th class="p-6 border border-slate-300" scope="col">
                <h1>Last Name</h1>
              </th>
              <th class="p-6 border border-slate-300" scope="col">
                <h1>Email</h1>
              </th>
              <th class="p-6 border border-slate-300" scope="col">
                <h1>Age</h1>
              </th>
            </tr>
          </thead>
  
          <tbody class="overflow-x-auto h-32">
            @foreach ($data as $datum)
                
           
            <tr class=" bg-slate-900 text-white border border-slate-300">
              <td class="py-4 px-6  border border-slate-300" >
               {{$datum->first_name}}
              </td>
              <td class="py-4 px-6 border border-slate-300 ">
                {{$datum->last_name}}
              </td>
              <td class="py-4 px-6 border border-slate-300">
                {{$datum->email}}
              </td>
              <td class="py-4 px-6 border border-slate-300">
                {{$datum->age}}
              </td>
             
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
    
    </div>
    


@include('partials._footer')