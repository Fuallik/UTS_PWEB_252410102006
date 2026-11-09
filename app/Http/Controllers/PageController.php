<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private array $biodata = [
        'Nama'     => 'Mohamad Fauzi Febrianto',
        'NIM'      => '252410102006',
        'Fakultas' => 'Ilmu Komputer',
        'Prodi'    => 'Teknologi Informasi',
    ];

    private array $skills = ['Python', 'HTML', 'CSS', 'C#'];

    private array $kontak = [
        ['label' => 'Instagram', 'teks' => 'fauzi.febrianto02', 'url' => 'https://www.instagram.com/fauzi.febrianto02/'],
        ['label' => 'Email', 'teks' => 'fauzifebrianto2@gmail.com', 'url' => 'mailto:fauzifebrianto2@gmail.com'],
    ];

    private array $projects = [
        ['judul' => 'Project PBO', 'teknologi' => 'C#', 'tahun' => 2026, 'status' => 'Selesai', 'gambar' => 'asset/projek1.png'],
        ['judul' => 'Project GB Point Blank', 'teknologi' => 'HTML & CSS', 'tahun' => 2026, 'status' => 'Selesai', 'gambar' => 'asset/projek2.png'],
        ['judul' => 'Project MP3 To FLAC', 'teknologi' => 'Python', 'tahun' => 2026, 'status' => 'Selesai', 'gambar' => 'asset/projek3.png'],
    ];

    public function login()
    {
        return view('login', ['username' => null]);
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:50',
        ]);

        $daftar = ['fauzi'];

        if (! in_array(strtolower($data['username']), $daftar)) {
            return back()
                ->withErrors(['username' => 'Username tidak terdaftar'])
                ->withInput();
        }

        return redirect()->route('dashboard', ['username' => $data['username']]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        if (! $username) {
            return redirect()->route('login');
        }

        return view('dashboard', [
            'username'    => $username,
            'totalProyek' => count($this->projects),
            'totalSkill'  => count($this->skills),
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        if (! $username) {
            return redirect()->route('login');
        }

        return view('pengelolaan', [
            'username' => $username,
            'projects' => $this->projects,
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        if (! $username) {
            return redirect()->route('login');
        }

        return view('profile', [
            'username' => $username,
            'biodata'  => $this->biodata,
            'skills'   => $this->skills,
            'kontak'   => $this->kontak,
        ]);
    }
}
