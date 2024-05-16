<h3>Hello world no fornecedor controller pela view</h3>

@isset($fornecedores)


@foreach($fornecedores as $index => $fornecedor)
     Fornecedor: {{$fornecedor['nome']}}
     <br>
     Status: {{$fornecedor['status']}}
     <br>
     numero: {{$fornecedor['telefone']}}
     <hr>
@endforeach

@endisset