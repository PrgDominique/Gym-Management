<?php

namespace App\Http\Controllers;

use App\Models\Member;
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
        return view('create-member');
        
    }
    public function store()
    {
        
    }
    public function update()
    {
        
    }
    public function delete()
    {
        
    }
}
