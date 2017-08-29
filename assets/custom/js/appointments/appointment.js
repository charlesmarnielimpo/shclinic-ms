$(document).ready(function() {
	$('.fa-calendar').parent().parent().addClass('active');

	$('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
		}
	});            
});