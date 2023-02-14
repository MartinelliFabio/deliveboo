<?php

namespace App\Http\Controllers\Api\Orders;

use App\Models\Product;
use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrderRequest;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway){

        // dd($gateway->clientToken()->generate());

        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];

        return response()->json($data, 200);
    }

    public function makePayment(OrderRequest $request, Gateway $gateway){

        $product = Product::find($request->product);

        $result = $gateway->transaction()->sale([
            'amount' => $product->price,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if($result->success){
            $data = [
            'success' => true,
            'message' => "Transazione eseguita con successo!"
            ];
            return response()->json($data,200);
        } else{
            $data = [
            'success' => false,
            'message' => "Transazione fallita!!!"
            ];
            return response()->json($data,401);
        }
        return 'make payment';
    }
}
