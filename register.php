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
<script>
    let errortext = document.getElementById('errortext');
    let errormsg = document.getElementById('errormsg');
    function hideError()
    {
        errortext.innerText = '';
        errormsg.classList.add('hidden');
    }
</script>
<?php include 'includes/footer.php'; ?>
<?php 
if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $error = false;
    $errormsg = '';

    if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($password) || empty($confirm_password))
    {
        $error = true;
        $errormsg = 'Please fill in all fields';
    }

    if(strlen($password) < 5 && !$error)
    {
        $error = true;
        $errormsg = 'Password must be at least 5 characters';
    }

    if($password !== $confirm_password && !$error)
    {
        $error = true;
        $errormsg = 'Passwords do not match';
    }

    if($error){
        echo "<script>
            errortext.innerText = '$errormsg';
            errormsg.classList.remove('hidden');
        </script>";
    }

    if(!$error){
        include 'admin/includes/dbconnection.php';
        $qry = "INSERT INTO users (name, email, phone, address, password) VALUES ('$name', '$email', '$phone', '$address', md5('$password'))";
        $result = mysqli_query($conn, $qry);
        if($result){
            echo "<script>
                alert('Registration successful! You can now login.');
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
                errortext.innerText = 'Registration failed. Please try again.';
                errormsg.classList.remove('hidden');
            </script>";
        }
    }
}