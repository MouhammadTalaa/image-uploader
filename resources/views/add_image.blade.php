<head>
    <title>Drag and Drop File Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/main.css" >
</head>

<body>
<div class="drop-zone">
    

    <form method="post" action="{{ route('images.store') }}"
          enctype="multipart/form-data">
        @csrf
        <div class="image">
            <label><h4>Add image</h4></label>
            <input type="file" name="myFile" class="drop-zone__input" required name="image">
        </div>

        <div class="post_button">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>

</div>

<script src="{{ asset('../js/main.js') }}"></script>
</body>


