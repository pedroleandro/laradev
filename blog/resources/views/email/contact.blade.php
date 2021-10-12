@component('mail::message')
Olá, você recebeu outro contato a partir do seu site!

Nome: <b>{{ $reply_name }}</b>

E-mail: {{ $reply_email }}

Sobre: {{ $subject }}

@component('mail::panel')
    {{ $message }}
@endcomponent

@endcomponent
