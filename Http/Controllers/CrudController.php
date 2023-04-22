<?php

namespace Modules\Crud\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\crud\Entities\Modulecrud;

class CrudController extends Controller
{
    public function add(){
        return view('crud::adddata');
    }

    public function insert(Request $req)
    {
        $insert = new modulecrud;
        $insert->name = $req->name;
        $insert->email = $req->email;
        $insert->save();
        if($insert)
        {
           return redirect('crud/index');
        }
        else{
            echo "no data insert";
        }
    }

    public function show()
    {
        $data = modulecrud::all();
        return view('crud::index',compact('data'));

    }

    public function edit($id)
    {
        $showeditdata = modulecrud::find($id);
        return view('crud::update',compact('showeditdata')); 
    }

    public function update(Request $req)
    {
        $updatedata = modulecrud::find($req->id);
        $updatedata->name = $req->name;
        $updatedata->email = $req->email;
        $updatedata->update();
        if($updatedata)
        {
            return redirect('crud/index');
        }
        else{
            echo "no data update";
        }
    }

    public function delete($id)
    {
        $deletedata = modulecrud::find($id);
        $deletedata->delete();
        if($deletedata)
        {
            return redirect('crud/index');
        }
        else{
            echo "no data deleted";
        }
    }
    
}
