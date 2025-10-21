<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="rtl" lang="fa">
<head>
    @include('components.partials.head')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
    @livewireStyles
</head>
<body class="demo1 kt-sidebar-fixed kt-header-fixed flex h-full bg-background text-base text-foreground antialiased">
@include('components.shared.theme-toggle')
<!-- Page -->
<!-- Main -->
<div class="flex grow">
    @include('components.demo1.sidebar')
    <!-- Wrapper -->
    <div class="kt-wrapper flex grow flex-col">
        @persist('mega-menu')
        @include('components.demo1.header')
        @endpersist

        <!-- Content -->
        <main class="grow pt-5" id="content" role="content">
            {{ $slot }}
        </main>
        <!-- End of Content -->

        @include('components.demo1.footer')
    </div>
    <!-- End of Wrapper -->
</div>
<!-- End of Main -->
<!-- End of Page -->

@include('components.partials.scripts')
@livewireScripts
</body>
</html>
