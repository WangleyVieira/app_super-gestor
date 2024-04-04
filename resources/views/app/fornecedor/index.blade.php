<h3>
    Fornecedor
</h3>

@php
    /*
    if(isset($variavel)) {} //retornar true se a variável estiver definida
    */
@endphp

{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
    <br>
    Telefone: {{ $fornecedores[1]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }}
    @switch( $fornecedores[0]['ddd'])
        @case('11')
                São Paulo - SP
            @break

        @case('32')
                Juiz de Fora - MG
            @break

        @case('85')
                Fortaleza - CE
            @break

        @default
            Estado não identificado

    @endswitch
@endisset --}}
@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
@endisset
