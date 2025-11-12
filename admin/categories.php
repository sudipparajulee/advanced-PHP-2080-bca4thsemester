<?php include 'includes/header.php'; ?>
    <h2 class="font-bold text-xl">Categories</h2>
    <hr class="h-1 bg-gradient-to-r from-blue-600 to-blue-200 mb-4">
    <div class="my-4 flex justify-end">
        <a href="createcategory.php" class="bg-gradient-to-r from-blue-500 to-blue-600 px-2 py-1 rounded-lg text-white">Add Category</a>
    </div>
    <table class="w-full">
        <tr class="bg-blue-500 text-white">
            <th class="p-2 border">S.N.</th>
            <th class="p-2 border">Priority</th>
            <th class="p-2 border">Category Name</th>
            <th class="p-2 border">Action</th>
        </tr>
        <tr class="text-center">
            <td class="p-2 border">1</td>
            <td class="p-2 border">2</td>
            <td class="p-2 border">Category 1</td>
            <td class="p-2 border">
                <a href="" class="bg-gradient-to-r from-blue-500 to-blue-600 px-2 py-0.5 rounded text-white">Edit</a>
                <a href="" class="bg-gradient-to-r from-red-500 to-red-600 px-2 py-0.5 rounded text-white">Delete</a>
            </td>
        </tr>
    </table>
<?php include 'includes/footer.php'; ?>