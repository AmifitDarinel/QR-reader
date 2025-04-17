<?php

namespace App\Models;

use CodeIgniter\Model;

class participantesHortensias extends Model
{
    protected $tableModulos = 'modulos';
    protected $tablePaseDoble = 'pasedoble';
    protected $tableCupones = 'cupones';
    protected $tableParticipantes = 'participantes';
    protected $tableClientes = 'Clientes';
    protected $campoModulo = 'Modulo';
    protected $campoRegistro = 'Registro';
    protected $hortensias;


    // METODO QUE CONSULTA QUE EL STATUS DEL MODULO

    public function actualizarRegistro($id, $data)
    {
        $cancelarRegistro = $this->db->table($this->tableParticipantes)
            ->where('Id', $id);
        return $cancelarRegistro->update($data);
    }

    public function buscarId($id)
    {
        /*
        $infoRegistro = $this->hortensias->table($this->tableParticipantes)
        ->where('Id', $id)
        ->get()->getResultArray();

        if ($infoRegistro != null){
            return $infoRegistro;
        } else {
            return 0;
        }
        */
        $infoRegistro = $this->db->table($this->tableParticipantes)
        ->where('Id', $id)
        ->orWhere('Correo', $id)
        ->orLike('Nombre', $id)
        ->get(1)->getResultArray();

        if ($infoRegistro != null){
            return $infoRegistro;
        } else {
            return 0;
        }
    }

}
