{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* CSS Custom Property for Animation */
@property --angle {
  syntax: '<angle>';
  initial-value: 0deg;
  inherits: false;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #122D48;
  position: relative;
  overflow: hidden;
}

/* Animated Background Circles */
body::before,
body::after {
  content: '';
  position: absolute;
  border-radius: 50%;
  filter: blur(100px);
  opacity: 0.3;
  animation: float 8s ease-in-out infinite;
}

body::before {
  width: 500px;
  height: 500px;
  background: rgba(32, 105, 150, 0.3);
  top: -150px;
  left: -150px;
  animation-delay: 0s;
}

body::after {
  width: 400px;
  height: 400px;
  background: rgba(1, 67, 125, 0.2);
  bottom: -100px;
  right: -100px;
  animation-delay: 4s;
}

@keyframes float {
  0%, 100% {
    transform: translate(0, 0) scale(1);
  }
  50% {
    transform: translate(30px, -30px) scale(1.1);
  }
}

/* Container */
.container {
  position: relative;
  z-index: 1;
}

/* Login Card with Animated Border */
.login-card {
  width: 420px;
  padding: 50px 40px;
  background: #206996;
  border-radius: 30px;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
  position: relative;
  animation: slideIn 0.6s ease-out;
  z-index: 1;
}

/* Border with subtle glow */
.login-card::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 30px;
  border: 2px solid rgba(100, 200, 255, 0.3);
  pointer-events: none;
  z-index: 0;
}

/* Animated Trails - ULTRA SUBTLE & PROFESSIONAL */
.trail {
  width: 60px;
  aspect-ratio: 2 / 1;
  position: absolute;
  inset: 0;
  border-radius: 30px;
  background: radial-gradient(
    ellipse 100% 100% at right,
    rgba(130, 210, 255, 0.25) 0%,
    rgba(110, 200, 255, 0.15) 30%,
    rgba(100, 190, 255, 0.08) 60%,
    transparent 85%
  );
  offset-path: border-box;
  offset-anchor: 100% 50%;
  filter: blur(16px);
  pointer-events: none;
  z-index: 1;
  opacity: 0.6;
}

/* Trail 1 - starts from top */
.trail-1 {
  animation: trailMove 10s infinite linear;
}

/* Trail 2 - starts from opposite side (180deg offset) */
.trail-2 {
  animation: trailMove 10s infinite linear;
  animation-delay: 5s;
}

@keyframes trailMove {
  to {
    offset-distance: 100%;
  }
}

@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateY(-30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Avatar Container */
.avatar-container {
  display: flex;
  justify-content: center;
  margin-bottom: 40px;
}

.avatar-icon {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background: rgba(1, 67, 125, 0.4);
  border: 3px solid rgba(100, 200, 255, 0.6);
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(100, 200, 255, 0.9);
  box-shadow: 0 0 25px rgba(100, 200, 255, 0.5);
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% {
    box-shadow: 0 0 25px rgba(100, 200, 255, 0.5);
  }
  50% {
    box-shadow: 0 0 45px rgba(100, 200, 255, 0.8);
  }
}

/* Input Group */
.input-group {
  position: relative;
  margin-bottom: 25px;
}

.input-icon {
  position: absolute;
  left: 18px;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(255, 255, 255, 0.6);
  z-index: 2;
}

.input-group input {
  width: 100%;
  padding: 16px 20px 16px 55px;
  background: #01437D;
  border: 1px solid rgba(100, 200, 255, 0.3);
  border-radius: 12px;
  font-size: 15px;
  color: #fff;
  outline: none;
  transition: all 0.3s ease;
  backdrop-filter: blur(5px);
}

.input-group input::placeholder {
  color: rgba(255, 255, 255, 0.5);
}

.input-group input:focus {
  background: rgba(1, 67, 125, 0.8);
  border-color: rgba(100, 200, 255, 0.7);
  box-shadow: 0 0 20px rgba(100, 200, 255, 0.4);
}

/* Options Row */
.options-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
  font-size: 13px;
}

