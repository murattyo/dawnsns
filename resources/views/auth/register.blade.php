@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('UserName') }}
{{ Form::text('username',null,['class' => 'input', 'required', 'placeholder' => 'dawntown']) }}

{{ Form::label('MailAdress') }}
{{ Form::email('mail',null,['class' => 'input', 'required', 'placeholder' => 'dawn@dawn.jp']) }}

{{ Form::label('Password') }}
{{ Form::password('password',null,['class' => 'input', 'required']) }}

{{ Form::label('Password_confirm') }}
{{ Form::password('password-confirm',null,['class' => 'input', 'required']) }}

{{ Form::submit('REGISTER') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
