<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge , chrome=1">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    {{-- <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MoOn ~ @yield("title")</title>
</head>

<body>
    {{-- start navigation from masterPage --}}
    @include("layout.header")
    {{-- End navigation from masterPage --}}


    {{-- this part of some first section pageLayout --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" >
                @yield("part_one_content")
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
      @include("layout.footer")
    </footer>
    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
