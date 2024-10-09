<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('tasks.new') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('tasks.new') ?></h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach (session('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/tasks/create") ?>

<?= $this->include('Tasks/form') ?>

    <button class="button is-primary"><?= lang('tasks.save') ?></button>
    <a class="button is-light" href="<?= site_url("/tasks") ?>"><?= lang('tasks.cancel') ?></a>

<?= form_close() ?>

<?= $this->endSection() ?>