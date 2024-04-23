<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>

<?php
$this->assign('title', __('Photo'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Photo'), 'url' => ['action' => 'index']],
    ['title' => __('View')],
]);
?>

<div class="view card card-primary card-outline">
    <div class="card-header d-sm-flex">
        <h2 class="card-title"><?= h($photo->Judulfoto) ?></h2>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <tr>
                <th><?= __('Judulfoto') ?></th>
                <td><?= h($photo->Judulfoto) ?></td>
            </tr>
            <tr>
                <th><?= __('Lokfile') ?></th>
                <td><?= h($photo->lokfile) ?></td>
            </tr>
            <tr>
                <th><?= __('Fotoid') ?></th>
                <td><?= $this->Number->format($photo->fotoid) ?></td>
            </tr>
            <tr>
                <th><?= __('UsersUserid') ?></th>
                <td><?= $this->Number->format($photo->usersUserid) ?></td>
            </tr>
            <tr>
                <th><?= __('AlbumAlbumid') ?></th>
                <td><?= $this->Number->format($photo->albumAlbumid) ?></td>
            </tr>
            <tr>
                <th><?= __('Tglupload') ?></th>
                <td><?= h($photo->Tglupload) ?></td>
            </tr>
        </table>
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
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $photo->fotoid], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
        </div>
    </div>
</div>

<div class="view text card">
    <div class="card-header">
        <h3 class="card-title"><?= __('Deskripsifoto') ?></h3>
    </div>
    <div class="card-body">
        <?= $this->Text->autoParagraph(h($photo->Deskripsifoto)); ?>
    </div>
</div>
