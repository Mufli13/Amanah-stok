<form action="/barang_keluar/tambah" method="post">
  <div>
    <label for="tanggal">Tanggal</label>
    <input type="date" id="tanggal" name="tanggal" required>
  </div>
  
  <div>
    <label for="barang">Barang</label>
    <input type="text" id="barang" name="barang" required>
  </div>
  
  <div>
    <label for="ukuran">Ukuran</label>
    <input type="text" id="ukuran" name="ukuran" required>
  </div>
  
  <div>
    <label for="jumlah">Jumlah</label>
    <input type="number" id="jumlah" name="jumlah" min="1" required>
  </div>
  
  <div>
    <label for="penerima">Penerima</label>
    <input type="text" id="penerima" name="penerima" required>
  </div>
  
  <div>
    <label for="keterangan">Keterangan</label>
    <textarea id="keterangan" name="keterangan"></textarea>
  </div>
  
  <div>
    <button type="submit">Simpan</button>
  </div>
</form>
