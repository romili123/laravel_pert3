<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $mahasiswa = [
            [ 
                'no' => '1',
                'class' => '6A',
                'nama' => 'OrangA'
            ],
            [ 
                'no' => '2',
                'class' => '6B',
                'nama' => 'OrangB'
            ],
            [ 
                'no' => '3',
                'class' => '6C',
                'nama' => 'OrangC'
            ],
            [ 
                'no' => '4',
                'class' => '6D',
                'nama' => 'OrangD'
            ]

        ];

        if($request->query('class')){
            $mahasiswa = array_filter($mahasiswa, function($class){
                return $class['class'] == request()->class;
            });
        }

        return view('mahasiswa', compact('mahasiswa'));
    }

    public function create(){
        return view('create'); 
    }

    public function store(Request $request){
        $name = $request->name;
        
        return redirect('mahasiswa')->with(['success' => 'Berhasil! '.$name.' berhasil ditambahkan']);
    }

    public function show($mahasiswa){
        $mahasiswas = [
            [ 
                'no' => '1',
                'class' => '6A',
                'nama' => 'OrangA'
            ],
            [ 
                'no' => '2',
                'class' => '6B',
                'nama' => 'OrangB'
            ],
            [ 
                'no' => '3',
                'class' => '6C',
                'nama' => 'OrangC'
            ],
            [ 
                'no' => '4',
                'class' => '6D',
                'nama' => 'OrangD'
            ]

        ];

        if($mahasiswa){
            $mahasiswas = array_filter($mahasiswas, function($id){
                return $id['no'] == request()->mahasiswa;
            });
        }

        return view('detail', compact('mahasiswas')); 
    }

    public function edit($mahasiswa){
        $mahasiswas = [
            [ 
                'no' => '1',
                'class' => '6A',
                'nama' => 'OrangA'
            ],
            [ 
                'no' => '2',
                'class' => '6B',
                'nama' => 'OrangB'
            ],
            [ 
                'no' => '3',
                'class' => '6C',
                'nama' => 'OrangC'
            ],
            [ 
                'no' => '4',
                'class' => '6D',
                'nama' => 'OrangD'
            ]

        ];

        if($mahasiswa){
            $mahasiswas = array_filter($mahasiswas, function($id){
                return $id['no'] == request()->mahasiswa;
            });
        }

        return view('edit', compact('mahasiswas'));        
    }

    public function update(Request $request){
        
        if($request->old_name == $request->name){
            return redirect('/mahasiswa')->with(['error' => 'Gagal! Nama masih sama.']);
        }else{
            return redirect('/mahasiswa')->with(['success' => 'Berhasil! '.$request->old_name.' -> '.$request->name]);
        }
    }

    public function destroy(Request $request){
        $nama = $request->name;

        return redirect('/mahasiswa')->with(['success' => 'Berhasil! Data mahasiswa '.$nama.' berhasil dihapus.']);
    }
}
