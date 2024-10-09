<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('password.title_reset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title has-text-centered"><?= lang('password.title_reset') ?></h1>

    <div class="notification is-success has-text-centered">
        <p><?= lang('password.reset_success') ?></p>
    </div>

    <p class="has-text-centered">
        <a class="button is-link" href="<?= site_url("/{$locale}/login") ?>"><?= lang('Login.log_in') ?></a>
    </p>
</div>

<?= $this->endSection() ?>