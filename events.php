<!-- events.php -->

<?php
	$calendar = $pages->get("template=calendar");
	$j = 1;
	$event = [];
	$eventArray = [];
	foreach ($calendar->children as $month) {
		foreach($month->event as $event) {
			$title = $event->event_name;
			$startDate = $event->start_date;
			$endDate = $event->end_date;
			if (!$endDate) {
				$endDate = $startDate;
			}
			$startTime = $event->start_time;
			if ($startTime) {
				$startTime = "T" . $startTime;
			}
			$endTime = $event->end_time;
			if ($endTime) {
				$endTime = "T" . $endTime;
			}
			$event = array(
				'title' => $title,
				'start' => $startDate . $startTime,
				'end' => $endDate . $endTime
				);
			array_push($eventArray, $event);
		}
	}
?>

<!-- end events.php -->
