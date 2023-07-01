<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/tt-norms" rel="stylesheet">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
  <script src="{{ mix('/js/app.js') }}" defer></script>
  <style>
    body::-webkit-scrollbar {
      width: 3px;
      /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
      background: transparent;
      /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
      background-color: transparent;
      /* color of the scroll thumb */
      border-radius: 20px;
      /* roundness of the scroll thumb */
      border: 3px solid #726D57;
      /* creates padding around scroll thumb */
    }
  </style>
</head>

<body>
  @inertia
</body>

</html>