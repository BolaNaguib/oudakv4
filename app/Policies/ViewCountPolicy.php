<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ViewCountPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function browse() {
      return true;
    }

    public function read() {
      return false;
    }

    public function edit() {
      return false;
    }

    public function add() {
      return false;
    }

    public function delete() {
      return false;
    }
}
