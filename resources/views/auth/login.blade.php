<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Login</title>
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
        
        .remember-checkbox:checked {
            background-color: var(--orange-primary);
            border-color: var(--orange-primary);
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
            <h2 class="text-white text-2xl font-bold mt-4">Selamat Datang</h2>
            <p class="text-orange-100 mt-2">Masuk ke akun Anda untuk melanjutkan</p>
        </div>
        
        <div class="p-6">
            <!-- Session Status -->
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" :class="{ 'hidden': !session('status') }">
                {{ session('status') }}
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- NPM -->
                <div class="mb-4">
                    <label for="npm" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-id-card text-orange-500 mr-1"></i> NPM
                    </label>
                    <input id="npm" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="npm" value="{{ old('npm') }}" required autofocus autocomplete="username" placeholder="Masukkan NPM">
                    @if ($errors->has('npm'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('npm') }}</p>
                    @endif
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                        <i class="fas fa-lock text-orange-500 mr-1"></i> Kata Sandi
                    </label>
                    <input id="password" class="input-focus shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan kata sandi">
                    @if ($errors->has('password'))
                        <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="block mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="remember-checkbox rounded border-gray-300 shadow-sm focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <a class="inline-block align-baseline font-bold text-sm orange-text hover:text-orange-800 transition-colors" href="{{ route('password.request') }}">
                            Lupa kata sandi?
                        </a>
                    @endif

                    <button type="submit" class="orange-button text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline flex items-center">
                        <i class="fas fa-sign-in-alt mr-2"></i> Masuk
                    </button>
                </div>
                
                <!-- Divider -->
                <div class="relative flex items-center mt-6 mb-4">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="flex-shrink mx-4 text-gray-500 text-sm">Atau lanjutkan dengan</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>
                
                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4 mt-4">
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 rounded-md flex items-center justify-center text-gray-700 hover:bg-gray-50 transition-colors">
                        <i class="fab fa-google text-red-500 mr-2"></i> Google
                    </a>
                    <a href="#" class="py-2 px-4 bg-blue-600 text-white rounded-md flex items-center justify-center hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                </div>
                
                <!-- Register link -->
                <div class="text-center mt-6">
                    <p class="text-gray-600 text-sm">Belum punya akun? 
                        <a href="#" class="font-bold orange-text hover:text-orange-800 transition-colors">Daftar sekarang</a>
                    </p>
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
    </script>
</body>
</html>