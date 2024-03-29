<x-layout title="Novo Cliente">
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">E-MAIL</span>
                    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">CPF</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" maxlength="14" onkeypress="return onlyNumbers(event)" oninput="formatCPF(this)" id="cpf" name="cpf" value="{{ old('cpf') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de Nacimento</span>
                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="date_of_birth" value="{{ old('date_of_birth') }}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">CEP</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="cep" name="cep" maxlength="9" onkeypress="return onlyNumbers(event)" oninput="formatCEP(this)" value="{{ old('cep') }}">
                </div>
            </div>
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Rua</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="street" value="{{ old('street') }}">
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número da Residência</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="house_number" value="{{ old('house_number') }}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cidade</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="city" value="{{ old('city') }}">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">UF</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="state_abbreviation" value="{{ old('state_abbreviation') }}">
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
                    <button type="submit" class="btn btn-success">Criar
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-layout>