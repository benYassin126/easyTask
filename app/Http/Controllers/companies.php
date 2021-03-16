<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Employee;

use Illuminate\Http\Request;

class companies extends Controller
{
    public function index() {
        $allCompany =  Company::all();
        return view('company',compact('allCompany'));
    }

public function search(Request $request)
{

    $allEmployees = Employee::select('employeeName','employeeEmail','employeeCity')->where('company',$request->search)->get();

    if($request->ajax())
    {
        $output="";
        $allEmployees;
            foreach ($allEmployees as $key => $employee) {
                $output.='<tr>'.
                '<td>'.$key.'</td>'.
                '<td>'.$employee->employeeName.'</td>'.
                '<td>'.$employee->employeeEmail.'</td>'.
                '<td>'.$employee->employeeCity.'</td>'.
                '</tr>';
            }
            return Response($output);
    }
}

}
