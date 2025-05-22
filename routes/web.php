<?php

use App\Livewire\AdminRegisterComponent;
use App\Livewire\BooksComponent;
use App\Livewire\BorrowingsComponent;
use App\Livewire\CategoriesComponent;
use App\Livewire\DashboardComponent;
use App\Livewire\HomeComponent;
use App\Livewire\HomepageComponent;
use App\Livewire\LoginComponent;
use App\Livewire\MemberComponent;
use App\Livewire\ProfileComponent;
use App\Livewire\ReturnsComponent;
use App\Livewire\UserComponent;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', HomeComponent::class)->name('home');

Route::get('/dashboard', DashboardComponent::class)->name('dashboard')->middleware(['auth', 'level:admin']);
Route::get('/user', UserComponent::class)->name('user')->middleware(['auth', 'level:admin']);
Route::get('/member', MemberComponent::class)->name('member')->middleware(['auth', 'level:admin']);
Route::get('/categories', CategoriesComponent::class)->name('categories')->middleware(['auth', 'level:admin']);
Route::get('/books', BooksComponent::class)->name('books')->middleware(['auth', 'level:admin']);
Route::get('/borrowings', BorrowingsComponent::class)->name('borrowings')->middleware(['auth', 'level:admin']);
Route::get('/returns', ReturnsComponent::class)->name('returns')->middleware(['auth', 'level:admin']);

Route::get('/profile', ProfileComponent::class)->name('profile')->middleware(['auth', 'level:member']);
Route::get('/homepage', HomepageComponent::class)->name('homepage')->middleware(['auth', 'level:member']);

Route::get('/admin-register', AdminRegisterComponent::class)->name('admin-register');

Route::get('/login',LoginComponent::class)->name('login');
Route::get('/logout', [LoginComponent::class,'logout'])->name('logout');