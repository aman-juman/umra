<?php namespace ustudio\umra\Components;

use Mail;
use Cms\Classes\ComponentBase;

class MyEmailForm extends ComponentBase
{
    public function onSendEmail()
    {
        $data = post(); // Получите данные из формы

        $recipientEmail = env('MAIL_TO_ADDRESS', 'адрес_получателя@example.com'); // Получите адрес получателя из .env
        $emailSubject = env('MAIL_SUBJECT', 'Тема вашего письма'); // Получите тему письма из .env

        // Отправьте письмо
        Mail::send('your-email-template', $data, function($message) use ($recipientEmail, $emailSubject) {
            $message->to($recipientEmail);
            $message->subject($emailSubject);
        });

        // Добавьте логику для обработки успешной отправки или ошибки
    }
}
