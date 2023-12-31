<?php
namespace App\Http\Controllers\API\Tour;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Tour\TourResource;
use App\Models\Core\Tour;
use App\Models\User;

//use Validator;

class TourController extends BaseController
{

    public function index()
    {
        $products = Tour::all();
        return $this->sendResponse(TourResource::collection($products), 'Products Retrieved Successfully.');
    }

    public function users(){
        return $this->sendResponse(User::all(), 'Users Retrieved Successfully.');
    }

    public function create()
    {

    }


//    public function store(Request $request)
//    {
//        $input = $request->all();
//
//        $validator = Validator::make($input, [
//            'name' => 'required',
//            'detail' => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            return $this->sendError('Validation Error.', $validator->errors());
//        }
//
//        $product = Product::create($input);
//
//        return $this->sendResponse(new ProductResource($product), 'Product Created Successfully.');
//    }


//    public function show($id)
//    {
//        $product = Product::find($id);
//
//        if (is_null($product)) {
//            return $this->sendError('Product not found.');
//        }
//
//        return $this->sendResponse(new ProductResource($product), 'Product Retrieved Successfully.');
//    }


    public function edit($id)
    {

    }


//    public function update(Request $request, $id)
//    {
//        $input = $request->all();
//
//        $validator = Validator::make($input, [
//            'name' => 'required',
//            'detail' => 'required'
//        ]);
//
//        if ($validator->fails()) {
//            return $this->sendError('Validation Error.', $validator->errors());
//        }
//        $product = Product::find($id);
//        $product->name = $input['name'];
//        $product->detail = $input['detail'];
//        $product->save();
//
//        return $this->sendResponse(new ProductResource($product), 'Product Updated Successfully.');
//    }
//    public function destroy($id)
//    {
//        $product = Product::find($id);
//        $product->delete();
//
//        return $this->sendResponse([], 'Product Deleted Successfully.');
//    }
}
