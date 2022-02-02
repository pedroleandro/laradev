<?php

namespace LaraDev\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaraDev\Company;
use LaraDev\Http\Controllers\Controller;
use \LaraDev\Http\Requests\Admin\Company as CompanyRequest;
use LaraDev\User;
use Spatie\Permission\Exceptions\UnauthorizedException;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()->hasPermissionTo('Listar Empresas')){
            throw new UnauthorizedException('403', 'You do not have the required authorization.');
        }

        $companies = Company::all();
        return view('admin.companies.index', [
            'companies' => $companies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!Auth::user()->hasPermissionTo('Cadastrar Empresa')){
            throw new UnauthorizedException('403', 'You do not have the required authorization.');
        }

        $users = User::orderBy('name')->get();

        if (!empty($request->user)) {
            $user = User::where('id', $request->user)->first();
        }

        return view('admin.companies.create', [
            'users' => $users,
            'selected' => (!empty($user) ? $user : null),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        if(!Auth::user()->hasPermissionTo('Cadastrar Empresa')){
            throw new UnauthorizedException('403', 'You do not have the required authorization.');
        }

        $createCompany = Company::create($request->all());

        return redirect()->route('admin.companies.edit', [
            'company' => $createCompany->id,
        ])->with(['color' => 'green', 'message' => 'Empresa cadastrada com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::user()->hasPermissionTo('Editar Empresa')){
            throw new UnauthorizedException('403', 'You do not have the required authorization.');
        }

        $company = Company::where('id', $id)->first();
        $users = User::orderBy('name')->get();

        return view('admin.companies.edit', [
            'company' => $company,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        if(!Auth::user()->hasPermissionTo('Editar Empresa')){
            throw new UnauthorizedException('403', 'You do not have the required authorization.');
        }

        $company = Company::where('id', $id)->first();
        $company->fill($request->all());
        $company->save();

        return redirect()->route('admin.companies.edit', [
            'company' => $company->id,
        ])->with(['color' => 'green', 'message' => 'Empresa atualizada com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
