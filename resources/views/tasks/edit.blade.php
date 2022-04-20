@extends('layouts.app')

<h1>修改資料</h1>


<tbody>
@foreach($tasks as $tasks)
<form action="/tasks/{{ $tasks->id }}" method="POST">

姓名：<input type="text" name="name" value="{{ $tasks->name }}" />
{{ csrf_field() }}
{{ method_field('PATCH') }}
<input type="submit" value="送出" /><br>
</form>
@endforeach
</tbody>