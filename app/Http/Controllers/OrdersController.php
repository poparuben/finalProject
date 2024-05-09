<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Orders;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index()
    {

        $product = Products::find(request()->input('id'));
        $sum = intval($product->price) * request()->input('pieces');
        return view('create-order', ['product' => $product, 'sum' => $sum]);
    }

    public function store(Request $request)
    {

        
        $validated = $request->validate([
            'address' => 'required|string',
            'total_price' => 'required|numeric',
            'contact_phone' => 'required|numeric',
            'mail' => 'required|email',
        ]);

        // create adress
        $addressComponents = explode(',', $validated['address']);
        $street = trim($addressComponents[0] ?? '');
        $number = trim($addressComponents[1] ?? '');
        $city = trim($addressComponents[2] ?? '');
        $zip_code = trim($addressComponents[3] ?? '');

       
        $address = Address::create([
            'street' => $street,
            'number' => $number,
            'city' => $city,
            'zip_code' => $zip_code,
        ]);

        $order = Orders::create([
            'client_id' => Auth::user()->id,
            'order_date' => Carbon::now('Europe/Bucharest'),
            'id_adress' => $address->id_address,
            'total_price' => $validated['total_price'],
            'contact_phone' => $validated['contact_phone'],
            'mail' => $validated['mail'],
        ]);

        return redirect()->route('index')->with('success', 'Comanda a fost adăugată cu succes!');
    }
}
