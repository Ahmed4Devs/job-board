<?php

namespace App\Models;

class Job
{
  public static function all()
  {
    return [
      ['title' => 'Software Engineer', 'salary' => "$3000"],
      ['title' => 'Graphic Designer', 'salary' => "$1500"],
    ];
  }
}
