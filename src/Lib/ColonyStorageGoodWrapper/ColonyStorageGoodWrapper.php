<?php

namespace Stu\Lib\ColonyStorageGoodWrapper;

/**
 * @author Daniel Jakob <wolverine@stuniverse.de>
 *
 * @version $Revision: 1.4 $
 */
class ColonyStorageGoodWrapper
{ //{{{

    private $storage = null;

    public function __construct(&$storage)
    { //{{{
        $this->storage = $storage;
    } // }}}

    public function __get($goodId)
    { //{{{
        return new ColonyStorageGoodCountWrapper($this->storage, $goodId);
    } // }}}

    public function __call($name, $arg)
    { //{{{
        return $this->__get($name);
    } // }}}
} //}}}
