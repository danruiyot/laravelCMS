<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: 'csrf_token() ' } </script>
        <title>CMS admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/summernote/summernote-bs4.css">

    <link rel="stylesheet" href="/jodit/jodit.css">
  <script src="/jodit/jodit.js"></script>
       
    </head>
    <body>
    <div id="app">
      <Homepage 
        :user-name='@json(auth()->user()->name)' 
        :user-id='@json(auth()->user()->id)'>
      </Homepage>
    </div>

    <script src="{{ ('/js/app.js') }}"></script>
 
    </body>
    </html>
