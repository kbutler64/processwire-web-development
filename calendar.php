<!-- calendar.php -->

<?php include('./events.php'); ?>

<div id='calendar'></div>
<script>
	$(document).ready(function() {
		// page is now ready, initialize the calendar...
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			events: <?php echo json_encode($eventArray); ?>
		})
	});
</script>

<!-- end calendar.php -->
