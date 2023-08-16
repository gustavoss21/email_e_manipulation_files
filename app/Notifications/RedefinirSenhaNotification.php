<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;
    public $tokken;
    public $email;
    public $user;
    /**
     * Create a new notification instance.
     */
    public function __construct($tokken, $email, $user)
    {
        $this->tokken = $tokken;
        $this->email = $email;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {   
        $url = 'http://localhost:8000/reset-password/'.$this->tokken.'?email='.$this->email;
        $minutos = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        return (new MailMessage)
            ->subject('notificação de redefinição de senha')
            ->greeting('Ola '.$this->user)
            ->line('você esta recebendo esse email porque foi feito um pedido de redefinição de senha')
            ->action('Redefinir senha', $url)
            ->line('Pedido de redefinição de senha expira em '.$minutos.' minutos.')
            ->line('Se você não fez o pedido de alteção de senha, nenhuma ação é necessária')
            ->salutation('Até breve!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
