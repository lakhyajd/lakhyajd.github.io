<?php
    define('PERCH_LICENSE_KEY', 'P21408-RQV298-GRB599-BFQ858-DFQ018');

    define("PERCH_DB_USERNAME", 'Marvin');
    define("PERCH_DB_PASSWORD", '19-12-1994');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "gmrdb");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'maffinre@web.de');
    define('PERCH_EMAIL_FROM_NAME', 'Marvin Reidt');

    define('PERCH_LOGINPATH', '/gmrcms');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
