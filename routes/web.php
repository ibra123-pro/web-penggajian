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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::group(['middleware' => ['role:admin']], function(){
    Route::resource('/user','App\Http\Controllers\UserController');
    Route::get('/user/hapus/{id}',[App\Http\Controllers\UserController::class, 'destroy']);
    Route::get('/user/edit/{id}',[App\Http\Controllers\UserController::class, 'update']);
    Route::resource('/akun','App\Http\Controllers\AkunController');
    Route::get('/akun/hapus/{id}',[App\Http\Controllers\AkunController::class, 'destroy']);
    Route::get('/akun/edit/{id}',[App\Http\Controllers\AkunController::class, 'update']);
    Route::resource('/setting','App\Http\Controllers\SettingController');
    Route::post('/setting/simpan',[App\Http\Controllers\SettingController::class, 'store']);
    Route::resource('/jabatan','App\Http\Controllers\JabatanController');
    Route::get('/jabatan/hapus/{id}',[App\Http\Controllers\JabatanController::class, 'destroy']);
    Route::get('/jabatan/edit/{id}',[App\Http\Controllers\JabatanController::class, 'update']);
    Route::resource('/paket','App\Http\Controllers\PaketController');
    Route::get('/paket/hapus/{id}',[App\Http\Controllers\PaketController::class, 'destroy']);
    Route::get('/paket/edit/{id}',[App\Http\Controllers\PaketController::class, 'update']);
    Route::resource('/karyawan','App\Http\Controllers\KaryawanController');
    Route::get('/karyawan/hapus/{id}',[App\Http\Controllers\KaryawanController::class, 'destroy']);
    Route::get('/karyawan/edit/{id}',[App\Http\Controllers\KaryawanController::class, 'update']);
    Route::resource('/jammasuk','App\Http\Controllers\JamMasukController');   
    Route::resource('/jamkeluar','App\Http\Controllers\JamKeluarController');
    Route::resource('/rekappresensi','App\Http\Controllers\RekappresensiController');
    Route::resource('/datapresensi','App\Http\Controllers\DataPresensiController');
    Route::resource('/rekapcostumer','App\Http\Controllers\RekapcostumerController');
    Route::resource('/rekapabsen','App\Http\Controllers\RekapAbsenController');
    Route::resource('/rekappresensi','App\Http\Controllers\RekappresensiController');    
    Route::get('/rekappresensi/hapus/{id}',[App\Http\Controllers\RekappresensiController::class, 'destroy']);
    Route::resource('/detailrekappresensi','App\Http\Controllers\DetailRekapPresensiController');
    Route::get('/create', 'RekappresensiController@create');
    Route::post('/simpan', 'RekappresensiController@store');
    Route::get('/transaksi/hapus/{kd_jabatan}','RekappresensiController@destroy');
    Route::post('/detail/store', 'DetailRekapPresensiController@store');
    Route::post('/detail/simpan', 'DetailRekapPresensiController@store'); 
    Route::resource('/rekapmasang','App\Http\Controllers\RekapMasangController');
    Route::resource('/rekappemasangan','App\Http\Controllers\RekappemasanganController');    
    Route::get('/rekappemasangan/hapus/{id}',[App\Http\Controllers\RekappemasanganController::class, 'destroy']);
    Route::resource('/detailrekappemasangan','App\Http\Controllers\DetailRekapPemasanganController');
    Route::get('/create', 'RekappemasanganController@create');
    Route::post('/simpan', 'RekappemasanganController@store');
    Route::get('/transaksi/hapus/{kd_jabatan}','RekappemasanganController@destroy');
    Route::post('/detail/store', 'DetailRekapPemasanganController@store');
    Route::post('/detail/simpan', 'DetailRekapPemasanganController@store');
    Route::resource('/rekapcos','App\Http\Controllers\RekapCosController');
    Route::resource('/rekapcostumer','App\Http\Controllers\RekapcostumerController');    
    Route::get('/rekapcostumer/hapus/{id}',[App\Http\Controllers\RekapcostumerController::class, 'destroy']);
    Route::resource('/rekapkasbon','App\Http\Controllers\RekapkasbonController');    
    Route::get('/rekapkasbon/hapus/{id}',[App\Http\Controllers\RekapkasbonController::class, 'destroy']);
    Route::resource('/rekbos','App\Http\Controllers\RekbosController');    
    Route::resource('/detailrekapcostumer','App\Http\Controllers\DetailRekapCostumerController');
    Route::get('/create', 'RekapcostumerController@create');
    Route::post('/simpan', 'RekapcostumerController@store');
    Route::get('/transaksi/hapus/{kd_jabatan}','RekapcostumerController@destroy');
    Route::post('/detail/store', 'DetailRekapCostumerController@store');
    Route::post('/detail/simpan', 'DetailRekapCostumerController@store');
    Route::resource('/kasbon','App\Http\Controllers\KasbonController');    
    Route::get('/kasbon/hapus/{id}',[App\Http\Controllers\KasbonController::class, 'destroy']);
    Route::get('/kasbon/edit/{id}',[App\Http\Controllers\KasbonController::class, 'update']);
    Route::resource('/gajikotor','App\Http\Controllers\GajiKotorController');    
    Route::get('/gajikotor/hapus/{id}',[App\Http\Controllers\GajiKotorController::class, 'destroy']);
    Route::resource('/detailgajikotor','App\Http\Controllers\DetailGajiKotorController');
    Route::get('/create', 'GajiKotorController@create');
    Route::post('/simpan', 'GajiKotorController@store');
    Route::get('/transaksi/hapus/{kd_jabatan}','GajiKotorController@destroy');
    Route::post('/detail/store', 'DetailGajiKotorController@store');
    Route::post('/detail/simpan', 'DetailGajiKotorController@store');
    Route::resource('/gajikotors','App\Http\Controllers\GajiKotorsController');
    Route::resource('/gajibersih','App\Http\Controllers\GajiBersihController');    
    Route::get('/gajibersih/hapus/{id}',[App\Http\Controllers\GajiBersihController::class, 'destroy']);
    Route::resource('/detailgajibersih','App\Http\Controllers\DetailGajiBersihController');
    Route::get('/create', 'GajiBersihController@create');
    Route::post('/simpan', 'GajiBersihController@store');
    Route::get('/transaksi/hapus/{kd_jabatan}','GajiBersihController@destroy');
    Route::post('/detail/store', 'DetailGajiBersihController@store');
    Route::post('/detail/simpan', 'DetailGajiBersihController@store');
    Route::resource('/gajibersihs','App\Http\Controllers\GajiBersihsController');
    Route::resource('/rekthp','App\Http\Controllers\RekthpController');    
    Route::resource('/thp','App\Http\Controllers\ThpController');    
    Route::get('/thp/hapus/{id}',[App\Http\Controllers\ThpController::class, 'destroy']);
    Route::resource('/detailthp','App\Http\Controllers\DetailThpController');
    Route::get('/create', 'ThpController@create');
    Route::post('/simpan', 'ThpController@store');
    Route::get('/transaksi/hapus/{kd_jabatan}','ThpController@destroy');
    Route::post('/detail/store', 'DetailThpController@store');
    Route::post('/detail/simpan', 'DetailThpController@store');
    Route::resource('/thps','App\Http\Controllers\ThpsController');
    Route::resource('/updatekasbon','App\Http\Controllers\UpdateKasbonController');
    Route::get('/updatekasbon/edit/{id}',[App\Http\Controllers\UpdateKasbonController::class, 'update']);
    Route::resource('/jurnal','App\Http\Controllers\JurnalController');
    Route::get('/jurnal/hapus/{id}',[App\Http\Controllers\JurnalController::class, 'destroy']);
});
Route::resource('/register','App\Http\Controllers\RegisterController');   
Route::resource('/jammasuk','App\Http\Controllers\JamMasukController');   
Route::resource('/jamkeluar','App\Http\Controllers\JamKeluarController');    
Route::resource('/kasbon','App\Http\Controllers\KasbonController');
Route::resource('/costumer','App\Http\Controllers\CostumerController'); 
Route::resource('/pemasangan','App\Http\Controllers\PemasanganController'); 
Route::resource('/laporanpengajuankasbon','App\Http\Controllers\LaporanPengajuanKasbonController');
Route::resource('/laporanpemasangan','App\Http\Controllers\LaporanPemasanganController');
Route::resource('/laporanrekappemasangan','App\Http\Controllers\LaporanRekapPemasanganController');
Route::resource('/laporanpenggajian','App\Http\Controllers\LaporanPenggajianController');
Route::resource('/laporanpaket','App\Http\Controllers\LaporanPaketController');
Route::resource('/laporankaryawan','App\Http\Controllers\LaporanKaryawanController');
Route::resource('/laporanjabatan','App\Http\Controllers\LaporanJabatanController');
Route::resource('/laporanpresensi','App\Http\Controllers\LaporanPresensiController');
Route::resource('/laporanrekappresensi','App\Http\Controllers\LaporanRekapPresensiController');
Route::resource('/laporancostumer','App\Http\Controllers\LaporanCostumerController');
Route::resource('/laporanrekapcostumer','App\Http\Controllers\LaporanRekapCostumerController');
Route::resource('/laporanrekapkasbon','App\Http\Controllers\LaporanRekapKasbonController');
Route::resource('/laporangajikotor','App\Http\Controllers\LaporanGajiKotorController');
Route::resource('/laporangajibersih','App\Http\Controllers\LaporanGajiBersihController');
Route::resource('/laporanthp','App\Http\Controllers\LaporanThpController');
Route::resource('/laporanupdatekasbon','App\Http\Controllers\LaporanUpdateKasbonController');
Route::resource('/laporan','App\Http\Controllers\LaporanController');
Route::resource('/cetakjurnal','App\Http\Controllers\CetakJurnalController');
Route::resource('/cetakrekap','App\Http\Controllers\CetakRekapController');
Route::resource('/cetakgaji','App\Http\Controllers\CetakGajiController');

Route::group(['middleware' => ['role:sales']], function(){
    Route::resource('/sales','App\Http\Controllers\SalesController');
});

Route::resource('/profile','App\Http\Controllers\ProfileController');
Route::get('/profile/edit/{id}',[App\Http\Controllers\ProfileController::class, 'update']);