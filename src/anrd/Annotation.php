<?php

namespace anrd;

/**
 * Annotation
 */
class Annotation
{
  /**
   * @var string $name Annotation name
   */
  private $name;

  /**
   * @var array $params Annotation params
   */
  private $params;

  /**
   * Constructor
   */
  public function __construct($name, array $params = [])
  {
    $this->name = $name;
    $this->params = $params;
  }
  
  public function getName()
  {
    return $this->name;
  }

  public function getParams()
  {
    return $this->params;
  }

  public function getParam($name)
  {
    return isset($this->params[$name])
      ? $this->params[$name]
      : null;
  }
}
