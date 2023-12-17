<x-mail::message>
# Simples - 1º Consultoria Gratuita

<p style="color: #718096"><strong>E-mail</strong>: {{ $data['email'] }}</p>
<p style="padding-bottom: 30px; margin-bottom: 15px;">
    @if ( $data['mensagem'] )
        <p style="color: #718096"><strong>Mensagem</strong>: <br/> {{ $data['mensagem'] }} </p>        
    @endif
</p>

<x-mail::button :url="'https://ceacontabil.com'">
Acesse o site clicando aqui
</x-mail::button>

<p style="color: #718096">Atenciosamente, <br />
    CeA - Contábil
</p>
</x-mail::message>
