<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
          'name'               
        , 'email'            
        , 'cpf'                
        , 'date_of_birth'      
        , 'street'             
        , 'house_number'       
        , 'cep'                
        , 'city'               
        , 'state_abbreviation' 
        , 'active'             
    ];
}
