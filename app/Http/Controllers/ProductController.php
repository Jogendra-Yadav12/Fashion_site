<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminlogin;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Color;
use App\Models\Size;
use App\Models\User;
use App\Models\Login;
use App\Models\Checkout;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{

   

    public function uploadcategory(Request $request)
    {
        $category = $request->category;
        if (Category::where('category', $category)->exists()) {
            return redirect()->back()->with(['error' => 'this category already exist']);
        }
        try {
        $category = $request->category;
        
            Category::create([
                'category' => $category,
                'status' => '1',
            ]);

        
        return redirect()->back()->with('success','Added Successfully');

    }
     catch (\Exception $e) {
      
        return redirect()->back()->with('error','Something Went Wrong');
    }
}
public function deletecategory($id)
{
  
    $idd = Category::find($id);

    if ($idd) {
       
        $idd->delete();

        return redirect()->back()->with('success', 'successfully deleted ');
    } else {
       
        return redirect()->back()->with(['error' => 'Something went wrong']);
    }
}


public function uploadsubcategory(Request $request)
{
    $subcategory = $request->subcategory;
    if (SubCategory::where('subcategory', $subcategory)->exists()) {
        return redirect()->back()->with(['error' => 'this Sub category already exist']);
    }
    try {
        $image = $request->file('image');
        $subcategory = $request->subcategory;
        if ($image) {
            $mainImageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $mainImageName);
            
            
            SubCategory::create([
                'subcategory' => $subcategory,
                'image' => $mainImageName,
                'status' => '1',
            ]);
        }
    return redirect()->back()->with('success','Added Successfully');
}
 catch (\Exception $e) {
    return redirect()->back()->with('error','Something Went Wrong');
}
}
public function deletesubcategory($id)
{

$idd = SubCategory::find($id);

if ($idd) {
   
    $idd->delete();

    return redirect()->back()->with('success', 'successfully deleted ');
} else {
   
    return redirect()->back()->with(['error' => 'Something went wrong']);
}
}



public function uploadcolor(Request $request)
{
    $color = $request->color;
    if (Color::where('color', $color)->exists()) {
        return redirect()->back()->with(['error' => 'this color already exist']);
    }
    try {
       
    $color = $request->color;
    Color::create([
        'color' => $request->color,
        
        'status'=>'1',
    ]);
    return redirect()->back()->with('success','Added Successfully');

}
 catch (\Exception $e) {
  
    return redirect()->back()->with('error','Something Went Wrong');
}
}
public function deletecolor($id)
{

$idd = Color::find($id);

if ($idd) {
   
    $idd->delete();

    return redirect()->back()->with('success', 'successfully deleted ');
} else {
   
    return redirect()->back()->with(['error' => 'Something went wrong']);
}
}



public function uploadsize(Request $request)
{
    $size = $request->size;
    if (Size::where('size', $size)->exists()) {
        return redirect()->back()->with(['error' => 'this category already exist']);
    }
    try {
       
    $size = $request->size;
    Size::create([
        'size' => $request->size,
        
        'status'=>'1',
    ]);
    return redirect()->back()->with('success','Added Successfully');

}
 catch (\Exception $e) {
  
    return redirect()->back()->with('error','Something Went Wrong');
}
}
public function deletesize($id)
{

$idd = Size::find($id);

if ($idd) {
   
    $idd->delete();

    return redirect()->back()->with('success', 'successfully deleted ');
} else {
   
    return redirect()->back()->with(['error' => 'Something went wrong']);
}
}


public function add_product()
{
    $dataFromModel1 = Category::all();
    $dataFromModel2 = Product::all();
    $dataFromModel3 = SubCategory::all();
    $dataFromModel4 = Color::all();
    $dataFromModel5 = Size::all();
    return view("admin.add_product", [
        'data1' => $dataFromModel1,
        'data2' => $dataFromModel2,
        'data3' => $dataFromModel3,
        'data4' => $dataFromModel4,
        'data5' => $dataFromModel5,
    ]);
}


 /*public function uploadproduct(Request $request)
 {
    $request->validate([
        'name' => 'required',
         'images.*' => 'image|mimes:jpeg,jpg,png,gif,svg|max:1048',
         'category' => 'required',
           'description'=> 'required',
           'price'=>'required',
       ]);

        
       $name = $request->name;

       // Check if an image with the same title already exists
       if (Product::where('product_name', $name)->exists()) {
           return redirect()->back()->with(['error' => 'A product with the same name already exists.']);
       }
   

       try {    
        $images = [];

        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $images[] = $imageName;
        }
        
        // Check if the main image is present in the request
        if ($request->hasFile('image')) {
            $mainImage = $request->file('image');
            $mainImageName = time() . '.' . $mainImage->extension();
            $mainImage->move(public_path('images'), $mainImageName);
        } else {
            $mainImageName = null; // Or provide a default image name if needed
        }
        
        $data = Product::create([
            'product_name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $images, // Store image filenames as JSON or adjust as needed
            'main_image' => $mainImageName, // Add a column in your database for the main image
        ]);
        
        return redirect()->back()->with(['success' => 'Product has been uploaded successfully ']);
        
   }
   catch (\Exception $e) {
       dd($e);
       die();
       \Log::error($e);
       return redirect()->back()->with(['error' => 'Something went wrong']);
   }
   }
*/


 public function uploadproduct(Request $request)
{
    $request->validate([
        'name' => 'required',
        'images.*' => 'image|mimes:jpeg,jpg,png,gif,svg|max:1048',
        'category' => 'required',
        'subcategory' => 'required',
        'description'=> 'required',
        'price'=>'required',
        'color'=>'required',
        'size'=>'required',
    ]);

    $name = $request->name;

    // Check if a product with the same name already exists
    if (Product::where('product_name', $name)->exists()) {
        return redirect()->back()->with(['error' => 'A product with the same name already exists.']);
    }

    try {
        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $images[] = $imageName;
            }
        }

        // If a single image is also uploaded
        if ($request->hasFile('image')) {
            $singleImage = $request->file('image');
            $singleImageName = time() . '_' . $singleImage->getClientOriginalName();
            $singleImage->move(public_path('images'), $singleImageName);
            $images[] = $singleImageName;
        }
       
        $color = $request->color;
        $size = $request->size;
       
        $data = Product::create([
            'product_name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'color' => json_encode($color),
            'size' => json_encode($size),
            'image' => json_encode($images), // Convert array to JSON string
        ]);

        return redirect()->back()->with(['success' => 'Product has been uploaded successfully ']);
    } catch (\Exception $e) {
        dd($e);
        \Log::error($e);
        return redirect()->back()->with(['error' => 'Something went wrong']);
    }
}

