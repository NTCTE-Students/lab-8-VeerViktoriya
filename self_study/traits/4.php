<?php
trait Cacheable {
    private $cache = [];
    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }
    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}
class DataProvider {
    use Cacheable;
    public function fetchData($key) {
        $cachedData = $this->getCache($key);
        if ($cachedData !== null) {
            return "Данные из кэша: " . $cachedData;
        }
        $newData = "Данные для ключа {$key}"; 
        $this->setCache($key, $newData);
        return $newData;
    }
}
class ProductRepository {
    use Cacheable;
    public function getProduct($id) {
        $cachedProduct = $this->getCache($id);
        if ($cachedProduct !== null) {
            return "Продукт из кэша: " . $cachedProduct;
        }
        $newProduct = "Продукт с ID {$id}"; 
        $this->setCache($id, $newProduct);
        return $newProduct;
    }
}