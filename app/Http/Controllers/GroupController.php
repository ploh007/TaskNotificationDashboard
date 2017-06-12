<?php

namespace App\Http\Controllers;

use App\Repositories\GroupRepository;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $groups;

    public function __construct(GroupRepository $groups)
    {
        $this->middleware('auth');
        $this->groups = $groups;
    }


    public function createGroups(Request $request)
    {
        $this->validate($request, [
            'groupname' => 'required|min:2|max:20',
            'groupcolor' => 'required'
        ]);

        $request->user()->groups()->create([
            'group_name' => $request->groupname,
            'group_color' => $request->groupcolor
        ]);

        return response()->json($request);
    }

    /* Fetches the list of groups associated with the user and returns it as a json value */
    public function getGroups(Request $request)
    {
        $groups = $this->groups->forUser($request->user());
        return response()->json($groups);
    }

    /* Fetches the list of groups associated with the user and returns it as a json value */
    public function manageGroups(Request $request)
    {
        $this->validate($request, [
            'groupname' => 'min:2|max:20',
            'groupcolor' => 'required_with:groupname',
            'groupsToDel' => 'required'
        ]);

        $request->user()->groups()->create([
            'group_name' => $request->groupname,
            'group_color' => $request->groupcolor
        ]);

        // foreach ($request->groupsToDel as $value) {
        //     $request->user()->groups()->where('id', '=', $value)->delete();
        // }

    }

}
