@extends('main')
@section('title','Área do Administrador')
@section('content')

    <div class="info-div">

        <h2>Descrição dos dados: </h2> <br>

        <p><strong>Usuario</strong>: Possui id, name, cpf, plate, address, tel <br></p>

        <p><strong>Response</strong>: Possui success (true,false), status (200,400) e o motivo caso ocorra algum erro. <br></p>

        <p><strong>_token</strong>: Token de integração do láravel, <strong>necessário no corpo de todas as requisições do método POST</strong>,<br>
            pode ser acessado através do método GET /token<br></p> <br>

        <h2>Endpoints disponíveis para integração:  </h2><br>

        <!-- LISTAR USUÁRIOS CADASTRADOS -->
        <table class="table table-dark table-bordered">
            <thead class="text-center">

                <tr>
                    <th colspan="5" class="text-center">Lista todos os usuários cadastrados</th>
                </tr>

                <tr>
                    <th scope="col">Endpoint</th>
                    <th scope="col">Método</th>
                    <th scope="col" colspan="2">Request</th>
                    <th scope="col">Response</th>
                </tr>

            </thead>
            <tbody>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                    <th scope="col">Header</th>
                    <th scope="col">Body</th>
                    <th scope="col">#</th>
                </tr>
                <tr>
                    <td>/list</td>
                    <td>GET</td>
                    <td>Content-Type: application/json</td>
                    <td>#</td>
                    <td>
                        [ <br>
                            { <br>
                                "id": 7, <br>
                                "name": "Chico", <br>
                                "cpf": "12345678910", <br>
                                "tel": "31987654321", <br>
                                "plate": "PROAUTO", <br>
                                "address": "Rua um N 2" <br>
                            }, <br>
                            { <br>
                                "id": 8, <br>
                                "name": "Francisco", <br>
                                "cpf": "12345678911", <br>
                                "tel": "32987654321", <br>
                                "plate": "PROAUTO2", <br>
                                "address": "Rua dois numero um" <br>
                            }
                        ]
                    </td>
                </tr>

            </tbody>
        </table>

        <!-- BUSCAR O TOKEN DO POST -->
        <table class="table table-dark table-bordered">
            <thead class="text-center">
                <tr>
                    <th colspan="5" class="text-center">Retorna o _token necessários para as requisições do método POST</th>
                </tr>
                <tr>
                    <th scope="col">Endpoint</th>
                    <th scope="col">Método</th>
                    <th scope="col" colspan="2">Request</th>
                    <th scope="col">Response</th>
                </tr>
            </thead>
            <tbody>

                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                    <th scope="col">Header</th>
                    <th scope="col">Body</th>
                    <th scope="col">#</th>
                </tr>

                <tr>
                    <td>/token</td>
                    <td>GET</td>
                    <td>Content-Type: application/json</td>
                    <td>#</td>
                    <td>
                        { <br>
                            "token": "Pt3DQhLLbBRVdpRpOUWUitkGRdFShYUBzIqFsd8g" <br>
                        }
                    </td>
                </tr>

            </tbody>
        </table>

        <!-- CADASTRAR NOVO USUÁRIO -->
        <table class="table table-dark table-bordered">
            <thead class="text-center">

                <tr>
                    <th colspan="5" class="text-center">Cadastrar um novo usuário</th>
                </tr>

                <tr>
                    <th scope="col">Endpoint</th>
                    <th scope="col">Método</th>
                    <th scope="col" colspan="2">Request</th>
                    <th scope="col">Response</th>
                </tr>
            </thead>
            <tbody>

                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                    <th scope="col">Header</th>
                    <th scope="col">Body</th>
                    <th scope="col">#</th>
                </tr>

                <tr>
                    <td>/create</td>
                    <td>POST</td>
                    <td>Content-Type: application/json</td>
                    <td> Exemplo:<br>
                        {<br>
                            "name":"Chico",<br>
                            "cpf": "123.456.789-10",<br>
                            "plate":"PROAUTO",<br>
                            "address": "Rua um numero dois",<br>
                            "tel":"(31)987654321",<br>
                            "_token": "ikb42AU7fMLuzTgwagFyLZKXixNHY0Ia6of9bzqj"<br>
                        }
                    </td>
                    <td>
                        Sucesso: <br>

                        { <br>
                        "success": true, <br>
                        "status": 200, <br>
                        } <br> <br>

                        Erro: <br>

                        { <br>
                            "success": false, <br>
                            "status": 400, <br>
                            "msg": "Usuario ja cadastrado!",<br>
                            "id": 8 <br>
                        }

                    </td>
                </tr>

            </tbody>
        </table>

        <!-- EDITAR USUÁRIO CADASTRADO -->
        <table class="table table-dark table-bordered">
            <thead class="text-center">

                <tr>
                    <th colspan="5" class="text-center">Editar endereço do usuário cadastrado</th>
                </tr>

                <tr>
                    <th scope="col">Endpoint</th>
                    <th scope="col">Método</th>
                    <th scope="col" colspan="2">Request</th>
                    <th scope="col">Response</th>
                </tr>
            </thead>
            <tbody>

                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                    <th scope="col">Header</th>
                    <th scope="col">Body</th>
                    <th scope="col">#</th>
                </tr>

                <tr>
                    <td>/update</td>
                    <td>POST</td>
                    <td>Content-Type: application/json</td>
                    <td> Exemplo:<br>
                        { <br>
                        "id":1, <br>
                        "address": "Novo endereço", <br>
                        "_token": "ikb42AU7fMLuzTgwagFyLZKXixNHY0Ia6of9bzqj" <br>
                        }
                    </td>
                    <td>
                        Sucesso: <br>

                        { <br>
                        "success": true, <br>
                        "status": 200 <br>
                        } <br>

                        Erro: <br>

                        { <br>
                        "success": false, <br>
                        "status": 400, <br>
                        "msg": "Motivo do erro...",<br>
                        }

                    </td>
                </tr>

            </tbody>
        </table>

        <!-- EXCLUIR USUÁRIO -->
        <table class="table table-dark table-bordered">
            <thead class="text-center">
                <tr>
                    <th colspan="5" class="text-center">Excluir usuário cadastrado</th>
                </tr>

                <tr>
                    <th scope="col">Endpoint</th>
                    <th scope="col">Método</th>
                    <th scope="col" colspan="2">Request</th>
                    <th scope="col">Response</th>
                </tr>
            </thead>
            <tbody>

                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                    <th scope="col">Header</th>
                    <th scope="col">Body</th>
                    <th scope="col">#</th>
                </tr>

                <tr>
                    <td>/destroy</td>
                    <td>POST</td>
                    <td>Content-Type: application/json</td>
                    <td> Exemplo:<br>
                        {<br>
                        "id":"1",<br>
                        "_token": "Pt3DQhLLbBRVdpRpOUWUitkGRdFShYUBzIqFsd8g"<br>
                        }
                    </td>
                    <td>
                        Sucesso: <br>

                        { <br>
                        "success": true, <br>
                        "status": 200 <br>
                        } <br>

                        Erro: <br>

                        { <br>
                        "success": false, <br>
                        "status": 400, <br>
                        "msg": "Motivo do erro...",<br>
                        }

                    </td>
                </tr>

            </tbody>
        </table>

    </div>

    <a href="/">
        <div class="d-grid gap-3 m-top">
            <button class="btn btn-dark" type="button" id="btnVoltar">Voltar</button>
        </div>
    </a>

@endsection
