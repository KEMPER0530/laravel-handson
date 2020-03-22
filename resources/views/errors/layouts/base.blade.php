<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/js/error.js"></script>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/error.css">
</head>
<body>
<a href="{{ url('/maintenance') }}">
 <svg height="0.8em" width="0.8em" viewBox="0 0 2 1" preserveAspectRatio="none">
  <polyline
        fill="none"
        stroke="#777777"
        stroke-width="0.1"
        points="0.9,0.1 0.1,0.5 0.9,0.9"
  />
</svg> Home
</a>
<div class="background-wrapper">
	<h1 id="visual">@yield('title')</h1>
</div>
<p>@yield('message')</p>
</body>
</html>
