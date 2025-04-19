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

private function decryptId(string $token): string
{
    $key = self::ENCRYPTEQR_SECRET_KEY;
    $iv  = substr(hash('sha256', self::ENCRYPTEQR_SECRET_IV), 0, 16);
    return openssl_decrypt($token, self::ENCRYPTEQR_METHOD, $key, 0, $iv);
}





    public function index() {
        return view('escaner/escaner');
    }
    public function buscarId()
    {
        $m = new ParticipantesHortensias();

        $token = $this->request->getVar('id');           // llega cifrado
        $id    = $this->decryptId(urldecode($token));    // id real

        log_message('info', "Token recibido: {$token}");
        log_message('info', "ID descifrado: {$id}");

        return $this->response->setJSON($m->buscarId($id));
    }

    public function actualizarAsistencia() {
        $id = $this->request->getVar('id');
        (new ParticipantesHortensias())->actualizarRegistro($id, ['Asistencia'=>'1']);
    }
}
