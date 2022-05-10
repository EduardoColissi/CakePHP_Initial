<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artigo[]|\Cake\Collection\CollectionInterface $artigos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cats Artigos'), ['controller' => 'CatsArtigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cats Artigo'), ['controller' => 'CatsArtigos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artigos index large-9 medium-8 columns content">
    <h3><?= __('Artigos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cats_artigo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artigos as $artigo): ?>
            <tr>
                <td><?= $this->Number->format($artigo->id) ?></td>
                <td><?= h($artigo->titulo) ?></td>
                <td><?= h($artigo->slug) ?></td>
                <td><?= $artigo->has('cats_artigo') ? $this->Html->link($artigo->cats_artigo->id, ['controller' => 'CatsArtigos', 'action' => 'view', $artigo->cats_artigo->id]) : '' ?></td>
                <td><?= h($artigo->created) ?></td>
                <td><?= h($artigo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $artigo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artigo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?>
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
