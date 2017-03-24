<!-- event_list.php -->

<?php include('./events.php'); ?>

<div id='calendar'></div>
<script>
	$(document).ready(function() {
		// page is now ready, initialize the calendar...
		$('#calendar').fullCalendar({
		        defaultView: 'listMonth',
			events: <?php echo json_encode($eventArray); ?>
		})
	});
</script>

<!-- end event_list.php -->
