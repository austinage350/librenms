<?php

$rrd_filename = rrd_name($device['hostname'], 'fortios_lograte');

require 'includes/graphs/common.inc.php';

$ds = 'lograte';

$colour_area = '9999cc';
$colour_line = '0000cc';

$colour_area_max = '9999cc';

$graph_max = 1;

$unit_text = 'Logs per second';

require 'includes/graphs/generic_simplex.inc.php';
