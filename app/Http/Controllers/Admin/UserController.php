<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseAdminController
{
  protected string $viewPath = 'admin.users';
  protected string $routePrefix = 'admin.users';
  protected string $modelClass = User::class;

  public function store(Request $request)
  {
    // Add any User-specific validation or logic here if needed
    return parent::store();
  }

  public function update($id, Request $request)
  {
    $user = User::findOrFail($id);
    // Add any User-specific validation or logic here if needed
    return parent::update($user);
  }
}
