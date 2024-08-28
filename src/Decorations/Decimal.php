<?php

namespace Websyspro\Decorations;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Decimal
{
  public function __construct(){}

  public function get(): array {
    return [
      "type" => "decimal(10,4)"
    ];
  }
}