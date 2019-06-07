
@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang("Gestion des types d'image")
        @endslot


        <table class="table table-dark text-white">
            <tbody>
                @foreach($typeimages as $typeimage)
                    <tr>
                        <td>{{ $typeimage->name }}</td>
                        <td>
                            <a type="button" href="{{ route('typeimage.destroy', $typeimage->id) }}"
                               class="btn btn-danger btn-sm pull-right invisible" data-toggle="tooltip"
                               title="@lang("Supprimer le type d'image") {{ $typeimage->name }}"><i
                                    class="fas fa-trash fa-lg"></i></a>
                            <a type="button" href="{{ route('typeimage.edit', $typeimage->id) }}"
                               class="btn btn-warning btn-sm pull-right mr-2 invisible" data-toggle="tooltip"
                               title="@lang("Modifier le type d'image") {{ $typeimage->name }}"><i
                                    class="fas fa-edit fa-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endcomponent

@endsection

@section('script')

    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>

    @include('partials.script-delete', ['text' => __("Vraiment supprimer ce type d'image ?"), 'return' => 'removeTr'])

@endsection
