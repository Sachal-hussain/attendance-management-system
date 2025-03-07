<?php

namespace App\Http\Controllers\Admin;

use DB;
use DateTimeZone;
use DateTime;
use App\Classes\table;
use App\Classes\permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayrollController extends Controller
{
    public function index() 
	{
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		$empAtten = table::attendance()->get();
		$employee = table::people()->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')->where('tbl_people.employmentstatus', 'Active')->get();
		table::reportviews()->where('report_id', 2)->update(array('last_viewed' => $today));
        $tf = table::settings()->value("time_format");

		return view('admin.payroll', compact('empAtten', 'employee', 'tf'));
    }
}
