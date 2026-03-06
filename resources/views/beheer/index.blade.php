@include('templates.header')
@include('templates.navigation')

<main>
    <!-- Hier komt dashboard overview met shadcn of iets anders. (component library) -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</main>

@include('templates.footer')
