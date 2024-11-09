use App\Http\Controllers\AdminController;
use App\Http\Controllers\KonyvtarosController;
use App\Http\Controllers\RaktarosController;
use App\Http\Controllers\FelhasznaloController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'szerep:0'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::middleware(['auth', 'szerep:0,1'])->group(function () {
    Route::get('/konyvtaros', [KonyvtarosController::class, 'index']);
    Route::get('/raktaros', [RaktarosController::class, 'index']);
});

Route::middleware(['auth', 'szerep:0,1,2'])->group(function () {
    Route::get('/felhasznalo', [FelhasznaloController::class, 'index']);
});

