<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class InvoiceController extends Controller
{
    public function show($id)
    {
        $user = Auth::user();


        $rawOrders = DB::table('orders')
            ->join('order_products', 'orders.id', '=', 'order_products.order_id')
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->where('orders.id', $id)
            ->orderBy('orders.created_at', 'desc')
            ->select(
                'orders.id as order_id',
                'orders.status',
                'orders.created_at',
                'orders.user_id as user_id',
                'order_products.quantity',
                'order_products.price as item_price',
                'products.name as product_name',
                'products.id as product_id',
                'orders.name as name',
                'orders.address as address',
                'orders.city as city'
            )
            ->get();

        if ($user->id !==   $rawOrders[0]->user_id) {
            return abort(401);
        }






        $total = 0;

        foreach ($rawOrders as $order) {
            $total += $order->item_price * $order->quantity;
        }


        $pdf = Pdf::loadView('invoiceOrder', [
            'orders' => $rawOrders,
            'total' => $total,
            'name' => $rawOrders[0]->name,
            'address' => $rawOrders[0]->address,
            'city' => $rawOrders[0]->city
        ]);
        return $pdf->stream('invoice-' . $rawOrders[0]->order_id . '.pdf');
    }
}
