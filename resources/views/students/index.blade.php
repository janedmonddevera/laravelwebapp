
@include('partials._header', [$title])
<body class="bg-slate-700">
  
{{-- navbar --}}




<?php 
$array = array('title' => 'Point-of-Sales Users');   
?>
<x-nav :data="$array"/>



{{--title of the page--}}
    <header class="max-w-lg mx-auto text-center">
     
    </header>
    <div class="container block w-full">


      <div>

      </div>
       
      <div class="mt-2 py-1  w-3/4 mx-auto ">
        <div class="w-3/4 mx-auto">
          <a href="/add/student" class="text-right align-right bg-sky-500 px-4 py-1 rounded hover:bg-sky-400 text-lg"> Add New</a>
        </div>
       
      </div>
      {{-- table --}}
      <div class="overflow-x-auto overflow-y-auto overflow-y-auto max-h-3/4 relative items-center   w-3/4 mx-auto " >
       
     
        <table class=" w-3/4 mx-auto mt-2 text-sm text-left bg-slate-900 text-gray-300 ">
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
              <th>

              </th>
            </tr>
          </thead>
  
          <tbody class="overflow-x-auto h-32">
            @foreach ($data as $datas)
                
           
            <tr class=" bg-slate-900 text-white border border-slate-300">
              <td class="py-4 px-6  border border-slate-300" >
               {{$datas->first_name}}
              </td>
              <td class="py-4 px-6 border border-slate-300 ">
                {{$datas->last_name}}
              </td>
              <td class="py-4 px-6 border border-slate-300">
                {{$datas->email}}
              </td>
              <td class="py-4 px-6 border border-slate-300">
                {{$datas->age}}
              </td>
              <td class="py-4 px-6 border border-slate-300">
              <a href="/index/{{$datas->id}}" class="bg-sky-500 font-bold text-white py-1 px-4 rounded-md">
                View
              </a>
             </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="items-center w-3/4 mx-auto">
      {{ $data->links() }}
    </div>
      </div>
      
    </div>
    
    </div>
    


@include('partials._footer')