<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('profile.title_edit') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('profile.title') ?></h1>

<?php if ($user->profile_image): ?>
    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="<?= lang('profile.profile_image') ?>">
    <div class="control">
        <a class="button is-danger" href="<?= site_url('/profileimage/delete') ?>"><?= lang('profile.delete_profile_image') ?></a>
    </div>
<?php else: ?>
    <img src="<?= site_url('/images/blank.png') ?>" width="200" height="200" alt="<?= lang('profile.profile_image') ?>">
<?php endif; ?>  

<div class="content">
    <dl>
        <dt class="has-text-weight-bold"><?= lang('profile.name') ?></dt>
        <dd><?= esc($user->name) ?></dd>

        <dt class="has-text-weight-bold"><?= lang('profile.email') ?></dt>
        <dd><?= esc($user->email) ?></dd>
    </dl>
</div>

<div class="field is-grouped">
    <div class="control">
        <a class="button is-link" href="<?= site_url("/profile/edit") ?>"><?= lang('profile.edit') ?></a>
    </div>
    <div class="control">
        <a class="button is-link" href="<?= site_url("/profile/editpassword") ?>"><?= lang('profile.change_password') ?></a>
    </div>
    <div class="control">
        <a class="button is-link" href="<?= site_url("/profileimage/edit") ?>"><?= lang('profile.change_profile_image') ?></a>
    </div>
</div>

<?= $this->endSection() ?>