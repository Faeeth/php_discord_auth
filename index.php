<!doctype html>
<?php
session_start();
if($_SESSION['logged_in']){
  header('Location: dashboard.php');
  exit();
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="flex items-center justify-center h-screen bg-discord-gray">
        <a href="https://discord.com/api/oauth2/authorize?client_id=CHANGEME&redirect_uri=CHANGEME&response_type=code&scope=identify%20guilds" class="bg-discord-blue px-5 py-3 rounded-md hover:bg-gray-600 transition">
            <span class="text-white font-semibold text-xl"><i class="fa-brands fa-discord mr-2"></i> Login with Discord</span>
        </a>
    </div>
</body>
</html>