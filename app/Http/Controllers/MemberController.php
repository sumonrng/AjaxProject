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
        $member = Member::cursor();
        return view("showdata", compact("member"));
        // $member = Member::lazy();
        // return view("showdata", compact("member"));
        // $member = [];
        // foreach (Member::cursor() as $user) {
        //     $member[] = $user;
        // }
        // return view('showdata', ['member'=> $member]);
        // $member = [];
        // foreach (Member::lazy() as $user) {
        //     $member[] = $user;
        // }
        // return view('showdata', ['member'=> $member]);
        // $member = [];
        // Member::chunk(20, function ($members) 
        // use (&$member) {
        //     foreach ($members as $user) {
        //         $member[]= $user;
        //     }
        // });
        // return view("showdata", compact("member"));

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
        Member::firstOrCreate(
            ["email"=> $request->email],
            [
            "name"=> $request->f_name,
            "email"=> $request->email,
            "mobile"=> $request->mobile,
            "password"=> $request->password,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
            ]
    );
        // return response()->json(['status'=>'error','error'=>'Hello']);
        return redirect()->route('members.index')->with('success','Successfully Inserted.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //singleuser
        $member = Member::findOrFail($member->id);
        return view('singleuser', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        $member = Member::findOrFail($member->id);
        return view('edituser', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        Member::where('id', $member->id)
                ->lazyById(2)
                ->each->update(['email'=>$request->email,'mobile'=>(int) $request->mobile,'city'=> (string) $request->city,'country'=> (string) $request->country]);
        return redirect()->route('members.index')->with('success','Successfully Updated.');
        // Member::where('id', $member->id)
        //         ->chunkById(2, function ($member) 
        //         use ($request) {
        //             $member->each->update(['mobile'=>(int) $request->mobile,'email'=>$request->email]);
        //         });
        // return redirect()->route('members.index')->with('success','Successfully Updated.');
        // Member::updateOrCreate(
        //     ['email' => $request->email],
        //     [
        //     'name'=> $request->f_name,
        //     'email'=> $request->email,
        //     'mobile'=> $request->mobile,
        //     'password'=> $request->password
        //     ]);
        // return redirect()->route('members.index')->with('success','Successfully Updated.');
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
