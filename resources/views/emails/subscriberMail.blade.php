<x-mail::message>
# Simples - 1º Consultoria Gratuita

<p style="color: #718096"><strong>E-mail</strong>: {{ $data['email'] }}</p>
<span>
    @if ( $data['mensagem'] )
        <p style="color: #718096"><strong>Mensagem</strong>: <br/> {{ $data['mensagem'] }} </p>        
    @endif
</span>

<x-mail::button :url="'http://127.0.0.1:8000/'">
Acesse o site clicando aqui
</x-mail::button>

<p style="color: #718096">Atenciosamente, <br />
    CeA - Contábil
</p>
</x-mail::message>
