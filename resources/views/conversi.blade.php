<!DOCTYPE html>
<html>

<head>
    <title>Konversi Suhu</title>
</head>

<body>
    <h1>Konversi Suhu dari Celcius</h1>

    <form method="POST" action="/conversi">
        @csrf
        <input type="number" step="any" name="temperature" placeholder="Masukkan suhu (°C)" value="{{ old('temperature', $celcius ?? '') }}" required>

        <select name="conversion">
            <option value="to_fahrenheit" {{ old('conversion', $conversion ?? '') == 'to_fahrenheit' ? 'selected' : '' }}>
                Celcius ke Fahrenheit
            </option>
            <option value="to_kelvin" {{ old('conversion', $conversion ?? '') == 'to_kelvin' ? 'selected' : '' }}>
                Celcius ke Kelvin
            </option>
        </select>

        <button type="submit">Konversi</button>
    </form>

    @if (isset($result))
        <h2>Hasil: {{ $result }}</h2>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
