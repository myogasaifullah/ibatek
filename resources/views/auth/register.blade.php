<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Orange Theme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --orange-primary: #FF7700;
            --orange-light: #FFA557;
            --orange-dark: #E56A00;
            --orange-bg: #FFF5EB;
        }
        
        body {
            background: linear-gradient(120deg, var(--orange-bg) 0%, #f8fafc 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        .orange-bg {
            background-color: var(--orange-primary);
        }
        
        .orange-text {
            color: var(--orange-primary);
        }
        
        .orange-button {
            background-color: var(--orange-primary);
            transition: all 0.3s ease;
        }
        
        .orange-button:hover {
            background-color: var(--orange-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .logo-container {
            background: linear-gradient(135deg, var(--orange-primary) 0%, var(--orange-light) 100%);
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 4px solid white;
        }
        
        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 119, 0, 0.1);
            z-index: -1;
        }
        
        .circle-1 {
            width: 250px;
            height: 250px;
            top: -50px;
            left: -50px;
        }
        
        .circle-2 {
            width: 150px;
            height: 150px;
            bottom: 50px;
            right: 50px;
        }
        
        .circle-3 {
            width: 100px;
            height: 100px;
            top: 50%;
            right: 100px;
        }
        
        .input-focus:focus {
            border-color: var(--orange-primary);
            box-shadow: 0 0 0 3px rgba(255, 119, 0, 0.2);
        }
        
        .form-container {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            overflow: hidden;
        }
        
        .pattern-bg {
            background: 
                radial-gradient(circle at 10% 20%, rgba(255, 167, 87, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255, 119, 0, 0.1) 0%, transparent 20%);
        }
        
        .password-strength {
            height: 5px;
            margin-top: 5px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .password-weak {
            background-color: #EF4444;
            width: 25%;
        }
        
        .password-medium {
            background-color: #F59E0B;
            width: 50%;
        }
        
        .password-strong {
            background-color: #10B981;
            width: 75%;
        }
        
        .password-very-strong {
            background-color: #10B981;
            width: 100%;
        }
    </style>
</head>
<body class="flex items-center justify-center p-4 pattern-bg">
    <!-- Floating circles for background -->
    <div class="floating-circle circle-1"></div>
    <div class="floating-circle circle-2"></div>
    <div class="floating-circle circle-3"></div>
    
    <div class="w-full max-w-md form-container">
        <!-- Header dengan logo -->
        <div class="orange-bg py-6 px-6 text-center">
            <div class="logo-container">
                <i class="fas fa-citrus text-white text-4xl"></i>
            </div>
            <h2 class="text-white text-2xl font-bold mt-4">Buat Akun Baru</h2>
            <p class="text-orange-100 mt-2">Isi data diri Anda untuk mendaftar</p>
        </div>
        
        <div class="p-6">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-user text-orange-500 mr-1"></i> Nama Lengkap
                    </label>
                    <input id="name" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Masukkan nama lengkap">
                    @if ($errors->has('name'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <!-- NPM -->
                <div class="mb-4">
                    <label for="npm" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-id-card text-orange-500 mr-1"></i> NPM
                    </label>
                    <input id="npm" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="npm" value="{{ old('npm') }}" required autocomplete="npm" placeholder="Masukkan NPM">
                    @if ($errors->has('npm'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('npm') }}</p>
                    @endif
                </div>

                <!-- Fakultas -->
                <div class="mb-4">
                    <label for="fakultas" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-university text-orange-500 mr-1"></i> Fakultas
                    </label>
                    <input id="fakultas" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fakultas" value="{{ old('fakultas') }}" required autocomplete="fakultas" placeholder="Masukkan Fakultas">
                    @if ($errors->has('fakultas'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('fakultas') }}</p>
                    @endif
                </div>

                <!-- Prodi -->
                <div class="mb-4">
                    <label for="prodi" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-graduation-cap text-orange-500 mr-1"></i> Program Studi
                    </label>
                    <input id="prodi" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="prodi" value="{{ old('prodi') }}" required autocomplete="prodi" placeholder="Masukkan Program Studi">
                    @if ($errors->has('prodi'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('prodi') }}</p>
                    @endif
                </div>

                <!-- Angkatan -->
                <div class="mb-4">
                    <label for="angkatan" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-calendar-alt text-orange-500 mr-1"></i> Angkatan
                    </label>
                    <input id="angkatan" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="angkatan" value="{{ old('angkatan') }}" required autocomplete="angkatan" placeholder="Masukkan Tahun Angkatan" min="1900" max="{{ date('Y') + 10 }}">
                    @if ($errors->has('angkatan'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('angkatan') }}</p>
                    @endif
                </div>

                <!-- Nomor Telpon -->
                <div class="mb-4">
                    <label for="nomor_telpon" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-phone text-orange-500 mr-1"></i> Nomor Telepon
                    </label>
                    <input id="nomor_telpon" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="tel" name="nomor_telpon" value="{{ old('nomor_telpon') }}" required autocomplete="tel" placeholder="Masukkan Nomor Telepon">
                    @if ($errors->has('nomor_telpon'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('nomor_telpon') }}</p>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-envelope text-orange-500 mr-1"></i> Alamat Email
                    </label>
                    <input id="email" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email@contoh.com">
                    @if ($errors->has('email'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-lock text-orange-500 mr-1"></i> Kata Sandi
                    </label>
                    <input id="password" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required autocomplete="new-password" placeholder="Buat kata sandi yang kuat">
                    <div class="password-strength" id="password-strength"></div>
                    @if ($errors->has('password'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-lock text-orange-500 mr-1"></i> Konfirmasi Kata Sandi
                    </label>
                    <input id="password_confirmation" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Ketik ulang kata sandi">
                    @if ($errors->has('password_confirmation'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="inline-block align-baseline font-bold text-sm orange-text hover:text-orange-800 transition-colors" href="{{ route('login') }}">
                        Sudah punya akun?
                    </a>

                    <button type="submit" class="orange-button text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline flex items-center">
                        <i class="fas fa-user-plus mr-2"></i> Daftar
                    </button>
                </div>
                
                <!-- Divider -->
                <div class="relative flex items-center mt-6 mb-4">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="flex-shrink mx-4 text-gray-500 text-sm">Atau daftar dengan</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>
                
                <!-- Social Register -->
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 rounded-md flex items-center justify-center text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fab fa-google text-red-500 mr-2"></i> Google
                    </a>
                    <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded-md flex items-center justify-center hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Menambahkan efek interaktif pada input
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('ring-2', 'ring-orange-200', 'rounded-md');
            });
            
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('ring-2', 'ring-orange-200', 'rounded-md');
            });
        });
        
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('password-strength');
        
        passwordInput.addEventListener('input', function() {
            const password = passwordInput.value;
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]+/)) strength++;
            if (password.match(/[A-Z]+/)) strength++;
            if (password.match(/[0-9]+/)) strength++;
            if (password.match(/[!@#$%^&*(),.?":{}|<>]+/)) strength++;
            
            // Update strength bar
            strengthBar.classList.remove('password-weak', 'password-medium', 'password-strong', 'password-very-strong');
            
            if (password.length === 0) {
                strengthBar.style.width = '0';
            } else if (strength <= 2) {
                strengthBar.classList.add('password-weak');
            } else if (strength === 3) {
                strengthBar.classList.add('password-medium');
            } else if (strength === 4) {
                strengthBar.classList.add('password-strong');
            } else {
                strengthBar.classList.add('password-very-strong');
            }
        });
    </script>
</body>
</html>