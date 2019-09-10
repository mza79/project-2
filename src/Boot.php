<?php
declare(strict_types=1);
namespace Project;
use Quid\Core;

// boot
// class for booting the application
class Boot extends Core\Boot
{
    // config
    public static $config = [
        'types'=>['app'],
        'version'=>['app'=>'1.0'],
        'lang'=>['en'],
        '@app'=>[
            'config'=>[
                Core\Route::class=>[
                    'metaTitle'=>['typeLabel'=>true],
                    'docOpen'=>[
                        'head'=>[
                            'css'=>[
                                'type'=>'css/%type%.css'],
                            'js'=>[
                                'type'=>'js/%type%.js']],
                        'wrapper'=>['#wrapper']]]],
            'compileScss'=>[
                '[publicCss]/app.css'=>[
                    0=>'[privateScss]/app/app.scss']],
            'concatenateJs'=>[
                '[publicJs]/app.js'=>'[privateJs]/app']]
    ];


    // onReady
    protected function onReady():Core\Boot
    {
        return $this;
    }
}
?>