<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index()
    {
        $member = Member::latest()->get();
        return view('index')->with('members', $member);
    }
    public function create()
    {
        
    }
    public function update()
    {
        
    }
    public function delete()
    {
        
    }
}
