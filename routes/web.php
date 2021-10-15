<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
route::get('/about', function () {
    return '<h1>halo</h1>' .
        'selamat datang di webapp saya<br>'
        . 'laravel,emang keren.';
});

Route::get('/name', function () {
    return view('name');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/hobi', function () {
    return view('hobi');
});
Route::get('/cita', function () {
    return view('cita');
});

Route::get('/teman', function () {
    return view('teman');
});
Route::get('/yayasan', function () {
    return view('latihanerin/yayasan');
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    } else if ($makanan && $minuman != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
    }

});
Route::get('profile', function () {
    $nama = "Abdul";
    return view('profile', compact('nama'));
});

Route::get('biodata', function () {
    $nama = "Erin";
    $umur = "17 tahun";
    $alamat = "cangkuang";
    $kelas = "12 RPL 2";
    $hobi = "menggambar";
    return view('biodata', compact('nama', 'umur', 'alamat', 'kelas', 'hobi'));
});
Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'lorem ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'lorem ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'lorem ipsum 3', 'content' => 'content ketiga'],

    ];
    return view('blog', compact('posts'));
});

Route::get('tugas', function () {
    $pilih = [
        ['id' => '1', 'name' => 'Erin rafani',
            'username' => 'erin_rafani',
            'email' => 'erin@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Fisika',
                'mapel3' => 'Kimia',

            ],
        ],
        ['id' => '2', 'name' => 'Lusi',
            'username' => 'Lusi-Aja',
            'email' => 'lusi@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Indonesia',
                'mapel2' => 'Fisika',
                'mapel3' => 'Matematika',

            ],
        ],
        ['id' => '3', 'name' => 'Nurlinda',
            'username' => 'nur_linda',
            'email' => 'linda@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Inggris',
                'mapel3' => 'Kimia',

            ],
        ],

        ['id' => '4', 'name' => 'Berlinka',
            'username' => 'ber_lin',
            'email' => 'berlin@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'inggris',
                'mapel2' => 'Fisika',
                'mapel3' => 'olahraga',

            ],
        ],

        ['id' => '5', 'name' => 'Amelia',
            'username' => 'Amel_lia',
            'email' => 'Amel@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Seni Budaya',
                'mapel3' => 'sunda',

            ],
        ],
    ];
    return view('tugas', compact('pilih'));
});
