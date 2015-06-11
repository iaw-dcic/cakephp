<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Juego'), ['action' => 'edit', $juego->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Juego'), ['action' => 'delete', $juego->id], ['confirm' => __('Are you sure you want to delete # {0}?', $juego->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Juegos'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Juego'), ['action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>

<h2><?= h($juego->nombre) ?></h2>
<div class="row">
    <div class="col-lg-5">
        <h6><?= __('Descripción') ?></h6>
        <p><?= $juego['detalle']['description'] ?></p>
    </div>
    <div class="col-lg-2">
        <?= $this->Html->image($juego['detalle']['image'], ['alt' => 'Juego']); ?>
    </div>

</div>