<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbacksController extends Controller
{
    public function send(Request $request)
    {
        if (!empty($request)) {
            $data = [
                'name' => htmlspecialchars(trim($request->post('name'))),
                'email' => htmlspecialchars(trim($request->post('email'))),
                'phone' => htmlspecialchars(trim($request->post('phone'))),
                'message' => htmlspecialchars(trim($request->post('msg'))),
                'date' => time()
            ];

            if ($data['email'] != '' && $data['message'] != '') {
                if(DB::table('feedback')->insert($data)){

                    $subject = 'Обращение заказчика'; //тема письма
                    $message = str_replace("\n.", "\n..", $data['message']); //сообщение
                    mail($data['email'], $subject, $message); //отправка на email заказчика
                    return '{"status": "success"}';
                }
            }
        }
        return '{"status": "failed"}';
    }
}
