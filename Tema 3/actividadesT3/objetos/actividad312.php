<?php 
// 312Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.

// Cambia la estructura de clases conforme al gráfico respetando todos los métodos que ya están hechos.
// Trabajador es una clase abstracta que ahora almacena los telefonos y donde calcularSueldo es un método abstracto de manera que:
// El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por hora.
// Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: salario + salario*edad/100

class Empleado extends trabajador {
    private static $sueldoTope = 8000;
    private $horasTrabajadas;
    private $precioPorHora;

    public function __construct($nombre, $apellidos, $edad, $sueldo=1000) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
        $this->telefonos = [];
    }

    public function setHorasTrabajadas($horasTrabajadas) {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function getHorasTrabajadas() {
        return $this->horasTrabajadas;
    }

    public function setPrecioPorHora($precioPorHora) {
        $this->precioPorHora = $precioPorHora;
    }

    public function getPrecioPorHora() {
        return $this->precioPorHora;
    }

    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $valor): void {
        self::$sueldoTope = $valor;
    }

    public function __toString(): string {
        return "Empleado: " . $this->getNombreCompleto() . " | Edad: " . $this->getEdad() . " | Sueldo: " . $this->getSueldo() . " | Teléfonos: " . implode(", ", $this->telefonos);
    }

    public static function calcularSueldo() {
        
    }

    public static function toHtml(Persona5 $p): String {
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

abstract class Trabajador extends Persona5 {
    private $telefonos = [];

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

    abstract public static function calcularSueldo();

    public function debePagarImpuestos(): bool {
        return $this->getEdad() > 21 && $this->calcularSueldo() > 3500;
    }
}

abstract class Persona5 {

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

    abstract public static function toHtml(Persona5 $p);
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

// Ahora con el método toString
echo "<h3> -- Ahora se mostrará usando el método toString -- </h3>";
echo $empleado1;
echo "<br>";
echo $empleado2;
?>