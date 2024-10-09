<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('AdminUsers.new') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title"><?= lang('AdminUsers.new') ?></h1>

    <?php if (session()->has('errors')): ?>
        <div class="notification is-danger">
            <ul>
                <?php foreach (session('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif ?>

    <?= form_open("/admin/users/create") ?>

    <?= $this->include('Admin/Users/form') ?>

    <button class="button is-primary"><?= lang('AdminUsers.new.save') ?></button>
    <a class="button is-light" href="<?= site_url("/admin/users") ?>"><?= lang('AdminUsers.new.cancel') ?></a>

    <?= form_close() ?>
</div>

<?= $this->endSection() ?>