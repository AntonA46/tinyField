<?php

namespace spaa\TinyField;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class TinyFieldServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(TinyField $extension)
    {
        if (! TinyField::boot()) {
            return ;
        }

        Admin::booting(function () {
            Form::extend('tinyField', TinyUploader::class);
            Form::extend('tinyMultipleField', TinyMultipleField::class);
        });
    }
}
