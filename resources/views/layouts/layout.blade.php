@include('layouts.header')
@include('layouts.footer')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../resources/scss/style.css">
  <script src="../resources/js/accordion.js" defer></script>
  <title>Tennis Shop</title>
</head>
<body>

  @yield('header')

  @yield('content')

  @yield('footer')

</body>
</html>