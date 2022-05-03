$('#modal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data('whatever');
  var modal = $(this);
  modal.find('.modal-title').text('New message to ' + recipient);
  modal.find('.modal-body input').val(recipient);
})



$('#order_form').submit(function(e){
    e.preventDefault();

	/*var params = "p1="+$("#name", $(this)).val()+"&p2="+$("#phone", $(this)).val()+"&p3="+$("#email", $(this)).val();*/

	$.get('https://script.google.com/macros/s/AKfycbyVUYZPL8WIB2RWrEA3UbuovkmatITFb9AiIVR05QmRFr-TGGM/exec?'+$(this).serialize());

	$('#order_form').trigger('reset');
	$('#order_form').modal('hide');
    $('#formModal2').modal('show');

});
