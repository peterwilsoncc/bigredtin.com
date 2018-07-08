<?php
$slug = basename( __DIR__ );

header("Location: https://peterwilson.cc/{$slug}", true, 301 );
exit;
