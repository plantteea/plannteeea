<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>

<?php
$this->assign('title', __('Album'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Album'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
    <div class="card-header d-sm-flex">
        <h2 class="card-title"><?= h($album->Namaalbum) ?></h2>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <tr>
                <th><?= __('Namaalbum') ?></th>
                <td><?= h($album->Namaalbum) ?></td>
            </tr>
            <tr>
                <th><?= __('Albumid') ?></th>
                <td><?= $this->Number->format($album->Albumid) ?></td>
            </tr>
            <tr>
                <th><?= __('UsersUserid') ?></th>
                <td><?= $this->Number->format($album->usersUserid) ?></td>
            </tr>
            <tr>
                <th><?= __('Tglmembuat') ?></th>
                <td><?= h($album->tglmembuat) ?></td>
            </tr>
        </table>
    </div>
    <div class="card-footer d-flex">
        <div class="mr-auto">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $album->Albumid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $album->Albumid), 'class' => 'btn btn-danger']
            ) ?>
        </div>
        <div class="ml-auto">
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $album->Albumid], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
</div>

<div class="view text card">
    <div class="card-header">
        <h3 class="card-title"><?= __('Deskripsi') ?></h3>
    </div>
    <div class="card-body">
        <?= $this->Text->autoParagraph(h($album->Deskripsi)); ?>
    </div>
</div>
