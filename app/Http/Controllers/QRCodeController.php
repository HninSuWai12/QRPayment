<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\QRCodeData;

class QRCodeController extends Controller
{
    //before click save
    public function index()
    {
        $dataToSave = "Your data to save";
    $qrCode = QrCode::size(300)->generate($dataToSave);

    return view('index', ['qrCode' => $qrCode, 'dataToSave' => $dataToSave]);
    }

    public function saveData(Request $request)
    {
        $data = $request->input('data');
        
        // Save data to the database
        QRCodeData::create(['data' => $data]);

        // Generate QR code
        $qrCodeImage = QrCode::generate($data);

        return view('index', ['qrCodeData' => $qrCodeImage])->with('success', 'Data saved successfully!');
    }

    //after click save
    public function saveQRCodeData()
    {
        // Save the QR code data to the database or perform other operations
        $qrCode = new QRCodeData();
        $qrCode->data = 30000;
        $qrCode->save();
        
        return redirect()->route('qrcode.show', );
    }

    public function generateQRCode()
{
    $qrCodeData = QrCode::size(100)->generate(route('qrcode.save'));
    
    return view('show', ['qrCodeData' => $qrCodeData]);
}


}
