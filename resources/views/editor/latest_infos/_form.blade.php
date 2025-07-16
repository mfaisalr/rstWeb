<div class="form-group">
    <label for="category">Kategori:</label>
    <select class="form-control" name="category" required>
        <option value="News" {{ old('category', $latestInfo->category ?? '') == 'News' ? 'selected' : '' }}>Berita</option>
        <option value="Announcement" {{ old('category', $latestInfo->category ?? '') == 'Announcement' ? 'selected' : '' }}>Pengumuman</option>
    </select>
</div>

<div class="form-group">
    <label for="date">Tanggal:</label>
    <input type="date" class="form-control" name="date" value="{{ old('date', $latestInfo->date ?? '') }}" required>
</div>

<div class="form-group">
    <label for="title">Judul:</label>
    <input type="text" class="form-control" name="title" value="{{ old('title', $latestInfo->title ?? '') }}" required>
</div>

<div class="form-group">
    <label for="description">Deskripsi:</label>
    <textarea class="form-control" name="description" required>{{ old('description', $latestInfo->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label for="image">Gambar:</label>
    @if(isset($latestInfo) && $latestInfo->image)
        <p>gambar saat ini: <img src="{{ asset('storage/'.$latestInfo->image) }}" alt="{{ $latestInfo->title }}" width="100"></p>
    @endif
    <input type="file" class="form-control-file" name="image">
    <small class="form-text text-muted">Biarkan kosong jika Anda tidak ingin mengubah gambar.</small>
</div>
