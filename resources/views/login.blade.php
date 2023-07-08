@extends('layout.main')
@section('content')
    {{-- form login --}}
    <section>
        <div class="flex items-center justify-center min-h-screen bg-gray-100 pr-4 pl-4">
            <div class="px-10 py-8 text-left bg-white shadow-lg">
                <h3 class="text-2xl mt-4 font-bold text-center">Masuk ke Akun Atlet</h3>
                <form action="">
                    <div class="mt-4 sm:w-96">
                        <div>
                            <label class="block" for="email">Username<label>
                                    <input type="text" id="username" placeholder="Username"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-red-600">
                        </div>
                        <div class="mt-4">
                            <label class="block">Password<label>
                                    <input type="password" id="password" placeholder="Password"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-red-600">
                        </div>
                        <div class="flex items-start mb-2 mt-4">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                    required>
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingat
                                saya</label>
                        </div>
                        <a href="{{ route('loginAdmin') }}" id="loginAdmin"
                            class="flex justify-center text-sm mt-4 font-medium text-red-600 hover:underline">Login
                            sebagai admin</a>
                        <div class="flex items-baseline justify-between">
                            <button class="w-full px-6 py-2  mt-4 text-white bg-red-600 rounded-lg hover:bg-red-900"
                                id="login">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
                                                <script src="/jquery/jquery.js">
                                                    < script type = "text/javascript" >
                                                        $.ajaxSetup({
                                                            header: {
                                                                'accept': 'application/json'
                                                            }
                                                        })

                                                    $(#login).click(function(e) {
                                                        e.preventDefault();
                                                        axios.post('http://127.0.0.1:8000/v1/admin/atlet/presences', {
                                                                username: $('#email').val(),
                                                                password: $('#password').val()
                                                            })
                                                            .then(result => {
                                                                console.log('result', result)
                                                            }).catch(err => {
                                                                console.log('err', err)
                                                            })
                                                    })
                                                </script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="/jquery/jquery.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            header: {
                'accept': 'application/json'
            }
        });

        $("#login").click(async function(e) {
            e.preventDefault();


            // try (result => {
            //     const result = await axios.post('http://127.0.0.1:8080/v1/admin/auth/login', {
            //             username: $('#email').val(),
            //             password: $('#password').val()
            //         })
            //         .then(res => {
            //             console.log('result', result)
            //             // const data = res.data.data
            //             // const token = data.token
            //             // Cookies.set('auth_token', token)

            //         })
            //     catch (error) {
            //         console.log('err', error) 
            //     }

            await axios.post('http://127.0.0.1:6969/v1/admin/auth/login', {
                    username: $('#username').val(),
                    password: $('#password').val()
                })
                .then(result => {
                    console.log('result', result)
                    const data = result.data.data
                    const token = data.token
                    localStorage.setItem("auth_token", token);
                    window.location.href = "/admin"
                    // const role = data.user.roles[0]
                    // console.log(role.name)
                    // window.location.href = "/homeUser"
                })
        })
    </script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endsection
