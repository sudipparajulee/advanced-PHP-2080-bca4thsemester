<?php include 'includes/header.php'; ?>
    <h2 class="font-bold text-xl">Create Category</h2>
    <hr class="h-1 bg-gradient-to-r from-blue-600 to-blue-200 mb-4">
    <form action="">
        <input type="number" placeholder="Enter Priority" class="border rounded-lg px-3 py-2 w-full mb-4 shadow">
        <input type="text" placeholder="Enter Category Name" class="border rounded-lg px-3 py-2 w-full mb-4 shadow">
        <div class="mt-4 flex justify-center gap-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Create Category</button>
            <a href="categories.php" class="bg-red-500 text-white px-10 py-2 rounded-lg">Exit</a>
        </div>
    </form>
<?php include 'includes/footer.php'; ?>