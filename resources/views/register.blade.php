<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Dark Lightning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body { background-color: #0a0a0a; color: #fff; height: 100vh; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative; }
        .lightning-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; pointer-events: none; }
        .lightning-icon { position: absolute; color: #dc3545; opacity: 0.15; animation: pulse 3s infinite; }
        @keyframes pulse { 0% { opacity: 0.1; transform: scale(1); } 50% { opacity: 0.3; transform: scale(1.1); } 100% { opacity: 0.1; transform: scale(1); } }
        .l-1 { top: 10%; left: 10%; font-size: 5rem; }
        .l-2 { top: 20%; right: 15%; font-size: 8rem; }
        .l-3 { bottom: 15%; left: 20%; font-size: 6rem; }
        .l-4 { bottom: 10%; right: 10%; font-size: 4rem; }
        .l-5 { top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 15rem; opacity: 0.05; }
        .login-card { background: rgba(20, 20, 20, 0.9); border: 2px solid #dc3545; box-shadow: 0 0 20px rgba(220, 53, 69, 0.5); border-radius: 15px; padding: 2rem; width: 100%; max-width: 400px; backdrop-filter: blur(5px); }
        .form-control { background-color: #222; border: 1px solid #444; color: #fff; }
        .form-control:focus { background-color: #222; color: #fff; border-color: #dc3545; box-shadow: 0 0 5px rgba(220, 53, 69, 0.5); }
        .btn-custom { background-color: #dc3545; color: white; font-weight: bold; border: none; transition: all 0.3s; }
        .btn-custom:hover { background-color: #b02a37; box-shadow: 0 0 15px #dc3545; }
        h2 { text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 0px #dc3545; }
    </style>
</head>
<body>

    <div class="lightning-bg">
        <i class="bi bi-lightning-charge-fill lightning-icon l-1"></i>
        <i class="bi bi-lightning-fill lightning-icon l-2"></i>
        <i class="bi bi-lightning-charge-fill lightning-icon l-3"></i>
        <i class="bi bi-lightning-fill lightning-icon l-4"></i>
        <i class="bi bi-lightning-charge-fill lightning-icon l-5"></i>
    </div>

    <div class="login-card">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Buat Akun</h2>
            <p class="text-secondary">Bergabung dengan sisi gelap</p>
        </div>

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label text-danger fw-bold">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" required placeholder="Masukkan nama Anda">
            </div>

            <div class="mb-3">
                <label class="form-label text-danger fw-bold">Alamat Email</label>
                <input type="email" class="form-control" name="email" required placeholder="nama@email.com">
            </div>

            <div class="mb-4">
                <label class="form-label text-danger fw-bold">Kata Sandi</label>
                <input type="password" class="form-control" name="password" required placeholder="********">
            </div>

            <button type="submit" class="btn btn-custom w-100 py-2">
                <i class="bi bi-person-plus-fill me-2"></i> DAFTAR
            </button>
        </form>

        <div class="text-center mt-3">
            <small class="text-secondary">Sudah punya akun? <a href="{{ route('login') }}" class="text-danger">Login di Sini</a></small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>