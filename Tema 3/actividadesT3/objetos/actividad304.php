<?php 

// 304EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y modifica el código para utilizar la constante.



class Empleado {
    public const SUELDO_TOPE = 8000;
    private $nombre;
    private $apellidos;
    private $sueldo;
    private $telefonos = [];

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

$empleado = new Empleado("Ismael", "Gil Jiménez", Empleado::SUELDO_TOPE);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Antes de vaciar: " . $empleado->listarTelefonos() . "\n";

$empleado->vaciarTelefonos();
echo "Después de vaciar: '" . $empleado->listarTelefonos() . "'"; // se verá vacío

?>