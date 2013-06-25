<?php $TRANSLATIONS = array(
"Failed to clear the mappings." => "Hubo un error al borrar las asignaciones.",
"Failed to delete the server configuration" => "Fallo al borrar la configuración del servidor",
"The configuration is valid and the connection could be established!" => "La configuración es válida y la conexión pudo ser establecida.",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "La configuración es válida, pero el enlace falló. Por favor, comprobá la configuración del servidor y las credenciales.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "La configuración no es válida. Por favor, buscá en el log de ownCloud más detalles.",
"Deletion failed" => "Error al borrar",
"Take over settings from recent server configuration?" => "Tomar los valores de la anterior configuración de servidor?",
"Keep settings?" => "¿Mantener preferencias?",
"Cannot add server configuration" => "No se pudo añadir la configuración del servidor",
"mappings cleared" => "Asignaciones borradas",
"Success" => "Éxito",
"Error" => "Error",
"Connection test succeeded" => "El este de conexión ha sido completado satisfactoriamente",
"Connection test failed" => "Falló es test de conexión",
"Do you really want to delete the current Server Configuration?" => "¿Realmente desea borrar la configuración actual del servidor?",
"Confirm Deletion" => "Confirmar borrado",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Advertencia:</b> Los Apps user_ldap y user_webdavauth son incompatibles.  Puede que experimente un comportamiento inesperado. Pregunte al administrador del sistema para desactivar uno de ellos.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Atención:</b> El módulo PHP LDAP no está instalado, este elemento no va a funcionar. Por favor, pedile al administrador que lo instale.",
"Server configuration" => "Configuración del Servidor",
"Add Server Configuration" => "Añadir Configuración del Servidor",
"Host" => "Servidor",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Podés omitir el protocolo, excepto si SSL es requerido. En ese caso, empezá con ldaps://",
"Base DN" => "DN base",
"One Base DN per line" => "Una DN base por línea",
"You can specify Base DN for users and groups in the Advanced tab" => "Podés especificar el DN base para usuarios y grupos en la pestaña \"Avanzado\"",
"User DN" => "DN usuario",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "El DN del usuario cliente con el que se hará la asociación, p.ej. uid=agente,dc=ejemplo,dc=com. Para acceso anónimo, dejá DN y contraseña vacíos.",
"Password" => "Contraseña",
"For anonymous access, leave DN and Password empty." => "Para acceso anónimo, dejá DN y contraseña vacíos.",
"User Login Filter" => "Filtro de inicio de sesión de usuario",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Define el filtro a aplicar cuando se ha realizado un login. %%uid remplazará el nombre de usuario en el proceso de inicio de sesión.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "usar %%uid como plantilla, p. ej.: \"uid=%%uid\"",
"User List Filter" => "Lista de filtros de usuario",
"Defines the filter to apply, when retrieving users." => "Define el filtro a aplicar, cuando se obtienen usuarios.",
"without any placeholder, e.g. \"objectClass=person\"." => "Sin plantilla, p. ej.: \"objectClass=person\".",
"Group Filter" => "Filtro de grupo",
"Defines the filter to apply, when retrieving groups." => "Define el filtro a aplicar cuando se obtienen grupos.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "Sin ninguna plantilla, p. ej.: \"objectClass=posixGroup\".",
"Connection Settings" => "Configuración de Conección",
"Configuration Active" => "Configuración activa",
"When unchecked, this configuration will be skipped." => "Si no está seleccionada, esta configuración será omitida.",
"Port" => "Puerto",
"Backup (Replica) Host" => "Host para copia de seguridad (réplica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Dar un servidor de copia de seguridad opcional. Debe ser una réplica del servidor principal LDAP/AD.",
"Backup (Replica) Port" => "Puerto para copia de seguridad (réplica)",
"Disable Main Server" => "Deshabilitar el Servidor Principal",
"When switched on, ownCloud will only connect to the replica server." => "Al comenzar, ownCloud se conectará únicamente al servidor réplica",
"Use TLS" => "Usar TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "No usar adicionalmente para conexiones LDAPS, las mismas fallarán",
"Case insensitve LDAP server (Windows)" => "Servidor de LDAP sensible a mayúsculas/minúsculas (Windows)",
"Turn off SSL certificate validation." => "Desactivar la validación por certificado SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Si la conexión sólo funciona con esta opción, importá el certificado SSL del servidor LDAP en tu servidor ownCloud.",
"Not recommended, use for testing only." => "No recomendado, sólo para pruebas.",
"Cache Time-To-Live" => "Tiempo de vida del caché",
"in seconds. A change empties the cache." => "en segundos. Cambiarlo vacía la cache.",
"Directory Settings" => "Configuración de Directorio",
"User Display Name Field" => "Campo de nombre de usuario a mostrar",
"The LDAP attribute to use to generate the user`s ownCloud name." => "El atributo LDAP a usar para generar el nombre de usuario de ownCloud.",
"Base User Tree" => "Árbol base de usuario",
"One User Base DN per line" => "Una DN base de usuario por línea",
"User Search Attributes" => "Atributos de la búsqueda de usuario",
"Optional; one attribute per line" => "Opcional; un atributo por linea",
"Group Display Name Field" => "Campo de nombre de grupo a mostrar",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "El atributo LDAP a usar para generar el nombre de los grupos de ownCloud.",
"Base Group Tree" => "Árbol base de grupo",
"One Group Base DN per line" => "Una DN base de grupo por línea",
"Group Search Attributes" => "Atributos de búsqueda de grupo",
"Group-Member association" => "Asociación Grupo-Miembro",
"Special Attributes" => "Atributos Especiales",
"Quota Field" => "Campo de cuota",
"Quota Default" => "Cuota por defecto",
"in bytes" => "en bytes",
"Email Field" => "Campo de e-mail",
"User Home Folder Naming Rule" => "Regla de nombre de los directorios de usuario",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Vacío para el nombre de usuario (por defecto). En otro caso, especificá un atributo LDAP/AD.",
"Internal Username" => "Nombre interno de usuario",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder in ownCloud. It is also a port of remote URLs, for instance for all *DAV services. With this setting, the default behaviour can be overriden. To achieve a similar behaviour as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users." => "Por defecto, el nombre interno de usuario va a ser creado a partir del atributo UUID. Esto asegura que el nombre de usuario es único y los caracteres no necesitan ser convertidos. Para el nombre de usuario interno sólo se pueden usar estos caracteres: [a-zA-Z0-9_.@-]. Otros caracteres son sustituidos por su correspondiente en ASCII o simplemente omitidos. Si ocurrieran colisiones, un número será añadido o incrementado. El nombre interno de usuario se usa para identificar un usuario internamente. Es también el nombre por defecto para el directorio personal del usuario in ownCloud. También es un puerto de URLs remotas, por ejemplo, para todos los servicios *DAV. Con esta configuración el comportamiento por defecto puede ser cambiado. Para conseguir un comportamiento similar al anterior a ownCloud 5, ingresá el atributo del nombre en pantalla del usuario en el siguiente campo. Dejalo vacío para el comportamiento por defecto. Los cambios solo tendrán efecto para los nuevos usuarios LDAP.",
"Internal Username Attribute:" => "Atributo Nombre Interno de usuario:",
"Override UUID detection" => "Sobrescribir la detección UUID",
"By default, ownCloud autodetects the UUID attribute. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Por defecto, ownCloud detecta automáticamente el atributo UUID. El atributo UUID se usa para identificar indudablemente usuarios y grupos LDAP. Además, el nombre de usuario interno va a ser creado en base al UUID, si no ha sido especificado otro comportamiento arriba. Podés sobrescribir la configuración y pasar un atributo de tu elección. Tenés que asegurarte de que el atributo de tu elección sea accesible por los usuarios y grupos y ser único. Dejalo en blanco para usar el comportamiento por defecto. Los cambios tendrán efecto sólo en los nuevos usuarios y grupos de LDAP.",
"UUID Attribute:" => "Atributo UUID:",
"Username-LDAP User Mapping" => "Asignación del Nombre de usuario de un usuario LDAP",
"ownCloud uses usernames to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from ownCloud username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found by ownCloud. The internal ownCloud name is used all over in ownCloud. Clearing the Mappings will have leftovers everywhere. Clearing the Mappings is not configuration sensitive, it affects all LDAP configurations! Do never clear the mappings in a production environment. Only clear mappings in a testing or experimental stage." => "ownCloud usa nombres de usuario para almacenar y asignar (meta) datos. Con el fin de identificar con precisión y reconocer usuarios, cada usuario LDAP tendrá un nombre de usuario interno. Esto requiere una asignación de nombre de usuario de ownCloud a usuario LDAP. El nombre de usuario creado se asigna al UUID del usuario LDAP. Además el DN se almacena en caché principalmente para reducir la interacción de LDAP, pero no se utiliza para la identificación. Si la DN cambia, los cambios serán encontrados por ownCloud. El nombre interno de ownCloud se utiliza para todo en ownCloud. Borrar las asignaciones dejará restos en distintos lugares. Borrar las asignaciones no depende de la configuración, ¡afecta a todas las configuraciones de LDAP! No borrar nunca las asignaciones en un entorno de producción. Sólo borrar asignaciones en una situación de prueba o experimental.",
"Clear Username-LDAP User Mapping" => "Borrar la asignación de los Nombres de usuario de los usuarios LDAP",
"Clear Groupname-LDAP Group Mapping" => "Borrar la asignación de los Nombres de grupo de los grupos de LDAP",
"Test Configuration" => "Probar configuración",
"Help" => "Ayuda"
);
