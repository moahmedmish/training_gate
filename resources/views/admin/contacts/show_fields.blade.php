<!-- Name Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('name', 'Name:') !!}</h5>
    <p>{{ $contact->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('email', 'Email:') !!}</h5>
    <p>{{ $contact->email }}</p>
</div>

{{--<!-- Phone Field -->--}}
{{--<div class="col-sm-12">--}}
{{--    <h5>{!! Form::label('phone', 'Phone:') !!}--}}</
{{--    <p>{{ $contact->phone }}</p>--}}
{{--</div>--}}

{{--<!-- Subject Field -->--}}
{{--<div class="col-sm-12">--}}
{{--    <h5>{!! Form::label('subject', 'Subject:') !!}--}}</
{{--    <p>{{ $contact->subject }}</p>--}}
{{--</div>--}}

<!-- Message Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('message', 'Message:') !!}</h5>
    <p>{{ $contact->message }}</p>
</div>

