<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOZO Admin — Sign In</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f6f8fb;
            background-image: 
                radial-gradient(at 10% 10%, rgba(186, 230, 253, 0.5) 0px, transparent 50%),
                radial-gradient(at 90% 15%, rgba(224, 231, 255, 0.6) 0px, transparent 50%),
                radial-gradient(at 50% 90%, rgba(240, 253, 250, 0.7) 0px, transparent 60%),
                radial-gradient(at 80% 85%, rgba(254, 243, 199, 0.4) 0px, transparent 50%);
            background-attachment: fixed;
            color: #1e293b;
        }

        /* White Liquid Glass Card */
        .white-liquid-glass {
            background: rgba(255, 255, 255, 0.78);
            backdrop-filter: blur(28px) saturate(180%);
            -webkit-backdrop-filter: blur(28px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 
                0 25px 50px -12px rgba(15, 23, 42, 0.08),
                0 0 0 1px rgba(226, 232, 240, 0.6),
                inset 0 1px 1px 0 rgba(255, 255, 255, 0.9);
        }

        .white-glass-input {
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(203, 213, 225, 0.8);
            backdrop-filter: blur(10px);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .white-glass-input:focus {
            background: #ffffff;
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
            outline: none;
        }

        .btn-primary-glow {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            box-shadow: 0 10px 20px -5px rgba(15, 23, 42, 0.25);
            transition: all 0.2s ease;
        }
        .btn-primary-glow:hover {
            background: #000000;
            transform: translateY(-1px);
            box-shadow: 0 12px 24px -5px rgba(0, 0, 0, 0.35);
        }
    </style>
</head>
<body class="h-full flex flex-col justify-between antialiased selection:bg-black selection:text-white relative">

    <!-- Top Simple Header Bar -->
    <header class="w-full px-6 py-4 flex items-center justify-between border-b border-white/60 bg-white/40 backdrop-blur-md">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <img src="/logo.png" alt="DOZO Windows & Facades" class="h-8 w-auto object-contain">
        </a>
        <a href="{{ route('home') }}" class="text-xs font-semibold text-gray-600 hover:text-black flex items-center gap-1.5 transition-colors">
            <span>&larr;</span>
            <span>Back to Main Website</span>
        </a>
    </header>

    <!-- Main Center Content -->
    <main class="flex-1 flex items-center justify-center p-4 sm:p-6 my-auto">
        <div class="white-liquid-glass w-full max-w-[430px] rounded-3xl p-7 sm:p-9 transition-all duration-300">
            
            <!-- Brand & Heading -->
            <div class="text-center mb-7">
                <div class="inline-flex items-center justify-center p-3 rounded-2xl bg-white shadow-sm border border-gray-100 mb-4">
                    <img src="/logo.png" alt="DOZO" class="h-8 w-auto object-contain">
                </div>
                <h1 class="text-2xl font-black text-gray-900 tracking-tight">
                    Admin Portal
                </h1>
                <p class="text-xs text-gray-500 mt-1">
                    Sign in to manage building envelope systems & inquiries
                </p>
            </div>

            <!-- Flash Error Messages -->
            @if ($errors->any())
                <div class="mb-5 p-3 rounded-2xl bg-red-50 border border-red-200 text-red-700 text-xs flex items-start gap-2.5">
                    <svg class="w-4 h-4 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            @if (session('info'))
                <div class="mb-5 p-3 rounded-2xl bg-sky-50 border border-sky-200 text-sky-800 text-xs flex items-center gap-2">
                    <svg class="w-4 h-4 text-sky-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>{{ session('info') }}</span>
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-bold text-gray-700 mb-1.5 flex items-center justify-between">
                        <span>Email Address</span>
                        <span class="text-[10.5px] font-normal text-sky-600">Master: admin@dozo.co.in</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email', 'admin@dozo.co.in') }}" 
                            required 
                            autofocus
                            placeholder="admin@dozo.co.in" 
                            class="white-glass-input w-full pl-10 pr-4 py-2.5 rounded-xl text-sm text-gray-900 placeholder-gray-400 font-medium"
                        >
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-xs font-bold text-gray-700 mb-1.5 flex items-center justify-between">
                        <span>Password</span>
                        <span class="text-[10.5px] font-normal text-sky-600">Pass: 12345678</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            value="12345678" 
                            required 
                            placeholder="••••••••" 
                            class="white-glass-input w-full pl-10 pr-10 py-2.5 rounded-xl text-sm text-gray-900 placeholder-gray-400 font-medium"
                        >
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400 hover:text-gray-700 transition-colors">
                            <svg id="eyeIcon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember & Quick Fill -->
                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2 cursor-pointer select-none text-gray-600 font-medium">
                        <input type="checkbox" name="remember" checked class="w-4 h-4 rounded border-gray-300 text-sky-600 focus:ring-sky-500">
                        <span>Remember me</span>
                    </label>
                    <button type="button" onclick="fillMasterCredentials()" class="text-sky-600 hover:text-sky-700 font-semibold underline underline-offset-2 cursor-pointer">
                        Auto-fill Master Creds
                    </button>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button 
                        type="submit" 
                        class="btn-primary-glow w-full py-3 px-5 rounded-xl text-white font-bold text-sm flex items-center justify-center gap-2 cursor-pointer active:scale-[0.99]"
                    >
                        <span>Sign In to Dashboard</span>
                        <span>&rarr;</span>
                    </button>
                </div>
            </form>

            <div class="mt-6 pt-4 border-t border-gray-200/80 text-center">
                <span class="text-[11px] text-gray-400">DOZO Architectural Envelope Engine &bull; v2.4</span>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="py-3 text-center text-xs text-gray-400">
        &copy; {{ date('Y') }} DOZO Façade Products Pvt. Ltd. All rights reserved.
    </footer>

    <script>
        function fillMasterCredentials() {
            document.getElementById('email').value = 'admin@dozo.co.in';
            document.getElementById('password').value = '12345678';
        }

        function togglePasswordVisibility() {
            const passInput = document.getElementById('password');
            passInput.type = passInput.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>
