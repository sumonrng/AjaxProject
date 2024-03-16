<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Member $member)
    {
        $members = Member::paginate(10);
        return view("showdata", compact("members"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Member::create([
            "name"=> $request->f_name,
            "email"=> $request->email,
            "mobile"=> $request->mobile,
            "password"=> $request->password,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        // return response()->json(['status'=>'error','error'=>'Hello']);
        return redirect()->route('members.index')->with('success','Successfully Inserted.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //singleuser
        $member = Member::find($member->id);
        return view('singleuser', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        // Member::find($member->id)->delete();
        Member::destroy($member->id);
        return redirect()->route('members.index')->with('success','Successfully Deleted.');
    }
}
