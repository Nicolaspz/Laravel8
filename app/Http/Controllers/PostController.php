<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
//Serviços
class PostController extends Controller
{
    public function index(){
       
       // para paginar bastar trocar o get por paginate(),  e la views chamar {{$post->links()}};
        return view('adim.post.dashboard');
    }
    
    public function create(){
        return view('adim.post.create');
    }
    public function store(Request $request){
        //dd($request->content);
        $data['titulo']= $request->titulo;
        $data['content']= $request->content;
        

        if($request->file('image')->isValid()){
        
         $fileName=$request->nome . '.' . $request->file('image')->extension();
         $image=$request->file('image')->storeAs('postsImg',$fileName); // storeAs para add com o nome,
         $data['image']=$image;
        }
      
      $post=Post::create($data);
      return redirect()
      ->route('post.create')
      ->with('message', 'post criado');
      

    }

    public function show($id){
        $post=Post::find($id);
       if(!$post) {
        return redirect()->route('post.index');
       }
        
        return view('adim.post.show', compact('post'));
    }
    
    
    public function destroy($id){
        $post=Post::find($id);
        if(!$post) {
         return redirect()->route('post.index');
         
        }
        
        if(Storage::exists($post->image))
        //dd("chegou aki ");
        Storage::delete($post->image);
        $post->delete();
        return redirect()
        ->route('post.index')
        ->with('message', 'post eliminado');
    }
     
    public function edit($id){
         $post=Post::find($id);
        if(!$post) {
         return redirect()->route('post.index');
        } 
        return view('adim.post.edit', compact('post'));
    }
    public function update(StoreUpdatePost $request, $id){
           $post=Post::find($id);
       
        if(!$post) {
         return redirect()->back();
        }
        $data=$request->all();
        if($request->file('image')->isValid()){
            
            if(Storage::exists($post->image))
            
            Storage::delete($post->image);

            
            //dd($request->file('image')->store('postsImg'));
            $fileName=$request->nome . '.' . $request->file('image')->extension();
            $image=$request->file('image')->storeAs('postsImg',$fileName); // storeAs para add com o nome,
            $data['image']=$image;
           }
        //return view('adim.post.edit', compact('post'));
        $post->update($data);
        return redirect()
        ->route('post.index')
        ->with('message', 'post actualizado');
    }
    public function search(Request $request){
        
         $posts=Post::where('nome', '=', $request->search)
       ->orWhere('content', 'LIKE', "%{$request->search}%")
        ->paginate(); 
        
        //dd($posts);
        return view('adim.post.index', compact('posts'));
    }
    public function user(){
        return view('adim.post.user');
    }
    public function dash(){
        return view('adim.post.dashboard');
    }
    public function somos(){
        return view('adim.post.index');
    }
}
