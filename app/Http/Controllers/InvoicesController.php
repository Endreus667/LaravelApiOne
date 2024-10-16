<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    //
    public function index() {
        $invoices = Invoice::all();
        return $invoices;
    }

    public function createInvoices(Request $r) {
        $data = $r->only(["description","value","address_id","user_id"]);
       $invoice = Invoice::create($data);
       return $invoice;
    }


    public function findOne(Request $r) {
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }

}
