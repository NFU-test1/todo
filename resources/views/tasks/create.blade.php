<h1>新增資料</h1>

<form method="Post" action="tasks">
{{ csrf_field() }}
請輸入姓名<br>
姓名：<input type="text" name="name" /><br>
<input type="submit" value="送出"/>
</form>