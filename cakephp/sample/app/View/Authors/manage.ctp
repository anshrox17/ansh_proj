<?php if ($error) { ?>
<h2>Error</h2>

<p class='error'>Please make sure all the required information has been filled in.</p>

<?php } ?>

<?php echo $html->formTag('/authors/manage/'); ?>

	<label for="name">Full Name</label>
	<?php 
	echo $html->input('Author/name');
	?>

	<br />
	
	<label for="email">Email</label>
	<?php
	echo $html->input('Author/email');
	?>
	
	<br />
	
	<label for="email">Bio</label>

	<?php
	echo $html->textarea('Author/bio', array('cols'=>'60', 'rows'=>'10'));
	?>
	
<br />

<?php echo $html->submit("Update"); ?>

</form>