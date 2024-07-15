<div class="py-2 border border-black rounded">
    <div class="group relative  px-4">
        @if($product->quantity)

        <a href="">
            @endif
            <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            @if($product->quantity)
        </a>
        @endif

        <div class="flex items-center justify-between  pt-4">

            <div>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-700">{{ $product->name }}</p>
            </div>
            @if($product->quantity )

            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">{{
                    ($product->formatted_price) }}  TTC</p>
            </div>

            @else
            <p class="text-red-500">Rupture de stock</p>
            @endif
        </div>
        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{
            $product->description }}
            {{-- <span>
                <a class="text-indigo-500" href="">En savoir plus</a>
             </span> --}}
            </p>
            {{-- Ajouter au panier if login --}}



        {{-- <add-to-cart :product-id="{{ $product->id }}"></add-to-cart> --}}
        <!-- Modal toggle -->


{{-- <div class='flex items-center justify-between py-4'>
    <a class="bg-indigo-500 text-white p-2"  href="#">Commander</a>
</div> --}}
{{-- ajouter au panier --}}
{{-- @if($product->quantity )
@if (Route::has('login'))
@auth
 <add-to-cart :product-id="{{ $product->id }}"></add-to-cart>

@else

<commande></commande>
@endauth
@endif
@endif --}}

{{-- voir les détails --}}
<div class='flex items-center justify-between py-4'>
    <a class="bg-indigo-500 text-white p-2"  href="{{ route('product.show',['slug'=> $product->slug]) }}">Voir les détails</a>
</div>

         {{-- <div class='flex items-center justify-between py-4'>
            <button class="bg-indigo-500 text-white p-2">Ajouter au panier</button>

        </div> --}}

    </div>
</div>
