<h3>Fornecedores</h3>

@isset($fornecedores)

    @forelse ($fornecedores as $fornecedor)
        <b>Iteração atual:</b> {{ $loop->iteration }}
        <br>
        <b>Fornecedor:</b> {{ $fornecedor['nome'] }}
        <br>
        <b>Status:</b> {{ $fornecedor['status'] }}
        <br>
        <b>CNPJ:</b> {{ $fornecedor['cnpj'] ?? 'Dado não preenchido!' }}
        <br>
        <b>Telefone:</b> {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)<b>Primeira iteração!</b>@endif
        @if ($loop->last)<b>Última iteração!<br>Total de rezistros:</b> {{ $loop->count }}@endif
        <hr>
    @empty
        Não há fornecedores cadastrados!<br>
    @endforelse

@endisset


