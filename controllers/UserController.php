<?php

include_once(__DIR__ . '/../config.php');
include_once(__DIR__ . '/../models/Client.php');

class UserController
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function executarAcao($acao, $parametros)
    {
        switch ($acao) {
            case 'selectAllClientes':
                return $this->selectAllClientes($parametros);
                break;
            case 'selectAllLog':
                return $this->selectAllLog($parametros);
                break;
            case 'historicoLogs':
                return $this->historicoLogs();
                break;
                
            case 'obterInformacoesUsuario':
                return $this->obterInformacoesUsuario($parametros['login']);
                
            case 'editarUsuario':
                return $this->editarUsuario($parametros['id'], $parametros['nome'], $parametros['email'], $parametros['senha']);

            case 'excluirUsuario':
                return $this->excluirUsuario($parametros['id']);

            case 'dashboard':
                return $this->dashboard();

            default:
                // Lidar com ação desconhecida
                return null;
        }
    }

    public function selectAllClientes()
    {
        $resultado = Client::selectAllClientes($this->conexao);
        //var_dump($resultado); // Adicione esta linha
        return $resultado;
    }

    public function selectAllLogs()
    {
        $sql = "SELECT * FROM sua_tabela_de_logs";
        $result = $this->conexao->query($sql);

        if (!$result) {
            // Trate o erro, por exemplo, exibindo uma mensagem de erro ou logando
            echo "Erro na consulta: " . $this->conexao->error;
            return null;
        }

        $logs = $result->fetch_all(MYSQLI_ASSOC);

        return $logs;
    }


    
    public function historicoLogs()
    {
        $logs = $this->selectAllLogs();
        // Renderize a página de histórico de logs com os dados obtidos
        // Você pode usar um arquivo de visualização (por exemplo, histLog.php) para isso
        include_once(__DIR__ . '/../views/sist/admin/histLog.php');
    }


    public function obterInformacoesUsuario($login)
    {
        return Client::selectClientePorLogin($this->conexao, $login);
    }

    public function editarUsuario($id, $nome, $email, $senha)
    {
        // Pelo menos um campo deve ser fornecido
        if (is_null($nome) && is_null($email) && is_null($senha)) {
            return false; // Ou você pode lançar uma exceção ou tomar outra ação apropriada
        }
    
        $dadosAtualizacao = [];
        $tipos = "";
        $valores = [];
    
        // Construa dinamicamente o array de dados de atualização
        $campos = ['nome_usuario' => $nome, 'email' => $email, 'senha' => $senha];
        foreach ($campos as $campo => $valor) {
            if (!is_null($valor)) {
                $dadosAtualizacao[$campo] = $valor;
                $tipos .= "s"; // Supondo que todos os campos são strings, ajuste se necessário
                $valores[] = $valor;
            }
        }
    
        // Adicione o ID como último valor no array
        $tipos .= "i";
        $valores[] = $id;
    
        return Client::updateCliente($this->conexao, $id, $dadosAtualizacao);
    }
    

    

    public function excluirUsuario($id)
    {
        $exclusaoBemSucedida = Client::deleteCliente($this->conexao, $id);
    
        if ($exclusaoBemSucedida) {

            print "<script> location.href='./historico-usuario'</script>";
            return ["mensagem" => "Usuário excluído com sucesso"];
        } else {
            return ["mensagem" => "Erro ao excluir usuário"];
        }
    }
        


    private function dashboard()
    {
        $quantidadeAdmin = $this->contarLinhasPorValor('gp_03_consultanumero.usuario', 'tipoUser', 'admin');
        $quantidadeComun = $this->contarLinhasPorValor('gp_03_consultanumero.usuario', 'tipoUser', 'comun');
        $quantidadeAtivo = $this->contarLinhasPorStatus('gp_03_consultanumero.usuario', 'status', 'ativo');
        $quantidadeInativo = $this->contarLinhasPorStatus('gp_03_consultanumero.usuario', 'status', 'inativo');

        return [
            'quantidadeAdmin' => $quantidadeAdmin,
            'quantidadeComun' => $quantidadeComun,
            'quantidadeAtivo' => $quantidadeAtivo,
            'quantidadeInativo' => $quantidadeInativo,
        ];
    }

    private function contarLinhasPorValor($usuario, $tipoUser, $valor)
    {
        $sql = "SELECT COUNT(*) AS quantidade FROM {$usuario} WHERE {$tipoUser} = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('s', $valor);
        $stmt->execute();

        $quantidade = null;

        $stmt->bind_result($quantidade);
        $stmt->fetch();
        $stmt->close();

        return $quantidade;
    }

    private function contarLinhasPorStatus($usuario, $status, $valor)
    {
        $sql = "SELECT COUNT(*) AS quantidade FROM {$usuario} WHERE {$status} = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param('s', $valor);
        $stmt->execute();

        $quantidade = null;

        $stmt->bind_result($quantidade);
        $stmt->fetch();
        $stmt->close();

        return $quantidade;
    }

}









// Crie uma instância da classe UserController, passando a conexão como argumento
$userController = new UserController($conexao);

// Exemplo de como usar:
$acao = 'dashboard';
$parametros = [];

$resultadoDashboard = $userController->executarAcao($acao, $parametros);

// Trate o resultado conforme necessário
// var_dump($resultadoDashboard);

?>
