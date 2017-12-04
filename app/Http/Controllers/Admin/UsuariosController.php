<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Grimthorr\LaravelToast\Toast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = json_encode([
            ['titulo' => 'Home', 'url' => route('home')],
            ['titulo' => 'Usuários', 'url' => ''],
        ]);

        $lista = User::select('id', 'name', 'email')->paginate(15);
        return view('admin.usuarios.index', compact('breadcrumbs', 'lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = $this->validator($data);

        if($validacao->fails()){
            toast()->warning("Verifique se os campos foram preenchidos corretamente.", "Atenção");
            return redirect()->back()->withErrors($validacao)->withInput();
        }
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        toast()->success("Usuário criado com sucesso.", "Parabéns");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validacao = $this->validator($data);

        if(trim($data['password']) != "")
            $data['password'] = bcrypt($data['password']);

        if($validacao->fails()){
            toast()->warning("Verifique se os campos foram preenchidos corretamente.", "Atenção");
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        User::find($id)->update($data);
        toast()->success("Usuário editado com sucesso.", "Parabéns");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        toast()->success("Usuário apagado com sucesso.", "Parabéns");
        return redirect()->back();
    }

    private function validator(array $data)
    {
        return \Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }
}