public function updateproduct($id)
{
    try {
        $dataFromModel1 = Category::all();
        $dataFromModel2 = Product::findOrFail($id); 
        $dataFromModel3 = SubCategory::all();
        $dataFromModel4 = Color::all();
        $dataFromModel5 = Size::all();
       // Fetch the specific product using findOrFail
        return view("admin.editproduct", [
            'data1' => $dataFromModel1,
            'data' => $dataFromModel2,
            'data3' => $dataFromModel3,
            'data4' => $dataFromModel4,
            'data5' => $dataFromModel5,
        ]);

    } catch (\Throwable $th) {
        dd($th);
        return redirect(url('/add_product'))->with('error', 'Something Went Wrong');
    }
}

  public  function up_product(Request $request,$id)
  {
    
    $request->validate([
        'name' => 'required',
        'images.*' => 'image|mimes:jpeg,jpg,png,gif,svg|max:1048',
        'category' => 'required',
        'description'=> 'required',
        'price'=>'required',
    ]);
    
 
     try {
        $images = $request->images;

     if (empty($images)) {

        $rep=Product::find($id);
        
        $rep->product_name = $request['name'];
        $rep->price = $request['price'];
        $rep->category = $request['category'];
        $rep->description = $request['description'];
        $rep->save();

      return redirect(url('/add_product'))->with('success','Product Updated Successfully');
    
   }
   else{

    $images = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $images[] = $imageName;
        }
    }

    // If a single image is also uploaded
    if ($request->hasFile('image')) {
        $singleImage = $request->file('image');
        $singleImageName = time() . '_' . $singleImage->getClientOriginalName();
        $singleImage->move(public_path('images'), $singleImageName);
        $images[] = $singleImageName;
    }

  
        $rep=Product::find($id);
       
        $rep->product_name = $request['name'];
        $rep->price = $request['price'];
        $rep->category = $request['category'];
        $rep->description = $request['description'];
        $rep->image = json_encode($images);
        
        $rep->save();

    //return redirect()->back()->with('success','Updated Successfully');
    return redirect(url('/add_product'))->with('success','Product Updated Successfully');
}
     } catch (\Throwable $th) {
        dd($th);
        return redirect(url('/add_product'))->with('error', 'Something Went Wrong');
     }

  }
   public function deleteproduct($id)
   {
      
       $image = Product::find($id);
   
       if ($image) {
           // Delete the image file from storage (assuming you're using storage)
           Storage::delete('public/images/' . $image->image);
   
           // Delete the image record from the database
           $image->delete();
   
           // Redirect to a success page or wherever you want
           return redirect()->route('add_product')->with('success', 'Image deleted successfully');
       } else {
           // Handle the case when the image doesn't exist
           return redirect()->route('add_product')->with('error', 'Image not found');
       }
   }

  public function adminorder()
  {
    $orderdata = Checkout::all();
    return view('admin.adminorder',compact('orderdata'));
    //return view("admin.adminorder");
  }

  public function view_user()
  {
    $userdata = User::all();
    return view('admin.view_user',compact('userdata'));
    
  }


  public function add_size()
{
    $data = Size::all();
    return view('admin.add_size',compact('data'));
}
public function add_category()
{
    $data = Category::all();
    $Subdata = SubCategory::all();
    $colors = Color::all();
    $sizes = Size::all();
    return view('admin.add_category',compact(['data','Subdata','colors','sizes']));
}

public function add_subcategory()
{
$data = SubCategory::all();
return view('admin.add_subcategory',compact('data'));
}
public function add_color()
{
$data = Color::all();
return view('admin.add_color',compact('data'));
}

public function approveorder($id)
{
        $i = intval($id);
        $data=Checkout::find($i);
        $data->status=1;
        $data->save();
        return redirect()->back()->with(['success'=>"Product status changed to delivered"]);
}

public function pendingorder($id)
{
    $i = intval($id);
    $data=Checkout::find($i);
    $data->status=0;
    $data->save();
    return redirect()->back()->with(['success'=>"Product status changed to Pending"]);
}
}
