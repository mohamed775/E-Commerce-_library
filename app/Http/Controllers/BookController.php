<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::select()->paginate(PAGINATION_COUNTER);
        return view('admin.Book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category =Category::select()->get();
        return view('admin.Book.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','Max:255'],
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required',
            'author' =>['required','Max:255'],
            'cat_id' => 'required',
        ]);
        // return $request;
        $image = $request->file('image');
        // return $photo;

        $file_extention = $image->getClientOriginalName();
        $file_name = \Str::random(30) . $file_extention;
        $path = 'image/album';
        $image->move($path, $file_name);

        Book::create([
             'name'=>$request->name,
             'image'=>$file_name,
             'price'=>$request->price,
             'author'=>$request->author,
             'cat_id'=>$request->cat_id,
        ]);
        return redirect()->route('Book/index')->with('success', __('messages.Added'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::find($id);
        $category=Category::find($book->cat_id);
        //return $categories;
        $cat=Category::select('id','name')->get()->except($category->id);
        return view('admin.Book.edit',compact('book','category','cat'));
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
        $this->validate($request,[
            'name'=>['required','Max:255'],
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required',
            'author' =>['required','Max:255'],
            'cat_id' => 'required',
        ]);
        //check old image
        if ($request->image == null) {
            $file_name = $request->old_image;
        } 
        else {
            $image = $request->file('image');
            // return $photo;
            $file_extention = $image->getClientOriginalName();
            $file_name = \Str::random(30) . $file_extention;
            $path = 'image/album';
            $image->move($path, $file_name);
        }
        $book=Book::find($id)->update([
             'name'=>$request->name,
             'image'=>$file_name,
             'price'=>$request->price,
             'author'=>$request->author,
             'cat_id'=>$request->cat_id,
        ]);
        return redirect()->route('Book/index')->with('success', __('messages.Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::find($id)->delete();
        return redirect()->route('Book/index')->with('success', __('messages.Deleted'));
    }
}
