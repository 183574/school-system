<h1>Welkom, {{ $teacher->name }}</h1>

<h2>Jouw klassen & vakken</h2>

<div class="grid grid-cols-3 gap-4">
@foreach($classes as $class)
    <div class="p-4 border rounded bg-white shadow">
        <h3 class="font-bold text-lg">{{ $class->name }}</h3>

        <ul class="mt-2">
            @foreach($class->subjects as $subject)
                <li>- {{ $subject->name }}</li>
            @endforeach
        </ul>

        <a href="{{ route('class.show', $class->id) }}" class="btn btn-primary mt-3">
            Ga naar klas
        </a>
    </div>
@endforeach
</div>
