<?php

namespace App\Http\Controllers;

use App\Models\userAPIModel;
use Exception;
use Illuminate\Http\Request;


class userAPIController extends Controller
{

    /**Variável para armazenar instância do model de usuários**/
    protected $userAPIModel;

    /**
     * Construtor da controller
     * Cria instância da Model de Usuários para ser utilizada durante o processo
     **/
    public function __construct()
    {
        $this->userAPIModel = new userAPIModel();
    }

    /**
     * Trata a requisição para salvar os dados do usuário
     **/
    public function create(Request $request)
    {

        $data = $this->replaceData($request->all());

        if($this->userAPIModel->userAlreadyRegistered($data['cpf'])){
            return json_encode([
                'success' => false,
                'status' => 400,
                'msg' => 'Usuario ja cadastrado!',
                'id' => $this->userAPIModel->getUserId()
            ]);
        }

        return $this->store($data);
    }

    /**
     * Insere novo usuário no banco
     **/
    public function store($data)
    {
        try {

            $this->userAPIModel->fill($data)->save();
            return json_encode(['success' => true, 'status' => 200]);

        }catch (Exception $exception){
            return json_encode(['success' => false, 'status' => 400, 'msg' => $exception->errorInfo]);
        }
    }

    /**
     * Lista todos os usuários cadastrados
     **/
    public function show()
    {
        $users = $this->userAPIModel->getUsers();
        return json_encode($users);
    }

    /**
     * Exibe os dados do usuário para edição
     **/
    public function edit(Request $request)
    {
        $plate = $request->get('plate');
        $cpf   = $this->replaceCpf($request->get('cpf'));

        $user  = $this->userAPIModel->getUserData($cpf,$plate);

        if(!empty($user)){
            return view('edit')->with('user',$user);
        }
        else{
            return view('login')->with('error',true);
        }
    }

    /**
     * Envia os dados do usuário para atualização e retorna para a edição novamente
     **/
    public function updateUser(Request $request){

        $this->update($request);

        $user = $this->userAPIModel->getUser($request->get('id'));
        return view('edit')->with('user',$user)->with('success',true);
    }

    /**
     * Atualiza dados do usuário
     **/
    public function update(Request $request)
    {
        try {

            $this->userAPIModel->updateAddressUser($request->get('id'),$request->get('address'));
            return json_encode(['success' => true, 'status' => 200]);

        }catch (Exception $exception){
            return json_encode(['success' => false, 'status' => 400, 'msg' => $exception->getMessage()]);
        }
    }

    /**
     * Exclui usuário cadastrado
     **/
    public function destroy(Request $request)
    {
        try {

            $this->userAPIModel->deleteUser($request->get('id'));
            return json_encode(['success' => true, 'status' => 200]);

        }catch (Exception $exception){
            return json_encode(['success' => false, 'status' => 400, $exception->getMessage()]);
        }

    }

    /**
     * Retorna token do larável para integrações via POST
     **/
    public function getToken()
    {

        $token = csrf_token();

        return json_encode(['token' => $token]);
    }

    /**
     * Trata os dados do usuário
     **/
    public function replaceData(array $data)
    {
        $data['cpf']   = $this->replaceCpf($data['cpf']);
        $data['plate'] = $this->replacePlate($data['plate']);
        $data['tel']   = $this->replaceTel($data['tel']);

        return $data;
    }

    /**
     * Retorna apenas os números do cpf
     **/
    protected function replaceCpf($cpf)
    {
        return str_replace('-', '', str_replace('.', '', $cpf));
    }

    /**
     * Retorna a placa em maiúsculo
     **/
    protected function replacePlate($plate)
    {
        return strtoupper($plate);
    }

    /**
     * Retorna apenas o número do telefone
     **/
    protected function replaceTel($tel)
    {
        return str_replace('-', '', str_replace(')', '', str_replace('(', '', $tel)));
    }

}



