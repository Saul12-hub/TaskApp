<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('password.email_subject') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title has-text-centered"><?= lang('password.email_subject') ?></h1>

    <?php if (session()->has('errors')) : ?>
        <div class="notification is-danger">
            <ul>
                <?php foreach (session('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <?= form_open("/password/processreset/$token", ['class' => 'box']) ?>

        <div class="field">
            <label class="label" for="password"><?= lang('password.password') ?></label>
            <div class="control">
                <input class="input" type="password" name="password" id="password" placeholder="<?= lang('password.new_password_placeholder') ?>">
            </div>
        </div>

        <div class="field">
            <label class="label" for="password_confirmation"><?= lang('password.repeat_password') ?></label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="<?= lang('password.repeat_password_placeholder') ?>">
            </div>
        </div>

        <div class="control">
            <button class="button is-primary" type="submit"><?= lang('password.reset_password') ?></button>
        </div>

    <?= form_close() ?>
</div>

<?= $this->endSection() ?>
