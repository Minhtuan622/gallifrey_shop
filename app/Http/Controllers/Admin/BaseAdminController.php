<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application as ContractsApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

abstract class BaseAdminController extends Controller
{
  protected string $viewPath;
  protected string $routePrefix;
  protected string $modelClass;

  public function index(): View|Application|Factory|ContractsApplication
  {
    $items = $this->modelClass::paginate(10);
    return view("{$this->viewPath}.index", [lcfirst(class_basename($this->modelClass)) . 's' => $items]);
  }

  public function create(): View|Application|Factory|ContractsApplication
  {
    return view("{$this->viewPath}.create");
  }

  public function edit(int $id): View|Application|Factory|ContractsApplication
  {
    $item = $this->modelClass::findOrFail($id);
    return view("{$this->viewPath}.edit", [lcfirst(class_basename($this->modelClass)) => $item]);
  }

  public function store(Request $request): RedirectResponse
  {
    $this->modelClass::create($request->all());
    return $this->redirectWithSuccess('created');
  }

  public function update(Request $request, int $id): RedirectResponse
  {
    $item = $this->modelClass::findOrFail($id);
    $item->update($request->all());
    return $this->redirectWithSuccess('updated');
  }

  public function destroy(int $id): RedirectResponse
  {
    $item = $this->modelClass::findOrFail($id);
    $item->delete();
    return $this->redirectWithSuccess('deleted');
  }

  protected function redirectWithSuccess(string $action): RedirectResponse
  {
    $modelName = class_basename($this->modelClass);
    return redirect()
      ->route("{$this->routePrefix}.index")
      ->with('success', "$modelName $action successfully.");
  }
}
