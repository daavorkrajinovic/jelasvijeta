<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jelo;



class JeloController extends Controller
{
    public function index(Request $request)
    {
        $query = Jelo::query();

        // Primjer: filtriranje prema jeziku
        if ($request->has('jezik')) {
            $query->where('jezik', $request->jezik);
        }

                $request->validate([
                    'per_page' => 'numeric',
                    'page' => 'numeric',
                    'kategorija' => 'nullable|numeric',
                    'tag' => 'nullable',
                    'with' => 'nullable',
                    'lang' => 'required',
                    'diff_time' => 'numeric',
                ]);
        
                $per_page = $request->input('per_page', 10);
                $page = $request->input('page', 1);
        
                $jela = Jela::query();
        
                // Filtriranje po parametrima
                if ($request->has('kategorija')) {
                    $jela->where('kategorija_id', $request->input('kategorija'));
                }
        
                if ($request->has('tag')) {
                    $tag= explode(',', $request->input('tag'));
                    $jela->whereHas('tag', function ($query) use ($tag) {
                        $query->whereIn('id', $tag);
                    });
                }
        
                // Dodatni podaci (with)
                if ($request->has('with')) {
                    $with = explode(',', $request->input('with'));
                    $jela->with($with);
                }
        
                // Prema diff_time parametru
                if ($request->has('diff_time') && $request->input('diff_time') > 0) {
                    $jela->where(function ($query) use ($request) {
                        $query->where('created_at', '>', date('Y-m-d H:i:s', $request->input('diff_time')))
                            ->orWhere('updated_at', '>', date('Y-m-d H:i:s', $request->input('diff_time')))
                            ->orWhere('deleted_at', '>', date('Y-m-d H:i:s', $request->input('diff_time')));
                    });
                }
        
                // Dohvat podataka
                $jela = $jela->paginate($per_page, ['*'], 'page', $page);
        
                return response()->json($jela);

              
            }
        }



