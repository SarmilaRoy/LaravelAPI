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

    public function list(){
        return Device::all();
    }

    public function listParams($id=null){
        return Device::find($id);
    }
}
