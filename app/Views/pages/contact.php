<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center mb-5">
    <h1 class="fw-bold text-primary">Hubungi Kami</h1>
    <p class="text-muted fs-5">Punya pertanyaan seputar program latihan atau pendaftaran? Tim kami siap melayani Anda.</p>
    <hr class="w-25 mx-auto text-primary" style="height: 3px;">
</div>

<div class="row g-5">
    <div class="col-md-5">
        <h4 class="fw-bold text-dark mb-4">Informasi Sekretariat</h4>
        
        <div class="mb-4">
            <h6 class="fw-bold text-primary mb-1">📍 Alamat Kantor:</h6>
            <p class="text-muted small">Jl. Kertajaya No. 10, Kecamatan Gubeng, Kota Surabaya, Jawa Timur</p>
        </div>

        <div class="mb-4">
            <h6 class="fw-bold text-primary mb-1">📞 WhatsApp Admin:</h6>
            <p class="text-muted small">+62 812-3456-789 (Nida)</p>
        </div>

        <div class="mb-4">
            <h6 class="fw-bold text-primary mb-1">✉️ Email Resmi:</h6>
            <p class="text-muted small">info@vectorswim.com</p>
        </div>

        <div class="mb-4">
            <h6 class="fw-bold text-primary mb-1">⏰ Jam Operasional:</h6>
            <p class="text-muted small mb-0">Senin - Sabtu: 08.00 - 17.00 WIB</p>
            <p class="text-danger small fw-bold">*Minggu & Hari Libur Nasional Tutup</p>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card shadow-sm border-0 rounded-3 p-4 bg-light">
            <h4 class="fw-bold text-dark mb-3">Kirim Pesan Cepat</h4>
            <p class="text-muted small mb-4">Isi form di bawah ini untuk berkonsultasi langsung via WhatsApp Admin kami.</p>
            
            <form id="waForm" onsubmit="kirimWhatsApp(event)">
                <div class="mb-3">
                    <label class="form-label fw-bold small">Nama Lengkap Calon Member</label>
                    <input type="text" id="nama" class="form-control" placeholder="Contoh: Fahmi" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold small">Pilihan Program Kelas</label>
                    <select id="kelas" class="form-select" required>
                        <option value="" selected disabled>-- Pilih Kategori Kelas --</option>
                        <option value="Private Session">Private Session</option>
                        <option value="Semi-Private">Semi-Private (2-3 Anak)</option>
                        <option value="Program Reguler">Program Reguler (4-7 Anak)</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold small">Pertanyaan Tambahan</label>
                    <textarea id="pesan" class="form-control" rows="4" placeholder="Tuliskan pertanyaan Anda di sini..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary fw-bold w-100">
                    Kirim via WhatsApp 💬
                </button>
            </form>
        </div>
    </div>
</div>

<script>
function kirimWhatsApp(event) {
    event.preventDefault();
    
    // Ambil data dari form input
    const nama = document.getElementById('nama').value;
    const kelas = document.getElementById('kelas').value;
    const pesan = document.getElementById('pesan').value;
    
    // Nomor WA Admin (Ganti sesuai kebutuhan, awali dengan 62 tanpa tanda +)
    const nomorWA = "628123456789"; 
    
    // Susun template teks pesan otomatisnya
    const teksPesan = `Halo Admin Vector Swim, saya *${nama}* Ingin bertanya mengenai kelas *${kelas}*.\n\nPertanyaan: ${pesan}`;
    
    // Encode teks agar aman dibaca oleh URL browser
    const urlWA = `https://api.whatsapp.com/send?phone=${nomorWA}&text=${encodeURIComponent(teksPesan)}`;
    
    // Buka tab baru langsung ke WhatsApp
    window.open(urlWA, '_blank');
}
</script>
<?= $this->endSection(); ?>