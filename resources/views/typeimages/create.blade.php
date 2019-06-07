@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang("Ajouter un type d'image")
        @endslot

        <form method="POST" action="{{ route('typeimage.store') }}">
            @csrf

            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])

            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent

@endsection

