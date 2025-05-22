<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Redis;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(3);
        return view("index", ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'bail|required|unique:mahasiswa|max:250', // bail itu akan menghentikan seluruh validasi jika atribut yang memiliki validasi bail failure, jadi kalai required failure, maka unique dan max
            'nim' => 'required|unique:mahasiswa|max:10',
            'email' => 'required|unique:mahasiswa|max:100'
        ]);

        if ($validated) {
            Mahasiswa::create($request->all());
            sleep(5);
            return redirect()->route('mahasiswa.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view("show", compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', compact('mahasiswa'));
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
        $validated = $request->validate([
            'nama' => 'required|max:250', // bail itu akan menghentikan seluruh validasi jika atribut yang memiliki validasi bail failure, jadi kalai required failure, maka unique dan max
            'nim' => 'required|max:10',
            'email' => 'required|max:100'
        ]);

        if($validated) {
            $nameData = Mahasiswa::find($id);
            $successMessage = "Data " . $nameData['nama'] . " Berhasil di Update";
            Mahasiswa::find($id)->update($request->all());
            $request->session()->flash('success', $successMessage);
            return redirect()->route('mahasiswa.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $nameData = Mahasiswa::find($id);
        $deleteMassage = "Data " . $nameData['nama'] . " berhasil di hapus!";
        $delete = Mahasiswa::destroy($id);
        if ($delete) {
            $request->session()->flash('delete', $deleteMassage);
            return redirect()->route('mahasiswa.index');
        }
    }
}
