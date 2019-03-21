@extends('layouts.app')

@section('content')
    <div class="container">
        @component('layouts.components.title')
            Модули нав
        @endcomponent
        <div class="row">
            <div class="col-12">
                <form action="{{ route('modules.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="bookTitleInput">Сарлавхо</label>
                        <input type="text" class="form-control" id="bookTitleInput" name="title" placeholder="Сарлавхои модул">
                    </div>
                    <div class="form-group">
                        <label for="bookDescriptionInput">Маълумот</label>
                        <textarea class="form-control" id="bookDescriptionInput" name="description" rows="5" placeholder="Контенти модул"></textarea>
                    </div>
                    <button class="btn btn-success align-self-end my-3" type="submit">Боргузори</button>
                </form>
            </div>
        </div>
    </div>
@endsection
