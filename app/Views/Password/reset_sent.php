<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title has-text-centered"><?= lang('password.title_reset') ?></h1>

    <div class="notification is-info has-text-centered">
        <p><?= lang('password.reset_requested') ?></p>
    </div>
</div>

<?= $this->endSection() ?>
