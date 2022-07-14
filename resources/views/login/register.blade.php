<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('Template') }}/dist/css/adminlte.min.css?v=3.2.0">
    <script src="{{ asset('Template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script nonce="56cc0b81-5776-4b46-92f6-3e66819e14ff">
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

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <img src="/img/hiv.png" width="100" class="brand-image img-circle elevation-3" style="opacity: .8">
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Silahkan Daftar</p>
                <form action="/register" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Nama Lengkap" required value="{{ old('name') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <div class="invalid-feedback"></div>
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="Email" required value="{{ old('email') }}">
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
                    <input type="hidden" name="level" class="form-control mb-3 text-muted" id="level"
                        placeholder="" required value="User" readonly>
                    <div class="row">

                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Daftar Akun</button>
                        </div>

                    </div>
                </form>
                <div class="mt-4">
                    <a href="login" class="text-center">Sudah Mempunyai Akun.! Silahkan Masuk</a>
                </div>
            </div>

        </div>
    </div>


    <script src="{{ asset('Template') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('Template') }}/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
