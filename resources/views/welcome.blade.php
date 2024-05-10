<!-- welcome.blade.php -->

@extends('backpage.general.layout')

@section('content')
    <!-- Isi konten halaman -->

    <!-- Modal -->
    <div id="welcomeModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomeModalLabel">Selamat datang di halaman admin,
                        {{ Auth::user()->name }}😊</h5>
                </div>
                <div class="modal-body">
                    <p>Tetap jaga kerahasian username dan kata sandi anda!</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            @if (session('showWelcomeModal'))
                $('#welcomeModal').modal('show');
            @endif
        });
    </script>
@endsection
