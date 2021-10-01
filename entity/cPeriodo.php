<?php 

    class cPeriodoE {
        private $idperiodo;
        private $nomb_per;
        private $estd_per;

        function getIdperiodo(){
            return $this -> idperiodo;
        }
        function getNomb_per(){
            return $this -> nomb_per;
        }

        function getEstd_per(){
            return $this -> estd_per;
        }

        function setIdperiodo($idperiodo)
        {
            $this -> idperiodo = $idperiodo;
        }

        function setNomb_per($nomb_per)
        {
            $this -> nomb_per = $nomb_per;
        }

        function setEstd_per($estd_per)
        {
            $this -> estd_per = $estd_per;
        }
    }

?>