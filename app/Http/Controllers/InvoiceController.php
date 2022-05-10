<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $invoices = Invoice::latest()->paginate();

        // dd($invoices);
        //render view with posts
        return view('invoices.index', compact('invoices'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'tanggal_invoice'     => 'required',
            'tanggal_jatuh_tempo'     => 'required',
            'customer'   => 'required',
            'diskon'    => 'required|numeric',
            'pajak'     => 'required|numeric',
            'status_invoice'    => 'required',
            'status_payment_invoice' => 'required',
            'deskripsi'     => 'required',
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}

