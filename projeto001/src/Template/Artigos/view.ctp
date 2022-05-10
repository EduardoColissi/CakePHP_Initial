<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artigo $artigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artigo'), ['action' => 'edit', $artigo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artigo'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artigos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artigo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cats Artigos'), ['controller' => 'CatsArtigos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cats Artigo'), ['controller' => 'CatsArtigos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artigos view large-9 medium-8 columns content">
    <h3><?= h($artigo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($artigo->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($artigo->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cats Artigo') ?></th>
            <td><?= $artigo->has('cats_artigo') ? $this->Html->link($artigo->cats_artigo->id, ['controller' => 'CatsArtigos', 'action' => 'view', $artigo->cats_artigo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($artigo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($artigo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($artigo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Conteudo') ?></h4>
        <?= $this->Text->autoParagraph(h($artigo->conteudo)); ?>
    </div>
</div>
