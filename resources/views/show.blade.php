<!DOCTYPE html>
<html>
<head>
    <title>QR Code</title>
</head>
<body>
    <h1>Generated QR Code</h1>
    
    <div>
        {!! $qrCodeData !!} <!-- Render the QR code image -->
    </div>
    
     <!-- Display the data used to generate the QR code -->
    
    <a href="{{ route('qrcode.save') }}">Save QR Code Data</a>
</body>
</html>
