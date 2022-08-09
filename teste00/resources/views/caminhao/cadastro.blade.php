@extends('caminhao.layout')
@section('content')

    <div class="card-trp">
        <form>
            <div class="form-trp">
                <div class="form-title">
                    <h3>Cadastro De Caminhão</h3>
                </div>
                <div>
                    <label for="" class="form-label">Motorista</label>
                    <input type="text" class="form-input" id="CaminhaoMotorista" name="Caminhao_Motorista" placeholder="Motorista do Caminhão">
                </div>
                <div>
                    <label for="" class="form-label">Modelo do Caminhão</label>
                    <input type="text" class="form-input" id="ModeloCaminhao" name="Modelo_Caminhao" placeholder="Modelo do Caminhão">
                </div>
                <div>
                    <label for="" class="form-label">Placa</label>
                    <input type="number" class="form-input" name="Placa_Caminhao" id="PlacaCaminhao" placeholder="Placa do Caminhão">
                </div>
                <div>
                    <button class="form-button" onclick="CadastrarCaminhao()">Cadastrar</button>
                </div>

                 
            </div>
        </form>
    </div>

@endsection