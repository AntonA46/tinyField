<?php

namespace spaa\TinyField;

use Encore\Admin\Extension;

class TinyField extends Extension
{
    public $name = 'tinyfield';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Tinyfield',
        'path'  => 'tinyfield',
        'icon'  => 'fa-gears',
    ];
}
