<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index($indice = null) {
        
        $this->load->model('usuario_model');
        
        $dados['usuarios'] = $this->usuario_model->get_usuarios();
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Usuario cadastrado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar o usuário.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Usuario excluído com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir o usuário.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Usuario atualizado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizar o usuário.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('listar_usuario', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('cadastro_usuario');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {

        $this->load->model('usuario_model');
        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['nome'] = $this->input->post('nome');
        $data['endereco'] = $this->input->post('endereco');
        $data['email'] = $this->input->post('email');
        $data['senha'] = md5($this->input->post('senha'));
        $data['status'] = $this->input->post('status');
        $data['nivel'] = $this->input->post('nivel');
        $data['funcao'] = $this->input->post('funcao');
        $data['descricao_funcao'] = $this->input->post('descricao_funcao');
        $data['descricao'] = $this->input->post('descricao');

        if ($this->usuario_model->cadastrar($data)) {
            redirect('usuario/1');
        } else {
            redirect('usuario/2');
        }
    }

    public function excluir($id = null) {
        
        $this->load->model('usuario_model');
        
        if ($this->usuario_model->delete($id)) {
            redirect('usuario/3');
        } else {
            redirect('usuario/4');
        }
    }

    public function atualizar($id = null, $indice = null) {
        
        $this->load->model('usuario_model');

        $data['usuario'] = $this->usuario_model->get_user_id($id);

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Senha atualizada com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível atualizar a senha do usuário.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('editar_usuario', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {
        
        $this->load->model('usuario_model');

        $id = $this->input->post('idUsuario');

        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['endereco'] = $this->input->post('endereco');
        $data['email'] = $this->input->post('email');
        $data['status'] = $this->input->post('status');
        $data['nivel'] = $this->input->post('nivel');
        
        $data['funcao'] = $this->input->post('funcao');
        $data['descricao_funcao'] = $this->input->post('descricao_funcao');
        $data['descricao'] = $this->input->post('descricao');

        
        if ($this->usuario_model->update($id,$data)) {
            redirect('usuario/5');
        } else {
            redirect('usuario/6');
        }
    }

    public function salvar_senha() {
        $this->load->model('usuario_model');
        
        $this->usuario_model->select_senha();

        $id = $this->input->post('idUsuario');

        $senha_antiga = md5($this->input->post('senha_antiga'));
        $senha_nova = md5($this->input->post('senha_nova'));
        
        $data['senha'] = $this->usuario_model->get_senha($id);
        $dados['senha'] = $senha_nova;

        if ($data['senha'][0]->senha == $senha_antiga) {
            $this->db->where('idUsuario', $id);
            $this->db->update('usuario', $dados);
            redirect('usuario/atualizar/' . $id . '/1');
        } else {
            redirect('usuario/atualizar/' . $id . '/2');
        }
    }

}
