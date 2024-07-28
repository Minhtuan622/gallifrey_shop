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

  public function __construct(string $viewPath, string $routePrefix, string $modelClass)
  {
    $this->viewPath = $viewPath;
    $this->routePrefix = $routePrefix;
    $this->modelClass = $modelClass;
  }

  public function index(): View|Application|Factory|ContractsApplication
  {
    return view("{$this->viewPath}.index", [
      lcfirst(class_basename($this->modelClass)) . 's' => $this->modelClass::paginate(10)
    ]);
  }

  public function create(): View|Application|Factory|ContractsApplication
  {
    return view("{$this->viewPath}.create");
  }

  public function edit(int $id): View|Application|Factory|ContractsApplication
  {
    return view("{$this->viewPath}.edit", [
      lcfirst(class_basename($this->modelClass)) => $this->modelClass::findOrFail($id)
    ]);
  }

  public function store(Request $request): RedirectResponse
  {
    $this->modelClass::create($request->all());
    return $this->redirectWithMessage('created');
  }

  public function update(Request $request, int $id): RedirectResponse
  {
    $this->modelClass::findOrFail($id)->update($request->all());
    return $this->redirectWithMessage('updated');
  }

  public function destroy(int $id): RedirectResponse
  {
    $this->modelClass::findOrFail($id)->delete();
    return $this->redirectWithMessage('deleted');
  }

  protected function redirectWithMessage(string $action): RedirectResponse
  {
    $modelName = class_basename($this->modelClass);
    return redirect()
      ->route("{$this->routePrefix}.index")
      ->with('success', "$modelName $action successfully.");
  }
}
