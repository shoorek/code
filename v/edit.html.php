<?php /*if (isset($msg) && $msg !=''): */?><!--
	<p class="error" style="background:#EB7893; display: inline-block;border-radius:5px;padding: 10px;color: #fff;font-family: Calibri">
		<?php /*echo $msg */?>
	</p>
--><?php /*endif;*/?>

<form action="?c=add" method="post">
	<p>
		<label style="display: block">Enter Title</label>
		<input type="text" name="title" value="<?php echo $title ?>">
	</p>
	<p>
		<label style="display: block">Enter Text</label>
		<textarea name="text" style="width:300px; height:100px;"><?php echo $text ?></textarea>
	</p>
	<p>
		<button type="submit" id="send" name="button">Submit</button>
	</p>
    <div id="result"></div>
</form>
