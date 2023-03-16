@extends('admin_layouts.app')

@section('content')
    <!-- you need to create BooksController  to manage books 

here an example :



namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Books = Books::latest()->paginate(5);
      
        return view('books.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);
      
        Books::create($request->all());
       
        return redirect()->route('Books.index')
                        ->with('success','Books created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $Books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $Books)
    {
        return view('Books.show',compact('Books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $Books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $Books)
    {
        return view('Books.edit',compact('Books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $Books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $Books)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);
      
        $Books->update($request->all());
      
        return redirect()->route('Books.index')
                        ->with('success','Books updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $Books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $Books)
    {
        $Books->delete();
       
        return redirect()->route('Books.index')
                        ->with('success','Book deleted successfully');
    }
}     

-->
@endsection