<?php include_once 'header.php'; ?>

<div id="content">
 <div id="content_cen">
  <div id="content_sup" class="head_pad">
   <div id="welcom_pan">
    <h2><span>USTS</span> Beneficiary Information</h2>
	<?php if ( $errors !== false ): ?>
	<?php foreach ($errors as $e ): ?>
	<p class="red"><?=$e?></p>
	<?php endforeach; ?>
	<?php endif; ?>
   </div>
   <div id="service_pan">
	<form action="index.php?c=register&e=deposit" method="post" name="register_ben_info">
	<table>
		<tr>
			<td>Beneficiary</td>
			<td><input class="txt" type="text" required name="beneficiary" value="<?=htmlspecialchars($data['bi'])?>" /></td>
		</tr>
		<tr>
			<td><button class="btn" type="button" onclick="parent.location='index.php?c=register&e=personalinfo'">Back</button></td>
			<td><input class="btn" name="bi_submit" type="submit" value="Save" /></td>
			<td><button class="btn" type="button" onclick="parent.location='index.php?c=register&e=cancel'">Cancel</button></td>
		</tr>
	</table>
	</form>
   </div>
  </div>
 </div>
</div>

<?php include_once 'footer.php'; ?>
