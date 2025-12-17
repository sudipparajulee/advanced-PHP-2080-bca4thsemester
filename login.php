<?php include 'includes/header.php'; ?>

<div class="py-10 flex flex-col gap-4 items-center justify-center bg-gray-50">
    <div class="relative hidden" id="errormsg">
        <h2 id="errortext" class="px-5 py-2 bg-red-200 font-bold">Please fill all the fields</h2>
        <span class="absolute -top-5 -right-3 font-bold p-2 cursor-pointer" onclick="hideError()">X</span>
    </div>
    <form action="" class="shadow-lg rounded-lg p-4 bg-white w-96" method="POST">
        <h2 class="font-bold text-2xl text-center">Login</h2>
        <input type="email" name="email" placeholder="Enter Email" class="border p-2 w-full mb-4 mt-2 rounded-lg">
        <input type="password" name="password" placeholder="Enter Password" class="border p-2 w-full mb-4 rounded-lg">
        <button name="login" class="bg-yellow-600 text-white py-2 rounded-lg w-full">Login</button>
        <p class="text-center mt-4">
            Don't have an account? <a href="register.php" class="text-yellow-600">Register</a>
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
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = false;
    $errormsg = '';
    if(empty($email) || empty($password))
    {
        $error = true;
        $errormsg = 'Please fill in all fields';
    }
    //password must be at least 5
    if(strlen($password) < 5 && !$error)
    {
        $error = true;
        $errormsg = 'Password must be at least 5 characters';
    }

    if($error){
        echo "<script>
            errortext.innerText = '$errormsg';
            errormsg.classList.remove('hidden');
        </script>";
    }

    //everything is fine, proceed to login
    if(!$error){
        include 'admin/includes/dbconnection.php';
        $qry = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $qry);
        $user = mysqli_fetch_assoc($result);
        $pass = $_POST['password'];
        if($user && password_verify($pass, $user['password'])){
            //login successful
            echo "<script>
                window.location.href = 'admin/dashboard.php';
            </script>";
        } else {
            echo "<script>
                errortext.innerText = 'Invalid email or password';
                errormsg.classList.remove('hidden');
            </script>";
        }
    }
}
?>