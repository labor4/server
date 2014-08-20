<?php
$TRANSLATIONS = array(
"Cannot write into \"config\" directory!" => "Kan inte skriva till \"config\" katalogen!",
"This can usually be fixed by giving the webserver write access to the config directory" => "Detta kan vanligtvis åtgärdas genom att ge skrivrättigheter till config katalgogen",
"See %s" => "Se %s",
"You are accessing the server from an untrusted domain." => "Du ansluter till servern från en osäker domän.",
"Please contact your administrator. If you are an administrator of this instance, configure the \"trusted_domain\" setting in config/config.php. An example configuration is provided in config/config.sample.php." => "Vänligen kontakta din administratör. Om du är en administratör, konfigurera inställningen \"trusted_domain\" i  config/config.php. En exempelkonfiguration finns i tillgänglig i config/config.sample.php.",
"Help" => "Hjälp",
"Personal" => "Personligt",
"Settings" => "Inställningar",
"Users" => "Användare",
"Admin" => "Admin",
"App \\\"%s\\\" can't be installed because it is not compatible with this version of ownCloud." => "Applikationen  \\\"%s\\\" kan inte installeras då en inte är kompatibel med denna version utav ownCloud.",
"No app name specified" => "Inget appnamn angivet",
"Unknown filetype" => "Okänd filtyp",
"Invalid image" => "Ogiltig bild",
"web services under your control" => "webbtjänster under din kontroll",
"App directory already exists" => "Appens mapp finns redan",
"Can't create app folder. Please fix permissions. %s" => "Kan inte skapa appens mapp. Var god åtgärda rättigheterna. %s",
"No source specified when installing app" => "Ingen källa angiven vid installation av app ",
"No href specified when installing app from http" => "Ingen href angiven vid installation av app från http",
"No path specified when installing app from local file" => "Ingen sökväg angiven vid installation av app från lokal fil",
"Archives of type %s are not supported" => "Arkiv av typen %s stöds ej",
"Failed to open archive when installing app" => "Kunde inte öppna arkivet när appen skulle installeras",
"App does not provide an info.xml file" => "Appen har ingen info.xml fil",
"App can't be installed because of not allowed code in the App" => "Appen kan inte installeras eftersom att den innehåller otillåten kod",
"App can't be installed because it is not compatible with this version of ownCloud" => "Appen kan inte installeras eftersom att den inte är kompatibel med denna version av ownCloud",
"App can't be installed because it contains the <shipped>true</shipped> tag which is not allowed for non shipped apps" => "Appen kan inte installeras eftersom att den innehåller etiketten <shipped>true</shipped> vilket inte är tillåtet för icke inkluderade appar",
"App can't be installed because the version in info.xml/version is not the same as the version reported from the app store" => "Appen kan inte installeras eftersom versionen i info.xml inte är samma som rapporteras från app store",
"Application is not enabled" => "Applikationen är inte aktiverad",
"Authentication error" => "Fel vid autentisering",
"Token expired. Please reload page." => "Ogiltig token. Ladda om sidan.",
"Unknown user" => "Okänd användare",
"%s enter the database username." => "%s ange databasanvändare.",
"%s enter the database name." => "%s ange databasnamn",
"%s you may not use dots in the database name" => "%s du får inte använda punkter i databasnamnet",
"MS SQL username and/or password not valid: %s" => "MS SQL-användaren och/eller lösenordet var inte giltigt: %s",
"You need to enter either an existing account or the administrator." => "Du måste antingen ange ett befintligt konto eller administratör.",
"MySQL/MariaDB username and/or password not valid" => "MySQL/MariaDB användarnamn och/eller lösenord är felaktigt",
"DB Error: \"%s\"" => "DB error: \"%s\"",
"Offending command was: \"%s\"" => "Det felaktiga kommandot var: \"%s\"",
"MySQL/MariaDB user '%s'@'localhost' exists already." => "MySQL/MariaDB användare '%s'@'localhost' existerar redan.",
"Drop this user from MySQL/MariaDB" => "Radera denna användare från MySQL/MariaDB",
"MySQL/MariaDB user '%s'@'%%' already exists" => "MySQL/MariaDB användare '%s'@'%%' existerar redan",
"Drop this user from MySQL/MariaDB." => "Radera denna användare från MySQL/MariaDB.",
"Oracle connection could not be established" => "Oracle-anslutning kunde inte etableras",
"Oracle username and/or password not valid" => "Oracle-användarnamnet och/eller lösenordet är felaktigt",
"Offending command was: \"%s\", name: %s, password: %s" => "Det felande kommandot var: \"%s\", name: %s, password: %s",
"PostgreSQL username and/or password not valid" => "PostgreSQL-användarnamnet och/eller lösenordet är felaktigt",
"Set an admin username." => "Ange ett användarnamn för administratören.",
"Set an admin password." => "Ange ett administratörslösenord.",
"Your web server is not yet properly setup to allow files synchronization because the WebDAV interface seems to be broken." => "Din webbserver är inte korrekt konfigurerad för att tillåta filsynkronisering eftersom WebDAV inte verkar fungera.",
"Please double check the <a href='%s'>installation guides</a>." => "Var god kontrollera <a href='%s'>installationsguiden</a>.",
"%s shared »%s« with you" => "%s delade »%s« med dig",
"Sharing %s failed, because the file does not exist" => "Delning av %s misslyckades på grund av att filen inte existerar",
"You are not allowed to share %s" => "Du har inte rätt att dela %s",
"Sharing %s failed, because the user %s is the item owner" => "Delning %s misslyckades därför att användaren %s är den som äger objektet",
"Sharing %s failed, because the user %s does not exist" => "Delning %s misslyckades därför att användaren %s inte existerar",
"Sharing %s failed, because the user %s is not a member of any groups that %s is a member of" => "Delning %s misslyckades därför att användaren %s inte är medlem i någon utav de grupper som %s är medlem i",
"Sharing %s failed, because this item is already shared with %s" => "Delning %s misslyckades därför att objektet redan är delat med %s",
"Sharing %s failed, because the group %s does not exist" => "Delning %s misslyckades därför att gruppen %s inte existerar",
"Sharing %s failed, because %s is not a member of the group %s" => "Delning %s misslyckades därför att %s inte ingår i gruppen %s",
"You need to provide a password to create a public link, only protected links are allowed" => "Du måste ange ett lösenord för att skapa en offentlig länk, endast skyddade länkar är tillåtna",
"Sharing %s failed, because sharing with links is not allowed" => "Delning %s misslyckades därför att delning utav länkar inte är tillåtet",
"Share type %s is not valid for %s" => "Delningstyp %s är inte giltig för %s",
"Setting permissions for %s failed, because the permissions exceed permissions granted to %s" => "Misslyckades att sätta rättigheter för %s därför att rättigheterna överskrider de som är tillåtna för %s",
"Setting permissions for %s failed, because the item was not found" => "Att sätta rättigheterna för %s misslyckades därför att objektet inte hittades",
"Sharing backend %s must implement the interface OCP\\Share_Backend" => "Delningsgränssnittet %s måste implementera gränssnittet OCP\\Share_Backend",
"Sharing backend %s not found" => "Delningsgränssnittet %s hittades inte",
"Sharing backend for %s not found" => "Delningsgränssnittet för %s hittades inte",
"Sharing %s failed, because the user %s is the original sharer" => "Delning %s misslyckades därför att användaren %s är den som delade objektet först",
"Sharing %s failed, because the permissions exceed permissions granted to %s" => "Delning %s misslyckades därför att rättigheterna överskrider de rättigheter som är tillåtna för %s",
"Sharing %s failed, because resharing is not allowed" => "Delning %s misslyckades därför att vidaredelning inte är tillåten",
"Sharing %s failed, because the sharing backend for %s could not find its source" => "Delning %s misslyckades därför att delningsgränsnittet för %s inte kunde hitta sin källa",
"Sharing %s failed, because the file could not be found in the file cache" => "Delning %s misslyckades därför att filen inte kunde hittas i filcachen",
"Could not find category \"%s\"" => "Kunde inte hitta kategorin \"%s\"",
"seconds ago" => "sekunder sedan",
"_%n minute ago_::_%n minutes ago_" => array("%n minut sedan","%n minuter sedan"),
"_%n hour ago_::_%n hours ago_" => array("%n timme sedan","%n timmar sedan"),
"today" => "i dag",
"yesterday" => "i går",
"_%n day go_::_%n days ago_" => array("%n dag sedan","%n dagar sedan"),
"last month" => "förra månaden",
"_%n month ago_::_%n months ago_" => array("%n månad sedan","%n månader sedan"),
"last year" => "förra året",
"years ago" => "år sedan",
"Only the following characters are allowed in a username: \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"" => "Endast följande tecken är tillåtna i ett användarnamn: \"az\", \"AZ\", \"0-9\", och \"_ @ -.\"",
"A valid username must be provided" => "Ett giltigt användarnamn måste anges",
"A valid password must be provided" => "Ett giltigt lösenord måste anges",
"The username is already being used" => "Användarnamnet används redan",
"No database drivers (sqlite, mysql, or postgresql) installed." => "Inga databasdrivrutiner (sqlite, mysql, eller postgresql) installerade.",
"Cannot write into \"config\" directory" => "Kan inte skriva till \"config\" katalogen",
"Cannot write into \"apps\" directory" => "Kan inte skriva till \"apps\" katalogen!",
"Cannot create \"data\" directory (%s)" => "Kan inte skapa \"data\" katalog (%s)",
"This can usually be fixed by <a href=\"%s\" target=\"_blank\">giving the webserver write access to the root directory</a>." => "Detta kan vanligtvis åtgärdas genom att ge <a href=\"%s\" target=\"_blank\">webservern skrivrättigheter till rootkatalogen</a>.",
"Please ask your server administrator to install the module." => "Vänligen be din administratör att installera modulen.",
"PHP module %s not installed." => "PHP modulen %s är inte installerad.",
"PHP %s or higher is required." => "PHP %s eller högre krävs.",
"Please ask your server administrator to update PHP to the latest version. Your PHP version is no longer supported by ownCloud and the PHP community." => "Vänligen be serveradministratören uppdatera PHP till den senaste versionen. Din PHP-version stöds inte längre av ownCloud.",
"PHP Safe Mode is enabled. ownCloud requires that it is disabled to work properly." => "PHP Safe Mode är aktiverat. ownCloud kräver att det är deaktiverat för att fungera korrekt.",
"Magic Quotes is enabled. ownCloud requires that it is disabled to work properly." => "Magic Quotes är aktiverat. ownCloud kräver att det är deaktiverat för att fungera korrekt.",
"Please ask your server administrator to restart the web server." => "Vänligen be din serveradministratör att starta om webservern.",
"PostgreSQL >= 9 required" => "PostgreSQL >= 9 krävs",
"Please upgrade your database version" => "Vänligen uppgradera din databas-version",
"Error occurred while checking PostgreSQL version" => "Ett fel inträffade vid kontroll utav PostgreSQL-version",
"Please make sure you have PostgreSQL >= 9 or check the logs for more information about the error" => "Vänligen säkerställ att du har PostgreSQL >= 9 eller kolla loggarna för mer information om felet",
"Please change the permissions to 0770 so that the directory cannot be listed by other users." => "Vänligen ändra rättigheterna till 0770 så att katalogen inte kan listas utav andra användare.",
"Data directory (%s) is readable by other users" => "Datakatalogen (%s) kan läsas av andra användare",
"Data directory (%s) is invalid" => "Datakatlogen (%s) är ogiltig",
"Please check that the data directory contains a file \".ocdata\" in its root." => "Vänligen kontrollera att datakatalogen innehåller filen \".ocdata\" i rooten.",
"Could not obtain lock type %d on \"%s\"." => "Kan inte hämta låstyp %d på \"%s\"."
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
