<x-mail::message>

@if( !empty( $data['nome'] ))
    # Caro(a) {{ $data['nome'] }},
@endif

<span>
    @if ( !empty($data['original']))
        <p style="color: #718096">Gostaríamos de agradecer imensamente por entrar em contato conosco. Sua mensagem é muito importante para nós e faremos o possível para responder o mais rápido possível.</p>
        <p style="color: #718096">Estamos dedicados a fornecer o melhor serviço e suporte aos nossos clientes, e sua consulta nos ajuda a melhorar continuamente.</p>
        <p style="color: #718096">Se houver mais alguma informação que você precise ou alguma outra dúvida que possamos ajudar a esclarecer, por favor, não hesite em nos contatar novamente.</p>
    @else
        <p style="color: #718096">Agradecemos imensamente por entrar em contato conosco através do formulário em nosso site buscando nossa consultoria gratuita.</p>
        <p style="color: #718096">Sua solicitação foi recebida com sucesso e estamos ansiosos para ajudar. Nossa equipe especializada está revisando suas necessidades para oferecer a melhor consultoria possível.</p>
        <p style="color: #718096">Entraremos em contato em breve para agendar uma conversa inicial e discutir detalhes para garantir que possamos atender às suas necessidades da melhor forma.</p>
    @endif
</span>

<x-mail::button :url="'http://127.0.0.1:8000/'">
Acesse o site clicando aqui
</x-mail::button>

<p style="color: #718096">Atenciosamente, <br />
    CeA - Contábil
</p>
</x-mail::message>