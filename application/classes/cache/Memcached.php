<?php

class Cache_Memcached extends Kohana_Cache_Memcached {

    public function get_all_keys() {

        return $this->memcached_instance->getAllKeys();

    }

    protected function _sanitize_id($id)
    {
        return $id;
    }

}