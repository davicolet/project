<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style type="text/css">

</style>

<?php if (validation_errors()) : ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
	</div>
<?php endif; ?>
<?php if (isset($error)) : ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<?= $error ?>
		</div>
	</div>
<?php endif; ?>
<?= form_open() ?>
<div class="group">
	<input id="username" name="username"  type="text"><span class="highlight"></span><span class="bar"></span>
	<label>User</label>
</div>
<div class="group">
	<input id="password" name="password" type="password"><span class="highlight"></span><span class="bar"></span>
	<label>Password</label>
</div>
<button type="submit" class="button buttonBlue">Login</button>
</form>
