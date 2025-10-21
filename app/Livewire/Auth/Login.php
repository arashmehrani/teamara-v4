<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;


class Login extends Component
{
    public $username, $password, $remember = true;

    public function login()
    {
        $validated = $this->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
            'remember' => ['boolean'],
        ]);
        $key = 'login-attempt:' . Str::lower($this->username) . '|' . request()->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $this->addError('password', 'تعداد تلاش‌های ناموفق بیش از حد مجاز است. لطفاً چند دقیقه دیگر دوباره تلاش کنید.');
            return;
        }
        RateLimiter::hit($key, 60);

        $user = User::where('username', $validated['username'])->first();

        $credentialsValid = $user && Hash::check($this->password, $user->password);

        if (!$credentialsValid) {
            $this->addError('password', 'اطلاعات ورود صحیح نمی‌باشد.');
            return;
        }

        RateLimiter::clear($key); // در صورت موفقیت، تلاش‌ها پاک می‌شوند

        if (!$user->can_login) {
            $this->addError('username', 'دسترسی ورود برای این کاربر محدود شده است.');
            return;
        }

        /* if (!$user->company?->active) {
                    return back()->withErrors(['username' => 'شرکت/نمایندگی مربوطه غیرفعال است.']);
                }*/

        Session::regenerate();
        Auth::login($user, $validated['remember'] ?? false);

        // addLog('login', 'user'); // در صورت نیاز فعال شود

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
