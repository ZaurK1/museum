<?php
N2Loader::importAll('libraries.cache.storage');

class N2Cache {

    protected $group = '';
    protected $isAccessible = false;

    /** @var N2CacheStorage */
    public $storage;

    protected $_storageEngine = 'default';

    /**
     * @param string $engine
     *
     * @return N2CacheStorage
     */
    public static function getStorage($engine = "default") {
        static $storage = null;
        if ($storage === null) {
            $storage = array(
                'filesystem' => new N2CacheStorageFilesystem(),
                'database'   => new N2CacheStorageDatabase()
            );
        }
        if ($engine == 'default') {
            if (defined('NEXTEND_CACHE_STORAGE')) {
                return $storage[NEXTEND_CACHE_STORAGE];
            }

            return $storage['filesystem'];
        }

        return $storage[$engine];
    }

    public static function clearGroup($group) {
        $storage = self::getStorage();
        $storage->clear($group);
        $storage->clear($group, 'web');
    }

    public function __construct($group, $isAccessible = false) {
        $this->group        = $group;
        $this->isAccessible = $isAccessible;
        $this->storage      = self::getStorage($this->_storageEngine);
    }

    protected function clearCurrentGroup() {
        $this->storage->clear($this->group, $this->getScope());
    }

    protected function getScope() {
        if ($this->isAccessible) {
            return 'web';
        }

        return 'notweb';
    }

    protected function exists($key) {
        return $this->storage->exists($this->group, $key, $this->getScope());
    }

    protected function get($key) {
        return $this->storage->get($this->group, $key, $this->getScope());
    }

    protected function set($key, $value) {
        $this->storage->set($this->group, $key, $value, $this->getScope());
    }

    protected function getPath($key) {
        return $this->storage->getPath($this->group, $key, $this->getScope());
    }

    protected function remove($key) {
        return $this->storage->remove($this->group, $key, $this->getScope());
    }
}
