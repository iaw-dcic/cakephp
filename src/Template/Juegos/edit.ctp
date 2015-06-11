<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $juego->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $juego->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Juegos'), ['action' => 'index']) ?></li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($juego); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Juego']) ?></legend>
    <?php
        echo $this->Form->input('nombre');
                echo $this->Form->input('objectid');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>