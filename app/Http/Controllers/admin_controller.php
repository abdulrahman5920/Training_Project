<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\Menu;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class admin_controller extends Controller
{
    public function addcategory(){
        return view("addCategory");
    }
    public function toaddcategory(Request $request){
    $category = new category();
    $category->category_name = $request->addcategorybox;
 
    $category->save();
    return view("addCategory");
    }

public function showCategories()
{
    $categories = Category::all();
    return view('additem', compact('categories'));
    // return view('additem')->with('categories', $categories);

}

public function toadditem(Request $request){

    $item = new Menu();
    $item->product_name = $request->title;
    $categoryId = $request->input('category_id');
    
    // استرجاع الاسم من قاعدة البيانات باستخدام الـ id
    $categoryName = category::where('id', $categoryId)->value('category_name');
    $item->product_category = $categoryName;
    $item->description = $request->description;
     $item->price = $request->price;
     $item->pic = $request->image;
     $item->category_id = $request->category_id;
     $item->save();
    //  return view('additem');
    return redirect()->back()->with('success', 'Data added successfully!');

}
public function add_user()
{


     return view("addUser");
}
public function show_category(){
    $categories_list = Category::all();
    
 return view("categories",compact('categories_list'));
}
public function toDeleteTag(request $request)
{
    $id=$request->input('id_to_remove');
        // البحث عن الفئة بناءً على الـ id
        $cat = Category::findOrFail($id);

        // التحقق من وجود عناصر مرتبطة في جدول المنيو
        $hasMenuItems = Menu::where('category_id', $cat->id)->exists();

        if ($hasMenuItems) {
            // إذا كان هناك عناصر مرتبطة، أرسل رسالة خطأ
            return redirect()->route('adminshowtags')->with('error', 'Cannot delete category because it has associated menu items.');
        }

        // إذا لم يكن هناك عناصر مرتبطة، قم بحذف الفئة
        $cat->delete();

        return redirect()->route('adminshowtags')->with('success', 'Category deleted successfully.');
    

}
public function edit_category(){

 return view("editcategory");
}
public function edit_item(){
    return view("edititem");
}
public function logIn(){
    return view("adminlogin");
}
}