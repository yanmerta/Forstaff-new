<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../">
    <title>{{ $title }} | Admin</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/template_admin/demo1/dist/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/template_admin/demo1/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/template_admin/demo1/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-50 position-xl-relative"
                style="background-image: url('assets/template_admin/demo1/dist/assets/media/logos/baground.jpg'); background-size: cover; background-position: center;">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-800px scroll-y">
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form action="{{ route('login.proses') }}" method="post" class="form-send">
                            @method('POST')
                            {{ csrf_field() }}
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <a href="{{ route('login') }}">
                                    <img src="assets/template_admin/demo1/dist/assets/media/logos/forstaff.png"
                                        class="img-fluid" width="150" height="auto">
                                </a>
                                <h4 class="mb-3">Selamat Datang, silahkan login akun Admin anda!</h4>
                                <!--end::Title-->
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label for="email">Email</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    name="email" autocomplete="off" placeholder="Email" />
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label for="password">Password</label>
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    name="password" autocomplete="off" placeholder="Password" />
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Sign</span>
                                    <span class="indicator-progress">Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-bold fs-6">
                        <span class="text-muted fw-bold me-1">2024©</span>
                        <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">
                            By.Trio
                            Undiksha</a>
                    </div>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/template_admin/demo1/dist/assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/template_admin/demo1/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/template_admin/demo1/dist/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/template_admin/demo1/dist/assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire('Success', '{{ $message }}', 'success');
        </script>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('Failed', '{{ $message }}', 'error');
        </script>
    @endif

</body>

</html>
