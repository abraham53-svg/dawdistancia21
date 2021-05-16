 <?php //Ejemplo
/**
 * funcion para devolver una cadena
 *
 * @param string $texto es una cadena de caracteres pasada por parametro
 * @return void
 * @author abraham
 * @version 0.0
 * @access private 
 * @param string $clave contraseña que no se ve 
*/
function mostrarTexto($texto) {
echo "<strong>El texto a mostrar es el siguiente: </strong>";
echo $texto;
}
/**
 * @devuelve el resultado de la operacion
 *
 * @param integer $n1
 * @param integer $n2
 * @param integer $operacion
 * @return integer $resultado
 * @author abraham
 * @version 0.0
 * @access private
 * @param boolean $confirmado no se ve
*/
function operaciones($n1, $n2, $operacion) {
$resultado = 0;
if($operacion == "Sumar") {
$resultado = $n1 + $n2;
}else if($operacion == "Restar") {
$resultado = $n1 - $n2;
}else if($operacion == "Multiplicar") {
$resultado = $n1 * $n2;
}
return $resultado; // Devolver el resultado
}
function bar(){
echo "se imprime este texto";
}
/**
 * Aquí empezamos a invocar funciones
 * @access public
*/
echo mostrarTexto("Tarea unidad 5 despliegue de aplicaciones web");
echo "<br>";
$r = operaciones(5, 7, "Sumar");
echo "Resultado operacion:". $r . "<br>";
bar();
?>
