@include('sweetalert::alert')
@include('admin.layout.top')
@include('admin.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1>Ida Natalia Br Sinaga</h1>
            @include('sweetalert::alert')
            @yield('content') <!-- yield ini adalah mendeklarasikan yang akan  diisi konten ketika yield  dipanggil
            didalam konten  masing-masing,contoh yield yang diatas men ggunakan value content -->

        </div>
    </main>
</div>



@include('admin.layout.bottom')