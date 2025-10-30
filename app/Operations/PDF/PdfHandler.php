<?php

namespace App\Operations\PDF;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Label\Label;
use chillerlan\QRCode\QROptions;
use chillerlan\QRCode\Data\QRMatrix;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use chillerlan\QRCode\Common\EccLevel;
use chillerlan\QRCode\QRCode as ChiQr;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\ErrorCorrectionLevel;
use Illuminate\Support\Facades\Response;

class PdfHandler
{
    public static function generateQR($url)
    {

        $writer = new PngWriter;

        $qrCode = new QrCode(
            data: $url,
            encoding: new Encoding('UTF-8'),
            size: 1200,
            margin: 20,
            foregroundColor: new Color(15, 116, 88),
            backgroundColor: new Color(255, 255, 255, 0.1)
        );

        // Create generic logo
        $logo = new Logo(
            path: asset('/frontend/assets/img/logo/HMO-white-logo.png'),
            resizeToWidth: 385,
            punchoutBackground: true
        );
        // Create generic logo

        /*
        // Create generic label
        $label = Label::create('FAAN DMS')
            ->setTextColor(new Color(0, 105, 75));
            */

        $result = $writer->write($qrCode, $logo, null);

        // Generate a data URI to include image data inline (i.e. inside an <img> tag)
        return $dataUri = $result->getDataUri();

    }


