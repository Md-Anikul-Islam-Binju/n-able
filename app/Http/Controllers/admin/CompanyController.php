<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Customer::all();
        return view('admin.pages.customer.index', compact('company'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'image' => 'required',
            ]);
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/company'), $file);

            $company = new Customer();
            $company->name = $request->name;
            $company->link = $request->link;
            $company->image = $file;
            $company->save();
            toastr()->success('Data has been Added successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);
            $company = Customer::find($id);
            $company->name = $request->name;
            $company->link = $request->link;
            $company->status = $request->status;
            if ($request->image) {
                $file = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/company'), $file);
                $company->image = $file;
            }
            $company->save();
            toastr()->success('Data has been Updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $company = Customer::find($id);
            if ($company->image) {
                unlink(public_path('images/company/' . $company->image));
            }
            $company->delete();
            toastr()->success('Data has been Deleted successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
