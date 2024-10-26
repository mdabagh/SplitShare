<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
    public function index()
    {
        return response()->json(Group::all(), 200);
    }

    public function show($id)
    {
        $group = Group::find($id);

        if (!$group) {
            return response()->json(['message' => 'Group not found'], 404);
        }

        return response()->json($group, 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'creator_id' => 'required|exists:users,id', // اطمینان از وجود کاربر
            'default_currency' => 'required|string',
            'default_calendar_type' => 'required|string',
            'invite_link' => 'nullable|string',
            'invite_expiry' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $group = Group::create($request->all());

        return response()->json($group, 201);
    }

    public function update(Request $request, $id)
    {
        $group = Group::find($id);

        if (!$group) {
            return response()->json(['message' => 'Group not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'default_currency' => 'sometimes|required|string',
            'default_calendar_type' => 'sometimes|required|string',
            'invite_link' => 'nullable|string',
            'invite_expiry' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $group->update($request->all());

        return response()->json($group, 200);
    }

    public function destroy($id)
    {
        $group = Group::find($id);

        if (!$group) {
            return response()->json(['message' => 'Group not found'], 404);
        }

        $group->delete();

        return response()->json(['message' => 'Group deleted successfully'], 200);
    }
}
