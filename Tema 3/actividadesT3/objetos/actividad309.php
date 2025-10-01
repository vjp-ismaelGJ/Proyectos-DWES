<!-- 309PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código necesario para mostrar y/o editar la edad cuando sea necesario. -->
<?php 

class Empleado extends Persona2 {
    private static $sueldoTope = 8000;
    private $sueldo;
    private $telefonos = [];

    public function __construct($nombre, $apellidos, $edad, $sueldo=1000) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
        $this->telefonos = [];
    }


    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $valor): void {
        self::$sueldoTope = $valor;
    }

    public function debePagarImpuestos(): bool {
        return $this->getEdad() > 21 && $this->sueldo > 3500;
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

}

class Persona2 {

    private $nombre;
    private $apellidos;
    private $edad;

    public function __construct($nombre, $apellidos, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
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

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getNombreCompleto(): String {
        return $this->nombre." ".$this->apellidos;
    }

    public static function toHtml(Persona2 $p): String {
        if ($p instanceof Empleado) {
            $html = "<p>Empleado: " . $p->getNombreCompleto() . " | Sueldo: " . $p->getSueldo() . " | Edad: " . $p->getEdad() . " --- " . ($p->debePagarImpuestos() ? "Debe pagar impuestos" : "No debe pagar impuestos") . "</p>";
            
            $html .= "<h4>Teléfonos: </h4><ol>";
            foreach ($p->getTelefonos() as $tlfn) {
                $html .= "<li>$tlfn</li>";
            }
            $html .= "</ol>";

            return $html;
        } else {
            return "<p>Persona: " . $p->getNombreCompleto() . " | Edad: " . $p->getEdad() . "</p>";
        }
    }
}

$empleado1 = new Empleado("Ismael", "Gil Jiménez", 22, 5000);
$empleado2 = new Empleado("Anakin", "Skywalker", 18, 3600);

// Añadir teléfonos
$empleado1->anyadirTelefono(123456789);
$empleado1->anyadirTelefono(564139771);

$empleado2->anyadirTelefono(987654321);
$empleado2->anyadirTelefono(123123123);

// Mostrar teléfonos antes de vaciar
echo "Empleado1 antes de vaciar: " . $empleado1->listarTelefonos() . "<br>";
echo "Empleado2 antes de vaciar: " . $empleado2->listarTelefonos() . "<br>";

// Vaciar teléfonos
$empleado1->vaciarTelefonos();
$empleado2->vaciarTelefonos();

// Mostrar teléfonos después de vaciar
echo "Empleado1 después de vaciar: '" . $empleado1->listarTelefonos() . "'<br>";
echo "Empleado2 después de vaciar: '" . $empleado2->listarTelefonos() . "'<br>";

// Añadir algunos teléfonos de nuevo
$empleado1->anyadirTelefono(555111222);
$empleado2->anyadirTelefono(444333222);
$empleado1->anyadirTelefono(154987643);

// Mostrar empleados en HTML
echo Empleado::toHtml($empleado1);
echo Empleado::toHtml($empleado2);

?>