<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('profileimage.edit_title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('profileimage.delete_title') ?></h1>

<p><?= lang('profileimage.are_you_sure') ?> <?= lang('profileimage.edit_title') ?>?</p>

<?= form_open("/profileimage/delete", ['class' => 'box']) ?>

    <div class="field is-grouped mt-4">
        <div class="control">
            <button type="submit" class="button is-danger"><?= lang('profileimage.yes') ?></button>
        </div>
        <div class="control">
            <a class="button is-light" href="<?= site_url("/profile/show") ?>"><?= lang('profile.cancel') ?></a>
        </div>
    </div>

<?= form_close() ?>

<?= $this->endSection() ?>