/* Remember Me Checkbox */
.remember-me {
  display: flex;
  align-items: center;
  color: rgba(255, 255, 255, 0.8);
  cursor: pointer;
  user-select: none;
}

.remember-me input[type="checkbox"] {
  display: none;
}

.checkmark {
  width: 18px;
  height: 18px;
  border: 2px solid rgba(255, 255, 255, 0.4);
  border-radius: 4px;
  margin-right: 8px;
  position: relative;
  transition: all 0.3s ease;
}

.remember-me input:checked + .checkmark {
  background: rgba(74, 144, 226, 0.7);
  border-color: rgba(74, 144, 226, 0.9);
}

.remember-me input:checked + .checkmark::after {
  content: '✓';
  position: absolute;
  top: -2px;
  left: 3px;
  color: #fff;
  font-size: 14px;
  font-weight: bold;
}

/* Forgot Password Link */
.forgot-password {
  color: rgba(255, 255, 255, 0.7);
  text-decoration: none;
  transition: all 0.3s ease;
  font-style: italic;
}

.forgot-password:hover {
  color: rgba(255, 255, 255, 1);
  text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}

/* Login Button */
.login-btn {
  width: 100%;
  padding: 16px;
  background: #01437D;
  border: none;
  border-radius: 12px;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  letter-spacing: 2px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(1, 67, 125, 0.5);
  position: relative;
  overflow: hidden;
}

.login-btn::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(100, 200, 255, 0.3);
  transform: translate(-50%, -50%);
  transition: width 0.6s, height 0.6s;
}

.login-btn:hover {
  background: rgba(1, 67, 125, 0.9);
  box-shadow: 0 6px 30px rgba(100, 200, 255, 0.6);
  transform: translateY(-2px);
}

.login-btn:hover::before {
  width: 400px;
  height: 400px;
}

.login-btn:active {
  transform: translateY(0);
}

/* Responsive */
@media (max-width: 480px) {
  .login-card {
    width: 90%;
    padding: 40px 30px;
  }

  .avatar-icon {
    width: 100px;
    height: 100px;
  }

  .avatar-icon svg {
    width: 50px;
    height: 50px;
  }
}

  </style>

</head>
<body>
  <div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="login-card">
      <!-- Animated Border Trails -->
      <div class="trail trail-1"></div>
      <div class="trail trail-2"></div>

      <!-- Avatar/Camera Icon -->
      <div class="avatar-container">
        <div class="avatar-icon">
          <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M50 45H10C8.89543 45 8 44.1046 8 43V22C8 20.8954 8.89543 20 10 20H16L19 15H41L44 20H50C51.1046 20 52 20.8954 52 22V43C52 44.1046 51.1046 45 50 45Z" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="30" cy="32" r="8" stroke="currentColor" stroke-width="2.5"/>
          </svg>
        </div>
      </div>

      <!-- Email Address -->
      <div class="input-group">
        <div class="input-icon">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 10C12.7614 10 15 7.76142 15 5C15 2.23858 12.7614 0 10 0C7.23858 0 5 2.23858 5 5C5 7.76142 7.23858 10 10 10Z" fill="currentColor"/>
            <path d="M10 12.5C5 12.5 2.5 15 2.5 17.5V20H17.5V17.5C17.5 15 15 12.5 10 12.5Z" fill="currentColor"/>
          </svg>
        </div>
        <input type="email" placeholder="email" id="email for="email" :value="__('Email')" name="email" :value="old('email')" required autofocus autocomplete="username">
         <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password Input -->
      <div class="input-group">
        <div class="input-icon">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="9" width="14" height="10" rx="2" stroke="currentColor" stroke-width="2" fill="none"/>
            <path d="M6 9V6C6 3.79086 7.79086 2 10 2C12.2091 2 14 3.79086 14 6V9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <circle cx="10" cy="14" r="1.5" fill="currentColor"/>
          </svg>
        </div>
        <input type="password" placeholder="Password" id="password" for="password" :value="__('Password')"  name="password"
                            required autocomplete="current-password">
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Remember Me & Forgot Password -->
      <div class="options-row">
        <label class="remember-me">
          <input type="checkbox" id="remember">
          <span class="checkmark"></span>
          <span>{{ __('Remember me') }}</span>
        </label>
         @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="forgot-password"> {{ __('Forgot your password?') }}</a>
          @endif
        </div>

      <!-- Login Button -->
      <button class="login-btn" id="loginBtn"> {{ __('Log in') }}</button>
    </div>
    </form>
  </div>

  <script src="script.js"></script>
  <script>
    // Login Form Validation and Animation
