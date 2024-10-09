<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('tasks.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('tasks.title') ?></h1>

<a class="button is-link" href="<?= site_url('/tasks') ?>">&laquo; <?= lang('tasks.back_to_index') ?></a>

<div class="content">
    <dl>
        <dt class="has-text-weight-bold"><?= lang('tasks.id') ?></dt>
        <dd><?= $task->id ?></dd>

        <dt class="has-text-weight-bold"><?= lang('tasks.description') ?></dt>
        <dd><?= esc($task->description) ?></dd>

        <dt class="has-text-weight-bold"><?= lang('tasks.created_at') ?></dt>
        <dd><?= $task->created_at ?></dd>

        <dt class="has-text-weight-bold"><?= lang('tasks.updated_at') ?></dt>
        <dd><?= $task->updated_at ?></dd>
    </dl>

    <div class="field is-grouped">
        <div class="control">
            <a class="button is-warning" href="<?= site_url('/tasks/edit/' . $task->id) ?>"><?= lang('tasks.edit') ?></a>
        </div>
        <div class="control">
            <a class="button is-danger" href="<?= site_url('/tasks/delete/' . $task->id) ?>"><?= lang('tasks.delete') ?></a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>