<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminOrderView(Request $request)
    {
        $status = $request->input('status_id');
        $orders = Orders::when($status, function ($querty, $status){
            return $querty->where('status_id', $status);
        })
            -> with('user')
            ->get();
        return view('admins.adminorder', compact('orders'));
    }

    public function changeStatusOrder(Request $request, $orderId, $action)
    {
        $order = Orders::findOrFail($orderId);
        if ($order->status_id == 1) {
            if ($action == 'cancel'){
                $order->status_id = 3;
                $order->order_comment = $request->input('order_comment');
            } elseif($action == 'confirm') {
                $order->status_id = 2;
            }
            $order->save();
            $message = ($action == 'cancel') ? 'отменён' : 'подтверждён';
            return redirect()->route('admin.order')->with('success', "Заказы успешно $message");
        }
    }
}