document.addEventListener('DOMContentLoaded', () => {
  const loginBtn = document.getElementById('loginBtn');
  const username = document.getElementById('username');
  const password = document.getElementById('password');
  const remember = document.getElementById('remember');

  // Input Focus Animation
  const inputs = document.querySelectorAll('.input-group input');
  inputs.forEach(input => {
    input.addEventListener('focus', () => {
      input.parentElement.style.transform = 'scale(1.02)';
    });

    input.addEventListener('blur', () => {
      input.parentElement.style.transform = 'scale(1)';
    });
  });

  // Login Button Click
  loginBtn.addEventListener('click', (e) => {
    /* e.preventDefault(); */

    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    // Validation
    if (usernameValue === '' || passwordValue === '') {
      shakeCard();
      showError('Please fill in all fields!');
      return;
    }

    // Success Animation
    loginBtn.innerHTML = '<span style="animation: spin 0.5s linear infinite;">⏳</span> Logging in...';
    loginBtn.disabled = true;

    // Simulate login delay
    setTimeout(() => {
      loginBtn.innerHTML = '✓ SUCCESS';
      loginBtn.style.background = 'rgba(46, 213, 115, 0.8)';

      setTimeout(() => {
        successAnimation();
      }, 800);
    }, 1500);
  });

  // Shake Animation for Error
  function shakeCard() {
    const card = document.querySelector('.login-card');
    card.style.animation = 'shake 0.5s ease';
    setTimeout(() => {
      card.style.animation = 'slideIn 0.6s ease-out';
    }, 500);
  }

  // Error Message
  function showError(message) {
    const existingError = document.querySelector('.error-message');
    if (existingError) existingError.remove();

    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;
    errorDiv.style.cssText = `
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(255, 71, 87, 0.9);
      color: white;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 14px;
      box-shadow: 0 4px 15px rgba(255, 71, 87, 0.4);
      z-index: 1000;
      animation: slideDown 0.3s ease;
    `;

    document.body.appendChild(errorDiv);

    setTimeout(() => {
      errorDiv.style.animation = 'slideUp 0.3s ease';
      setTimeout(() => errorDiv.remove(), 300);
    }, 3000);
  }

  // Success Animation
  function successAnimation() {
    const card = document.querySelector('.login-card');
    card.style.animation = 'zoomOut 0.5s ease forwards';

    setTimeout(() => {
      alert('🎉 Login Successful!\n\nWelcome back!');
      location.reload();
    }, 500);
  }

  // Enter Key Support
  [username, password].forEach(input => {
    input.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        loginBtn.click();
      }
    });
  });
});

// Add Additional CSS Animations via JavaScript
const style = document.createElement('style');
style.textContent = `
  @keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-10px); }
    75% { transform: translateX(10px); }
  }

  @keyframes spin {
    to { transform: rotate(360deg); }
  }

  @keyframes slideDown {
    from {
      opacity: 0;
      transform: translate(-50%, -20px);
    }
    to {
      opacity: 1;
      transform: translate(-50%, 0);
    }
  }

  @keyframes slideUp {
    from {
      opacity: 1;
      transform: translate(-50%, 0);
    }
    to {
      opacity: 0;
      transform: translate(-50%, -20px);
    }
  }

  @keyframes zoomOut {
    to {
      opacity: 0;
      transform: scale(0.8);
    }
  }
`;
document.head.appendChild(style);

    </script>
</body>
</html>

