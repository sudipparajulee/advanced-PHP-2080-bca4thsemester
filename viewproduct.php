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