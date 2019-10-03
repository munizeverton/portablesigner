[![Total Downloads](https://poser.pugx.org/munizeverton/portablesigner/downloads)](https://packagist.org/packages/munizeverton/portablesigner)

# PortableSigner
Assina digitalmente um arquivo PDF, a partir de um certificado digital do tipo A1

Para isso, é usada a ferramenta [Portable Signer](http://portablesigner.sourceforge.net/).

Exemplo de uso:

```
$tempFile = 'path/file.pdf';
$tempSignedFile = 'path/newfile.pdf';
$certificateFile = 'path/certificate.pfx';
$certificatePassword = 'secret';

Signer::signPdfFile($tempFile, $tempSignedFile, $certificateFile, $certificatePassword);
```
