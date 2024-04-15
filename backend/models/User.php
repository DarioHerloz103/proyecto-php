<?php 
  class User() {
    private $id;
    private $nombre;
    private $apaterno;
    private $amaterno;
    private $direccion;
    private $telefono;
    private $usuario;
    private $correo;
    private $password;
    

    public function _construct($id,$nombre,$apaterno,$amaterno,$direccion,$telefono,$correo,$usuario,$password) {
      $this->id=$id;
      $this->nombre=$nombre;
      $this->apaterno=$apaterno;
      $this->amaterno=$amaterno;
      $this->direccion=$direccion;
      $this->telefono=$telefono;
      $this->usuario=$usuario;
      $this->correo=$correo;
      $this->password=$password;
    }

    public function getId(){
      return $this->id;
    }

    public function setId($id){
      $this->id=$id;
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function setNombre($nombre){
      $this->nombre=$nombre;
    }

    public function getApaterno(){
      return $this->apaterno;
    }

    public function setApaterno($apaterno){
      $this->apaterno=$apaterno;
    }

    public function getAmaterno(){
      return $this->amaterno;
    }

    public function setAmaterno($amaterno){
      $this->id=$amaterno;
    }

    public function getTelefono(){
      return $this->telefono;
    }

    public function setTelefono($telefono){
      $this->telefono=$telefono;
    }

    public function getDireccion(){
      return $this->direccion;
    }

    public function setDireccion($direccion){
      $this->direccion=$direccion;
    }

    public function getUsuario(){
      return $this->usuario;
    }

    public function setUsuario($usuario){
      $this->usuario=$usuario;
    }

    public function getCorreo(){
      return $this->correo;
    }

    public function setCorreo($correo){
      $this->correo=$correo;
    }

    public function getPassword(){
      return $this->password;
    }

    public function setPassword($password){
      $this->password=$password;
    }
  }

?>