<?php

namespace App\Widgets;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class ViewCount extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\ViewCount::count();
        $string = 'Visitors log';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => '',
            'button' => [
                'text' => 'ViewCount',
                'link' => route('voyager.visits.index'),
            ],
            'image' => 'images/bgx.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
