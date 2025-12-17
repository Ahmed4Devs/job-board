<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Board | {{ $title ?? 'Onboarding top talent' }}</title>
</head>

<body>
  <h1>Job Board</h1>
  <nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
  </nav>

  {{ $slot }}

</body>

</html>
