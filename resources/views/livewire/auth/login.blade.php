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
                <input name="username" class="kt-input" placeholder="نام کاربری را وارد کنید..." type="text"/>
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex items-center justify-between gap-1">
                    <label class="kt-form-label font-normal text-mono">
                        رمزعبور
                    </label>
{{--                    <a class="text-sm kt-link shrink-0"
                       href="html/demo1/authentication/classic/reset-password/enter-email.html">
                        Forgot Password?
                    </a>--}}
                </div>
                <div class="kt-input" data-kt-toggle-password="true">
                    <input name="password" placeholder="رمزعبور را وارد کنید..." type="password"/>
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
            </div>
            <label class="kt-label">
                <input class="kt-checkbox kt-checkbox-sm" name="check" type="checkbox" value="1"/>
                <span class="kt-checkbox-label">
       مرا به خاطر بسپار
      </span>
            </label>
            <button class="kt-btn kt-btn-primary flex justify-center grow">
                و ر و د
            </button>
        </div>
    </div>
</div>
