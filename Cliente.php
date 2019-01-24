<?php

/** 
 * @author ensis
 * 
 */
class Cliente {

	private $cod;

	private $nome;

	private $email;
    
	private $endereco;
    
    
	private $dataCadastro;

	/**
	 *
	 * @return mixed
	 */
	public function getCod() {
		return $this->cod;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
    
    /**
	 *
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}
    
    /**
	 *
	 * @return mixed
	 */
	public function getDataCadastro() {
		return $this->dataCadastro;
	}

	/**
	 *
	 * @param mixed $cod
	 */
	public function setCod($cod) {
		$this->cod = $cod;
	}

	/**
	 *
	 * @param mixed $nome
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 *
	 * @param mixed $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}
    
    /**
	 *
	 * @param mixed $endereco
	 */
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
    
    /**
	 *
	 * @param mixed $dataCadastro
	 */
	public function setDataCadastro($dataCadastro) {
		$this->dataCadastro = $dataCadastro;
	}
}

