<?php
// 301Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:
// Obtener su nombre completo → getNombreCompleto(): string
// Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool


class Empleado {
    private $nombre;
    private $apellidos;
    private $sueldo;

    // Setter para nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;  // $this se refiere al objeto actual
    }

    // Getter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Setter para apellidos
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    // Getter para apellidos
    public function getApellidos() {
        return $this->apellidos;
    }

    // Setter para sueldo
    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    // Getter para sueldo
    public function getSueldo() {
        return $this->sueldo;
    } 
    
    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }


    public function debePagarImpuestos(): bool {
    return $this->sueldo > 3333;
    }

}

$empleado = new Empleado();
$empleado->setNombre("Ismael");
$empleado->setApellidos("Gil Jiménez");
$empleado->setSueldo(4440);

echo $empleado->getNombreCompleto();
echo " tiene un sueldo de ".$empleado->getSueldo()."€ por lo tanto ";
echo $empleado->debePagarImpuestos() ? "sí paga impuestos." : "no paga impuestos.";



?>