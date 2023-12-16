<x-mail::message>

@if($data["mensagem"] === "client")
    <p>Caro {{ $data['nome'] }},</p>
    <p>Agradecemos imensamente por entrar em contato conosco através do formulário em nosso site, buscando nossa consultoria gratuita.</p>
    <p>Sua solicitação foi recebida com sucesso e estamos ansiosos para ajudar. Nossa equipe especializada está revisando suas necessidades para oferecer a melhor consultoria possível.</p>
    <p>Entraremos em contato em breve para agendar uma conversa inicial e discutir detalhes para garantir que possamos atender às suas necessidades da melhor forma.</p>
@else
    <p>{{ $data['mensagem'] }}</p>
@endif

<x-mail::button :url="'http://127.0.0.1:8000/'">
Acesse o site clicando aqui
</x-mail::button>

Atenciosamente,<br>
CeA - Contábil
</x-mail::message>
