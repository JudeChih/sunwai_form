<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SunwaiForm;
use Illuminate\Support\Facades\Input;

class SunwaiFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("__sunwai_form");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new SunwaiForm;
        $user->uniq_id = uniqid();
        $user->contact_person = Input::get("contact_person");
        $user->email = Input::get("email");
        $user->contact_phone = Input::get("contact_phone");
        $user->companyname = Input::get("companyname");
        $user->company_address = Input::get("company_address");
        $user->pc_volume = Input::get("pc_volume");
        $user->apply_for = Input::get("apply_for");
        $user->description = Input::get("description");
        $user->save();


        return ("data form saved succedfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $aaa = SunwaiForm::all();
        $applyData = SunwaiForm::paginate(10);
        return view('__sunwai_form_data',compact('applyData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
