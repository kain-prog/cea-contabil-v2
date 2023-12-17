<x-mail::message>
<h3>
    @if($data['assunto'])
        {{ $data['assunto'] }}
    @else
        Dúvidas ou Contratação de Serviço
    @endif
</h3>

# Mensagem de {{ $data['nome'] }}

<p style="color: #718096"><strong>E-mail</strong>: {{ $data['email'] }}</p>
<p style="color: #718096"><strong>Mensagem</strong>: <br/> {{ $data['mensagem'] }} </p>

<x-mail::button :url="'http://127.0.0.1:8000/'">
Acesse o site clicando aqui
</x-mail::button>

<p style="color: #718096">Atenciosamente, <br />
    CeA - Contábil
</p>
</x-mail::message>
