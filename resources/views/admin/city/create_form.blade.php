@extends('tour.layouts.base')
@section('content')
    <div>
        <x-forms-card title="CreateCity" action="{{route('admin.city.store')}}">
            <x-form-input name="name" label="Name" type="text">Name</x-form-input>
            <x-form-input name="data" label="Name" type="text">SurName</x-form-input>
        </x-forms-card>
    </div>
@endsection
