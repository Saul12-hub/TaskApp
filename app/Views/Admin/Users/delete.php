<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('AdminUsers.delete_user') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title"><?= lang('AdminUsers.delete_user') ?></h1>

    <p><?= lang('AdminUsers.confirm_delete') ?></p>

    <br>

    <?= form_open("/admin/users/delete/" . $user->id) ?>
        <button class="button is-danger"><?= lang('AdminUsers.yes') ?></button>
        <a class="button is-light" href="<?= site_url('/admin/users/show/' . $user->id) ?>"><?= lang('AdminUsers.cancel') ?></a>
    <?= form_close() ?>
</div>

<?= $this->endSection() ?>