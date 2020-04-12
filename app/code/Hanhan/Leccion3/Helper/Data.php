<?php

namespace Hanhan\Leccion3\Helper;

/**
 * Tenemos que heredar la clase de la clase que queremos reescribir
 */
class Data extends \Hanhan\Leccion2\Helper\Data
{
        /**
         * Reescribimos este método de la clase padre
         * 
         **/    
       public function nombreModulo()
       {
               return "Hanhan/Leccion2 reescrito por Hanhan/Leccion3";
       }
}