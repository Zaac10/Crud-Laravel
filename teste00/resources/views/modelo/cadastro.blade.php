@extends('modelo.layout')
@section('content')

    <div class="card-trp">
        <form>
            <div class="form-trp">
                <div class="form-title">
                    <h3>Cadastro Modelo de Caminhão</h3>
                </div>
                <div>
                    <label for="" class="form-label">Modelo do Caminhão</label>
                    <input type="text" class="form-input" id="ModeloC" name="Modelo_C" placeholder="Modelo Caminhão">
                </div>
                <div>
                    <label for="" class="form-label">Cor do Caminhão</label>
                    <input type="text" class="form-input" id="CorCaminhao" name="Cor_Caminhao" placeholder="Cor do Caminhão">
                </div>
                
                <div>
                    <button class="form-button" onclick="CadastrarModelo()">Cadastrar</button>
                </div>

                 
            </div>
        </form>
    </div>

@endsection