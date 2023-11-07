<?php
    class usuari{
        public $nom;
        public $cognom;
        public $email;
        public $contrasenya;

        /**
         * Get the value of nom
         */
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         */
        public function setNom($nom): self
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of cognom
         */
        public function getCognom()
        {
                return $this->cognom;
        }

        /**
         * Set the value of cognom
         */
        public function setCognom($cognom): self
        {
                $this->cognom = $cognom;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of contrasenya
         */
        public function getContrasenya()
        {
                return $this->contrasenya;
        }

        /**
         * Set the value of contrasenya
         */
        public function setContrasenya($contrasenya): self
        {
                $this->contrasenya = $contrasenya;

                return $this;
        }

        public function conseguirTodo(){
            echo "Gestio Usuaris";
        }
    }