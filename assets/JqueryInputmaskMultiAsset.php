<?php

namespace citysites\assets;

use yii\jui\JuiAsset;
use yii\web\AssetBundle;
use yii\widgets\MaskedInputAsset;

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
        MaskedInputAsset::class,
        JuiAsset::class,
        JqueryBindFirstAsset::class,
    ];
}
