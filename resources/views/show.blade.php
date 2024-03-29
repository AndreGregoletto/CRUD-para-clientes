<x-layout title="Cliente">
    <div class="row">
        <div class="col-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                <input disabled readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value="{{ $client->name }}">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">E-MAIL</span>
                <input disabled readonly type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="{{ $client->email }}">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">CPF</span>
                <input disabled readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cpf" value="{{ $client->cpf }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Data de Nacimento</span>
                <input disabled readonly type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date_of_birth" value="{{ $client->date_of_birth }}">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">CEP</span>
                <input disabled readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cep" value="{{ $client->cep }}">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Rua</span>
                <input disabled readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="street" value="{{ $client->street }}">
            </div>
        </div>
    </div>
    <div class="row"> 
        <div class="col-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Número da Residência</span>
                <input disabled readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="house_number" value="{{ $client->house_number }}">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Cidade</span>
                <input disabled readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="city" value="{{ $client->city }}">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">UF</span>
                <input disabled readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="state_abbreviation" value="{{ $client->state_abbreviation }}">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Ativo</span>
                <select disabled readonly class="form-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="active">
                    <option value="1">Sim</option>
                    <option value="0">Nao</option>
                </select>
            </div>
        </div>
    </div>
</x-layout>