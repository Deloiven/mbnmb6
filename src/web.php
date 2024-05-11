// routes/web.php
Route::get('/index', [BookController::class, 'index'])->name('book.index');
Route::post('/store', [BookController::class, 'store'])->name('book.store');