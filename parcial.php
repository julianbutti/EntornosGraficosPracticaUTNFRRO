
- HTML / CSS
    (Imagen - Textos, titulos, botones, enlaces)
    https://place-hold.it/
        https://place-hold.it/300
    Reglas de css
    Css puro, float, etc / Grid bootstrap / flexbox
        CDN bootstrap - tailwind
- Arreglos PHP
    Multidimensionales
- Funciones 
    Definicion y llamada
- Sesiones
    Inicializarlas, actualizarlas, leerlas 
- Cookies
    Setearlas, leerlas
- Formularios
    Input text, email, number, date, textarea, submit, radio, checkbox ( name + valor )
    Acepto términos y condiciones <input type="checkbox" name="acepta" value="1" />
        $_POST['acepta'] -> 1
        $_POST['acepta'] empty o vacío o "" o 0 o false
- DB
    Conexion
    Consultas
        Verificar si algo existe. Por ejemplo si un producto id ya fue cargado, tirar una alerta 
        Recuperar todos los registros de una tabla y mostrarlos en una lista
        Buscador 
            $palabra_clave = $_GET["busqueda"];
            "select * from usuarios where 
                nombre LIKE '%".$palabra_clave."%' OR apellido LIKE '%".$palabra_clave."%' AND activo = 1;"
    Insertar, editar o eliminar registros
        - Siempre se supone que ya exista la DB
        Insertar datos que vengan de un formulario
- Validaciones
    isset !empty is_array is_numeric