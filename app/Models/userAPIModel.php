<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class userAPIModel extends Model
{
    use HasFactory;

    protected $table      = 'user';
    protected $primaryKey = 'id';
    public $incrementing  = true;
    public $timestamps    = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cpf',
        'tel',
        'plate',
        'address'
    ];

    /** Armazena o id do usuário **/
    protected $idUser;

    /** Retorna o id do usuário */
    public function getUserId(){
        return $this->idUser;
    }

    /** Define o id do usuário **/
    public function setUserId($value){
        $this->idUser = $value;
    }

    /** Retorna os dados do usuário pelo seu ID **/
    public function getUser($id){

        $data = DB::table('user')->where('id',$id)->get(['*']);
        return isset($data[0]) ? $data[0] : false;
    }

    /** Retorna os dados do usuário pelo cpf,placa **/
    public function getUserData($cpf,$plate){

        $data = DB::table('user')->where('cpf',$cpf)->where('plate',$plate)->get(['*']);
        return isset($data[0]) ? $data[0] : false;
    }

    /** Retorna todos os usuários da tabela **/
    public function getUsers(){

        return DB::table('user')->get(['*']);
    }

    /** Verifica se o usuário já possui cadastro **/
    public function userAlreadyRegistered($cpf)
    {
        $data = DB::table('user')->where('cpf',$cpf)->get('id');

        if(isset($data[0])){

            $this->setUserId($data[0]->id);
            return true;
        }
        else{
            return false;
        }
    }

    /** Atualiza o endereço do usuário **/
    public function updateAddressUser($id,$address){
        $data = DB::table('user')->where('id',$id)->update(['address'=>$address]);
    }

    /** Exclui o usuário da tabela **/
    public function deleteUser($id){
        DB::table('user')->where('id',$id)->delete();
    }

}
