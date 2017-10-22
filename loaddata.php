<?php
require "load.php";
	for($i = 0;$i < 50;$i++) {
		$due = mt_rand(1507971428, 1509253028);
		$accepted = 0;
		$completed = 0;
		if(mt_rand(1, 2) == 1) {
			$accepted = mt_rand($due, $due + 120000);
		}
		if($accepted && mt_rand(1, 3) > 1) {
			$completed = mt_rand($accepted, $accepted + 120000);
		}
		DBi::$conn->query("INSERT INTO tasks (date, name, location, user, category, due, accepted, completed) VALUES (" . mt_rand(time() - 1000000, time()) . ", 'Task #" . ($i + 1) . "', 'Building #" . ($i + 1) . "', " . mt_rand(1, 20) . ", " . mt_rand(1, 3) . ", " . $due . ", " . $accepted . ", " . $completed . ")");
	}
?>