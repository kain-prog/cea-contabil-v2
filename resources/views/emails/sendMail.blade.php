<x-mail::message>
<h3>
    @if($data['assunto'])
        {{ $data['assunto'] }}
    @else
        Dúvidas ou Contratação de Serviço
    @endif
</h3>

<div style="display: flex; align-items: center;">
    <p><strong style="color: #718096; margin-right: 5px;">Mensagem de </strong></p>
    <h2 style="color: #718096;">{{ $data['nome'] }}</h2>
</div>

<p style="color: #718096"><strong>E-mail</strong>: {{ $data['email'] }}</p>
<p style="color: #718096; margin-bottom: 15px; padding-bottom: 30px;"><strong>Mensagem</strong>: <br/> {{ $data['mensagem'] }} </p>

<x-mail::button :url="'https://ceacontabil.com'">
Acesse o site clicando aqui
</x-mail::button>

<p style="color: #718096">Atenciosamente, <br />
    CeA - Contábil
</p>
</x-mail::message>
