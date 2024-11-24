<x-layout>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <h2 class="display-4 text-center mb-4">Inserisci Prodotto</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="needs-validation">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="tags" name="tags" value="{{ old('tags') }}" required>
                    <span class="form-text">Inserisci i tag separati da virgole</span>
                    @error('tags')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <select name="category" id="category" class="form-select @error('category') is-invalid @enderror" required>
                        <option disabled {{ old('category') ? '' : 'selected' }}>Seleziona una categoria</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('body') }}</textarea>
                    @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-outline-secondary btn-sm">Invia</button>

                </div>

            </form>
        </div>
    </div>
</x-layout>