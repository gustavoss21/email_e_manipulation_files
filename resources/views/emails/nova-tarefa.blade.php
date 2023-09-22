<x-mail::message>
# {{$tarefa}}

Data limite de conclusão: {{$validade}}
The body of your message.

<x-mail::button :url=$url>
ver tarefa
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
