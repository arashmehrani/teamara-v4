<div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
    <style>
        .page-bg {
            background-image: url('assets/media/images/2600x1200/bg-10.png');
        }

        .dark .page-bg {
            background-image: url('assets/media/images/2600x1200/bg-10-dark.png');
        }
    </style>
    <div class="kt-card max-w-[370px] w-full">
        <div class="kt-card-content flex flex-col gap-5 p-10" id="sign_in_form">
            <div class="text-center mb-2.5">
                <h3 class="text-lg font-medium text-mono leading-none mb-2.5">
                    ورود به سیستم
                </h3>
                <div class="flex items-center justify-center font-medium">
                    {{--       <span class="text-sm text-secondary-foreground me-1.5">
                            Need an account?
                           </span>
                                        <a class="text-sm link" href="html/demo1/authentication/classic/sign-up.html">
                                            Sign up
                       </a>--}}
                </div>
            </div>
            {{--            <div class="grid grid-cols-2 gap-2.5">
                            <a class="kt-btn kt-btn-outline justify-center" href="#">
                                <img alt="" class="size-3.5 shrink-0" src="assets/media/brand-logos/google.svg"/>
                                Use Google
                            </a>
                            <a class="kt-btn kt-btn-outline justify-center" href="#">
                                <img alt="" class="size-3.5 shrink-0 dark:hidden" src="assets/media/brand-logos/apple-black.svg"/>
                                <img alt="" class="size-3.5 shrink-0 light:hidden" src="assets/media/brand-logos/apple-white.svg"/>
                                Use Apple
                            </a>
                        </div>--}}
            <div class="flex items-center gap-2">
      <span class="border-t border-border w-full">
      </span>
                <span class="text-xs text-muted-foreground font-medium uppercase">
      </span>
                <span class="border-t border-border w-full">
      </span>
            </div>
            <div class="flex flex-col gap-1">
                <label class="kt-form-label font-normal text-mono">
                    نام کاربری
                </label>
                <input wire:model="username" name="username" class="kt-input" placeholder="نام کاربری را وارد کنید..."
                       type="text"/>
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex items-center justify-between gap-1">
                    <label class="kt-form-label font-normal text-mono">
                        رمزعبور
                    </label>
                    {{--      <a class="text-sm kt-link shrink-0"
                                           href="html/demo1/authentication/classic/reset-password/enter-email.html">
                                            Forgot Password?
                                        </a>--}}
                </div>
                <div class="kt-input" data-kt-toggle-password="true">
                    <input wire:model="password" name="password" placeholder="رمزعبور را وارد کنید..." type="password"/>
                    <button class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-icon bg-transparent! -me-1.5"
                            data-kt-toggle-password-trigger="true" type="button">
        <span class="kt-toggle-password-active:hidden">
         <i class="ki-filled ki-eye text-muted-foreground">
         </i>
        </span>
                        <span class="hidden kt-toggle-password-active:block">
         <i class="ki-filled ki-eye-slash text-muted-foreground">
         </i>
        </span>
                    </button>
                </div>
                @error('password')
                <span class="text-xs text-destructive">{{ $message }}</span>
                @enderror
            </div>
            <label class="kt-label">
                <input wire:model="remember" class="kt-checkbox kt-checkbox-sm" name="remember" type="checkbox"
                       value="1"/>
                <span class="kt-checkbox-label">
       مرا به خاطر بسپار
      </span>
            </label>
            <button type="submit" wire:loading.attr="disabled" wire:click.prevent="login"
                    class="kt-btn kt-btn-primary flex justify-center grow">
                <div wire:loading.remove wire:target="login">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"/>
                    </svg>
                </div>
                <div wire:loading wire:target="login">
                    <svg class="ml-3 size-4 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
                و ر و د
            </button>

        </div>
    </div>
</div>
