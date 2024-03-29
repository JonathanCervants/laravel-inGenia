<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CategoriaFormRequest;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    { 
        if($request)
        {
            $query=trim($request->get('texto'));
            $categorias=DB::table('categorias')->where('categoria','LIKE','%'.$query.'%')
            ->where('estado','=','1')
            ->orderBy('id','desc')
            ->paginate(10);
            return view('categorias.index',compact('categorias')); //pasamos el resultado como un array
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaFormRequest $request)
    {   
        $categoria = new Categoria();
        $categoria->categoria = $request->categoria;        
        $categoria->save();
        return redirect('categorias')->with('status', 'Categoria Registrada.');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function ra()
    {
        return view('categorias.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::whereId($id)->firstOrFail();
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaFormRequest $request, $id)
    {
        $categoria = Categoria::firstOrFail($id);
        $categoria->title=$request->get('categoria');
        $categoria->title=$request->get('estado');
        $categoria->save();
    //   return redirectTo('Hello');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
