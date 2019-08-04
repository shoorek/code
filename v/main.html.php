
<?php foreach ($scanDir as $key=>$val):?>
    <p>
			<?php if(is_file("data/$val")):?>
          <a href="?c=post&fname=<?php echo $val?>"><?php echo $val ?></a>
			<?php endif; ?>
    </p>
<?php endforeach; ?>