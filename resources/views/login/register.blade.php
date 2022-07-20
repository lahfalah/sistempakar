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

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet"
        href="{{ asset('Template') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <link rel="stylesheet"
        href="{{ asset('Template') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet"
        href="{{ asset('Template') }}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="{{ asset('Template') }}/plugins/dropzone/min/dropzone.min.css">

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
{{-- Acak Acak Style --}}
<style>
    .halaman {
        -ms-flex-align: center;
        align-items: center;
        height: 200px;
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

<body class="hold-transition register-page halaman">
    <div class="register-box">
        <div class="register-logo">
            <img src="/img/hiv.png" width="70" class="brand-image img-circle elevation-3" style="opacity: .8">
        </div>
        <div class="card">
            <div class="card-body register-card-body" style="background-color: #161a1d">
                <p class="login-box-msg">Silahkan Daftar</p>
                <form action="/register" method="POST">
                    @csrf
                    {{-- Nama --}}
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
                    {{-- Tanggal Lahir --}}
                    <div class="form-group">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="tanggal"
                                id="tanggal" data-target="#reservationdate" placeholder="Tanggal Lahir" required @error('tanggal') is-invalid @enderror
                                value="{{ old('tanggal') }}" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text bg-blue"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    {{-- Kota --}}
                    <div class="input-group mb-3">
                        <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror"
                            id="kota" placeholder="Kota" required value="{{ old('kota') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <div class="invalid-feedback"></div>
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    {{-- Jenis Kelamin --}}
                    <div class="input-group mb-3">
                        <div class="custom-control custom-radio ml-5">
                            <input class="custom-control-input" value="Pria" required type="radio" id="Pria" name="jkelamin">
                            <label for="Pria" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio ml-5">
                            <input class="custom-control-input" value="Wanita" required type="radio" id="Wanita" name="jkelamin">
                            <label for="Wanita" class="custom-control-label">Wanita</label>
                        </div>
                    </div>
                    {{-- Email --}}
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
                    {{-- Password --}}
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
                    {{-- Khusus Untuk Kolom Level Di Database --}}
                    <input type="hidden" name="level" class="form-control mb-3 text-muted" id="level"
                        required value="User">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-light btn-block">Daftar Akun</button>
                        </div>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="login" class="text-center"><button class="btn btn-outline-warning btn-block">Sudah
                            Mempunyai Akun.! Silahkan Masuk</button></a>
                </div>
            </div>

        </div>
    </div>


    <script src="{{ asset('Template') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('Template') }}/dist/js/adminlte.min.js?v=3.2.0"></script>


    <script src="{{ asset('Template') }}/plugins/select2/js/select2.full.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('Template') }}/plugins/inputmask/jquery.inputmask.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="{{ asset('Template') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script>

    <script src="{{ asset('Template') }}/plugins/dropzone/min/dropzone.min.js"></script>

    <script src="{{ asset('Template') }}/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
</body>

</html>
