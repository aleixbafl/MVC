<?php
    class nota{
        
        public $nom;
        public $nota;


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
         * Get the value of nota
         */
        public function getNota()
        {
                return $this->nota;
        }

        /**
         * Set the value of nota
         */
        public function setNota($nota): self
        {
                $this->nota = $nota;

                return $this;
        }
    }