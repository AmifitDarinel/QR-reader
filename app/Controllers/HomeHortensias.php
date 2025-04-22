<?php
namespace App\Controllers;

use App\Models\ParticipantesHortensias;
class HomeHortensias extends BaseController
{
// --- cifrado QR ---
// 1) NUEVAS CONSTANTES PARA QR ENCRYPT:
private const ENCRYPTEQR_METHOD  = 'AES-256-CBC';
private const ENCRYPTEQR_SECRET_KEY = 'm1S3cret0QRP4r4ElCl13nt3';  // 32 caracteres exactos
private const ENCRYPTEQR_SECRET_IV  = 'ivSecretQRAqui16b'; // 16 caracteres exactos

     private function decryptId(string $token): ?string
     {
         $key = self::ENCRYPTEQR_SECRET_KEY;
         $iv  = substr(hash('sha256', self::ENCRYPTEQR_SECRET_IV), 0, 16);

         $token = strtr($token, '-_', '+/');
         $pad   = 4 - (strlen($token) % 4);
         if ($pad < 4) $token .= str_repeat('=', $pad);

         $plain = openssl_decrypt($token, self::ENCRYPTEQR_METHOD, $key, 0, $iv);
         return $plain === false ? null : $plain;
     }





    public function index() {
        return view('escaner/escaner');
    }



public function buscarId()
{
    $token = (string) $this->request->getVar('id');           // viene url‑safe
    log_message('info', "DECRYPTEQR → token recibido: {$token}");

    $token = str_replace(' ', '+', $token);

    $id = $this->decryptId($token);
    log_message('info', "DECRYPTEQR → id descifrado: {$id}");

    if ($id === null || $id === '') {
        return $this->response->setJSON(0);   // el front interpreta 0 como “no existe”
    }

    $fila = (new ParticipantesHortensias())->buscarId($id);
    return $this->response->setJSON($fila ?: 0);
}



    public function actualizarAsistencia() {
        $id = $this->request->getVar('id');
        (new ParticipantesHortensias())->actualizarRegistro($id, ['Asistencia'=>'1']);
    }
}
