<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\PostDec;

class IndexController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('users')->orderBy('nama_user', 'asc')->get(); //untuk mengambil semua data ditabel user

        return view('index', $data);
    }
    public function edit($id_user)
    {
        $data['user'] = DB::table('users')->where('id_user', $id_user)->first(); //mengambil satu data user
        return view('edit', $data);
    }
    public function update(Request $request, $id_user)
    {
        // dd($request);

        $simpan = DB::table('users')->where('id_user', $id_user)->update(
            [
                'nama_user' => $request->nama_user,
                'email' => $request->email,
                'jekel' => $request->jekel,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat
            ]
        );
        if ($simpan == true) {
            echo "<script>
            alert('Data berhasil disimpan');
            window.location = '/';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal disimpan');
            window.location = '/edit/$id_user';
            </script>";
        }
    }
    public function add()
    {
        return view('tambah');
    }
    public function store(Request $request)
    {
        // dd($request);

        $tambah = DB::table('users')->insert(
            [
                'nama_user' => $request->nama_user,
                'email' => $request->email,
                'jekel' => $request->jekel,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat
            ]
        );
        if ($tambah == true) {
            echo "<script>
            alert('Data berhasil disimpan');
            window.location = '/';
            </script>";
        } else {
            echo "<script>
            alert('Data gagal disimpan');
            window.location = '/tambah';
            </script>";
        }
    }
    public function hapus($id_user)
    {
        DB::table('users')->where('id_user', $id_user)->delete();
    }
}
