<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang Keluar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4ff;
            padding: 20px;
            margin: 0;
        }

        .form-container {
            background: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 8px;
            border: 2px solid #2196F3;
            box-shadow: 0 2px 10px rgba(33, 150, 243, 0.1);
        }

        h1 {
            color: #1976D2;
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #1976D2;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #2196F3;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #1976D2;
            box-shadow: 0 0 5px rgba(33, 150, 243, 0.3);
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        .row {
            display: flex;
            gap: 15px;
        }

        .row .form-group {
            flex: 1;
        }

        .submit-btn {
            background-color: #2196F3;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }

        .submit-btn:hover {
            background-color: #1976D2;
        }

        .required {
            color: #d32f2f;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
            display: none;
            border: 1px solid #c3e6cb;
        }

        @media (max-width: 600px) {
            .row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>

<body>
    <form action="/daftarbarang/simpan" method="post">
        <div class="form-container">
            <h1>Form daftar barang</h1>

            <div id="successMessage" class="success-message">
                Data berhasil disimpan!
            </div>

            <form id="formDaftarBarang">
                <div class="form-group">
                    <label for="tanggal">Tanggal <span class="required">*</span></label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang <span class="required">*</span></label>
                    <input type="text" id="nama_barang" name="nama_barang" required>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" id="jenis" name="jenis">
                    </div>

                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" id="merk" name="merk">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" id="ukuran" name="ukuran">
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock <span class="required">*</span></label>
                        <input type="number" id="stock" name="stock" min="1" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="satuan">Satuan</label>
                        <select id="satuan" name="satuan">
                            <option value="">Pilih Satuan</option>
                            <option value="pcs">Pcs</option>
                            <option value="box">Box</option>
                            <option value="kg">Kg</option>
                            <option value="liter">Liter</option>
                            <option value="meter">Meter</option>
                            <option value="set">Set</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi" placeholder="Contoh: Gudang A">
                    </div>
                </div>

                <button type="submit" class="submit-btn">Simpan</button>
            </form>
        </div>

        <script>
            // Set tanggal hari ini
            document.getElementById('tanggal').valueAsDate = new Date();

            // Handle form submission
            document.getElementById('formBarangKeluar').addEventListener('submit', function(e) {
                e.preventDefault();

                // Show success message
                document.getElementById('successMessage').style.display = 'block';

                // Reset form
                this.reset();
                document.getElementById('tanggal').valueAsDate = new Date();

                // Hide success message after 3 seconds
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 3000);
            });
        </script>
</body>

</html>