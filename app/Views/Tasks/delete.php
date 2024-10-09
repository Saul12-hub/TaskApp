<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('tasks.delete_task') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('tasks.delete_task') ?></h1>

<p><?= lang('tasks.are_you_sure') ?></p>

<?= form_open("/tasks/delete/" . $task->id) ?>
    <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-danger"><?= lang('tasks.yes') ?></button>
        </div>
        <div class="control">
            <a class="button is-light" href="<?= site_url('/tasks/show/' . $task->id) ?>"><?= lang('tasks.cancel') ?></a>
        </div>
    </div>
<?= form_close() ?>

<?= $this->endSection() ?>