<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatsArtigo $catsArtigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cats Artigos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catsArtigos form large-9 medium-8 columns content">
    <?= $this->Form->create($catsArtigo) ?>
    <fieldset>
        <legend><?= __('Add Cats Artigo') ?></legend>
        <?php
            echo $this->Form->control('nome_cat_artigo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
