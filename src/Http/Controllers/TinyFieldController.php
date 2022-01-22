<?php

namespace spaa\TinyField\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class TinyFieldController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('tinyfield::index'));
    }
}
