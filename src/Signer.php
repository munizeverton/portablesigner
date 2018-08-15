<?php

namespace munizeverton\PortableSigner;

class Signer
{
    public static function signPdfFile($inputFile, $outputFile, $certificateFile, $password)
    {
        exec('java -jar ' . PortableSigner::BIN . " -n -t {$inputFile} -o {$outputFile} -s {$certificateFile} -p {$password}");
    }
}