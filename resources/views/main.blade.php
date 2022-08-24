<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    >

    <style>


        body {
            background: url("https://wallpaper.dog/large/10977104.jpg");
        }

        .main{
            width: 50vw;
            height: 50vh;
            margin-left: auto;
            margin-right: auto;
            margin-top: 18vh;
            display: block;
        }

        .form-class {
            background-color: #fff;
            border: 1px solid white;
            border-radius: 16px;
            padding: 20px;
        }

        .m-top {
            margin-top: 10px;
        }

        .api-info {
            width: 20vw;
            height: 2vw;
            margin-bottom: 1vh;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .info-div {

            background-color: #fff;
            border: 1px solid white;
            border-radius: 16px;
            padding: 20px;
            height: 70vh;
            overflow-y: auto;
            margin-top: -10vh;
        }

    </style>
    <title>Autenticar-se</title>
</head>
    <body>
        <div class="main container">

            @yield('content')

        </div>

        <!-- Js reference Bootstrap -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        >
        </script>

        <!-- Js reference Jquery -->

        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"
        >
        </script>

        <!-- Js reference Jquery Mask -->

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
            integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        >
        </script>

        <script type="text/javascript">
            $('#cpf').mask('000.000.000-00',{reverse:false})
            $('#telefone').mask('(00)00000-0000',{reverse:false})
        </script>
    </body>
</html>
