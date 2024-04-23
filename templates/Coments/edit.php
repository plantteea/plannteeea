<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coment $coment
 */
?>

<?php
$this->assign('title', __('Edit Coment'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Coments'), 'url' => ['action' => 'index']],
    ['title' => __('View'), 'url' => ['action' => 'view', $coment->Komentarid]],
    ['title' => __('Edit')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($coment) ?>
    <div class="card-body">
        <?= $this->Form->control('Isikomentar') ?>
        <?= $this->Form->control('Tanggalkomentar') ?>
        <?= $this->Form->control('usersUserid') ?>
        <?= $this->Form->control('photofotoid') ?>
    </div>
    <div class="card-footer d-flex">
        <div class="mr-auto">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coment->Komentarid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coment->Komentarid), 'class' => 'btn btn-danger']
            ) ?>
        </div>
        <div class="ml-auto">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'view', $coment->Komentarid], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>