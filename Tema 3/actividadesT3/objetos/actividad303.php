<?php 

// 303EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan mediante el constructor (utiliza la sintaxis de PHP7). Si el constructor recibe un tercer parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo inicial.

class Empleado {
    private $nombre;
    private $apellidos;
    private $sueldo;
    private array $telefonos = [];

    public function __construct($nombre, $apellidos, $sueldo=1000) {
        $this->telefonos = [];
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
        
    }
    
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
        $this->telefonos[] = $telefono;  // Añade al final del array un enterro
    }

    public function listarTelefonos(): string {
        return implode(", ",$this->telefonos);
        // $aux = "";
        // foreach ($this->telefonos as $numero) {
        //     $aux .= $numero + " \n";
        // }
        // return $aux;
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

}

$empleado = new Empleado("Ismael", "Gil Jiménez", 4000);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Antes de vaciar: " . $empleado->listarTelefonos() . "\n";

$empleado->vaciarTelefonos();
echo "Después de vaciar: '" . $empleado->listarTelefonos() . "'"; // se verá vacío

?>