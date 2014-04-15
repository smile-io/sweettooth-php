<?php

class SweetTooth_Customer extends SweetTooth_ApiResource
{
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public static function retrieve($id, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedRetrieve($class, $id, $apiKey);
  }

  public static function all($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedAll($class, $params, $apiKey);
  }

  public static function create($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedCreate($class, $params, $apiKey);
  }

  public function save($apiKey=null)
  {
    $class = get_class();
    return self::_scopedSave($class, $apiKey);
  }

  public function delete($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedDelete($class, $params);
  }
}
