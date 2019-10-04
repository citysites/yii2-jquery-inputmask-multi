<?php

namespace citysites\assets;

use yii\web\AssetBundle;

class JqueryInputmaskMultiAsset extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = '@vendor/bower-asset/inputmask-multi';

    /**
     * {@inheritDoc}
     */
    public $js = [
        'js/jquery.inputmask-multi.min.js',
    ];

    /**
     * {@inheritDoc}
     */
    public $depends = [
        JqueryBindFirstAsset::class,
    ];
}
