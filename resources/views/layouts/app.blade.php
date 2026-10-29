<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | LaporBanjir BPBD</title>
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #f0f4f8 100%);
            color: #1e293b;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .navbar-container {
            max-width: 1100px;
            margin: auto;
            padding: 0 20px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .brand-logo {
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .brand-text-main {
            font-size: 1.25rem;
            font-weight: 800;
            color: #0284c7;
            line-height: 1.2;
        }
        .brand-text-sub {
            font-size: 0.75rem;
            color: #64748b;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        nav {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        nav a, nav button {
            text-decoration: none;
            color: #475569;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 9px 18px;
            border-radius: 8px;
            transition: all 0.2s ease;
            background: transparent;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }
        nav a:hover, nav button:hover {
            color: #0284c7;
            background-color: #f1f5f9;
        }
        nav a.active {
            color: #0284c7;
            background-color: #e0f2fe;
        }
        main {
            max-width: 1100px;
            width: 90%;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
            flex: 1;
        }
        .form-card {
            max-width: 420px;
            margin: 20px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07);
        }
        .form-card h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-group { 
            margin-bottom: 20px; 
        }
        .form-group label { 
            display: block; 
            margin-bottom: 8px; 
            font-weight: 600; 
            font-size: 0.875rem; 
            color: #334155; 
        }
        .form-group input { 
            width: 100%; 
            padding: 12px 16px; 
            border: 1.5px solid #cbd5e1; 
            border-radius: 10px; 
            font-size: 0.95rem; 
            outline: none; 
            transition: border-color 0.2s;
            font-family: inherit;
        }
        .card {
            border: 1px solid #cbd5e1;
            border-left: 5px solid #2563eb;
            padding: 18px;
            margin-bottom: 16px;
            border-radius: 10px;
            background-color: #ffffff;
        }
        .card h3 {
            color: #1e3a8a; 
            margin-bottom: 8px;
        }
        .status {
            font-weight: bold;
            padding: 3px 10px;
            border-radius: 6px;
            font-size: 0.85rem;
            display: inline-block;
        }
        .form-group input:focus { 
            border-color: #0284c7; 
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
        }
        .btn { 
            background: #0284c7; 
            color: white; 
            padding: 12px 20px; 
            border: none; 
            border-radius: 10px;
            font-weight: 700; 
            cursor: pointer; 
            text-decoration: none; 
            display: inline-block; 
            font-size: 0.95rem; 
            transition: all 0.2s ease;
        }
        .btn:hover { 
            background: #0369a1; 
            transform: translateY(-1px);
        }
        .alert-error {
            padding: 12px 16px;
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 0.875rem;
        }
        .alert-success {
            padding: 12px 16px;
            background-color: #f0fdf4;
            color: #166534;
            border: 1px solid #bbf7d0;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 0.875rem;
        }
        .laporan-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 20px;
        margin-top: 15px;
        }
        .bg-waspada { background-color: #fef3c7; color: #92400e; border: 1px solid #fde68a; }
        .bg-siaga { background-color: #ffedd5; color: #c2410c; border: 1px solid #fed7aa; }
        .bg-awas { background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }
        
        @media (max-width: 600px) {
            .laporan-grid {grid-template-columns: 1fr;}
        }  
        footer {
            text-align: center;
            padding: 20px;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            color: #64748b;
            font-size: 0.85rem;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar-container">
            <a href="{{ route('lapor.create') }}" class="brand-logo">
                <div>
                    <div class="brand-text-main">LaporBanjir</div>
                    <div class="brand-text-sub">BPBD Kabupaten Bandung</div>
                </div>
            </a>

            <nav>
                <a href="{{ route('lapor.create') }}" class="{{ request()->routeIs('lapor.create') ? 'active' : '' }}">
                    Buat Laporan
                </a>

                @auth
                    <a href="{{ route('lapor.index') }}" class="{{ request()->routeIs('lapor.index') ? 'active' : '' }}">
                        Daftar Laporan
                    </a>
                    <a href="{{ route('profile.index') }}" class="{{ request()->routeIs('profile.index') ? 'active' : '' }}">
                        Profil Petugas
                    </a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">
                        Register
                    </a>
                @endauth
            </nav>
        </div>
    </header>

    <main>
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 BPBD Kabupaten Bandung — Portal Respon Cepat Bencana Banjir</p>
    </footer>
</body>
</html>