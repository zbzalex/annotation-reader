<?php

namespace Tests;

use anrd\AnnotationReader;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
  public function test1()
  {
    $reader = new AnnotationReader(\Tests\Model::class);
    $reader->parse();

    $annotations = $reader->getAnnotations();

    var_dump($annotations);
  }
}
