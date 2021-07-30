<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119092,
        'name' => 'Intan Dewi Hapsari',
        'gender' => 'Female',
        'phone' => '082265226702',
        'class' => 'XII RPL 3'
    ];
  }
}