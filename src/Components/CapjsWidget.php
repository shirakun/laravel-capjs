<?php
namespace Shirakun\LaravelCapjs\Components;

use Illuminate\View\Component;

class CapjsWidget extends Component
{
    public function render()
    {
        return view('capjs::components.capjs-widget');
    }
}
