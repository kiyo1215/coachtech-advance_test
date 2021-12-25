<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{

    public function inquiry ()
    {
        return view('inquiry.inquiry');
    }
    public function confirm (InquiryRequest $request)
    {
        $content = $request->all();
        // dd($content);
        Content::create($content);
        return view('inquiry.confirm', ['content' => $content]);
    }
    public function thanks()
    {
        return view('inquiry.thanks');
    }
    public function fix(Request $request)
    {
        $content = DB::table('contents')->where('id', $request->id)->first();
        return view('inquiry.fix', ['content' => $content]);
    }
     public function update(InquiryRequest $request)
    {
        $param = [
             'last_name' => $request->last_name,
             'first_name' => $request->first_name,
             'gender' => $request->gender,
             'email' => $request->email,
             'postcode' => $request->postcode,
             'address' => $request->address,
             'building_name' => $request->building_name,
             'opinion' => $request->opinion,
        ];
         DB::table('contents')->where('id', $request->id)->update($param);
         return redirect('/confirm');
     }
    public function management(){
        $contents = DB::table('contents')->get();
        return view('inquiry.management', ['contents' => $contents]);
    }
    public function remove(Request $request)
    {
        DB::table('contents')->where('id', $request->id)->first();
    }
    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('contents')->where('id', $request->id)->delete();
        return redirect('/management');
    }
    public function index()
    {
        $inquiries = Inquiry::Paginate(10);
        return view('inquiry.management', ['inquiries' => $inquiries]);
    }
}