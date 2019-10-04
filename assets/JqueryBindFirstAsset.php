<?php

namespace citysites\assets;

use yii\web\AssetBundle;

class JqueryBindFirstAsset extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = '@vendor/bower-asset/jquery.bind-first/release';

    /**
     * {@inheritDoc}
     */
    public $js = [
        'jquery.bind-first-0.2.3.min.js',
    ];

}
