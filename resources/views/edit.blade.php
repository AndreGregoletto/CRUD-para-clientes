<x-layout title="Editar Cliente">
    <form method="POST" action="{{ route('client.update', $client->id) }}">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value="{{ $client->name }}">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">E-MAIL</span>
                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="{{ $client->email }}">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">CPF</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" maxlength="14" onkeypress="return onlyNumbers(event)" oninput="formatCPF(this)" id="cpf" name="cpf" value="{{ $client->cpf }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de Nacimento</span>
                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date_of_birth" value="{{ $client->date_of_birth }}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">CEP</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="cep" name="cep" maxlength="9" onkeypress="return onlyNumbers(event)" oninput="formatCEP(this)" value="{{ $client->cep }}">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Rua</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="street" value="{{ $client->street }}">
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número da Residência</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="house_number" value="{{ $client->house_number }}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cidade</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="city" value="{{ $client->city }}">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">UF</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="state_abbreviation" value="{{ $client->state_abbreviation }}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ativo</span>
                    <select class="form-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="active">
                        <option value="1">Sim</option>
                        <option value="0">Nao</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="container text-end">
            <div class="row">
                <div class="col-md-2 offset-md-10">
                    <button type="submit" class="btn btn-success">Editar
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layout>