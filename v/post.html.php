<?php if (isset($msg) && $msg !=''): ?>
	<div>
		<p class="error" style="background:#EB7893; display: inline-block;border-radius:5px;padding: 10px;color: #fff;font-family: Calibri">
			<?php echo $msg ?>
		</p>
	</div>
<?php endif;?>

<div>
	<p><?php echo $title ?></p>
	<p><?php echo $text ?></p>
</div>
<?php if (!$err): ?>
<a href="?c=edit&fname=<?php echo $fname?>"> Редактировать статью <b><?php echo $fname ?></b></a>
<?php endif; ?>
