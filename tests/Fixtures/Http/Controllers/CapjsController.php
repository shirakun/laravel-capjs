<?php
namespace Shirakun\LaravelCapjs\Tests\Fixtures\Http\Controllers;

class CapjsController extends Controller
{
    public function index()
    {
        return <<<'HTML'
            <form action="" method="post">
                <input type="text" name="name"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <x-capjs-widget/>
            </form>
        HTML;
    }
}
