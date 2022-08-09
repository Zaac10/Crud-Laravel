@extends('motorista.layout')
@section('content')

    <div class="card-trp">
        <form>
            <div class="form-trp">
                <div class="form-title">
                    <h3>Cadastro De Motorista</h3>
                </div>
                <div>
                    <label for="" class="form-label">Nome</label>
                    <input type="text" class="form-input" id="NomeMotorista" name="Nome_Motorista" placeholder="Nome do Motorista">
                </div>
                <div>
                    <label for="" class="form-label">CPF</label>
                    <input type="text" class="form-input" id="CpfMotorista" name="Cpf_Motorista" placeholder="CPF do Motorista">
                </div>
                <div>
                    <label for="" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-input" name="Nasc_Motorista" id="NascMotorista" placeholder="Data de Nascimento">
                </div>
                <div>
                    <label for="" class="form-label">E-mail</label>
                    <input type="email" class="form-input" name="Email_Motorista" id="EmailMotorista" placeholder="E-mail">
                </div>
                <div>
                    <button class="form-button" onclick="CadastrarMotorista()">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

@endsection