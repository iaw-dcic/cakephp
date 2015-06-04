<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Juegos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="juegos form large-10 medium-9 columns">
    <?= $this->Form->create($juego) ?>
    <fieldset>
        <legend><?= __('Add Juego') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->hidden('objectid', ['id' => 'objectid']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<script src="http://code.jquery.com/jquery-2.1.4.min.js"> </script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
	$("input#nombre").autocomplete({
	    source: function (request, response) {
		var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        $.ajax({
            url: "http://localhost/cakeiaw/search/buscar/"+request.term,
            dataType: "json",
            success: function (data) {
                response(data);
            }
        });
	    },
		select: function(event, ui) {
			event.preventDefault();
			$('#nombre').val(ui.item.label);
			$('#objectid').val(ui.item.value);

		},
	    minLength: 3
	});
});
</script>