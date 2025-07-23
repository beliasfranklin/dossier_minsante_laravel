<?php
// app/Services/PdfService.php

namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfService
{
    public function generateDossierPdf($dossier)
    {
        $pdf = Pdf::loadView('pdf.dossier', ['dossier' => $dossier]);
        
        $filename = 'dossier-' . $dossier->numero . '-' . now()->format('YmdHis') . '.pdf';
        $path = 'pdfs/' . $filename;
        
        Storage::put($path, $pdf->output());
        
        return [
            'path' => $path,
            'url' => Storage::url($path),
            'filename' => $filename
        ];
    }

    public function compressPdf($inputPath, $outputPath, $quality = 'screen')
    {
        // Implémentation de la compression PDF avec Ghostscript
        $command = "gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 " .
                   "-dPDFSETTINGS=/$quality -dNOPAUSE -dQUIET -dBATCH " .
                   "-sOutputFile=" . escapeshellarg($outputPath) . " " . 
                   escapeshellarg($inputPath);
        
        exec($command, $output, $returnCode);
        
        return $returnCode === 0;
    }
}
