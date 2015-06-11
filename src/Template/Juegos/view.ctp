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

<h2><?= h($juego->id) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Nombre') ?></h6>
                    <p><?= h($juego->nombre) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($juego->id) ?></p>
                    <h6><?= __('Objectid') ?></h6>
                <p><?= $this->Number->format($juego->objectid) ?></p>
                </div>
            </div>

