<div class="kt-menu-item pt-2.25 pb-px">
    <span class="kt-menu-heading pe-[10px] ps-[10px] text-xs font-medium uppercase text-muted-foreground">
        تنظیمات
    </span>
</div>

<div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <div
        class="kt-menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
        tabindex="0">
        <span class="kt-menu-icon w-[20px] items-start text-muted-foreground">
            <i class="ki-filled ki-users text-lg"></i>
        </span>
        <span
            class="kt-menu-title kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary text-sm font-medium text-foreground">
            مدیریت کاربران
        </span>
        <span class="kt-menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-muted-foreground">
            <span class="kt-menu-item-show:hidden inline-flex">
                <i class="ki-filled ki-plus text-[11px]"></i>
            </span>
            <span class="kt-menu-item-show:inline-flex hidden">
                <i class="ki-filled ki-minus text-[11px]"></i>
            </span>
        </span>
    </div>
    <div
        class="kt-menu-accordion relative gap-1 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-border">
        <div class="kt-menu-item">
            <a class="kt-menu-link kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg"
               href="#" tabindex="0">
                <span class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"></span>
                <span class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary font-normal text-foreground">
                    لیست کاربران
                </span>
            </a>
        </div>
       {{-- <div class="kt-menu-item" data-kt-menu-item-toggle="accordion"
             data-kt-menu-item-trigger="click">
            <div
                class="kt-menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                tabindex="0">
                                <span
                                    class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2">
                                </span>
                <span
                    class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-medium kt-menu-link-hover:!text-primary me-1 font-normal text-foreground">
                                    Checkout
                                </span>
                <span
                    class="kt-menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-muted-foreground">
                                    <span class="kt-menu-item-show:hidden inline-flex">
                                        <i class="ki-filled ki-plus text-[11px]">
                                        </i>
                                    </span>
                                    <span class="kt-menu-item-show:inline-flex hidden">
                                        <i class="ki-filled ki-minus text-[11px]">
                                        </i>
                                    </span>
                                </span>
            </div>
            <div
                class="kt-menu-accordion relative gap-1 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-border">
                <div class="kt-menu-item">
                    <a class="kt-menu-link kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg"
                       href="html/demo1/store-client/checkout/order-summary.html" tabindex="0">
                                        <span
                                            class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2">
                                        </span>
                        <span
                            class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary font-normal text-foreground">
                                            Order Summary
                                        </span>
                    </a>
                </div>
                <div class="kt-menu-item">
                    <a class="kt-menu-link kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg"
                       href="html/demo1/store-client/checkout/shipping-info.html" tabindex="0">
                                        <span
                                            class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2">
                                        </span>
                        <span
                            class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary font-normal text-foreground">
                                            Shipping Info
                                        </span>
                    </a>
                </div>
                <div class="kt-menu-item">
                    <a class="kt-menu-link kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg"
                       href="html/demo1/store-client/checkout/payment-method.html" tabindex="0">
                                        <span
                                            class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2">
                                        </span>
                        <span
                            class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary font-normal text-foreground">
                                            Payment Method
                                        </span>
                    </a>
                </div>
                <div class="kt-menu-item">
                    <a class="kt-menu-link kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg"
                       href="html/demo1/store-client/checkout/order-placed.html" tabindex="0">
                                        <span
                                            class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2">
                                        </span>
                        <span
                            class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary font-normal text-foreground">
                                            Order Placed
                                        </span>
                    </a>
                </div>
            </div>
        </div>--}}
    </div>
</div>

<div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <div
        class="kt-menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
        tabindex="0">
        <span class="kt-menu-icon w-[20px] items-start text-muted-foreground">
            <i class="ki-filled ki-setting-2 text-lg"></i>
        </span>
        <span
            class="kt-menu-title kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary text-sm font-medium text-foreground">
            تنظیمات پایه
        </span>
        <span class="kt-menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-muted-foreground">
            <span class="kt-menu-item-show:hidden inline-flex">
                <i class="ki-filled ki-plus text-[11px]"></i>
            </span>
            <span class="kt-menu-item-show:inline-flex hidden">
                <i class="ki-filled ki-minus text-[11px]"></i>
            </span>
        </span>
    </div>
    <div
        class="kt-menu-accordion relative gap-1 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-border">
        <div class="kt-menu-item">
            <a class="kt-menu-link kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg"
               href="#" tabindex="0">
                <span class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"></span>
                <span class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary font-normal text-foreground">
                    لاگ
                </span>
            </a>
        </div>

    </div>
</div>

<div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <div
        class="kt-menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
        tabindex="0">
        <span class="kt-menu-icon w-[20px] items-start text-muted-foreground">
            <i class="ki-filled ki-security-user text-lg"></i>
        </span>
        <span
            class="kt-menu-title kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary text-sm font-medium text-foreground">
            مدیریت دسترسی ها
        </span>
        <span class="kt-menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-muted-foreground">
            <span class="kt-menu-item-show:hidden inline-flex">
                <i class="ki-filled ki-plus text-[11px]"></i>
            </span>
            <span class="kt-menu-item-show:inline-flex hidden">
                <i class="ki-filled ki-minus text-[11px]"></i>
            </span>
        </span>
    </div>
    <div
        class="kt-menu-accordion relative gap-1 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-border">
        <div class="kt-menu-item">
            <a class="kt-menu-link kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg"
               href="#" tabindex="0">
                <span class="kt-menu-bullet kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full rtl:start-0 rtl:before:translate-x-1/2"></span>
                <span class="kt-menu-title text-2sm kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary font-normal text-foreground">
                    نقش کاربران
                </span>
            </a>
        </div>

    </div>
</div>
