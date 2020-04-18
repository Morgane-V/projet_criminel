<?php

class Condamnations {

    protected $_id_c;
    protected $_libelle_affaire_c;
    protected $_date_c;
    protected $_duree_c;
    protected $_date_liberation_c;
    protected $_recherches_id_r;


    /**
     * GETTER
     */

        /**
         * Get the value of _id_c
         */ 
        public function get_id_c()
        {
            return $this->_id_c;
        }

        /**
         * Get the value of _libelle_affaire_c
         */ 
        public function get_libelle_affaire_c()
        {
            return $this->_libelle_affaire_c;
        }

        /**
         * Get the value of _date_c
         */ 
        public function get_date_c()
        {
            return $this->_date_c;
        }

        /**
         * Get the value of _duree_c
         */ 
        public function get_duree_c()
        {
            return $this->_duree_c;
        }

        /**
         * Get the value of _date_liberation_c
         */ 
        public function get_date_liberation_c()
        {
            return $this->_date_liberation_c;
        }

        /**
         * Get the value of _recherches_id_r
         */ 
        public function get_recherches_id_r()
        {
            return $this->_recherches_id_r;
        }


    /**
     * SETTER
     */

        /**
         * Set the value of _id_c
         *
         * @return  self
         */ 
        public function set_id_c($_id_c)
        {
            $this->_id_c = $_id_c;

            return $this;
        }

        /**
         * Set the value of _libelle_affaire_c
         *
         * @return  self
         */ 
        public function set_libelle_affaire_c($_libelle_affaire_c)
        {
            $this->_libelle_affaire_c = $_libelle_affaire_c;

            return $this;
        }

        /**
         * Set the value of _date_c
         *
         * @return  self
         */ 
        public function set_date_c($_date_c)
        {
            $this->_date_c = $_date_c;

            return $this;
        }

        /**
         * Set the value of _duree_c
         *
         * @return  self
         */ 
        public function set_duree_c($_duree_c)
        {
            $this->_duree_c = $_duree_c;

            return $this;
        }

        /**
         * Set the value of _date_liberation_c
         *
         * @return  self
         */ 
        public function set_date_liberation_c($_date_liberation_c)
        {
            $this->_date_liberation_c = $_date_liberation_c;

            return $this;
        }

        /**
         * Set the value of _recherches_id_r
         *
         * @return  self
         */ 
        public function set_recherches_id_r($_recherches_id_r)
        {
            $this->_recherches_id_r = $_recherches_id_r;

            return $this;
        }
}