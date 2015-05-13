OC.L10N.register(
    "user_ldap",
    {
    "Failed to clear the mappings." : "Erreur lors de la suppression des associations.",
    "Failed to delete the server configuration" : "Échec de la suppression de la configuration du serveur",
    "The configuration is valid and the connection could be established!" : "La configuration est valide et la connexion peut être établie !",
    "The configuration is valid, but the Bind failed. Please check the server settings and credentials." : "La configuration est valable, mais le bind a échoué. Veuillez vérifier les paramètres du serveur ainsi que vos identifiants de connexion.",
    "The configuration is invalid. Please have a look at the logs for further details." : "La configuration n'est pas valable. Veuillez consulter les logs pour plus de détails.",
    "No action specified" : "Aucune action spécifiée",
    "No configuration specified" : "Aucune configuration spécifiée",
    "No data specified" : "Aucune donnée spécifiée",
    " Could not set configuration %s" : "Impossible de spécifier la configuration %s",
    "Action does not exist" : "L'action n'existe pas",
    "Configuration incorrect" : "Configuration incorrecte",
    "Configuration incomplete" : "Configuration incomplète",
    "Configuration OK" : "Configuration OK",
    "Select groups" : "Sélectionnez les groupes",
    "Select object classes" : "Sélectionner les classes d'objet",
    "Please check the credentials, they seem to be wrong." : "Veuillez vérifier vos informations d'identification",
    "Please specify the port, it could not be auto-detected." : "Veuillez spécifier le port, il n'a pu être détecté automatiquement",
    "Base DN could not be auto-detected, please revise credentials, host and port." : "Le DN de base n'a pu être détecté automatiquement. Vérifiez les informations d'identification, l'hôte et le port.",
    "Could not detect Base DN, please enter it manually." : "Impossible de détecter le DN de base, veuillez le spécifier manuellement",
    "{nthServer}. Server" : "{nthServer}. Serveur",
    "No object found in the given Base DN. Please revise." : "Aucun objet trouvé dans le DN de base spécifié. Veuillez le vérifier.",
    "More than 1.000 directory entries available." : "Il y a plus de 1000 entrées de répertoire disponibles.",
    " entries available within the provided Base DN" : "entrées disponibles dans le DN de base spécifié",
    "An error occurred. Please check the Base DN, as well as connection settings and credentials." : "Une erreur est survenue. Veuillez vérifier le DN de base, ainsi que les paramètres de connexion et les informations d'identification",
    "Do you really want to delete the current Server Configuration?" : "Êtes-vous vraiment sûr de vouloir effacer la configuration actuelle du serveur ?",
    "Confirm Deletion" : "Confirmer la suppression",
    "Mappings cleared successfully!" : "Associations supprimées avec succès !",
    "Error while clearing the mappings." : "Erreur lors de la suppression des associations.",
    "Saving failed. Please make sure the database is in Operation. Reload before continuing." : "La sauvegarde a échoué. Veuillez vérifier que la base de données est opérationnelle. Rechargez avant de poursuivre.",
    "Switching the mode will enable automatic LDAP queries. Depending on your LDAP size they may take a while. Do you still want to switch the mode?" : "Changer de mode activera les requêtes LDAP automatiques. Selon la taille de votre annuaire LDAP, cela peut prendre du temps. Voulez-vous toujours changer de mode ?",
    "Mode switch" : "Changer de mode",
    "Select attributes" : "Sélectionner les attributs",
    "User not found. Please check your login attributes and username. Effective filter (to copy-and-paste for command line validation): <br/>" : "Utilisateur introuvable. Veuillez vérifier les attributs de login et le nom d'utilisateur. Filtre effectif (à copier-coller pour valider en ligne de commande):<br/>",
    "User found and settings verified." : "Utilisateur trouvé et paramètres vérifiés.",
    "Settings verified, but one user found. Only the first will be able to login. Consider a more narrow filter." : "Paramètres vérifiés, mais seul le premier utilisateur pourra se connecter. Considérez utiliser un filtre plus restrictif.",
    "An unspecified error occurred. Please check the settings and the log." : "Une erreur non spécifiée s'est produite. Veuillez vérifier les paramètres et le log.",
    "The search filter is invalid, probably due to syntax issues like uneven number of opened and closed brackets. Please revise." : "Le filtre de recherche n'est pas valide, probablement à cause de problèmes de syntaxe tels que des parenthèses manquantes. Veuillez le corriger.",
    "A connection error to LDAP / AD occurred, please check host, port and credentials." : "Une erreur s'est produite à la connexion au LDAP / AD. Veuillez vérifier l'hôte, le port et les informations d'identification.",
    "The %uid placeholder is missing. It will be replaced with the login name when querying LDAP / AD." : "La chaîne %uid est manquante. Cette chaîne est remplacée par l'identifiant de connexion lors des requêtes LDAP / AD.",
    "Please provide a login name to test against" : "Veuillez indiquer un identifiant de connexion avec lequel tester.",
    "The group box was disabled, because the LDAP / AD server does not support memberOf." : "Les groupes sont désactivés car le serveur LDAP / AD ne prend pas en charge memberOf.",
    "_%s group found_::_%s groups found_" : ["%s groupe trouvé","%s groupes trouvés"],
    "_%s user found_::_%s users found_" : ["%s utilisateur trouvé","%s utilisateurs trouvés"],
    "Could not detect user display name attribute. Please specify it yourself in advanced ldap settings." : "Impossible de détecter l'attribut contenant le nom d'affichage des utilisateurs. Veuillez l'indiquer vous-même dans les paramètres ldap avancés.",
    "Could not find the desired feature" : "Impossible de trouver la fonction souhaitée",
    "Invalid Host" : "Hôte non valide",
    "Server" : "Serveur",
    "Users" : "Utilisateurs",
    "Login Attributes" : "Attributs de login",
    "Groups" : "Groupes",
    "Test Configuration" : "Tester la configuration",
    "Help" : "Aide",
    "Groups meeting these criteria are available in %s:" : "Les groupes respectant ces critères sont disponibles dans %s :",
    "Only these object classes:" : "Seulement ces classes d'objets :",
    "Only from these groups:" : "Seulement dans ces groupes :",
    "Search groups" : "Chercher dans les groupes",
    "Available groups" : "Chercher dans les utilisateurs",
    "Selected groups" : "Groupes sélectionnés",
    "Edit LDAP Query" : "Modifier la requête LDAP",
    "LDAP Filter:" : "Filtre LDAP :",
    "The filter specifies which LDAP groups shall have access to the %s instance." : "Le filtre spécifie quels groupes LDAP ont accès à l'instance %s.",
    "Verify settings and count groups" : "Vérifier les paramètres et compter les groupes",
    "When logging in, %s will find the user based on the following attributes:" : "Au login, %s cherchera l'utilisateur sur base de ces attributs :",
    "LDAP / AD Username:" : "Nom d'utilisateur LDAP / AD :",
    "Allows login against the LDAP / AD username, which is either uid or samaccountname and will be detected." : "Autoriser le login avec le nom d'utilisateur LDAP / AD (uid ou samaccountname, la détection est automatique). ",
    "LDAP / AD Email Address:" : "Adresse mail LDAP / AD :",
    "Allows login against an email attribute. Mail and mailPrimaryAddress will be allowed." : "Autoriser le login avec une adresse mail. Mail et mailPrimaryAddress sont autorisés.",
    "Other Attributes:" : "Autres attributs :",
    "Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" : "Définit le filtre à appliquer lors d'une tentative de connexion. %%uid remplace le nom d'utilisateur. Exemple : \"uid=%%uid\"",
    "Test Loginname" : "Loginname de test",
    "Verify settings" : "Tester les paramètres",
    "1. Server" : "1. Serveur",
    "%s. Server:" : "%s. Serveur :",
    "Host" : "Hôte",
    "You can omit the protocol, except you require SSL. Then start with ldaps://" : "Vous pouvez omettre le protocole, sauf si vous avez besoin de SSL. Dans ce cas, préfixez avec ldaps://",
    "Port" : "Port",
    "Detect Port" : "Détecter le port",
    "User DN" : "DN Utilisateur",
    "The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." : "DN de l'utilisateur client pour lequel la liaison doit se faire, par exemple uid=agent,dc=example,dc=com. Pour un accès anonyme, laisser le DN et le mot de passe vides.",
    "Password" : "Mot de passe",
    "For anonymous access, leave DN and Password empty." : "Pour un accès anonyme, laisser le DN utilisateur et le mot de passe vides.",
    "One Base DN per line" : "Un DN de base par ligne",
    "You can specify Base DN for users and groups in the Advanced tab" : "Vous pouvez spécifier les DN de base de vos utilisateurs et groupes via l'onglet Avancé",
    "Detect Base DN" : "Détecter le DN de base",
    "Test Base DN" : "Tester le DN de base",
    "Avoids automatic LDAP requests. Better for bigger setups, but requires some LDAP knowledge." : "Évite les requêtes LDAP automatiques. Mieux pour les installations de grande ampleur, mais demande des connaissances en LDAP.",
    "Manually enter LDAP filters (recommended for large directories)" : "Entrée manuelle des filtres LDAP (recommandé pour les annuaires de grande ampleur)",
    "Limit %s access to users meeting these criteria:" : "Limiter l'accès à %s aux utilisateurs respectant ces critères :",
    "The most common object classes for users are organizationalPerson, person, user, and inetOrgPerson. If you are not sure which object class to select, please consult your directory admin." : "Les classes d'objets fréquentes pour les utilisateurs sont : organizationalPerson, person, user et inetOrgPerson. Si vous n'êtes pas sûr de la classe à utiliser, demandez à l'administrateur de l'annuaire.",
    "The filter specifies which LDAP users shall have access to the %s instance." : "Le filtre spécifie quels utilisateurs LDAP doivent avoir accès à l'instance %s.",
    "Verify settings and count users" : "Vérifier les paramètres et compter les utilisateurs",
    "Saving" : "Enregistrement...",
    "Back" : "Retour",
    "Continue" : "Poursuivre",
    "LDAP" : "LDAP",
    "Expert" : "Expert",
    "Advanced" : "Avancé",
    "<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." : "<b>Avertissement :</b> Les applications user_ldap et user_webdavauth sont incompatibles. Des dysfonctionnements peuvent survenir. Contactez votre administrateur système pour qu'il en désactive une.",
    "<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." : "<b>Attention :</b> Le module php LDAP n'est pas installé, par conséquent cette extension ne pourra fonctionner. Veuillez contacter votre administrateur système afin qu'il l'installe.",
    "Connection Settings" : "Paramètres de connexion",
    "Configuration Active" : "Configuration active",
    "When unchecked, this configuration will be skipped." : "Lorsque non cochée, la configuration sera ignorée.",
    "Backup (Replica) Host" : "Serveur de backup (réplique)",
    "Give an optional backup host. It must be a replica of the main LDAP/AD server." : "Fournir un serveur de backup optionnel.  Il doit s'agir d'une réplique du serveur LDAP/AD principal.",
    "Backup (Replica) Port" : "Port du serveur de backup (réplique)",
    "Disable Main Server" : "Désactiver le serveur principal",
    "Only connect to the replica server." : "Se connecter uniquement à la réplique",
    "Case insensitive LDAP server (Windows)" : "Serveur LDAP insensible à la casse (Windows)",
    "Turn off SSL certificate validation." : "Désactiver la validation des certificats SSL.",
    "Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." : "Non recommandé, à utiliser à des fins de tests uniquement. Si la connexion ne fonctionne qu'avec cette option, importez le certificat SSL du serveur LDAP dans le serveur %s.",
    "Cache Time-To-Live" : "Durée de vie du cache (TTL)",
    "in seconds. A change empties the cache." : "en secondes. Tout changement vide le cache.",
    "Directory Settings" : "Paramètres du répertoire",
    "User Display Name Field" : "Champ \"nom d'affichage\" de l'utilisateur",
    "The LDAP attribute to use to generate the user's display name." : "L'attribut LDAP utilisé pour générer le nom d'affichage de l'utilisateur.",
    "Base User Tree" : "DN racine de l'arbre utilisateurs",
    "One User Base DN per line" : "Un DN de base utilisateur par ligne",
    "User Search Attributes" : "Attributs de recherche utilisateurs",
    "Optional; one attribute per line" : "Optionnel, un attribut par ligne",
    "Group Display Name Field" : "Champ \"nom d'affichage\" du groupe",
    "The LDAP attribute to use to generate the groups's display name." : "L'attribut LDAP utilisé pour générer le nom d'affichage du groupe.",
    "Base Group Tree" : "Base Group Tree",
    "One Group Base DN per line" : "Un DN de base groupe par ligne",
    "Group Search Attributes" : "Attributs de recherche des groupes",
    "Group-Member association" : "Association groupe-membre",
    "Nested Groups" : "Groupes imbriqués",
    "When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" : "Si activé, les groupes contenant d'autres groupes sont pris en charge (fonctionne uniquement si l'attribut membre du groupe contient des DNs).",
    "Paging chunksize" : "Paging chunksize",
    "Chunksize used for paged LDAP searches that may return bulky results like user or group enumeration. (Setting it 0 disables paged LDAP searches in those situations.)" : "Chunksize utilisée pour les recherches LDAP paginées qui peuvent retourner des résultats par lots comme une énumération d'utilisateurs ou de groupes. (Configurer à 0 pour désactiver les recherches LDAP paginées)",
    "Special Attributes" : "Attributs spéciaux",
    "Quota Field" : "Champ du quota",
    "Quota Default" : "Quota par défaut",
    "in bytes" : "en octets",
    "Email Field" : "Champ Email",
    "User Home Folder Naming Rule" : "Règle de nommage du répertoire utilisateur",
    "Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." : "Laisser vide pour user name (défaut). Vous pouvez aussi spécifier un attribut LDAP / AD.",
    "Internal Username" : "Nom d'utilisateur interne",
    "By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." : "Par défaut le nom d'utilisateur interne sera créé à partir de l'attribut UUID. Ceci permet d'assurer que le nom d'utilisateur est unique et que les caractères ne nécessitent pas de conversion. Le nom d'utilisateur interne doit contenir uniquement les caractères suivants : [ a-zA-Z0-9_.@- ]. Les autres caractères sont remplacés par leur correspondance ASCII ou simplement omis. En cas de collision, un nombre est ajouté/incrémenté. Le nom d'utilisateur interne est utilisé pour identifier l'utilisateur au sein du système. C'est aussi le nom par défaut du répertoire utilisateur dans ownCloud. Il fait aussi partie de certains URL de services, par exemple pour tous les services *DAV. Le comportement par défaut peut être modifié à l'aide de ce paramètre. Pour obtenir un comportement similaire aux versions précédentes à ownCloud 5, saisir le nom d'utilisateur à afficher dans le champ suivant. Laissez à blanc pour le comportement par défaut. Les modifications prendront effet seulement pour les nouveaux (ajoutés) utilisateurs LDAP.",
    "Internal Username Attribute:" : "Nom d'utilisateur interne :",
    "Override UUID detection" : "Passer outre la détection d'UUID",
    "By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." : "Par défaut, l'attribut UUID est automatiquement  détecté. Cet attribut est utilisé pour identifier les utilisateurs et groupes de façon fiable. Un nom d'utilisateur interne basé sur l'UUID sera automatiquement créé, sauf s'il est spécifié autrement ci-dessus. Vous pouvez modifier ce comportement et définir l'attribut de votre choix. Vous devez alors vous assurer que l'attribut de votre choix peut être récupéré pour les utilisateurs ainsi que pour les groupes et qu'il soit unique. Laisser à blanc pour le comportement par défaut. Les modifications seront effectives uniquement pour les nouveaux (ajoutés) utilisateurs et groupes LDAP.",
    "UUID Attribute for Users:" : "Attribut UUID pour les Utilisateurs :",
    "UUID Attribute for Groups:" : "Attribut UUID pour les Groupes :",
    "Username-LDAP User Mapping" : "Association Nom d'utilisateur-Utilisateur LDAP",
    "Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have an internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." : "Les noms d'utilisateurs sont utilisés pour le stockage et l'assignation de (meta) données. Pour identifier et reconnaître précisément les utilisateurs, chaque utilisateur LDAP aura un nom interne spécifique. Cela requiert l'association d'un nom d'utilisateur ownCloud à un nom d'utilisateur LDAP. Le nom d'utilisateur créé est associé à l'attribut UUID de l'utilisateur LDAP. Par ailleurs, le DN est mémorisé en cache pour limiter les interactions LDAP mais il n'est pas utilisé pour l'identification. Si le DN est modifié, ces modifications seront retrouvées. Seul le nom interne à ownCloud est utilisé au sein du produit. Supprimer les associations créera des orphelins et l'action affectera toutes les configurations LDAP. NE JAMAIS SUPPRIMER LES ASSOCIATIONS EN ENVIRONNEMENT DE PRODUCTION, mais uniquement sur des environnements de tests et d'expérimentations.",
    "Clear Username-LDAP User Mapping" : "Supprimer l'association utilisateur interne-utilisateur LDAP",
    "Clear Groupname-LDAP Group Mapping" : "Supprimer l'association nom de groupe-groupe LDAP"
},
"nplurals=2; plural=(n > 1);");
