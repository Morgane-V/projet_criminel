<?php

class Acolytes {
    protected $_recherches_id_r;
    protected $_recherches_ir_r1;
    protected $_coopere;

    /**
     * GETTER
     */

        /**
         * Get the value of _recherches_id_r
         */ 
        public function get_recherches_id_r()
        {
            return $this->_recherches_id_r;
        }

        /**
         * Get the value of _recherches_ir_r1
         */ 
        public function get_recherches_ir_r1()
        {
            return $this->_recherches_ir_r1;
        }

        /**
         * Get the value of _coopere
         */ 
        public function get_coopere()
        {
            return $this->_coopere;
        }

        
    /**
     * SETTER
     */
        
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

        /**
         * Set the value of _recherches_ir_r1
         *
         * @return  self
         */ 
        public function set_recherches_ir_r1($_recherches_ir_r1)
        {
            $this->_recherches_ir_r1 = $_recherches_ir_r1;

            return $this;
        }

        /**
         * Set the value of _coopere
         *
         * @return  self
         */ 
        public function set_coopere($_coopere)
        {
            $this->_coopere = $_coopere;

            return $this;
        }
}