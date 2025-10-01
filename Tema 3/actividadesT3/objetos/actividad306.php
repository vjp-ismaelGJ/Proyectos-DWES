<?php 
// 306EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el siguiente método con una cadena HTML que muestre los datos de un empleado dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, deberás crear un getter para los teléfonos):

// public static function toHtml(Empleado $emp): string

class Empleado {
    private static $sueldoTope = 8000;
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

    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $valor): void {
        self::$sueldoTope = $valor;
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

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public static function toHtml(Empleado $emp): String {
        
        $html = "<p>Empleado: " . $emp->getNombreCompleto() . " | Sueldo: " . $emp->getSueldo() . "</p>";
        
        $html .= "<ol>";

        foreach ($emp->getTelefonos() as $tlfn) {
            $html .= "<li>$tlfn</li>";
        }
        $html .= "</ol>";

        return $html;
    }

}

$empleado = new Empleado("Ismael", "Gil Jiménez", Empleado::getSueldoTope());
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Antes de vaciar: " . $empleado->listarTelefonos() . "\n";

$empleado->vaciarTelefonos();

echo " |  Después de vaciar: '" . $empleado->listarTelefonos() . "'";

$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);
$empleado->anyadirTelefono(564139771);

echo Empleado::toHtml($empleado);

?>