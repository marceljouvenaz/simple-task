<?php

	echo "hoe heet je?";
	echo "\n";
	echo "> ";
	$naam = trim(fgets(STDIN));
	if ($naam === "Alice" or "Bob") {
	} else {
		$naam = "World";
	}
	echo "hallo $naam";

	