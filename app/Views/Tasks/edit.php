<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('tasks.edit_task') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('tasks.edit_task') ?></h1>

<?php if (session()->has('errors')): ?>
    <div class="notification is-danger">
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>

<?= form_open("/tasks/update/" . $task->id) ?>

    <?= $this->include('Tasks/form') ?>

    <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-primary"><?= lang('tasks.save') ?></button>
        </div>
        <div class="control">
            <a class="button is-light" href="<?= site_url("/tasks/show/" . $task->id) ?>"><?= lang('tasks.cancel') ?></a>
        </div>
    </div>

<?= form_close() ?>

<?= $this->endSection() ?>