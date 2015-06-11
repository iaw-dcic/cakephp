$(function() {
	$("input#nombre").autocomplete({
	    source: function (request, response) {
		var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        $.ajax({
            url: "../search/buscar/"+request.term,
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