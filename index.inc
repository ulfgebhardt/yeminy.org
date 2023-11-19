<?php
require_once 'lib/autoload.inc';            // SYSTEM Classes
require_once 'yeminy/autoload.inc';         // Project Classes
require_once 'config.php';                  // Config

\SYSTEM\system::start(\WEBCRAFT\config(dirname(__FILE__)));