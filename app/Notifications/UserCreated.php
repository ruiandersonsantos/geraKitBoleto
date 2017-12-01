<?php

namespace App\Notifications;


use Illuminate\Notifications\Notification;

use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $appName = config('app.name');
        return (new MailMessage)
                    ->subject("Sua conta no $appName foi criada!")
                    ->greeting("Olá {$notifiable->name}, seja bem vindo ao $appName")
                    ->line("voce acabe de receber uma senha provisória, senha: SECRET123")
                    ->line("Sua senha deve ser trocada no seu primeiro login.")
                    ->salutation("atenciosamente,");
    }


}
