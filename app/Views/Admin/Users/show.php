<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Tasks.user') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title"><?= lang('Tasks.user') ?></h1>

    <a class="button is-link" href="<?= site_url('/admin/users') ?>">&laquo; <?= lang('Tasks.back_to_index') ?></a>

    <dl class="description">
        <dt class="is-size-5 has-text-weight-bold"><?= lang('Signup.name') ?></dt>
        <dd><?= esc($user->name) ?></dd>

        <dt class="is-size-5 has-text-weight-bold"><?= lang('Signup.email') ?></dt>
        <dd><?= esc($user->email) ?></dd>

        <dt class="is-size-5 has-text-weight-bold"><?= lang('Tasks.active') ?></dt>
        <dd><?= $user->is_active ? lang('Tasks.yes') : lang('Tasks.no') ?></dd>

        <dt class="is-size-5 has-text-weight-bold"><?= lang('Tasks.administrator') ?></dt>
        <dd><?= $user->is_admin ? lang('Tasks.yes') : lang('Tasks.no') ?></dd>

        <dt class="is-size-5 has-text-weight-bold"><?= lang('Tasks.created_at') ?></dt>
        <dd><?= $user->created_at ?></dd>

        <dt class="is-size-5 has-text-weight-bold"><?= lang('Tasks.updated_at') ?></dt>
        <dd><?= $user->updated_at ?></dd>
    </dl>

    <a class="button is-warning" href="<?= site_url('/admin/users/edit/' . $user->id) ?>"><?= lang('Tasks.edit') ?></a>

    <?php if ($user->id != current_user()->id): ?>
        <a class="button is-danger" href="<?= site_url('/admin/users/delete/' . $user->id) ?>"><?= lang('Tasks.delete') ?></a>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>