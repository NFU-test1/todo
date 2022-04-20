@extends('layouts.app')

<h1>讀取資料</h1>
<table border="1" width="250">
<tr>
<td width="50">ID</td>
<td>姓名</td>
<td>選單</td>
</tr>

<tbody>
@foreach($tasks as $tasks)
<tr>
<td><div>{{ $tasks->id }}</div></td>
<td><div>{{ $tasks->name }}</div></td>
<td><div><a href="/tasks/{{ $tasks->id }}/edit" >
<button>編輯</button>
</a></div><form action="/tasks/{{ $tasks->id }}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<a href=""><button>刪除</button></a></form>
</td>
</tr>
@endforeach
</tbody>
</table>
<form action="/tasks/{{ $tasks->id }}" method="POST">
姓名：<input type="text" name="name" value="{{ $tasks->name }}" />
{{ csrf_field() }}
{{ method_field('PATCH') }}
<input type="submit" value="送出" />
</form>




<?php
echo '<a href="create">新增資料</a><br>';
?>
