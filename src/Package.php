<?php

namespace LaraFusion\Package;

use Encore\Admin\Extension;

class Package extends Extension
{
    public $name = 'package';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Package',
        'path'  => 'package',
        'icon'  => 'fa-gears',
    ];
}