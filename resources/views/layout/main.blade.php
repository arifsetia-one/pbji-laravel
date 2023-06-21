<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- navbar --}}
    @include('layout.navbar')
    {{-- end of navbar --}}

    {{-- content --}}
    @yield('content')
    {{-- end of content --}}

    {{-- footer --}}
    @include('layout.footer')
    {{-- end of footer --}}

    {{-- jQuery --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="/jquery/jquery.js"></script>
    <!-- <script>
        $.ajaxSetup({
            header: {
                'accept': 'application/json'
            }
        })

        $(#login).click(async function(e) {
            e.preventDefault();
            axios.post('http://127.0.0.1:9000/v1/admin/atlet/presences', {
                    username: $('#email').val(),
                    password: $('#password').val()
                })
                .then(result => {
                    console.log('result', result)
                })
        })
    </script> -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
</body>

</html>
