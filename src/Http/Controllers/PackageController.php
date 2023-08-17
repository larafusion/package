<?php

namespace LaraFusion\Package\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class PackageController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('package::index'));
    }
}