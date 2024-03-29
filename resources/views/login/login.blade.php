<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk Sistem Pakar HIV/AIDS</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('Template') }}/dist/css/adminlte.min.css?v=3.2.0">

    <script src="{{ asset('Template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('Template') }}/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.20/dist/sweetalert2.all.min.js"></script>

    <script nonce="56de365c-6d68-40df-935e-ad30d5a7df30">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                        "_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>
{{-- Acak Acak Style --}}
<style>
    /* Untuk Background */
    .halaman {
        -ms-flex-align: center;
        align-items: center;
        height: 200px;
        /* background-image: url(../img/bg1.jpg); */
        background-color: black;
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.800), rgba(255, 0, 0, 0.800));
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 100vh;
        -ms-flex-pack: center;
        justify-content: center;
    }
</style>

<body class="hold-transition login-page halaman">
    <div class="login-box">
        <div class="login-logo">
            <img src="/img/hiv.png" width="70" class="brand-image img-circle elevation-3" style="opacity: .8">
        </div>
        <div class="card">
            <div class="card-body login-card-body" style="background-color: #161a1d">
                <form action="/login" method="POST">
                    @csrf
                    <div class="input-group mb-3 mt-4">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <div class="invalid-feedback"></div>
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Kata Sandi" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <div class="invalid-feedback"></div>
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pt-2">
                            <button type="submit" class="btn btn-outline-success btn-block">Masuk</button>
                        </div>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="register" class="text-center"><button class="btn btn-outline-danger btn-block">Belum Punya
                            Akun..! Silahkan Daftar</button></a>
                </div>
            </div>
        </div>
    </div>



    @if (\Session::has('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{ \Session::get('success') }}',
                // text: 'Something went wrong!'
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    @if (\Session::has('loginerror'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ \Session::get('loginerror') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
</body>

</html>
