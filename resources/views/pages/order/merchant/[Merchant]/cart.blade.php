<?php

use function Livewire\Volt\{state, mount};
use App\Models\Merchant;

state(['products']);

mount(function (Merchant $merchant) {
    $this->products = $merchant->products;
});
?>
<x-layout.app>
    @volt
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

        <div class="bg-gray-100 min-h-screen">
            <!-- Header -->
            <div class="pb-4">
                <div class="bg-orange-500 w-full flex items-center justify-between p-1">
                    <div class="flex items-center text-white">
                        <a href="/seller/signup" class="hover:text-gray-300">Become a seller!</a>
                    </div>
                </div>
            </div>




            <div class="max-w-screen-lg mx-auto px-4">
                <!-- Search Bar Container -->
                <div
                    class="flex flex-col sm:flex-row items-center bg-white p-4 rounded-lg shadow-lg space-y-2 sm:space-y-0 sm:space-x-4">

                    <!-- Logo -->
                    <a href="/" class="w-64 flex-shrink-0">
                        <img src="https://www.cimb.com.my/en/business/business-solutions/solutions/sme-banking/_jcr_content/root/responsivegrid_1379637002/switch_tab_v2/par-5915a475-bd0c-4b91-b128-6c67a303fada/par_2_copy/responsivegrid_52834_1020517590/responsivegrid/image.img.png/1664944448423/mesinkira-logo.png"
                            alt="MesinKira Logo" class="w-full">
                    </a>

                    <!-- Search Bar -->
                    <div class="flex w-full border rounded-lg overflow-hidden">
                        <input type="text" placeholder="Search for products..." class="w-full p-3 outline-none">
                        <button class="bg-orange-500 text-white px-4 py-3">
                            🔍
                        </button>
                    </div>

                    <!-- Filter Dropdown -->
                    <div class="w-full sm:w-auto">
                        <select class="border rounded-lg px-4 py-3 ">
                            <option value="">All Categories</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="home">Home & Living</option>
                        </select>
                    </div>

                </div>
                <div class="flex flex-col sm:flex-row sm:space-x-2 mt-10 ">
                    <!-- Left Section (Seller Info) -->
                    <div class="w-full sm:w-1/3 bg-white rounded-lg shadow-lg p-4">
                        <div class="flex items-center">
                            <!-- Seller Portrait -->
                            <a href="/gelinkcool3c.my" class="mr-4 w-28 h-28 rounded-full overflow-hidden">
                                <img class="w-full h-full object-cover"
                                    src="https://down-zl-my.img.susercontent.com/cn-11134216-7r98o-lzwt2xru8tya9a_tn.webp"
                                    alt="Seller Portrait">
                            </a>

                            <!-- Seller Info -->
                            <div>
                                <h1 class="text-xl font-semibold text-black">Gelinkcool3C.my</h1>
                                <div class="text-sm text-gray-500">Active 32 minutes ago</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section (Moves Down in Mobile) -->
                    <div class="w-full sm:w-2/3 bg-gray-200 rounded-lg shadow-lg p-4 mt-2 sm:mt-0">
                        <div class="flex p-2">
                            <div class="flex space-x-5">
                                <h1 class="text-sm text-gray-500">Sold : 616</h1>
                                <div class="text-sm text-gray-500">Total product : 666</div>
                            </div>
                        </div>
                        <div class="flex p-2">
                            <div class="flex space-x-5">
                                <h1 class="text-sm text-gray-500">Reviews : 656</h1>
                                <div class="text-sm text-gray-500">Total Rating : 5/5</div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Carousel Section -->
                <div class="w-full mb-10 pt-10">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://down-zl-my.img.susercontent.com/cn-11134210-7r98o-lx97amfowwtfe9.webp"
                                    class="absolute block w-full h-full object-cover" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://down-zl-my.img.susercontent.com/cn-11134210-7r98o-lx97amfou3oj02.webp"
                                    class="absolute block w-full h-full object-cover" alt="...">
                            </div>
                        </div>

                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Checkout Section -->
                <!-- Cart Section -->
                <div class="max-w-screen-lg mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">🛍️ My Cart</h2>

                    <!-- Order Items -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($this->products as $item)
                            <div class="flex items-center bg-white p-4 shadow-lg rounded-lg">
                                <!-- Product Image -->
                                <img src="{{ $item->image_url }}" class="w-24 h-24 object-cover rounded-md">

                                <!-- Product Info -->
                                <div class="ml-4 flex-1">
                                    <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                                    <p class="text-sm text-gray-500">Qty: 2</p>
                                    <p class="text-lg font-semibold text-orange-500 mt-2">RM 3</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Total Price -->
                    <div class="flex justify-between items-center mt-6 border-t pt-4">
                        <h3 class="text-xl font-semibold">Total:</h3>
                        <p class="text-2xl font-bold text-orange-500">RM 3</p>
                    </div>

                    <!-- Checkout Button -->
                    <button
                        class="mt-6 w-full bg-orange-500 text-white py-3 rounded-lg text-lg font-semibold hover:bg-orange-600 transition">
                        Proceed to Checkout 🚀
                    </button>
                </div>

            </div>

        </div>
    @endvolt
</x-layout.app>
