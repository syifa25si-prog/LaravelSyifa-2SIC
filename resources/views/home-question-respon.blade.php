<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respon Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .response-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        .quote-box {
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 15px 20px;
            margin: 25px 0;
            text-align: center;
        }
        .text-muted-small {
            font-size: 0.85rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="response-card">
            <h3 class="text-primary fw-bold mb-2">Terima Kasih, {{ session('nama') }}! 🎉</h3>
            <p class="text-muted">Pertanyaan Anda telah berhasil dikirim.</p>

            <div class="quote-box">
                <strong class="text-dark">Pertanyaan Anda:</strong><br>
                <span class="text-secondary">"{{ session('pertanyaan') }}"</span>
            </div>

            <p class="text-muted-small mb-1">
                Pertanyaan Anda akan segera kami tanggapi dan balas melalui email <strong><em>{{ session('email') }}</em></strong>.
            </p>
            <p class="text-muted-small mb-4">
                <em>Mohon cek kotak masuk atau folder spam Anda secara berkala.</em>
            </p>

            <a href="{{ url('/home') }}" class="btn btn-primary rounded-pill px-4">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>