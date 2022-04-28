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
        
        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}

