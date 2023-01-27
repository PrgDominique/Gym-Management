<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Membership;
use App\Models\Trainer;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index()
    {
        $member = Member::all();
        return view('index')->with('members', $member);
    }
    public function create()
    {
        $trainers = Trainer::all();
        $membership = Membership::all();
        return view('create-member')
        ->with('trainers', $trainers)
        ->with('membership', $membership);

        
    }
    public function store(Request $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_id = $request->membership_id;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->save();

        return redirect()->route('index')->with('success', 'New member added');
    }
    public function update()
    {
        
    }
    public function delete()
    {
        
    }
}
