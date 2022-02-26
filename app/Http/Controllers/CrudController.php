<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Session;

class CrudController extends Controller
{
    public function index()
    {
        return view('frontend.home.home');
    }

    public function showData()
    {
        $showData = Crud:: simplepaginate(5);
        return view('show_data', compact('showData'));
    }

    public function addData()
    {
        return view('add_data');
    }

    public function storeData(Request $request)
    {
        $rules = [
            'name'=> 'required|max:20',
            'email'=> 'required|email',
            'phone'=> 'required|numeric',

        ];
        $custom_message =[
            'name.required' => 'Please input your Name',
            'name.max' => 'your name can not contain more then 20 charecter',
            'email.required' => 'Please input your email address',
            'email.email' => 'Please Enter a valid email address',
            'phone.required' => 'Please input your phone number',
        ];
        $this->validate($request, $rules, $custom_message);

        $crud = new Crud();
        $crud -> name = $request-> name;
        $crud -> phone = $request-> phone;
        $crud -> email = $request-> email;
        $crud -> save();
        Session::flash('msg','data has been added sucsessfully');
        return redirect('/show-data');
    }
    public function editData($id= null)
    {
        $editData = Crud::find($id);
        return view('edit_data',compact('editData'));
    }

    public function updateData(Request $request, $id)
    {
        $rules = [
            'name'=> 'required|max:20',
            'email'=> 'required|email',
            'phone'=> 'required|numeric',

        ];
        $custom_message =[
            'name.required' => 'Please input your Name',
            'name.max' => 'your name can not contain more then 20 charecter',
            'email.required' => 'Please input your email address',
            'email.email' => 'Please Enter a valid email address',
            'phone.required' => 'Please input your phone number',
        ];
        $this->validate($request, $rules, $custom_message);

        $crud =  Crud::find($id);
        $crud -> name = $request-> name;
        $crud -> phone = $request-> phone;
        $crud -> email = $request-> email;
        $crud -> save();
        Session::flash('msg','data has been Updated sucsessfully');
        return redirect('/show-data');
    }

    public function deleteData($id= null)
    {
        $deleteData = Crud::find($id);
        $deleteData-> delete();
        Session::flash('msg','data has been Deleted sucsessfully');
        return redirect('/show-data');
    }
}
