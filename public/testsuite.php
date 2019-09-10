<?php
declare(strict_types=1);

// testsuite
// file for booting the QuidPHP testsuite (can be deleted)
(function() {
    if(!empty($_SERVER['REQUEST_SCHEME']) && !empty($_SERVER['HTTP_HOST']) && !empty($_SERVER['REQUEST_URI']))
    {
        $config = require dirname(__DIR__).'/env.php';
        $config['path']['public'] = __DIR__;
        $config['schemeHost']['dev/assert'] = $config['schemeHost']['dev/app'];
        $config['schemeHost']['prod/assert'] = $config['schemeHost']['prod/app'];
        unset($config['schemeHost']['dev/app'],$config['schemeHost']['prod/app']);

        if(!empty($config['path']['vendor']))
        {
            require_once $config['path']['vendor'].'/autoload.php';

            require dirname(__DIR__).'/testsuite.php';
            Quid\TestSuite\Boot::start($config);
        }
    }
})();
?>