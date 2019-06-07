@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang("Modifier un type d'image")
        @endslot
        <form method="POST" action="{{ route('typeimage.update', $typeimage->id) }}">
            @csrf
            @method('PUT')

            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $typeimage->name,
                'required' => true,
                ])

            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent            

@endsection

