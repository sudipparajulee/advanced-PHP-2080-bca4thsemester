<?php include 'includes/header.php'; ?>
<div class="py-10 flex flex-col gap-4 items-center justify-center bg-gray-50">
    <div class="relative hidden" id="errormsg">
        <h2 id="errortext" class="px-5 py-2 bg-red-200 font-bold">Please fill all the fields</h2>
        <span class="absolute -top-5 -right-3 font-bold p-2 cursor-pointer" onclick="hideError()">X</span>
    </div>
    <form action="" class="shadow-lg rounded-lg p-4 bg-white w-96" method="POST">
        <h2 class="font-bold text-2xl text-center">Register</h2>
        <input type="text" name="name" placeholder="Enter Name" class="border p-2 w-full mb-4 mt-2 rounded-lg">
        <input type="email" name="email" placeholder="Enter Email" class="border p-2 w-full mb-4 rounded-lg">
        <input type="text" name="phone" placeholder="Enter Phone" class="border p-2 w-full mb-4 rounded-lg">
        <input type="text" name="address" placeholder="Enter Address" class="border p-2 w-full mb-4 rounded-lg">
        <input type="password" name="password" placeholder="Enter Password" class="border p-2 w-full mb-4 rounded-lg">
        <input type="password" name="confirm_password" placeholder="Enter Confirm Password" class="border p-2 w-full mb-4 rounded-lg">
        <button name="register" class="bg-yellow-600 text-white py-2 rounded-lg w-full">Register</button>
        <p class="text-center mt-4">
            Already have an account? <a href="login.php" class="text-yellow-600">Login</a>
        </p>
    </form>
</div>
<?php include 'includes/footer.php'; ?>