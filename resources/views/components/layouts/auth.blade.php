<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="rtl" lang="fa">
<head>
    @include('components.partials.head')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
    @livewireStyles
</head>
<body class="antialiased flex h-full text-base text-foreground bg-background">

{{ $slot }}

@include('components.partials.scripts')
@livewireScripts
</body>
</html>
