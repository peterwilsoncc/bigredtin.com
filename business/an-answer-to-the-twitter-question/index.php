<?php
$year = '2010';
$slug = 'an-answer-to-the-twitter-question';

header("Location: http://bigredtin.com/{$year}/{$slug}", true, 301 );
exit;
