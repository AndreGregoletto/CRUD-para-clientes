<?php

namespace App\Http\Controllers;

use App\Http\Requests\client\createRequest;
use App\Http\Requests\client\updateRequest;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Response as HttpResponse;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get(['id', 'name', 'cpf', 'date_of_birth']);

        $clients->transform(function ($client) {
            $client->cpf = substr($client->cpf, 0, 3) . '.' . substr($client->cpf, 3, 3) . '.' . substr($client->cpf, 6, 3) . '-' . substr($client->cpf, 9, 2);
            $client->cep = substr($client->cep, 0, 5) . '-' . substr($client->cep, 5);

            $client->year          = Carbon::parse($client->date_of_birth)->age;
            $client->date_of_birth = Carbon::createFromFormat('Y-m-d', $client->date_of_birth)->format('d-m-Y');

            return $client;
        });

        return view("index", ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createRequest $request)
    {
        $aCliente = $request->validated();

        $aCliente['cpf'] = preg_replace('/[^0-9]/', '', $aCliente['cpf']);
        $aCliente['cep'] = preg_replace('/[^0-9]/', '', $aCliente['cep']);

        try {
            Client::create($aCliente);
    
            return redirect()->route('client.index')->with('success', 'Cliente adicionado com sucesso.');
        } catch (\Throwable $th) {
            return redirect()->route('client.create')->with('error', 'Não foi possivel adicionar o Cliente');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oClient = Client::whereId($id)->firstOrFail();

        $oClient->cpf = substr($oClient->cpf, 0, 3) . '.' . substr($oClient->cpf, 3, 3) . '.' . substr($oClient->cpf, 6, 3) . '-' . substr($oClient->cpf, 9, 2);
        $oClient->cep = substr($oClient->cep, 0, 5) . '-' . substr($oClient->cep, 5);
        
        $oClient->year          = Carbon::parse($oClient->date_of_birth)->age;
        $oClient->date_of_birth = Carbon::createFromFormat('Y-m-d', $oClient->date_of_birth)->format('d-m-Y');

        return view('show', ['client' => $oClient]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);

        $client->cpf = substr($client->cpf, 0, 3) . '.' . substr($client->cpf, 3, 3) . '.' . substr($client->cpf, 6, 3) . '-' . substr($client->cpf, 9, 2);
        $client->cep = substr($client->cep, 0, 5) . '-' . substr($client->cep, 5);

        return view('edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateRequest $request, string $id)
    {
        $aClient        = $request->validated();
        $aClient['cpf'] = preg_replace('/[^0-9]/', '', $aClient['cpf']);
        $aClient['cep'] = preg_replace('/[^0-9]/', '', $aClient['cep']);

        Client::whereId($id)->update($aClient);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->delete();
    
            return response()->json(['success' => true], HttpResponse::HTTP_OK);
        } catch (\Throwable $th) {
            return response()->json(
                [
                     'success' => false
                    , 'message' => 'Erro ao excluir cliente'
                ]
                , HttpResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
