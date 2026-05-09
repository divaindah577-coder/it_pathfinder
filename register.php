<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --bg-gradient: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            --glass-bg: rgba(255, 255, 255, 0.95);
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: var(--bg-gradient);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: var(--text-main);
        }

        .login-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        .login-card {
            background: var(--glass-bg);
            padding: 50px 40px;
            border-radius: 24px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-icon-wrapper {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 64px;
            background: #eff6ff;
            color: var(--primary);
            border-radius: 16px;
            margin-bottom: 20px;
        }

        .login-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            letter-spacing: -0.025em;
            margin-bottom: 10px;
        }

        .login-header p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        .input-group {
    margin-bottom: 15px; /* Jarak antar baris diperkecil agar ringkas */
    display: flex;
    align-items: center; /* Label dan Input sejajar secara vertikal di tengah */
    gap: 15px; /* Jarak antara label dan input */
}

.input-group label {
    flex: 0 0 120px; /* Lebar label dikunci (misal 120px) agar rapi sejajar */
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--text-main);
    margin-bottom: 0; /* Hapus margin bawah karena sekarang posisinya di samping */
}

.input-wrapper {
    flex: 1; /* Input akan mengambil sisa ruang yang tersedia */
    position: relative;
    display: flex;
    align-items: center;
}

.input-wrapper i {
    position: absolute;
    left: 16px;
    width: 18px;
    height: 18px;
    color: var(--text-muted);
    pointer-events: none;
    z-index: 10; /* Memastikan ikon di depan */
}

/* Menyeragamkan tampilan input dan select */
.input-wrapper input, 
.input-wrapper select {
    width: 100%;
    padding: 12px 16px; /* Padding merata 16px di kiri dan kanan */
    background: #fff;
    border: 1.5px solid var(--border-color);
    border-radius: 12px;
    font-size: 1rem;
    outline: none;
}

/* Khusus untuk select agar teks tidak terlalu mepet ke kanan */
.input-wrapper select {
    cursor: pointer;
}

.input-wrapper input:focus, 
.input-wrapper select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
}

        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 8px;
        }

        .btn-login:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .login-footer {
            margin-top: 32px;
            text-align: center;
        }

        .login-footer a {
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-muted);
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .login-footer a:hover {
            color: var(--primary);
        }

        /* Animasi masuk */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card {
            animation: fadeIn 0.5s ease-out;
        }

        /* Mengatur gaya teks placeholder untuk semua input */
input::placeholder {
    font-style: italic;
    opacity: 0.7; /* Opsional: agar terlihat sedikit lebih samar dan elegan */
    font-size: 0.85rem;
}

    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-icon-wrapper">
                    <i data-feather="shield"></i>
                </div>
                <h2>Daftar Akun</h2>
                <p>Buat akun untuk mulai mencari jalur IT yang tepat</p>
            </div>
            
            <form action="proses_register.php" method="POST">
                <div class="input-group">
                    <label>Nama Lengkap</label>
                    <div class="input-wrapper">
                        
                        <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                    </div>
                </div>

                <div class="input-group">
                    <label>Username</label>
                    <div class="input-wrapper">
                        
                        <input type="text" name="username" value="" placeholder="Buat username" required autocomplete="off">
                    </div>
                </div>

                <div class="input-group">
    <label>Password</label>
    <div class="input-wrapper">
        <input type="password" name="password" id="password" placeholder="Minimal 8 karakter" required autocomplete="new-password">
    </div>
</div>

<div class="input-group">
    <label>Ulangi Password</label>
    <div class="input-wrapper">
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Ulangi password" required>
    </div>
</div>

<div id="password-message" style="margin-left: 150px; margin-top: -10px; margin-bottom: 15px; font-size: 0.85rem; font-weight: 500;"></div>

                <div class="input-group">
                    <label>Daftar Sebagai</label>
                   <div class="input-wrapper">
                        
                        <select name="role" id="roleSelect" onchange="toggleKelas()" required>
                            <option value="siswa">-- daftar sebagai --</option>
                            <option value="siswa">Siswa</option>
                            <option value="guru_bk">Guru BK</option>
                        </select>
                    </div>
                </div>

                <div class="input-group" id="kelasGroup">
                    <label>Kelas</label>
                   <div class="input-wrapper">
                        
                        <input type="text" name="kelas" placeholder="Contoh: 9A">
                    </div>
                </div>

                <button type="submit" name="login" class="btn-login">Daftar Akun</button>
            </form>
            
            <div class="login-footer">
                <a href="register.php">
                    <i data-feather="user-plus" style="width: 16px;"></i> 
                    register
                </a>
            </div>
        </div>
    </div>

    <script>
    feather.replace();

    $(document).ready(function() {
        // Fungsi untuk toggle Kelas (Guru BK vs Siswa)
        function toggleKelas() {
            const role = $('#roleSelect').val();
            const kelasGroup = $('#kelasGroup');
            if (role === 'guru_bk') {
                kelasGroup.hide();
            } else {
                kelasGroup.css('display', 'flex');
            }
        }

        // Panggil saat dropdown berubah dan saat halaman dimuat
        $('#roleSelect').on('change', toggleKelas);
        toggleKelas();

        // VALIDASI PASSWORD RESPONSIF
        function checkPassword() {
            const pass = $('#password').val();
            const confirm = $('#confirm_password').val();
            const message = $('#password-message');
            const btn = $('.btn-login');

            // 1. Cek Minimal 8 Karakter
            if (pass.length < 8) {
                message.html('❌ Password harus minimal 8 karakter').css('color', '#dc2626');
                btn.prop('disabled', true).css('opacity', '0.5');
                return;
            }

            // 2. Cek Kesesuaian (hanya jika konfirmasi sudah mulai diisi)
            if (confirm.length > 0) {
                if (pass !== confirm) {
                    message.html('❌ Password tidak cocok').css('color', '#dc2626');
                    btn.prop('disabled', true).css('opacity', '0.5');
                } else {
                    message.html('✅ Password cocok dan aman').css('color', '#059669');
                    btn.prop('disabled', false).css('opacity', '1');
                }
            } else {
                message.html('ℹ️ Ulangi password untuk konfirmasi').css('color', '#64748b');
                btn.prop('disabled', true).css('opacity', '0.5');
            }
        }

        // Jalankan fungsi setiap kali user mengetik
        $('#password, #confirm_password').on('keyup', checkPassword);
    });
</script>
</body>
</html>