<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function store_products(Request $request)
    {
        $productsName = $request->input('productsName');
        $productsName_i18n = $request->input('productsName_i18n');
        $productsStatus = $request->input('productsStatus');
        $productsDescription = $request->input('productsDescription');
        $productsDescription_i18n = $request->input('productsDescription_i18n');
        $projectId = $request->input('projectId');

        try {
            DB::beginTransaction();

            foreach ($productsName as $key => $name) {
                $product = Product::create([
                    'name' => $name, // Default locale name
                    'status' => $productsStatus[$key],
                    'description' => $productsDescription[$key], // Default locale description
                    'project_id' => $projectId,
                ]);

                // Decode translations
                $nameTranslations = json_decode($productsName_i18n[$key], true);
                $descriptionTranslations = json_decode($productsDescription_i18n[$key], true);

                if (!$nameTranslations || !$descriptionTranslations) {
                    throw new \Exception('Invalid JSON format in translations.');
                }

                foreach (config('voyager.multilingual.locales') as $locale) {
                    if (!empty($nameTranslations[$locale])) {
                        DB::table('translations')->insert([
                            'table_name' => 'products',
                            'foreign_key' => $product->id,
                            'locale' => $locale,
                            'column_name' => 'name',
                            'value' => $nameTranslations[$locale],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }

                    if (!empty($descriptionTranslations[$locale])) {
                        DB::table('translations')->insert([
                            'table_name' => 'products',
                            'foreign_key' => $product->id,
                            'locale' => $locale,
                            'column_name' => 'description',
                            'value' => $descriptionTranslations[$locale],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Products saved successfully!',
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving products.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }



}
