<?php
$year = '2010';
$slug = 'valid-isnt-best-practice';

header("Location: http://bigredtin.com/{$year}/{$slug}", true, 301 );
exit;
