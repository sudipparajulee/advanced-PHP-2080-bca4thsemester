<?php include 'includes/header.php'; ?>
    
    <div class="px-20 py-5 flex gap-5">
        <div class="w-1/3">
            <img src="https://picsum.photos/400" alt="" class="w-full rounded-lg">
        </div>
        <div class="w-2/3">
            <h1 class="font-bold text-3xl">Product Name</h1>
            <p class="text-yellow-600 font-bold text-2xl mt-2">Rs. 100 
                <span class="font-normal text-red-500 text-sm line-through">Rs. 120</span>
            </p>
            <span class="text-xs bg-yellow-600 text-white px-1">20% Off</span>
            <p class="mt-4">In Stock: 5</p>
            <div class="flex items-center mt-4">
                <input type="button" value="-" class="bg-gray-200 px-3 py-1 rounded-l-lg cursor-pointer" onclick="decrement()">
                <input type="text" value="1" id="quantity" class="w-12 text-center bg-gray-100 py-1 " disabled>
                <input type="button" value="+" class="bg-gray-200 px-3 py-1 rounded-r-lg cursor-pointer" onclick="increment()">
            </div>
            <button class="bg-yellow-600 text-white py-2 rounded-lg px-4 mt-4">Add to Cart</button>
        </div>
    </div>
    <div class="px-20 py-4">
        <h2 class="font-bold text-2xl mb-2">Description</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa exercitationem nostrum dolorem distinctio! Temporibus quisquam a quidem, eos corrupti aliquam incidunt sit porro praesentium hic commodi voluptatum totam expedita autem dicta. Saepe ad dolore illum, iste voluptatibus libero, soluta qui unde neque officiis fugiat eius. Provident cumque tempora quam quia error velit est magni? Aliquam ullam mollitia culpa perspiciatis saepe modi quod blanditiis aperiam rem! Ex, unde sint quaerat laborum veniam quisquam vero provident error incidunt id asperiores nulla. Nobis doloremque dignissimos ab voluptatibus rerum ea accusantium, optio recusandae sunt cum odit numquam quidem culpa. Dignissimos voluptas harum earum quam.</p>
    </div>
    <div class="px-20 py-5">
        <h1 class="font-bold text-3xl border-l-4 border-yellow-600 pl-2">Related Products</h1>
        <div class="grid grid-cols-5 gap-5">
            <a href="viewproduct.php" class="shadow p-2 rounded-lg hover:shadow-lg relative hover:-translate-y-1 transition-all duration-200">
                <img src="https://picsum.photos/200" alt="" class="w-full rounded-lg">
                <h2 class="font-bold mt-2">Product Name</h2>
                <p class="text-yellow-600 font-bold">Rs. 100 
                    <span class="font-normal text-red-500 text-sm line-through">Rs. 120</span>
                </p>
                <span class="absolute right-0 top-0 text-xs bg-yellow-600 text-white px-1">20% Off</span>
            </a>
            <a href="viewproduct.php" class="shadow p-2 rounded-lg hover:shadow-lg relative hover:-translate-y-1 transition-all duration-200">
                <img src="https://picsum.photos/201" alt="" class="w-full rounded-lg">
                <h2 class="font-bold mt-2">Product Name</h2>
                <p class="text-yellow-600 font-bold">Rs. 100 
                    <span class="font-normal text-red-500 text-sm line-through">Rs. 120</span>
                </p>
                <span class="absolute right-0 top-0 text-xs bg-yellow-600 text-white px-1">20% Off</span>
            </a>
            <a href="viewproduct.php" class="shadow p-2 rounded-lg hover:shadow-lg relative hover:-translate-y-1 transition-all duration-200">
                <img src="https://picsum.photos/202" alt="" class="w-full rounded-lg">
                <h2 class="font-bold mt-2">Product Name</h2>
                <p class="text-yellow-600 font-bold">Rs. 100 
                    <span class="font-normal text-red-500 text-sm line-through">Rs. 120</span>
                </p>
                <span class="absolute right-0 top-0 text-xs bg-yellow-600 text-white px-1">20% Off</span>
            </a>
            <a href="" class="shadow p-2 rounded-lg hover:shadow-lg relative hover:-translate-y-1 transition-all duration-200">
                <img src="https://picsum.photos/203" alt="" class="w-full rounded-lg">
                <h2 class="font-bold mt-2">Product Name</h2>
                <p class="text-yellow-600 font-bold">Rs. 100 
                    <span class="font-normal text-red-500 text-sm line-through">Rs. 120</span>
                </p>
                <span class="absolute right-0 top-0 text-xs bg-yellow-600 text-white px-1">20% Off</span>
            </a>
            <a href="" class="shadow p-2 rounded-lg hover:shadow-lg relative hover:-translate-y-1 transition-all duration-200">
                <img src="https://picsum.photos/204" alt="" class="w-full rounded-lg">
                <h2 class="font-bold mt-2">Product Name</h2>
                <p class="text-yellow-600 font-bold">Rs. 100 
                    <span class="font-normal text-red-500 text-sm line-through">Rs. 120</span>
                </p>
                <span class="absolute right-0 top-0 text-xs bg-yellow-600 text-white px-1">20% Off</span>
            </a>
        </div>
    </div>
    <script>
        let stock = 5;
        let quantity = document.getElementById('quantity');
        function increment(){
            if(quantity.value<stock)
            quantity.value = parseInt(quantity.value) + 1;
        }
        function decrement(){
            if(quantity.value > 1)
            quantity.value = quantity.value - 1;
        }
    </script>

<?php include 'includes/footer.php'; ?>