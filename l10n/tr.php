<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Eşleştirmeler temizlenirken hata oluştu.",
"Failed to delete the server configuration" => "Sunucu yapılandırmasını silme başarısız oldu",
"The configuration is valid and the connection could be established!" => "Yapılandırma geçerli ve bağlantı kuruldu!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Yapılandırma geçerli fakat bağlama (bind) başarısız. Lütfen sunucu ayarları ve kimlik bilgilerini kontrol edin.",
"The configuration is invalid. Please have a look at the logs for further details." => "Yapılandırma geçersiz. Lütfen ayrıntılar için günlüklere bakın.",
"No action specified" => "Eylem belirtilmedi",
"No configuration specified" => "Yapılandırma belirtilmemiş",
"No data specified" => "Veri belirtilmemiş",
" Could not set configuration %s" => "%s yapılandırması ayarlanamadı",
"Deletion failed" => "Silme başarısız oldu",
"Take over settings from recent server configuration?" => "Ayarlar son sunucu yapılandırmalarından devralınsın mı?",
"Keep settings?" => "Ayarlar korunsun mu?",
"{nthServer}. Server" => "{nthServer}. Sunucu",
"Cannot add server configuration" => "Sunucu yapılandırması eklenemedi",
"mappings cleared" => "eşleştirmeler temizlendi",
"Success" => "Başarılı",
"Error" => "Hata",
"Please specify a Base DN" => "Lütfen bir Base DN belirtin",
"Could not determine Base DN" => "Base DN belirlenemedi",
"Please specify the port" => "Lütfen bağlantı noktasını belirtin",
"Configuration OK" => "Yapılandırma tamam",
"Configuration incorrect" => "Yapılandırma geçersiz",
"Configuration incomplete" => "Yapılandırma tamamlanmamış",
"Select groups" => "Grupları seç",
"Select object classes" => "Nesne sınıflarını seç",
"Select attributes" => "Nitelikleri seç",
"Connection test succeeded" => "Bağlantı testi başarılı oldu",
"Connection test failed" => "Bağlantı testi başarısız oldu",
"Do you really want to delete the current Server Configuration?" => "Şu anki sunucu yapılandırmasını silmek istediğinizden emin misiniz?",
"Confirm Deletion" => "Silmeyi onayla",
"_%s group found_::_%s groups found_" => array("%s grup bulundu","%s grup bulundu"),
"_%s user found_::_%s users found_" => array("%s kullanıcı bulundu","%s kullanıcı bulundu"),
"Could not find the desired feature" => "İstenen özellik bulunamadı",
"Invalid Host" => "Geçersiz Makine",
"Server" => "Sunucu",
"User Filter" => "Kullanıcı Süzgeci",
"Login Filter" => "Oturum Süzgeci",
"Group Filter" => "Grup Süzgeci",
"Save" => "Kaydet",
"Test Configuration" => "Yapılandırmayı Sına",
"Help" => "Yardım",
"Groups meeting these criteria are available in %s:" => "Bu kriterlerle eşleşen gruplar %s içinde mevcut:",
"only those object classes:" => "sadece bu nesne sınıflarına:",
"only from those groups:" => "sadece bu gruplardan:",
"Edit raw filter instead" => "Bunun yerine ham filtreyi düzenle",
"Raw LDAP filter" => "Ham LDAP filtresi",
"The filter specifies which LDAP groups shall have access to the %s instance." => "Filtre, %s örneğine erişmesi gereken LDAP gruplarını belirtir.",
"Test Filter" => "Filtreyi Test Et",
"groups found" => "grup bulundu",
"Users login with this attribute:" => "Kullanıcılar şu öznitelikle oturum açarlar:",
"LDAP Username:" => "LDAP Kullanıcı Adı:",
"LDAP Email Address:" => "LDAP E-posta Adresi:",
"Other Attributes:" => "Diğer Nitelikler:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Oturum açma girişimi olduğunda uygulanacak filtreyi tanımlar. %%uid, oturum işleminde kullanıcı adı ile değiştirilir. Örneğin: \"uid=%%uid\"",
"1. Server" => "1. Sunucu",
"%s. Server:" => "%s. Sunucu:",
"Add Server Configuration" => "Sunucu Yapılandırması Ekle",
"Delete Configuration" => "Yapılandırmayı Sil",
"Host" => "Sunucu",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "SSL gerekmediği takdirde protokol belirtmeyebilirsiniz. Gerekiyorsa ldaps:// ile başlayın",
"Port" => "Port",
"User DN" => "Kullanıcı DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "İstemci kullanıcısının yapılacağı atamanın DN'si. Örn. uid=agent,dc=örnek,dc=com. Anonim erişim için DN ve Parolayı boş bırakın.",
"Password" => "Parola",
"For anonymous access, leave DN and Password empty." => "Anonim erişim için DN ve Parola alanlarını boş bırakın.",
"One Base DN per line" => "Her satırda tek bir Base DN",
"You can specify Base DN for users and groups in the Advanced tab" => "Gelişmiş sekmesinde, kullanıcılar ve gruplar için Base DN belirtebilirsiniz",
"Avoids automatic LDAP requests. Better for bigger setups, but requires some LDAP knowledge." => "Otomatik LDAP isteklerinden kaçın. Büyük kurulumlar için daha iyi ancak LDAP bilgisi gerektirir.",
"Manually enter LDAP filters (recommended for large directories)" => "LDAP filtrelerini el ile girin (büyük dizinler için önerilir)",
"Limit %s access to users meeting these criteria:" => "%s erişimini, şu kriterlerle eşleşen kullanıcılara sınırla:",
"The filter specifies which LDAP users shall have access to the %s instance." => "Filtre, %s örneğine erişmesi gereken LDAP kullanıcılarını belirtir.",
"users found" => "kullanıcı bulundu",
"Saving" => "Kaydediliyor",
"Back" => "Geri",
"Continue" => "Devam et",
"Expert" => "Uzman",
"Advanced" => "Gelişmiş",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Uyarı:</b> user_ldap ve user_webdavauth uygulamaları uyumlu değil. Beklenmedik bir davranışla karşılaşabilirsiniz. Lütfen ikisinden birini devre dışı bırakmak için sistem yöneticinizle iletişime geçin.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Uyarı:</b> PHP LDAP modülü kurulu değil, arka uç çalışmayacak. Lütfen kurulumu için sistem yöneticinizle iletişime geçin.",
"Connection Settings" => "Bağlantı Ayarları",
"Configuration Active" => "Yapılandırma Etkin",
"When unchecked, this configuration will be skipped." => "İşaretli değilse, bu yapılandırma atlanacaktır.",
"Backup (Replica) Host" => "Yedek (Replica) Sunucu",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "İsteğe bağlı bir yedek sunucusu belirtin. Ana LDAP/AD sunucusunun bir kopyası olmalıdır.",
"Backup (Replica) Port" => "Yedek (Replica) Bağlantı Noktası",
"Disable Main Server" => "Ana Sunucuyu Devre Dışı Bırak",
"Only connect to the replica server." => "Sadece yedek sunucuya bağlan.",
"Case insensitive LDAP server (Windows)" => "Büyük küçük harf duyarsız LDAP sunucusu (Windows)",
"Turn off SSL certificate validation." => "SSL sertifika doğrulamasını kapat.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Önerilmez, sadece test için kullanın! Eğer bağlantı sadece bu seçenekle çalışıyorsa %s sunucunuza LDAP sunucusunun SSL sertifikasını ekleyin.",
"Cache Time-To-Live" => "Önbellek Time-To-Live Değeri",
"in seconds. A change empties the cache." => "saniye cinsinden. Bir değişiklik önbelleği temizleyecektir.",
"Directory Settings" => "Dizin Ayarları",
"User Display Name Field" => "Kullanıcı Görünen Ad Alanı",
"The LDAP attribute to use to generate the user's display name." => "Kullanıcının görünen adını oluşturmak için kullanılacak LDAP niteliği.",
"Base User Tree" => "Temel Kullanıcı Ağacı",
"One User Base DN per line" => "Her satırda Tek Kullanıcı Base DN'si",
"User Search Attributes" => "Kullanıcı Arama Nitelikleri",
"Optional; one attribute per line" => "Tercihe bağlı; her bir satırda bir öznitelik",
"Group Display Name Field" => "Grup Görünen Ad Alanı",
"The LDAP attribute to use to generate the groups's display name." => "Grubun görünen adını oluşturmak için kullanılacak LDAP niteliği.",
"Base Group Tree" => "Temel Grup Ağacı",
"One Group Base DN per line" => "Her satırda Tek Grup Base DN'si",
"Group Search Attributes" => "Grup Arama Nitelikleri",
"Group-Member association" => "Grup-Üye işbirliği",
"Nested Groups" => "İç İçe Gruplar",
"When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" => "Etkinleştirildiğinde, grup içeren gruplar desteklenir (Sadece grup üyesi DN niteliği içeriyorsa çalışır).",
"Paging chunksize" => "Sayfalama yığın boyutu",
"Chunksize used for paged LDAP searches that may return bulky results like user or group enumeration. (Setting it 0 disables paged LDAP searches in those situations.)" => "Yığın boyutu, kullanıcı veya grup numaralandırması benzeri hantal sonuçlar döndürebilen sayfalandırılmış LDAP aramaları için kullanılır. (0 yapmak bu durumlarda sayfalandırılmış LDAP aramalarını devre dışı bırakır.)",
"Special Attributes" => "Özel Öznitelikler",
"Quota Field" => "Kota Alanı",
"Quota Default" => "Öntanımlı Kota",
"in bytes" => "byte cinsinden",
"Email Field" => "E-posta Alanı",
"User Home Folder Naming Rule" => "Kullanıcı Ana Dizini İsimlendirme Kuralı",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Kullanıcı adı bölümünü boş bırakın (öntanımlı). Aksi halde bir LDAP/AD özniteliği belirtin.",
"Internal Username" => "Dahili Kullanıcı Adı",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Öntanımlı olarak UUID niteliğinden dahili bir kullanıcı adı oluşturulacak. Bu, kullanıcı adının benzersiz ve karakterlerinin dönüştürme gereksinimini ortadan kaldırır. Dahili kullanıcı adı, sadece bu karakterlerin izin verildiği kısıtlamaya sahip: [ a-zA-Z0-9_.@- ]. Diğer karakterler ise ASCII karşılıkları ile yer değiştirilir veya basitçe yoksayılır. Çakışmalar olduğunda ise bir numara eklenir veya arttırılır. Dahili kullanıcı adı, bir kullanıcıyı dahili olarak tanımlamak için kullanılır. Ayrıca kullanıcı ev klasörü için öntanımlı bir isimdir. Bu ayrıca uzak adreslerin (örneğin tüm *DAV hizmetleri) bir parçasıdır. Bu ayar ise, öntanımlı davranışın üzerine yazılabilir. ownCloud 5'ten önce benzer davranışı yapabilmek için aşağıdaki alana bir kullanıcı görünen adı niteliği girin. Öntanımlı davranış için boş bırakın. Değişiklikler, sadece yeni eşleştirilen (eklenen) LDAP kullanıcılarında etkili olacaktır.",
"Internal Username Attribute:" => "Dahili Kullanıcı Adı Özniteliği:",
"Override UUID detection" => "UUID tespitinin üzerine yaz",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Öntanımlı olarak, UUID niteliği otomatik olarak tespit edilmez. UUID niteliği LDAP kullanıcılarını ve gruplarını şüphesiz biçimde tanımlamak için kullanılır. Ayrıca yukarıda belirtilmemişse, bu UUID'ye bağlı olarak dahili bir kullanıcı adı oluşturulacaktır. Bu ayarın üzerine yazabilir ve istediğiniz bir nitelik belirtebilirsiniz. Ancak istediğiniz niteliğin benzersiz olduğundan ve hem kullanıcı hem de gruplar tarafından getirilebileceğinden emin olmalısınız. Öntanımlı davranış için boş bırakın. Değişiklikler sadece yeni eşleştirilen (eklenen) LDAP kullanıcı ve gruplarında etkili olacaktır.",
"UUID Attribute for Users:" => "Kullanıcılar için UUID Özniteliği:",
"UUID Attribute for Groups:" => "Gruplar için UUID Özniteliği:",
"Username-LDAP User Mapping" => "Kullanıcı Adı-LDAP Kullanıcısı Eşleştirme",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "Kullanıcı adları, (üst) veri depolaması ve ataması için kullanılır. Kullanıcıları kesin olarak tanımlamak ve algılamak için, her LDAP kullanıcısı bir dahili kullanıcı adına sahip olacak. Bu kullanıcı adı ile LDAP kullanıcısı arasında bir eşleşme gerektirir. Oluşturulan kullanıcı adı LDAP kullanıcısının UUID'si ile eşleştirilir. Ek olarak LDAP etkileşimini azaltmak için DN de önbelleğe alınır ancak bu kimlik tanıma için kullanılmaz. Eğer DN değişirse, değişiklikler tespit edilir. Dahili kullanıcı her yerde kullanılır. Eşleştirmeleri temizlemek, her yerde kalıntılar bırakacaktır. Eşleştirmeleri temizlemek yapılandırmaya hassas bir şekilde bağlı değildir, tüm LDAP yapılandırmalarını etkiler! Üretim ortamında eşleştirmeleri asla temizlemeyin, sadece sınama veya deneysel aşamada kullanın.",
"Clear Username-LDAP User Mapping" => "Kullanıcı Adı-LDAP Kullanıcısı Eşleştirmesini Temizle",
"Clear Groupname-LDAP Group Mapping" => "Grup Adı-LDAP Grubu Eşleştirmesini Temizle"
);
$PLURAL_FORMS = "nplurals=2; plural=(n > 1);";
