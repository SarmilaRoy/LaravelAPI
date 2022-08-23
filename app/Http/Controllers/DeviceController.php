<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    // public function list(){
    //     return Device::all();
    // }

    // public function list($id){
    //     return Device::find($id);
    // }

    // public function list($id=null){
    //     return $id?Device::find($id):Device::all();
    // }

    public function list()
    {
        return Device::all();
    }

    public function listParams($id = null)
    {
        return Device::find($id);
    }

    public function add(Request $request)
    {
        $device = new Device();
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();
        if ($result) {
            return ['Result' => 'Data has been saved'];
        } else {
            return ['Result' => 'Oparation Failed'];
        }
    }

    public function update(Request $request){
        $device =Device::find($request->id);
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();
        if ($result) {
            return ["Result" =>'Data has been updated']; 
        } else {
            return ['Result' => 'Oparation Failed'];
        }
        
    }
    public function search($name){
        // return Device::where('name',$name)->get();
        return Device::where('name','like','%'.$name.'%')->get();
    }
}
