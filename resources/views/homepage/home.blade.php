

@include('partials._header')
<x-nav />
{{-- <div class="  h-screen bg-no-repeat bg-center bg-cover mx-auto">
    <img src="{{URL('images/pos_background.jpg')}}" alt="" class="md:h-screen w-full opacity-80">
   <div>
    <h1 class="uppercase text-4xl font-bold md:pt-20 md:pl-24 -translate-y-48">
        POINT OF SALES
    </h1>
   </div>
   <div>

   </div>
</div> --}}


<div class="py-20 bg-gradient-to-r from-blue-500 to-slate-900"
    >
      <div class="container mx-auto px-6 ">
        <h2 class="text-4xl font-bold mb-2 text-white">
          POINT OF SALES
        </h2>
        <h3 class="text-2xl mb-8 text-gray-200">
          Monitor your sales anywhere you go.
        </h3>
        @if (Auth::guest())
        <form action="/login">
          <button type="submit" class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
            Get Started
          </button>
        </form>
        @else 
        <form action="/">
          <button type="submit" class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
            Learn More
          </button>
        </form>
        
        @endif
      </div>
    </div>


    <section class="container mx-auto px-6 p-10">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
          Features
        </h2>
        <div class="flex items-center flex-wrap mb-20">
          <div class="w-full md:w-1/2 p-10  text-justify">
            <h4 class="text-3xl text-gray-800 font-bold mb-3">Add Product</h4>
            <p class="text-gray-600 mb-8 ">
                Our POS system's "Add Product" function makes it easier to include items in customer transactions. This function offers quick and precise product selection with an intuitive interface. You can easily identify and include things in a sale whether you're running a restaurant, retail store, or any other type of business. In order to ensure smooth and accurate transactions, the system automatically determines prices, applies discounts, and changes inventory in real-time. In addition to improving efficiency, this function also provides a user-friendly environment, streamlining and improving client interactions.

            </p>
          </div>
          <div class="w-full md:w-1/2 items-center justify-center h-auto flex align-middle">
            <img class="w-2/4 h-auto" src="{{URL('images/add.svg')}}" alt="Monitoring" />
          </div>
        </div>
  
        <div class="flex items-center flex-wrap mb-20 ">
            <div class="w-full md:w-1/2 items-center justify-center h-auto flex align-middle">
            <img class="w-2/4 h-auto" src="{{URL('images/delete.svg')}}" alt="Reporting" />
          </div>
          <div class="w-full md:w-1/2 pl-10 md:pr-10 text-justify">
            <h4 class="text-3xl text-gray-800 font-bold mb-3">Delete</h4>
            <p class="text-gray-600 mb-8">
                Our POS system's "Delete Product" option offers a simple and speedy way to remove products from a transaction. This tool, which was made to be simple to use, enables businesses to effectively manage customer orders. No matter what business you work in—retail, hospitality, or another—you can quickly recognize and take things out of a sale. By doing this, transactions are accurate and inconsistencies between records and actual purchases are avoided. The "Delete Product" option improves your POS system's adaptability and precision, which helps to create a seamless and effective customer experience.
            </p>
          </div>
        </div>
  
        <div class="flex items-center flex-wrap mb-20">
          <div class="w-full md:w-1/2 pl-10 text-justify">
            <h4 class="text-3xl text-gray-800 font-bold mb-3">Update</h4>
            <p class="text-gray-600 mb-8">
                Our POS system's "Update Product" feature provides a practical way to quickly and properly change product information. This feature enables you to quickly change product characteristics like prices, descriptions, and availability whether you run a restaurant, a retail store, or any other type of business. A user-friendly interface makes changing product details simple and guarantees precise pricing and inventory control. This feature makes your POS system more adaptable and enables you to react quickly to adjustments to your company's product or service offerings. Overall, the "Update Product" tool helps keep product records current and accurate, enhancing productivity and customer happiness.
            </p>
          </div>
          <div class="w-full md:w-1/2 items-center justify-center h-auto flex align-middle">
            <img class="w-2/4 h-auto" src="{{URL('images/update.svg')}}" alt="Syncing" />
          </div>
        </div>
      </section>


@include('partials._footer')