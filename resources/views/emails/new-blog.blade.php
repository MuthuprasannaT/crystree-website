<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $blog->title }}</title>
</head>

<body style="margin:0;padding:0;background:#f5f5f5;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f5f5f5">
<tr>
<td align="center" style="padding:40px 15px;">

<table width="700" cellpadding="0" cellspacing="0" border="0"
style="background:#ffffff;border-radius:10px;overflow:hidden;">

<!-- Header -->
<tr>
<td bgcolor="#0d6efd" align="center" style="padding:25px;">

<img src="{{ url('assets/img/logo/newlogo1.png') }}"
     width="180"
     alt="Crystree Solutions"
     style="display:block;">

<h1 style="color:#ffffff;margin:15px 0 0;font-size:28px;">
New Blog Published
</h1>

</td>
</tr>

<!-- Featured Image -->
@if($blog->featured_image)

<tr>
<td>

<img src="{{ url($blog->featured_image) }}"
     alt="{{ $blog->title }}"
     style="width:100%;display:block;max-width:700px;">

</td>
</tr>

@endif

<!-- Content -->
<tr>
<td style="padding:40px;">

<h2 style="margin-top:0;color:#222;font-size:30px;">
{{ $blog->title }}
</h2>

{{-- <p style="font-size:18px;color:#666;line-height:30px;">
{{ $blog->short_description }}
</p> --}}

<hr style="border:none;border-top:1px solid #ddd;margin:30px 0;">

<div style="font-size:16px;line-height:30px;color:#333;">

{!! $blog->content !!}

</div>

<br>

<table cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#0d6efd" style="border-radius:5px;">

<a href="{{ url('/blog/'.$blog->slug) }}"
style="
display:inline-block;
padding:15px 35px;
color:#ffffff;
font-size:16px;
font-weight:bold;
text-decoration:none;
">

Read Full Blog →

</a>

</td>
</tr>
</table>

</td>
</tr>

<!-- Contact -->
<tr>

<td bgcolor="#f8f9fa" align="center" style="padding:30px;">

<h3 style="margin:0;color:#222;">
Crystree Solutions Pvt Ltd
</h3>

<p style="margin:12px 0;color:#666;line-height:26px;">

Software Development Company in Trichy

</p>

<p style="margin:0;color:#666;">

📞 +91 XXXXX XXXXX

<br>

📧 info@crystreesolutions.com

<br>

🌐 https://crystreesolutions.com

</p>

</td>

</tr>

<!-- Footer -->

<tr>

<td bgcolor="#222222" align="center" style="padding:20px;">

<p style="margin:0;color:#ffffff;font-size:14px;">

© {{ date('Y') }} Crystree Solutions Pvt Ltd.

All Rights Reserved.

</p>

</td>

</tr>

</table>

</td>
</tr>
</table>

</body>

</html>