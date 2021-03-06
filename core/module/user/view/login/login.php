<form method="post">
	<div class="row">
		<div class="col6">
			<?php echo template::text('userLoginId', [
				'label' => 'Identifiant'
			]); ?>
		</div>
		<div class="col6">
			<?php echo template::password('userLoginPassword', [
				'label' => 'Mot de passe'
			]); ?>
		</div>
	</div>
	<div class="row">
		<div class="col6">
			<?php echo template::checkbox('userLoginLongTime', true, 'Se souvenir de moi'); ?>

		</div>
		<div class="col6 textAlignRight">
			<a href="<?php echo helper::baseUrl(); ?>user/forgot/<?php echo $this->getUrl(2); ?>"><?php echo helper::translate('Mot de passe perdu ?'); ?></a>
		</div>
	</div>
	<div class="row">
		<div class="col3 offset6">
			<?php echo template::button('userLoginBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() . str_replace('_', '/', str_replace('__', '#', $this->getUrl(2))),
				'ico' => 'left',
				'value' => 'Annuler'
			]); ?>
		</div>
		<div class="col3">
			<?php echo template::submit('userLoginSubmit', [
				'value' => 'Connexion'
			]); ?>
		</div>
	</div>
</form>