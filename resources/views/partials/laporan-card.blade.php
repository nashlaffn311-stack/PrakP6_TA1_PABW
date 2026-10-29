<div class="card">
    <h3>Lokasi: {{ $laporan->lokasi }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan->nama_pelapor }}</p>
    <p><strong>Tinggi Genangan Air:</strong> {{ $laporan->tinggi_genangan }} cm</p>
    <p><strong>Tanggal Kejadian:</strong> {{ $laporan->tanggal_kejadian }}</p>
    <p><strong>Status Genangan:</strong>
        @if($laporan->tinggi_genangan < 30)
            <span class="status bg-waspada">Waspada</span>
        @elseif($laporan->tinggi_genangan >= 30 && $laporan->tinggi_genangan <= 70)
            <span class="status bg-siaga">Siaga</span>
        @else
            <span class="status bg-awas">Awas</span>
        @endif
    </p>
</div>