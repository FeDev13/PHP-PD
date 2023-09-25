<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body class="bg-black">
    <div class="items-center mt-10"> 
        <form action="" method="post" class="bg-red-400 w-1/2 mx-auto flex flex-col p-8 rounded-md items-center">
            <label for="" class="text-lg font-bold mb-5">usuario</label>
            <input type="text" name="username" class="w-[30%] rounded-md p-2">
            <label for="" class="text-lg font-bold my-5">contraseña</label>
            <input type="password" name="password" class="w-1/2 rounded-md w-[30%] rounded-md p-2">
            <button type="submit" class=" bg-black mt-10 p-3 w-[30%] rounded-md text-white mx-auto font-bold">Ingresar</button>
        </form>
    </div>
    
</body>
</html>

<?php

$username = $_POST ["username"];
$password = $_POST ["password"];

$storedUser = "fede13";
$storedPass = 1385;

if ($username == $storedUser && $password == $storedPass) {
    echo ("<script>Swal.fire({
        icon: 'success',
        text: 'Bienvenido $username!',
      })</script>");
} else {
    echo ("<script>Swal.fire({
        icon: 'error',
        text: 'Los datos ingresados son incorrectos!',
      })</script>");
}
?>





 






