# Deploy ke Netlify

Repo ini sudah diubah menjadi static site agar bisa di-host di Netlify.

## Langkah deploy

1. Push repo ini ke GitHub.
2. Buka Netlify dan pilih **Add new site** > **Import an existing project**.
3. Connect ke repository GitHub ini.
4. Gunakan setting berikut:
   - **Build command**: kosongkan
   - **Publish directory**: `.`
5. Deploy.

## Catatan

- Entry point sekarang `index.html`, bukan `index.php`.
- Data tetap memakai file JSON dan asset lokal.
- Folder `downloads/` berisi CV PDF yang akan ikut ter-deploy.
