# Checklist de entrega de proyecto — Entornos Gráficos (UTN)

Antes de entregar, revisá **cada punto** de esta lista. Si algo no se cumple, el proyecto no está listo para ser corregido.

> Regla general: el corrector no conoce tu sistema, debes suponer que no va a leer tu código para entender cómo funciona y no va a instalar nada. Si algo no se puede probar en 5 minutos desde el navegador, no existe.

---

## 1. Despliegue y acceso

- [ ] El sistema está subido a un hosting y es accesible desde el navegador con una URL pública.
- [ ] La URL funciona desde cualquier red y dispositivo (probalo desde el celular con datos, no desde tu wifi).
- [ ] El sitio carga sin errores de certificado ni advertencias del navegador (HTTPS).
- [ ] No quedan páginas rotas, links muertos ni rutas que devuelvan error 404 / 500.
- [ ] Los archivos estáticos (imágenes, CSS, JS) cargan bien en producción, no solo en local.
- [ ] El entorno de producción usa la base de datos de producción, no la de tu máquina.

## 2. Repositorio

- [ ] El repositorio es público y la URL está incluida en la entrega.
- [ ] Tiene un `README.md` con: qué hace el sistema, URL de producción, tecnologías usadas, integrantes del grupo y usuarios de prueba.
- [ ] Historial de commits real y distribuido entre los integrantes (no un único commit "final").
- [ ] Mensajes de commit entendibles.
- [ ] Hay un `.gitignore` correcto: **no** están subidos `vendor/`, `node_modules/`, `.env`, ni archivos temporales.
- [ ] **No hay credenciales, claves de API ni contraseñas en el código.**
- [ ] La rama principal es la que corresponde a lo entregado y está actualizada.

## 3. Se puede testear sin instrucciones

- [ ] Existe al menos un usuario de prueba con su contraseña documentado en el README.
- [ ] Si hay roles (admin, usuario, etc.), hay un usuario de prueba por cada rol.
- [ ] Hay datos de prueba cargados: el sistema no debe abrirse vacío.
- [ ] El registro de un usuario nuevo funciona de punta a punta.
- [ ] Cualquier flujo importante se puede completar sin que nadie te explique nada.

## 4. Emails

- [ ] El email de registro / confirmación de cuenta **llega efectivamente** a la casilla.
- [ ] El email de recuperación de contraseña **llega** y el link funciona.
- [ ] Los links dentro de los emails apuntan al dominio de producción, no a `localhost`.
- [ ] Los emails no caen en spam (probalo con al menos dos proveedores distintos, ej. Gmail y Outlook).
- [ ] El contenido del email está en español y sin textos de plantilla sin reemplazar (`{{nombre}}`, "Lorem ipsum", etc.).
- [ ] El remitente es identificable (no "no-reply@algo-raro").

## 5. Navegación y usabilidad

- [ ] Un usuario que no conoce el sistema entiende qué hacer al entrar.
- [ ] Todas las pantallas son alcanzables desde el menú o desde algún flujo lógico. No hay pantallas "huérfanas" que solo se llegan escribiendo la URL.
- [ ] Siempre se puede volver atrás o a la pantalla principal.
- [ ] Los botones y links dicen qué hacen ("Guardar cambios", no "Enviar").
- [ ] El estado actual es visible: se sabe si estás logueado, en qué sección estás y con qué usuario.
- [ ] Las acciones destructivas (borrar) piden confirmación.
- [ ] Después de cada acción hay feedback: mensaje de éxito o de error.
- [ ] Las listas vacías muestran un mensaje ("Todavía no hay pedidos"), no una tabla en blanco.

## 6. Idioma y textos

- [ ] **Todos** los textos visibles están en español: botones, títulos, menús, placeholders.
- [ ] Los mensajes de validación están en español ("El email es obligatorio", no "This field is required").
- [ ] Las alertas y mensajes de error del framework están traducidos o interceptados.
- [ ] Los mensajes de error de la base de datos nunca se muestran crudos al usuario.
- [ ] Sin faltas de ortografía ni textos de prueba ("asdasd", "probando 123").
- [ ] Fechas, números y moneda en formato local.

## 7. Formularios y validaciones

- [ ] Todos los campos obligatorios están validados **en el servidor** (no solo en el navegador).
- [ ] Los errores se muestran al lado del campo que falla y no se pierde lo que el usuario ya cargó.
- [ ] Emails, números y fechas se validan con su formato.
- [ ] No se puede romper el sistema mandando datos vacíos, muy largos o con caracteres raros.
- [ ] No se puede enviar el mismo formulario dos veces por doble clic.

## 8. Seguridad mínima

- [ ] Las contraseñas están hasheadas en la base de datos, nunca en texto plano.
- [ ] Las páginas privadas no se pueden abrir sin estar logueado (probá pegando la URL directa en una ventana de incógnito).
- [ ] Un usuario no puede ver ni editar datos de otro usuario cambiando el ID en la URL.
- [ ] Las consultas usan sentencias preparadas (nada de concatenar SQL).
- [ ] El contenido cargado por usuarios se escapa al mostrarlo (sin XSS).
- [ ] El logout funciona y cierra realmente la sesión.

## 9. Visual y responsive

- [ ] Se ve bien en celular, tablet y escritorio.
- [ ] Nada se superpone, se corta ni requiere scroll horizontal.
- [ ] Estilo consistente entre pantallas (colores, tipografías, botones).
- [ ] Las imágenes tienen tamaño razonable y `alt`.
- [ ] Contraste suficiente para leer los textos.

## 10. Última pasada antes de entregar

- [ ] La consola del navegador no muestra errores en rojo.
- [ ] No quedan `var_dump`, `console.log`, `dd()` ni mensajes de debug visibles.
- [ ] El modo debug está apagado en producción.
- [ ] Recorriste el sistema completo desde cero, en una ventana de incógnito, como si fueras un usuario nuevo.
- [ ] **Se lo hiciste probar a alguien ajeno al grupo** y pudo usarlo sin ayuda.
- [ ] La entrega incluye: URL de producción, URL del repositorio, usuarios de prueba e integrantes.
- [ ] Entregado en tiempo y forma según lo pedido en la consigna.

---

*Si un ítem no aplica a tu proyecto, dejalo marcado y aclaralo en el README.*