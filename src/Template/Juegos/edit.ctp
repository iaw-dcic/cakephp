<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $juego->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $juego->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Juegos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="juegos form large-10 medium-9 columns">
    <?= $this->Form->create($juego) ?>
    <fieldset>
        <legend><?= __('Edit Juego') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('objectid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
