<?php $this->extend('_templates/default-nav', [], 'outer_box'); ?>

<div class="box table-list-wrap">
	<div class="tbl-ctrls">
		<?=form_open($base_url)?>
			<fieldset class="tbl-search right">
				<a class="btn action" href="<?=$create_url?>"><?=lang('new')?></a>
				<a class="btn action" href="#" rel="import-channel"><?=lang('import')?></a>
			</fieldset>
			<h1><?=$cp_page_title?></h1>
			<div class="app-notice-wrap"><?=ee('CP/Alert')->getAllInlines()?></div>
			<?php $this->embed('_shared/table-list', ['data' => $channels]); ?>
			<?php if (isset($pagination)) echo $pagination; ?>
			<fieldset class="tbl-bulk-act hidden">
				<select name="bulk_action">
					<option>-- <?=lang('with_selected')?> --</option>
					<?php if (ee()->cp->allowed_group('can_delete_channels')): ?>
						<option value="remove" data-confirm-trigger="selected" rel="modal-confirm-remove"><?=lang('remove')?></option>
					<?php endif ?>
				</select>
				<input class="btn submit" data-conditional-modal="confirm-trigger" type="submit" value="<?=lang('submit')?>">
			</fieldset>
		</form>
	</div>
</div>

<?php

$modal_vars = array(
	'name'		=> 'modal-confirm-remove',
	'form_url'	=> ee('CP/URL')->make('channels', ee()->cp->get_url_state()),
	'hidden'	=> array(
		'bulk_action'	=> 'remove'
	)
);

$modal = $this->make('ee:_shared/modal_confirm_remove')->render($modal_vars);
ee('CP/Modal')->addModal('remove', $modal);
?>
