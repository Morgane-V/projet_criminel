<?php

class Temoignages {

    protected $_id_temoignages;
    protected $_localisation_t;
    protected $_nature_t;
    protected $_temoin_t;
    protected $_numero_tel_temoin_t;
    protected $_adresse_temoin_t;
    protected $_date_s;


    /**
     * GETTER
     */

        /**
         * Get the value of _id_temoignages
         */ 
        public function get_id_temoignages()
        {
            return $this->_id_temoignages;
        }

        /**
         * Get the value of _localisation_t
         */ 
        public function get_localisation_t()
        {
            return $this->_localisation_t;
        }

        /**
         * Get the value of _nature_t
         */ 
        public function get_nature_t()
        {
            return $this->_nature_t;
        }

        /**
         * Get the value of _temoin_t
         */ 
        public function get_temoin_t()
        {
            return $this->_temoin_t;
        }

        /**
         * Get the value of _numero_tel_temoin_t
         */ 
        public function get_numero_tel_temoin_t()
        {
            return $this->_numero_tel_temoin_t;
        }

        /**
         * Get the value of _adresse_temoin_t
         */ 
        public function get_adresse_temoin_t()
        {
            return $this->_adresse_temoin_t;
        }

        /**
         * Get the value of _date_s
         */ 
        public function get_date_s()
        {
            return $this->_date_s;
        }


        /**
         * SETTER
         */

            /**
             * Set the value of _id_temoignages
             *
             * @return  self
             */ 
            public function set_id_temoignages($_id_temoignages)
            {
                $this->_id_temoignages = $_id_temoignages;

                return $this;
            }

            /**
             * Set the value of _localisation_t
             *
             * @return  self
             */ 
            public function set_localisation_t($_localisation_t)
            {
                $this->_localisation_t = $_localisation_t;

                return $this;
            }

            /**
             * Set the value of _nature_t
             *
             * @return  self
             */ 
            public function set_nature_t($_nature_t)
            {
                $this->_nature_t = $_nature_t;

                return $this;
            }

            /**
             * Set the value of _temoin_t
             *
             * @return  self
             */ 
            public function set_temoin_t($_temoin_t)
            {
                $this->_temoin_t = $_temoin_t;

                return $this;
            }

            /**
             * Set the value of _numero_tel_temoin_t
             *
             * @return  self
             */ 
            public function set_numero_tel_temoin_t($_numero_tel_temoin_t)
            {
                $this->_numero_tel_temoin_t = $_numero_tel_temoin_t;

                return $this;
            }

            /**
             * Set the value of _adresse_temoin_t
             *
             * @return  self
             */ 
            public function set_adresse_temoin_t($_adresse_temoin_t)
            {
                $this->_adresse_temoin_t = $_adresse_temoin_t;

                return $this;
            }

            /**
             * Set the value of _date_s
             *
             * @return  self
             */ 
            public function set_date_s($_date_s)
            {
                $this->_date_s = $_date_s;

                return $this;
            }




}