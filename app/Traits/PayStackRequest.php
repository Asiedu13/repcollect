<?php
namespace App\Traits;

trait PayStackRequest
{
    public function PayGET($url)
{
        $ch = curl_init();
        $url = "https://api.paystack.co/{$url}";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization:  Bearer " .config('paystack.secretKey'),
        ));
        $result = curl_exec($ch);

        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            return redirect()->back()->withErrors($err)->withInput();
        } else {
           return json_decode($result);
        }
    }
    public function PayPOST($url, $name, $phone, $callbackUrl="http://localhost:8000/", $amount=null, $email=null)
    {
        $url = "https://api.paystack.co/{$url}";

        $fields = [
            'email' => $email,
            'amount' => $amount,
            'currency' => "GHS",
            'channels' => ['mobile_money', 'bank', 'qr'],
            'first_name' => $name,
            'last_name'=> 'Asiedu',
            'phone' => '0244276809',
            'callback_url' => $callbackUrl,
            'metadata' => ["username" => $name, "phone" => $phone]
        ];

        $fields_string = http_build_query($fields);



        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization:  Bearer " .config('paystack.secretKey'),
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);

        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            dd($err);
            return redirect()->back()->withErrors($err)->withInput();
        } else {
           return json_decode($result);
        }

    }
}
