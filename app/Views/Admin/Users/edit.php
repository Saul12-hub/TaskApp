<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profile.title_edit') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title"><?= lang('Profile.title_edit') ?></h1>

    <?php if (session()->has('errors')): ?>
        <div class="notification is-danger">
            <ul>
                <?php foreach (session('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif ?>

    <?= form_open("/admin/users/update/" . $user->id) ?>

    <?= $this->include('Admin/Users/form') ?>

    <button class="button is-primary"><?= lang('profile.save') ?></button>
    <a class="button is-light" href="<?= site_url("/admin/users/show/" . $user->id) ?>"><?= lang('profile.cancel') ?></a>

    <?= form_close() ?>
</div>

<?= $this->endSection() ?>