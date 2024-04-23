<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coment $coment
 */
?>

<?php
$this->assign('title', __('Add Coment'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Coments'), 'url' => ['action' => 'index']],
    ['title' => __('Add')],
]);
?>

<div class="card card-primary card-outline">
    <?= $this->Form->create($coment, ['valueSources' => ['query', 'context']]) ?>
    <div class="card-body">
        <?= $this->Form->control('Isikomentar') ?>
        <?= $this->Form->control('Tanggalkomentar') ?>
        <?= $this->Form->control('usersUserid') ?>
        <?= $this->Form->control('photofotoid') ?>
    </div>
    <div class="card-footer d-flex">
        <div class="ml-auto">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>