<!DOCTYPE html>
<html>
<head>
    <title>QR Code App</title>
</head>
<body>
    <h1>QR Code App</h1>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <h2>Enter Associated Data:</h2>
    <form action="{{ url('/save-data') }}" method="post">
        @csrf
        <input type="text" name="data" placeholder="Enter Associated Data">
        <button type="submit">Save Data</button>
    </form>
    <h2>Generated QR Code:</h2>
    @if (!empty($qrCodeData))
        <img src="{{ $qrCodeData }}" alt="QR Code">
    @endif
</body>
</html>
