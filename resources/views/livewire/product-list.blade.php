
<div class="w-full">
    <!-- Remove py-8 -->
    <div class="">
        
        <div class="grid grid-cols-12">
            <div class="col-span-12 pb-8 px-4 w-full">

        Menu Date: <code>{{$menu_date}}</code>
        <div class="block rounded-lg shadow-lg overflow-hidden bg-white text-center w-40">
            <div class="text-xl bg-red-500 text-white py-1">
                {{date('M',strtotime($menu_date))}}
            </div>
            <div class="pt-5 pb-5 border-l border-r">
                <h2 class="text-3xl font-bold">{{date('d',strtotime($menu_date))}}</h2>
            </div>
            <div class="pb-2 px-2 border-l border-r border-b rounded-lg bottom-0 flex justify-between">
                  <h3 class="text-xl font-bold">{{date('D',strtotime($menu_date))}}</h3>
                  <h3 class="text-xl font-bold">{{date('Y',strtotime($menu_date))}}</h3>
            </div>
        </div>
	    </div>

	    @if(count($products)>0)
            @foreach ($products as $product)
                    <div wire:loading.remove wire:loading.target="changeBrand" class="col-span-6 md:col-span-4 lg:col-span-4 xl:col-span-3 md:flex pb-8 px-4 w-full">
                        <div class="card bordered shadow-lg w-full rounded-box bg-base-200">
                            <figure class="px-4 pt-4">
                                <img src="{{$product->image_file? $product->image_file : 'https://www.kenyons.com/wp-content/uploads/2017/04/default-image-620x600.jpg'}}" class="h-40 object-cover object-center rounded-box bg-cover bg-center">
                            </figure> 
                            <div class="card-body h-30 px-5 pt-4 pb-0">
                            <span class="menu-title text-opacity-50 text-xs text-gray-800">
                                @php
                                try {
                                    $product->brand->name;
                                } catch (\Throwable $th) {
                                    $product->id;
                                }
                                @endphp
                            </span>
                            <h4 class="font-bold text-xs lg:text-md">
                                {{$product->title}}
                            </h4> 
                            <p class="hidden lg:block text-xs mt-2">{{ mb_strimwidth($product->description, 0, 50, "...") }}</p> 
                            </div>
                            <div class="pb-4 px-5 w-full flex justify-between card-actions">
                                <h3 class="text-md font-bold">
                                    ${{$product->price}}
                                </h3>
                                @auth
                                <button wire:click="addToCart({{$product->id}},'{{$menu_date}}')" class="btn btn-primary btn-sm text-sm m-0 rounded-lg">{{__('Add To Cart')}}</button>
                                @else
                                <a href="{{route('login')}}" class="btn btn-primary btn-sm text-sm m-0 rounded-lg">{{__('Add To Cart')}}</a>
                                @endauth
                            </div>
                        </div> 
                        </div> 
            @endforeach
            @endif
            @livewire('add-cart')
            @if ($products)
            <div class="col-span-12 px-4 py-8">
                {{ $products->links() }}
            </div>
            @endif
        </div>

    </div>
</div>
