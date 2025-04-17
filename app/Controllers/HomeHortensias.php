<?php
namespace App\Controllers;

use App\Models\ParticipantesHortensias;
class HomeHortensias extends BaseController
{
    public function index() {
        return view('escaner/escaner');
    }
    public function buscarId() {
        $m = new ParticipantesHortensias();
        $id = $this->request->getVar('id');
        return $this->response->setJSON($m->buscarId($id));
    }
    public function actualizarAsistencia() {
        $id = $this->request->getVar('id');
        (new ParticipantesHortensias())->actualizarRegistro($id, ['Asistencia'=>'1']);
    }
}
