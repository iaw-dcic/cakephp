<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Juego'), ['action' => 'edit', $juego->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Juego'), ['action' => 'delete', $juego->id], ['confirm' => __('Are you sure you want to delete # {0}?', $juego->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Juegos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Juego'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="juegos view large-10 medium-9 columns">
    <h2><?= h($juego->nombre) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <p><?= $juego['detalle']['description'] ?></p>
        </div>
    </div>
</div>
