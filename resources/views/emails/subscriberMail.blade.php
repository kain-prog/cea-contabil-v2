<x-mail::message>
# Simples Consultoria Gratuita

<p><strong>E-mail</strong>: {{ $data['email'] }}</p>
<p><strong>Mensagem</strong>: <br/> {{ $data['mensagem'] }} </p>

<x-mail::button :url="'http://127.0.0.1:8000/'">
Acesse o site clicando aqui
</x-mail::button>

CeA - Contábil
</x-mail::message>