    public static function generateCustomQrWorking($ref){
        // it's generally a good idea to wrap the reader in a try/catch block because it WILL throw eventually

       // $base64Data = substr($result, strpos($result, ',') + 1);
     



        $imagePath = storage_path("app/logo/HMO_logo_qr.png");

        // Step 1: Read the image file into a binary string
        $imageData = file_get_contents($imagePath);
        
        if ($imageData === false) {
            echo 'An error occurred while reading the image file.';
            exit;
        }
        
        // Step 2: Encode the binary data to Base64
        $base64Encoded = base64_encode($imageData);
        
        // Step 3: Create the Base64 Data URL
        $mimeType = mime_content_type($imagePath); // Automatically get the MIME type (e.g., image/png)
        $base64Image = 'data:' . $mimeType . ';base64,' . $base64Encoded;

        $options = new QROptions([
            'version'            => 6, // QR code version (1-40)
            'outputType'         => 'svg', // Output as SVG image
            'eccLevel'           => EccLevel::H, // Error correction level: L, M, Q, H
            'imageTransparent'   => true,
            'drawLightModules'   => true,
            'drawCircularModules' => false,
            'addLogoSpace' => true,
            'logoSpaceWidth'   => 11,
            'logoSpaceHeight' => 6,
            'bgColor' => [255, 255, 255],
            'outputBase64' => false,
            'circleRadius'       => 0.45,
            'keepAsSquare'       => [
                QRMatrix::M_FINDER_DARK,
                QRMatrix::M_FINDER_DOT,
            ],
            'svgDefs'            => '
            <linearGradient id="rainbow" x1="1" y2="1">
                <stop stop-color="#00913C" offset="0"/>
                <stop stop-color="#00913C" offset="0.1"/>
                <stop stop-color="#00913C" offset="0.2"/>
                <stop stop-color="#0E5B9C" offset="0.3"/>
                <stop stop-color="#0E5B9C" offset="0.5"/>
                <stop stop-color="#00913C" offset="0.8"/>
                <stop stop-color="#00913C" offset="1"/>
            </linearGradient>
            <style><![CDATA[
                .dark{fill: url(#rainbow);}
                .light{fill: #ffffff;}
            ]]></style>'
        ]);

        
        // Generate QR code
        $qrcode = new ChiQr($options);
        
        // Load QR code image and logo image


        $url = url('/');
        
        $svgContent = $qrcode->render($url.'/verify/'.$ref);

        

        // Get the dimensions of the QR code SVG
        preg_match('/width="([0-9]+)" height="([0-9]+)"/', $svgContent, $matches);
        $svgWidth = isset($matches[1]) ? intval($matches[1]) : 400; // Default width
        $svgHeight = isset($matches[2]) ? intval($matches[2]) : 400; // Default height

        // Calculate position to center the logo
        $logoWidth = 10; // Adjusted logo width
        $logoHeight = 10; // Adjusted logo height
        $logoX = ($svgWidth - $logoWidth) / 20; // Center horizontally
        $logoY = ($svgHeight - $logoHeight) / 20.5; // Center vertically

        // Example: Modify SVG content to embed, resize, and center logo
        
        $svgContent = str_replace('</svg>', '', $svgContent); // Remove closing </svg> temporarily
        $svgContent .= '<image x="' . $logoX . '" y="' . $logoY . '" width="' . $logoWidth . '" height="' . $logoHeight . '" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="' . $base64Image . '" />';
        $svgContent .= '</svg>'; // Add back the closing </svg>

        //  header('Content-Type: image/png');
        header('Content-Type: image/svg+xml');
       // echo $svgContent;



        $tempSvg = storage_path("app/qrcodes/temp_{$ref}.svg");
        file_put_contents($tempSvg, $svgContent);

        $outputFile = storage_path("app/qrcodes/new_qr_{$ref}.png");

        if(app()->environment('production')){
            $binary =  '/usr/bin/rsvg-convert';
        }else{
            $binary = '/opt/homebrew/bin/rsvg-convert'; // run `which rsvg-convert` to confirm
        }
        $cmd = sprintf(
            '%s -w %d -h %d --background-color=white %s -o %s',
            escapeshellcmd($binary),
            3000,
            3000,
            escapeshellarg($tempSvg),
            escapeshellarg($outputFile)
        );
        exec($cmd, $output, $returnCode);

        if ($returnCode !== 0) {
            throw new \Exception("Failed to convert SVG to PNG: " . implode("\n", $output));
        }

        unlink($tempSvg);

        // return [
        //     'svg' => $tempSvg,
        //     'png' => $outputFile,
        // ];
     
        return $outputFile;
    
        return;
    }

    public static function generateCustomQrWorkingTwo($url){
        // Load logo
        $imagePath = storage_path("app/logo/HMO_logo_qr.png");
        $imageData = file_get_contents($imagePath);
        if ($imageData === false) {
            throw new \Exception('Unable to read logo image file.');
        }
        $base64Encoded = base64_encode($imageData);
        $mimeType = mime_content_type($imagePath);
        $base64Image = 'data:' . $mimeType . ';base64,' . $base64Encoded;

        // SVG options (keep gradient + circular modules)
        $options = new QROptions([
            'version'             => 6,
            'outputType'          => 'svg',
            'eccLevel'           => EccLevel::H,
            'imageTransparent'    => false,
            'drawLightModules'    => true,
            'drawCircularModules' => true,
            'circleRadius'        => 0.35,
            'addLogoSpace'        => true,
            'logoSpaceWidth'      => 11,
            'logoSpaceHeight'     => 6,
            'bgColor'             => [255, 255, 255], // white canvas
            'outputBase64'        => false,
            'keepAsSquare'        => [
                QRMatrix::M_FINDER_DARK,
                QRMatrix::M_FINDER_DOT,
            ],
            'svgDefs'             => '
                <linearGradient id="rainbow" x1="1" y2="1">
                    <stop stop-color="#00913C" offset="0"/>
                    <stop stop-color="#00913C" offset="0.1"/>
                    <stop stop-color="#00913C" offset="0.2"/>
                    <stop stop-color="#0E5B9C" offset="0.3"/>
                    <stop stop-color="#0E5B9C" offset="0.5"/>
                    <stop stop-color="#00913C" offset="0.8"/>
                    <stop stop-color="#00913C" offset="1"/>
                </linearGradient>
                <style><![CDATA[
                    .dark{fill: url(#rainbow);}
                    .light{fill: #ffffff;}
                ]]></style>'
        ]);

        $qrcode = new ChiQr($options);
        $ref = uniqid();
        $qrData = $url.'/user/'.$ref;

        // Render SVG
        $svgContent = $qrcode->render($qrData);

        // Insert logo in the center of SVG
        $svgContent = str_replace('</svg>', '', $svgContent);
        $svgContent .= '<image x="180" y="180" width="40" height="40" 
            xmlns:xlink="http://www.w3.org/1999/xlink" 
            xlink:href="' . $base64Image . '" />';
        $svgContent .= '</svg>';

        // Save temporary SVG
        $tempSvg = storage_path("app/qrcodes/temp_{$ref}.svg");
        $outputFile = storage_path("app/qrcodes/qr_{$ref}.png");
        file_put_contents($tempSvg, $svgContent);

        $binary = '/opt/homebrew/bin/rsvg-convert'; // run `which rsvg-convert` to confirm
        //$binary =  '/usr/bin/rsvg-convert';
        $cmd = sprintf(
            '%s -w %d -h %d %s -o %s',
            escapeshellcmd($binary),
            1000,
            1000,
            escapeshellarg($tempSvg),
            escapeshellarg($outputFile)
        );
        exec($cmd, $output, $returnCode);

        if ($returnCode !== 0) {
            throw new \Exception("Failed to convert SVG to PNG: " . implode("\n", $output));
        }

        unlink($tempSvg);

        return [
            'svg' => $tempSvg,
            'png' => $outputFile,
        ];

        // // Convert SVG → high-res PNG
        // $im = new \Imagick();
        // $im->setResolution(300, 300); // 300 DPI for sharpness
        // $im->setBackgroundColor(new \ImagickPixel('white'));
        // $im->readImage($tempSvg);
        // $im->setImageFormat("png24");

        // // Scale to 1000x1000 pixels minimum
        // $im->resizeImage(1000, 1000, \Imagick::FILTER_LANCZOS, 1);

        
        // $im->writeImage($outputFile);

        // $im->clear();
        // $im->destroy();

        // Clean up temp svg if you want
        // unlink($tempSvg);

        return $outputFile;
    }

}
