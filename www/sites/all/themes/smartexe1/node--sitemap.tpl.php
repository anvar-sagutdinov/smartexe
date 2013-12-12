<?php
$result = db_query("SELECT CONVERT(`value` USING utf8) FROM `variable` WHERE `name`='om_maximenu'");
// Result is returned as a iterable object that returns a stdClass object on each iteration
foreach ($result as $record) {
    $record->value;
}