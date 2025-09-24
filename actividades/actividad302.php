<?php 
// 302EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade una propiedad privada que almacene un array de números de teléfonos. Añade los siguientes métodos:
// public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
// public function listarTelefonos(): string → Muestra los teléfonos separados por comas
// public function vaciarTelefonos(): void → Elimina todos los teléfonos


class Empleado {
    private $nombre;
    private $apellidos;
    private $sueldo;
    private array $telefonos = [];

    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function getNombreCompleto(): String {
        return $this->nombre." ".$this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3500;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(", ",$this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
}

$empleado = new Empleado();
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Antes de vaciar: " . $empleado->listarTelefonos() . "\n";

$empleado->vaciarTelefonos();
echo "Después de vaciar: '" . $empleado->listarTelefonos() . "'"; // se verá vacío
?>