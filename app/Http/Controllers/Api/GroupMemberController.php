<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GroupMember;
use App\Models\User;
use App\Models\Group;
use Illuminate\Support\Facades\Validator;

class GroupMemberController extends Controller
{
    public function addMember(Request $request, $groupId)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $group = Group::find($groupId);

        if (!$group) {
            return response()->json(['message' => 'Group not found'], 404);
        }

        $member = GroupMember::create([
            'group_id' => $groupId,
            'user_id' => $request->user_id,
            'is_accepted' => false, // پیش‌فرض: عضویت در انتظار تأیید
        ]);

        return response()->json($member, 201);
    }

    public function removeMember($groupId, $memberId)
    {
        $member = GroupMember::where('group_id', $groupId)->where('id', $memberId)->first();

        if (!$member) {
            return response()->json(['message' => 'Member not found'], 404);
        }

        $member->delete();

        return response()->json(['message' => 'Member removed successfully'], 200);
    }

    public function showMember($groupId, $memberId)
    {
        $member = GroupMember::where('group_id', $groupId)->where('id', $memberId)->first();

        if (!$member) {
            return response()->json(['message' => 'Member not found'], 404);
        }

        return response()->json($member, 200);
    }

    public function acceptMembership($groupId, $memberId)
    {
        $member = GroupMember::where('group_id', $groupId)->where('id', $memberId)->first();

        if (!$member) {
            return response()->json(['message' => 'Member not found'], 404);
        }

        $member->is_accepted = true; // پذیرش عضویت
        $member->save();

        return response()->json(['message' => 'Membership accepted'], 200);
    }
}
