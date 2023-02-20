<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\OrderPaymentRequest;
use App\Models\Product;
use App\Models\Order;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function purchase(Request $request){

        $data = $request->all();
        
        $validator = Validator::make($data, [
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'email' => 'required|email|max:100',
            'address' => 'required|max:255',
            'phone' => 'required|regex:/^([0-9]*)$/|size:10',
        ],);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]); 
        }


        // $data = json_decode($request->getContent(), true);
        $new_order = new Order();
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
        $code = $today . $rand;
        $new_order->nr_ord = $code;
        $new_order->slug = Str::slug($new_order->nr_ord);
        $new_order->name = $request->name;
        $new_order->surname = $request->surname;
        $new_order->address = $request->address;
        $new_order->email = $request->email;
        $new_order->phone = $request->phone;
        $new_order->datetime = now();
        $new_order->price_tot = $request->price_tot;
        $new_order->status = $request->status;
        $new_order->save();

        $list_item = [];
        foreach($request->cart as $item){
            $key = $item['id'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $list_item[$key] = ['quantity' => $quantity , 'price' => $price];
        }
        $new_order->products()->attach($list_item);

        return response()->json([
            'success' => true,
            'results' => $request->all(),
            'order' => $new_order
        ]);
    }
    public function makePayment(Request $request, Gateway $gateway)
    {

        $result = $gateway->transaction()->sale([
            'amount' => $request->amount,
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            $data = [
                'success' => true,
                'message' => 'transazione eseguita'
            ];
            return response()->json($data);
        } else {
            $data = [
                'success' => false,
                'message' => 'transazione fallita'
            ];
            return response()->json($data);
        }
    }

    public function generate(Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();
        $data = [
            'success' => true,
            'token' => $token
        ];
        return response()->json($data);
    }
    public function checkForm(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'email' => 'required|email|max:100',
            'address' => 'required|max:255',
            'phone' => 'required|regex:/^([0-9]*)$/|size:10',
        ],[
            'name.required' =>  'Il nome è obbligatorio',
            'name.max' =>  'Il nome non può superare i :max caratteri',
            'surname.required' =>  'Il cognome è obbligatorio',
            'surname.max' =>  'Il cognome non può superare i :max caratteri',
            'email.required' =>  'L\'email è obbligatoria',
            'email.max' =>  'L\'email non può superare i :max caratteri',
            'email.email' =>  'L\'email deve contenere @ e .',
            'address.required' =>  'L\'indirizzo è obbligatorio',
            'address.max' =>  'L\'indirizzo non può superare i :max caratteri',
            'phone.required' =>  'Il numero di telefono è obbligatorio',
            'phone.size' =>  'Il numero di telefono deve essere di :size caratteri',
            'phone.regex' =>  'Il numero di telefono deve contenere solo numeri',

        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]); 
        }else{
            return response()->json([
                'success' => true,
            ]); 
        }

    }
}
