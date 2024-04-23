<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>

<?php
$this->assign('title', __('Edit Photo'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Photo'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $photo->fotoid]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($photo) ?>
    <div class="card-body">
        <?= $this->Form->control('Judulfoto') ?>
        <?= $this->Form->control('Deskripsifoto') ?>
        <?= $this->Form->control('Tglupload') ?>
        <?= $this->Form->control('lokfile') ?>
        <?= $this->Form->control('usersUserid') ?>
        <?= $this->Form->control('albumAlbumid') ?>
    </div>
    <div class="card-footer d-flex">
        <div class="mr-auto">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $photo->fotoid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $photo->fotoid), 'class' => 'btn btn-danger']
            ) ?>
        </div>
        <div class="ml-auto">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'view', $photo->fotoid], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>