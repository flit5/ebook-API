<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return ['NIS' => 3103119030,
            'name' => 'Arya Bintang Samudra',
            'gender' => 'male',
            'phone' => '087877308233',
            'class' => 'XII RPL 1'];
      }
    }