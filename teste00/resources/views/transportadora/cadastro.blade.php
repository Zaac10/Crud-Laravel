
@extends('transportadora.layout')

@section('content')
   <div class="card-trp">
            <form>
                <div class="form-trp">
                    <div class="form-title">
                        <h1>Cadastro da Transportadora</h1>
                    </div>
                    <div>
                        <label class="form-label">Nome da Transportadora</label>
                        <input type="text" class="form-input" id="NomeTransportadora" name="NomeTrp" placeholder="Nome da Transportadora">
                    </div>
                    <div>
                        <label class="form-label">CNPJ</label>
                        <input type="text" class="form-input" id="CnpjTransportadora" name="CnpjTrp" placeholder="CNPJ da Transportadora">
                    </div>
                    <div>
                        <button class="form-button" onclick="CadastrarTransportadora()">Cadastrar</button>
                    </div>
                </div>
            </form>
    </div>
@endsection
   