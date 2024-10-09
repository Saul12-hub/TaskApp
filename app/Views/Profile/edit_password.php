<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('profile.title_edit_password') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title"><?= lang('profile.title_edit_password') ?></h1>

    <?php if (session()->has('errors')): ?>
        <div class="notification is-danger">
            <ul>
                <?php foreach (session('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif ?>

    <?= form_open("/profile/updatepassword") ?>

        <div class="field">
            <label class="label" for="current_password"><?= lang('profile.current_password') ?></label>
            <div class="control">
                <input class="input" type="password" name="current_password" id="current_password" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="password"><?= lang('profile.new_password') ?></label>
            <div class="control">
                <input class="input" type="password" name="password" id="password" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="password_confirmation"><?= lang('profile.repeat_new_password') ?></label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"><?= lang('profile.save') ?></button>
            </div>
            <div class="control">
                <a class="button is-secondary" href="<?= site_url("/profile/show") ?>"><?= lang('profile.cancel') ?></a>
            </div>
        </div>

    <?= form_close() ?>
</div>

<?= $this->endSection() ?>