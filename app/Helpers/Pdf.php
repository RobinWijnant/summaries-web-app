<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use App\Summary;
use Imagick;

class Pdf {

    public static function uploadPdf($pdfFile, Summary $summary) {
        $FileName = $summary->id . '.pdf';
        $directory = 'public/summaries/' . $summary->user->id . '/pdf';

        $path = Storage::putFileAs($directory, $pdfFile, $FileName);
        return $path;
    }

    public static function createThumbnailFromPdf($pdfPath, Summary $summary) {
        $PdfPath = storage_path('app/' . $pdfPath);
        $safeName =  $summary->id . '.jpg';
        $directory = 'public/summaries/' . $summary->user->id . '/thumbs';
        $newThumbPath = $directory . '/' . $safeName;

        $im = new Imagick();
        $im->readImage($PdfPath . '[0]');
        $im->setResolution(300, 300);
        $im->setImageBackgroundColor('white');
        $im->setImageAlphaChannel(11);
        $im->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);
        $im->setImageFormat('jpg');

        Storage::put($newThumbPath, $im);
    }

    public static function deletePdf($summary) {
        $fileName = $summary->id . '.pdf';
        $directory = 'public/summaries/' . $summary->user->id . '/pdf';
        $path = $directory . '/' . $fileName;

        Storage::delete($path);
    }

    public static function deleteThumbnail($summary) {
        $fileName = $summary->id . '.jpg';
        $directory = 'public/summaries/' . $summary->user->id . '/thumbs';
        $path = $directory . '/' . $fileName;

        Storage::delete($path);
    }

    public static function cleanUserDirectory($id) {
        $userDirectory = 'public/summaries/' . $id;
        $thumbsDirectory = $userDirectory . '/thumbs';
        $pdfDirectory = $userDirectory . '/pdf';
        
        if (count(Storage::files($thumbsDirectory)) === 0 && count(Storage::files($pdfDirectory)) === 0) {
            Storage::deleteDirectory($userDirectory);
        }
    }

    public static function getSafeFileName($fileName) {
        $safeName = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $fileName);
        //$safeName = str_replace(' ', '_', $safeName);
        return $safeName;
    }
}