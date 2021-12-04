<?php  
function validar_msg($msg)
{

	switch ($msg) {
		case 'embranco':
			$retorno = '<h3>Informe todos os dados para efetuar o login!</h3>';
			break;

		case 'invalido':
			$retorno = '<h3>Atenção: Usuário ou senha inválidos</h3>';
			break;

		case 'cadembranco':
			$retorno = '<h3>Preencha todos os dados do jogo para cadastrar!</h3>';
			break;

		case 'edtembranco':
			$retorno = '<h3>Preencha todos os dados do jogo para editar!</h3>';
			break;

		case 'cadastrado':
			$retorno = '<h3>Jogo cadastrado com sucesso!</h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3>Atenção: erro ao efetuar o cadastro. Tente novamente mais tarde...</h3>';
			break;

		case 'idinvalido':
			$retorno = '<h3>Atenção: jogo inválido. por favor, repita a operação</h3>';
			break;

		case 'jogodeletado':
			$retorno = '<h3>Jogo excluído com sucesso!</h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3>Atenção: erro ao excluir jogo. Tente novamente mais tarde...</h3>';
			break;

		case 'editado':
			$retorno = '<h3>Dados do jogo alterados com sucesso!</h3>';
			break;

		case 'erroeditar':
			$retorno = '<h3>Atenção: erro ao alterar dados do jogo. Tente novamente mais tarde...</h3>';
			break;

		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>