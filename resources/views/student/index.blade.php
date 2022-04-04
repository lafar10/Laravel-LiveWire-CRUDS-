@extends('layouts.app')

@section('content')


    <div class="container">
        <livewire:student-show>
    </div>


@endsection

@section('scripts')

<script>
    window.addEventListener('name-updated', event => {
        $('#exampleModal').modal('hide');
        $('#updateModal').modal('hide');
        $('#deleteModal').modal('hide');

    })
</script>

@endsection
