<!-- Name Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('name', 'Name:') !!}</h5>
    <p>{{ $join->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('email', 'Email:') !!}</h5>
    <p>{{ $join->email }}</p>
</div>

<!-- Cv Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('cv', 'CV:') !!}</h5>
    <p>
        <a href="{{ asset($join->cv) }}" target="_blank" class="text-decoration-none">View CV</a>
    </p>
</div>

<!-- Message Field -->
<div class="col-sm-12">
    <h5>{!! Form::label('message', 'Message:') !!}</h5>
    <p>{{ $join->message }}</p>
</div>

