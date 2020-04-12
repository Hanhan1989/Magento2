<?php

/**
 * Hay varios tipos de componentes. En este caso registramos el tipo módulo
 *  const MODULE = 'module';
 *  const LIBRARY = 'library';
 *  const THEME = 'theme';
 *  const LANGUAGE = 'language';
 *  const SETUP = 'setup';
 * 
 * El método estático register registra el tipo de componente con su nombre y ruta completa para llegar al componente(__DIR__).
 */

    \Magento\Framework\Component\ComponentRegistrar::register(
        \Magento\Framework\Component\ComponentRegistrar::MODULE,
        'Hanhan_Leccion1',
        __DIR__
    );

/**
 * Mirar el código de la clase \Magento\Framework\Component\ComponentRegistrar
 * 
 * La clase ComponentRegistrar implementa a la interfaz ComponentRegistrarInterface que tiene 2 métodos , que la clase
 * está obligada a implementar. 
 * 
 * El ComponentRegistrar tiene un atributo estático privado del tipo array asociativo de elementos con valores array.
 * Este atributo estático $paths , su contexto es a nivel de clase, no a nivel de objeto. Así, cuando Magento ejecuta un montón 
 * de módulos, los datos sobre los módulos, themes... quedan compartidos para toda la aplicación.
 * Así los módulos de magento que están en el vendor, también quedarán registrados en el sistema.
 *    private static $paths = [
 *      self::MODULE => [],
 *      self::LIBRARY => [],
 *      self::LANGUAGE => [],
 *      self::THEME => [],
 *      self::SETUP => []
 *  ];
 * 
 * Es decir si ejecutamos self::$paths[x][xx], estamos buscando valor entre todos los componentes. 
 */





 /**
  * Enlaces de interés
  * const vs static atributs: https://stackoverflow.com/questions/1685922/php5-const-vs-static
  */