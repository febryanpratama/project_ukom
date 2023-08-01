<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.front.landing');
});
// Route::get('auth/register', function () {
//     return view('pages.auth.register');
// });

Route::get('auth/register', [AuthController::class, 'index']);

Route::post('auth/register', [AuthController::class, 'store']);



// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


// ADMIN
Route::group([
    'controller' => AdminController::class,
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:Admin']
], function () {
    Route::prefix('/user')->group(function () {
        Route::get('/', 'indexUser');
        Route::get('/{id}', 'detailUser');
        Route::get('/{id}/setuju', 'setujuUser');
        Route::get('/{id}/batal', 'batalUser');
        Route::post('/{id}/password', 'ubahPassword');
        Route::post('{id}/verif', 'ubahVerif');
    });

    Route::prefix('/dokumen-portfolio')->group(function () {
        Route::get('/', 'indexDokumen');
        Route::post('/', 'storeDokumen');
        Route::post('/update', 'updateDokumen');

        Route::get('/{id}/hapus', 'hapusDokumen');
    });
    Route::prefix('/bank-assesment')->group(function () {

        Route::get('/', 'indexBankAssesment');
        Route::post('/', 'storeBankAssesment');
        Route::get('/detail-bank/{bank_id}', 'indexSoal');
        Route::post('/detail-bank/{bank_id}', 'postSoal');
        Route::get('/detail-bank/{bank_id}/detail/{soal_id}/jawaban', 'detailSoal');

        Route::post('jawaban', 'postJawaban');
        Route::get('jawaban/{jawaban_id}/soal/{soal_id}', 'setJawaban');
        // Route::get('/{id}/detail', 'detailSoal');
    });

    Route::prefix('/assesment')->group(function () {
        Route::get('/', 'indexAssesment');
        Route::post('/periode', 'parsePeriode');
        Route::get('/{id}/detail', 'detailAssesment');
    });

    Route::prefix('/periode')->group(function () {
        Route::get('/', 'indexPeriode');
        Route::post('/', 'postPeriode');
        Route::get('/{id}/detail', 'detailPeriode');
    });

    Route::prefix('/portfolio')->group(function () {
        Route::get('/', 'indexPortfolio');
        Route::get('disetujui/{portofolio_id}', 'disetujui');
        Route::get('ditolak/{portofolio_id}', 'ditolak');
        Route::get('direview/{portofolio_id}', 'direview');
        Route::get('direvisi/{portofolio_id}', 'direvisi');
        Route::get('/dokumen/{detail_user_id}', 'detailDokumen');
        Route::get('/dokumen/{detail_user_id}/detail/{portofolio_id}', 'komentarDokumen');

        Route::get('/{id}/detail/{dokumen_id}/dokumen', 'detailDokumenUser');


        Route::post('komentar', 'postKomentar');
    });

    Route::prefix('/sertifikasi')->group(function () {
        Route::get('/', 'indexSertifikasi');
        Route::post('/', 'postSertifikasi');
        Route::post('/update', 'updateSertifikasi');
        Route::get('/{id}/delete', 'deleteSertifikasi');
    });

    Route::prefix('/list-sertifikasi')->group(function () {
        Route::get('/', 'indexListSertifikasi');
        Route::get('/{id}', 'detailListSertifikasi');
        Route::get('/setuju/{id}', 'setujuSertifikasi');
        Route::get('/tolak/{id}', 'tolakSertifikasi');
    });
});
// END ADMIN

Route::group(
    [
        'controller' => UserController::class,
        'prefix' => 'user',
        'middleware' => ['auth', 'role:User']
    ],
    function () {
        Route::prefix('portfolio')->group(function () {
            Route::get('/', 'indexPortfolio');
            Route::get('/{id}/detail', 'detailPortfolio');

            Route::post('/', 'postPortfolio');
            Route::post('komentar', 'postKomentar');
        });

        Route::prefix('assesment')->group(function () {
            Route::get('/', 'indexAssesment');
            Route::get('/request', 'requestAssesment');
            Route::get('/{assesment_id}/start', 'detailAssesment');
            Route::get('/{assesment_id}/lapor', 'parsingAssesment');
            Route::post('/{assesment_id}/start', 'postAssesment');
        });

        Route::prefix('profil')->group(function () {
            Route::get('/', 'indexProfil');
            Route::post('/ubah', 'ubahProfil');
            Route::post('pendidikan', 'postPendidikan');
            Route::post('pekerjaan', 'postPekerjaan');
            Route::post('foto', 'postFoto');
            Route::post('/ijazah', 'postIjazah');
            Route::post('/foto-l1', 'postL1');
            Route::post('/foto-ktp', 'postKTP');
            Route::get('pendidikan/{pendidikan_id}/delete', 'deletePendidikan');
            Route::get('pekerjaan/{pekerjaan_id}/delete', 'deletePekerjaan');
        });

        Route::prefix('sertifikasi')->group(function () {
            Route::get('/', 'indexSertifikasi');
            Route::post('/', 'postSertifikasi');
            Route::post('/update', 'updateSertifikasi');
        });
    }
);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// 
require __DIR__ . '/auth.php';
