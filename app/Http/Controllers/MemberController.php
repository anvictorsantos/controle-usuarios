<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('show');
    }

    public function getMembers()
    {
        $members = Member::all();

        return view('memberlist', compact('members'));
    }
}
