<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // method for store products
    public function store_products(Request $request){

         // Define validation rules
         $rules = [
            'productsName' => 'required|array|min:1', // Validate as array and ensure at least one item
            'productsName.*' => 'required|string|max:255', // Validate each name in the array
            'productsStatus' => 'required|array|size:' . count($request->input('productsName')), // Validate as array with the same size as productsName
            'productsStatus.*' => 'required|in:0,1,2', // Ensure each status is one of the valid values
            'productsDescription' => 'required|array|size:' . count($request->input('productsName')), // Validate description size matches productsName
            'productsDescription.*' => 'nullable|string', // Validate each description (nullable but string if present)
            //'projectIds' => 'required|array|size:' . count($request->input('productsName')), // Ensure projectIds matches productsName size
            //'projectIds.*' => 'required|integer|exists:projects,id', // Each projectId must exist in the projects table
        ];

        // Run the validation
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => $validator->errors(),
            ], 422);
        }

        $productsName = $request->input('productsName');
        $productsStatus = $request->input('productsStatus');
        $productsDescription = $request->input('productsDescription');
        $projectIds = $request->input('projectIds');

        try {
            foreach ($productsName as $key => $name) {
                $productData = [
                    'name' => $name,
                    'status' => $productsStatus[$key],
                    'description' => $productsDescription[$key],
                    'project_id' => $projectIds,
                ];

                // Save product data in the database
                Product::create($productData);
            }

            return response()->json(['success' => true, 'message' => 'Products saved successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }
}
