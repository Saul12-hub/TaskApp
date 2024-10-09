<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('password.title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <h1 class="title has-text-centered"><?= lang('password.title') ?></h1>

    <?= form_open("/password/processforgot", ['class' => 'box']) ?>

        <div class="field">
            <label class="label" for="email"><?= lang('password.email') ?></label>
            <div class="control">
                <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>" placeholder="Enter your email">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit"><?= lang('password.send') ?></button>
            </div>
        </div>

    <?= form_close() ?>
</div>

<?= $this->endSection() ?>