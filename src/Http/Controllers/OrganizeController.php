<?php

namespace Brandon\Seat\Organizer\Http\Controllers;

use Seat\Web\Http\Controllers\Controller;

/**
 * Class OrganizeController.
 * @package Brandon\Seat\Organizer\Http\Controllers
 */
class OrganizeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getOrganize()
    {

        return view('organizer::list');

    }
}
