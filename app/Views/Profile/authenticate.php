<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('profile.title_edit') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title is-2"><?= lang('profile.title_edit') ?></h1>

<p><?= lang('profile.enter_password') ?></p>

<?= form_open("/profile/processauthenticate", ['class' => 'box']) ?>

    <div class="field">
        <label class="label" for="password"><?= lang('profile.password') ?></label>
        <div class="control">
            <input class="input" type="password" name="password" id="password" required>
        </div>
    </div>

    <div class="buttons">
        <button class="button is-primary"><?= lang('profile.send') ?></button>
        <a class="button is-light" href="<?= site_url('/profile/show') ?>"><?= lang('profile.cancel') ?></a>
    </div>

<?= form_close() ?>

<?= $this->endSection() ?>