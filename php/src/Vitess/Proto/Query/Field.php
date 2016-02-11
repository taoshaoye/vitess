<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto
//   Date: 2016-01-22 01:34:42

namespace Vitess\Proto\Query {

  class Field extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var int - \Vitess\Proto\Query\Type */
    public $type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.Field');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\Type';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \Vitess\Proto\Query\Field
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Query\Field
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <type> value
     *
     * @return \Vitess\Proto\Query\Field
     */
    public function clearType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \Vitess\Proto\Query\Type
     */
    public function getType(){
      return $this->_get(2);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \Vitess\Proto\Query\Type $value
     * @return \Vitess\Proto\Query\Field
     */
    public function setType( $value){
      return $this->_set(2, $value);
    }
  }
}

