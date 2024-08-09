<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Staff;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminIndex(){
        return view('admin.index');
    }
    public function adminClient(){
        $clients = Appointment::all();
        return view('admin.client', compact('clients'));
    }
    public function clientDelete($id){
        $clients = Appointment::find($id);
        $clients->delete();
        return redirect('client');
    }
    public function clientEdit($id){
        $clients = Appointment::find($id);
        return view('admin.editclient', compact('clients'));
    }
    public function clientUpdate(Request $request, $id){
        $clients = Appointment::find($id);

        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->date = $request->date;
        $clients->time = $request->time;
        $clients->service = $request->service;
        $clients->phone = $request->phone;

        $clients->save();
        return redirect('client');
    }
    public function clientAddView(){
        return view('admin.addclient');
    }
    public function addClient(Request $request){
        $clients = new Appointment();

        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->date = $request->date;
        $clients->time = $request->time;
        $clients->service = $request->service;
        $clients->phone = $request->phone;

        $clients->save();
        return redirect('client');
    }
    public function staffView(){
        $clients = Staff::all();
        return view('admin.staff', compact('clients'));
    }
    public function staffAdd(){
        return view('admin.addstaff');
    }
    public function staffInsert(Request $request){
        $staff = new Staff();

        $staff->name = $request->name;
        $staff->contact = $request->contact;
        $staff->work_schedule = $request->work;
        $staff->commission_rates = $request->commission;
        $staff->tasks = $request->task;
        $staff->shifts = $request->shift;
        $staff->services = $request->service;

        $staff->save();
        return redirect('staff');
    }
    public function staffRemove($id){
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('staff');
    }
    public function staffEditView($id){
        $staff = Staff::find($id);
        return view('admin.editstaff', compact('staff'));
    }
    public function staffUpdate(Request $request, $id){
        $staff = Staff::find($id);

        $staff->name = $request->name;
        $staff->contact = $request->contact;
        $staff->work_schedule = $request->work;
        $staff->commission_rates = $request->commission;
        $staff->tasks = $request->task;
        $staff->shifts = $request->shift;
        $staff->services = $request->service;

        $staff->save();
        return redirect('staff');
    }
    public function inventoryView(){
        return view('admin.inventory');
    }
    public function addProductView(){
        return view('admin.addinventory');
    }
    public function addProduct(Request $request){
        $product = new Inventory();

        $product->product_name = $request->name;
        $product->product_description = $request->desc;
        $product->product_price = $request->price;

        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product', $filename);
        $product->product_image = $filename;

        $product->product_quantity = $request->quantity;
        $product->supplier = $request->supplier;
        $product->supplier_contact = $request->suppliercon;
        $product->product_cost = $request->cost;

        $product->save();
        return redirect('inventory');
    }
}
