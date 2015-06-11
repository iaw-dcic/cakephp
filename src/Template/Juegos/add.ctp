<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
$this->append('css', $this->Html->css(['jquery/jquery-ui.min']));
$this->append('script', $this->Html->script(['jquery/jquery-ui', "autocomplete"]));

?>
	<ul class="nav nav-sidebar">
        <li><?= $this->Html->link(__('List Juegos'), ['action' => 'index']) ?></li>
    </ul>
<?php $this->end(); ?>

<?= $this->Form->create($juego); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Juego']) ?></legend>
    <?php
        echo $this->Form->input('nombre');
        echo $this->Form->hidden('objectid', ['id' => 'objectid']);
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
