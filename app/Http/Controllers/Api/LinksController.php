<?php

namespace App\Http\Controllers\Api;

use App\Models\Link;
use Orion\Http\Requests\Request;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class LinksController extends Controller
{
    use DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = Link::class;

    protected function beforeSave(Request $request, $link)
    {
        $link->user()->associate($request->user());
    }

}
