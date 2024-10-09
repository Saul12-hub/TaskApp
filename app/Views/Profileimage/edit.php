<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('profileimage.edit_title') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('profileimage.edit_title') ?></h1>

<?= form_open_multipart("/profileimage/update", ['class' => 'box']) ?>

    <div class="file has-name">
        <label class="file-label">
            <input class="file-input" type="file" name="image" />
            <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label"><?= lang('profileimage.choose_a_file') ?></span>
            </span>
            <span class="file-name">
                <?= lang('profileimage.no_file') ?>
            </span>
        </label>
    </div>

    <div class="field is-grouped mt-4">
        <div class="control">
            <button type="submit" class="button is-primary"><?= lang('profileimage.upload') ?></button>
        </div>
        <div class="control">
            <a class="button is-light" href="<?= site_url("/profile/show") ?>"><?= lang('profileimage.cancel') ?></a>
        </div>
    </div>

<?= form_close() ?>

<?= $this->endSection() ?>