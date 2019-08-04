
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
	<title><?php echo $titlePage ?></title>
</head>
<body>
<a href="?c=add">Добавить статью</a> <br>
<a href="/">Home</a>
<hr>

<?php echo $content ?>

<!-- <div class="show-js">
    <input type="button" id="show-id" value="Показать мой IP">
    <div id="myip"></div>
</div> -->
<div class="calc">
    <div class="buttons">
        <button data-type='*'>*</button>
        <button data-type='/'>/</button>
        <button data-type='-'>—</button>
        <button data-type='+'>+</button>
        <button class="equal" data-type='='>=</button>
    </div>


<input type="text" class="num">
<span class="res">0</span>

</div>
<script src="../assets/js.js"></script>
</body>
</html>