<!DOCTYPE html>
<html>

<body style="font-family:Arial;background:#f5f5f5;">

<table width="700" align="center" bgcolor="#ffffff">

<tr>

<td align="center" style="padding:30px;">

<h2>{{ $gallery->title }}</h2>

<img src="{{ url($gallery->image) }}"
     width="650"
     style="display:block;width:100%;">

<br>

<p>

A new gallery image has been added.

</p>

<a href="{{ url('/gallery') }}"
style="background:#0d6efd;
color:#fff;
padding:12px 25px;
text-decoration:none;">

View Gallery

</a>

</td>

</tr>

</table>

</body>

</html>