<?php include 'includes/header.php'; ?>

<div class="py-10 flex items-center justify-center bg-gray-50">
    <form action="" class="shadow-lg rounded-lg p-4 bg-white w-96">
        <h2 class="font-bold text-2xl text-center">Login</h2>
        <input type="email" placeholder="Enter Email" class="border p-2 w-full mb-4 mt-2 rounded-lg">
        <input type="password" placeholder="Enter Password" class="border p-2 w-full mb-4 rounded-lg">
        <button class="bg-yellow-600 text-white py-2 rounded-lg w-full">Login</button>
        <p class="text-center mt-4">
            Don't have an account? <a href="register.php" class="text-yellow-600">Register</a>
        </p>
    </form>
</div>

<?php include 'includes/footer.php'; ?>