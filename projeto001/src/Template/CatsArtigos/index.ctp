<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatsArtigo[]|\Cake\Collection\CollectionInterface $catsArtigos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cats Artigo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catsArtigos index large-9 medium-8 columns content">
    <h3><?= __('Cats Artigos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_cat_artigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catsArtigos as $catsArtigo): ?>
            <tr>
                <td><?= $this->Number->format($catsArtigo->id) ?></td>
                <td><?= h($catsArtigo->nome_cat_artigo) ?></td>
                <td><?= h($catsArtigo->created) ?></td>
                <td><?= h($catsArtigo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $catsArtigo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catsArtigo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catsArtigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catsArtigo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
