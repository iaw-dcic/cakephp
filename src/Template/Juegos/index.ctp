<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Juego'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="juegos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nombre') ?></th>
            <th><?= $this->Paginator->sort('objectid') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($juegos as $juego): ?>
        <tr>
            <td><?= $this->Number->format($juego->id) ?></td>
            <td><?= h($juego->nombre) ?></td>
            <td><?= $this->Number->format($juego->objectid) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $juego->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $juego->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $juego->id], ['confirm' => __('Are you sure you want to delete # {0}?', $juego->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
