<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servico;

class ServicoController extends Controller
{
    public function store(Request $request){
       // dd($request);
        $data['title']= $request->titulo;
        $data['content']= $request->content;
        

       /* if($request->file('image')->isValid()){
        
         $fileName=$request->nome . '.' . $request->file('image')->extension();
         $image=$request->file('image')->storeAs('postsImg',$fileName); // storeAs para add com o nome,
         $data['image']=$image;
        }*/
      
      $servico=servico::create($data);
      return redirect()
      ->route('post.listar')
      ->with('message', 'post criado');
      

    }

    public function listar(){
        $services = servico::get();
       // dd($services);
        return view('adim.post.create',compact('services'));
    }

    public function show($id){

        $services=servico::find($id);
        //dd($services);
       if(!$services) {
        return redirect()->route('post.index');
       }
        
        return view('adim.post.show', compact('services'));
    }
    public function destroy($id){
        $post=servico::find($id);
        if(!$post) {
         return redirect()->route('post.create');
         
        }}
}
