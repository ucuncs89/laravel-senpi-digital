@extends("layouts.master-auth")
@section("content")
    <div class="container">
        <div class="wrapper">
            <form method="POST" action="" id="changePasswordForm">
                @csrf
                <section class="card">
                    @error("email")
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    <div class="card-login">
                        <div class="logo-wrapper">
                            <img src="{{ asset("assets/images/icons/logo.png") }}" style="width: 138px" />
                            <p class="mt-3 text-center">
                                Kartu Pemegang Senpi Digital
                            </p>
                        </div>
                        <input type="password" class="form-control mb-3" id="password" placeholder="Masukan Password Baru"
                            name="password">
                        <div id="passwordError" class="alert alert-danger d-none">
                            Passwords do not match.
                        </div>
                        <input type="password" class="form-control mb-3" id="confirm_password"
                            placeholder="Masukan Lagi Password" name="confirm_password">
                        <button class="btn btn-success" type="submit">Kirim</button>
                    </div>
                </section>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const passwordError = document.getElementById('passwordError');

            if (password !== confirmPassword) {
                passwordError.classList.remove('d-none'); // Show error message
            } else {
                passwordError.classList.add('d-none'); // Hide error message
                // Submit the form or perform your desired action here
                // Optionally, you can manually submit the form
                // document.getElementById('changePasswordForm').submit();
            }
        });
    </script>
@endsection
