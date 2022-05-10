<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatsArtigo $catsArtigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cats Artigo'), ['action' => 'edit', $catsArtigo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cats Artigo'), ['action' => 'delete', $catsArtigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catsArtigo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cats Artigos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cats Artigo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="catsArtigos view large-9 medium-8 columns content">
    <h3><?= h($catsArtigo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Cat Artigo') ?></th>
            <td><?= h($catsArtigo->nome_cat_artigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($catsArtigo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($catsArtigo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($catsArtigo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Artigos') ?></h4>
        <?php if (!empty($catsArtigo->artigos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Conteudo') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Cats Artigo Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($catsArtigo->artigos as $artigos): ?>
            <tr>
                <td><?= h($artigos->id) ?></td>
                <td><?= h($artigos->titulo) ?></td>
                <td><?= h($artigos->conteudo) ?></td>
                <td><?= h($artigos->slug) ?></td>
                <td><?= h($artigos->cats_artigo_id) ?></td>
                <td><?= h($artigos->created) ?></td>
                <td><?= h($artigos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Artigos', 'action' => 'view', $artigos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Artigos', 'action' => 'edit', $artigos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artigos', 'action' => 'delete', $artigos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
