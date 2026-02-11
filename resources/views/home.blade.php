<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memuat... - Dark Lightning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* Menggunakan style dasar yang sama dengan Login/Register */
        body {
            background-color: #0a0a0a;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column; /* Agar elemen tersusun ke bawah */
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* --- Background Petir --- */
        .lightning-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; pointer-events: none;}
        .lightning-icon { position: absolute; color: #dc3545; opacity: 0.15; animation: pulse 3s infinite; }
        @keyframes pulse { 0% { opacity: 0.1; } 50% { opacity: 0.3; } 100% { opacity: 0.1; } }
        
        .l-1 { top: 10%; left: 10%; font-size: 5rem; }
        .l-2 { top: 20%; right: 15%; font-size: 8rem; }
        .l-3 { bottom: 15%; left: 20%; font-size: 6rem; }
        .l-4 { bottom: 10%; right: 10%; font-size: 4rem; }
        
        /* --- Loading Style --- */
        .loading-text {
            margin-top: 20px;
            font-size: 1.5rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            animation: blink 1.5s infinite;
        }

        @keyframes blink {
            0% { opacity: 0.2; }
            50% { opacity: 1; text-shadow: 0 0 10px #dc3545; }
            100% { opacity: 0.2; }
        }

        .spinner-custom {
            width: 5rem;
            height: 5rem;
            border-width: 0.4em;
            box-shadow: 0 0 20px rgba(220, 53, 69, 0.5); /* Glow merah pada spinner */
            border-radius: 50%; /* Memastikan glow melingkar */
        }
    </style>
</head>
<body>

    <div class="lightning-bg">
        <i class="bi bi-lightning-charge-fill lightning-icon l-1"></i>
        <i class="bi bi-lightning-fill lightning-icon l-2"></i>
        <i class="bi bi-lightning-charge-fill lightning-icon l-3"></i>
        <i class="bi bi-lightning-fill lightning-icon l-4"></i>
    </div>

    <div class="spinner-border text-danger spinner-custom" role="status">
        <span class="visually-hidden">Memuat...</span>
    </div>

    <h3 class="loading-text text-danger fw-bold">TUNGGU SEBENTAR...</h3>
    
    <div class="mt-5">
        <a href="{{ route('logout') }}" class="btn btn-outline-danger px-4 rounded-pill">
            <i class="bi bi-box-arrow-left me-2"></i> KELUAR (LOGOUT)
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>