@foreach ($personnelAgencies as $agency)
<li>
    <a class="dropdown-item" href="{{ route('test', ['id' => $agency->id]) }}">
        {{ $agency->personnel_agency_name }}
    </a>
</li>
@endforeach
