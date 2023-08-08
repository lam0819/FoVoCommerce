<!DOCTYPE html>
<html lang="en">
    <x-seo></x-seo>
    <body class="flex flex-col justify-between min-h-screen">
        <x-nav></x-nav>
        <main>
            {{ $slot }}
        </main>
        <x-footer></x-footer>
    </body>
</html>