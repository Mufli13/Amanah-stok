  <!DOCTYPE html>
  <html lang="id">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form Barang Masuk</title>
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
      <form action="/barangmasuk/simpan" method="post">
          <div class="form-container">
              <h1>Form Item Masuk</h1>

              <div id="successMessage" class="success-message">
                  Data berhasil disimpan!
              </div>

              <form id="formBarangKeluar">
                  <div class="form-group">
                      <label for="tanggal">Tanggal <span class="required">*</span></label>
                      <input type="date" id="tanggal" name="tanggal" required>
                  </div>

                  <div class="form-group">
                      <label for="barang">Barang <span class="required">*</span></label>
                      <input type="text" id="barang" name="barang" required>
                  </div>

                  <div class="row">
                      <div class="form-group">
                          <label for="ukuran">Ukuran</label>
                          <select id="ukuran" name="ukuran">
                              <option value="">Pilih Ukuran</option>
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="jumlah">Jumlah <span class="required">*</span></label>
                          <input type="number" id="jumlah" name="jumlah" min="1" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="penerima">Penerima <span class="required">*</span></label>
                      <input type="text" id="penerima" name="penerima" required>
                  </div>

                  <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea id="keterangan" name="keterangan"></textarea>
                  </div>

                  <button type="submit" class="submit-btn">Simpan</button>
              </form>
          </div>

          <script>
              // Set tanggal hari ini
              document.getElementById('tanggal').valueAsDate = new Date();

              // Handle form submission
              document.getElementById('formBarangMasuk').addEventListener('submit', function(e) {
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