<?php

try {
	$conn = new mysqli('localhost', 'root', '','alat');
} catch (Exception $e) {
	echo $e->getMessage();
}