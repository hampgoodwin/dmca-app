@extends('layouts.app')

@section('content')
    <h1 class="page-heading">Prepare a DMCA Notice</h1>

    {!! ! Form::open(['method' => GET, 'action' => 'NoticesController@confirm']) !!}
        <div class="form-group">
            {!! Form::label('provider_id', 'Who are we sending this to?') !!}
            {!! Form::select('provider_id',[], null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::Label('infringing_title', 'What is the title of the content that is being infringed upon?') !!}
            {!! Form::text('infringing_title', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::Label('infringing_link', 'What is the link to where this content is located?') !!}
            {!! Form::text('infringing_link', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::Label('original_title', 'To verify that you own the content, we now need the link to the original content on your page.') !!}
            {!! Form::text('original_title', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::Label('original_description', 'And finally, it might be helpful to provide additional information') !!}
            {!! Form::text('original_description', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit',['class'=>'btn btn-primary form-control']) !!}
        </div>
    {!! form::close() !!}

@endsection