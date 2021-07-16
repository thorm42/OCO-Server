<?php
const LANG = [
	'app_name' => 'OCO IT Client Manager',
	'app_name_frontpage' => '[ Open Computer Orchestration ]',
	'app_subtitle' => 'Client inventory and software delivery made simple',
	'please_fill_required_fields' => 'Bitte füllen Sie die erforderlichen Felder aus.',
	'copy' => 'Kopieren (STRG+C)',
	'refresh' => 'Aktualisieren (F5)',
	'retry' => 'Erneut versuchen',
	'home_page' => 'Startseite',
	'close' => 'Schließen',
	'search_placeholder' => 'Suche...',
	'change' => 'Ändern',
	'new_password' => 'Neues Passwort',
	'confirm_password' => 'Passwort bestätigen',
	'done' => 'Fertig stellen',
	'setup' => 'Setup',
	'login' => 'Anmeldung',
	'log_in' => 'Anmelden',
	'login_failed' => 'Anmeldung fehlgeschlagen',
	'user_locked' => 'Benutzer gesperrt',
	'username' => 'Benutzername',
	'password' => 'Kennwort',
	'user_does_not_exist' => 'Benutzer existiert nicht',
	'login_failes' => 'Anmeldung fehlgeschlagen',
	'log_out_successful' => 'Abmeldung erfolgreich',
	'log_out' => 'Abmelden',
	'passwords_do_not_match' => 'Passwörter stimmen nicht überein',
	'database_error' => 'Datenbankfehler. Bitte Logdateien prüfen.',
	'error' => 'Fehler',
	'hostname' => 'Hostname',
	'os' => 'Betriebssystem',
	'version' => 'Version',
	'cpu' => 'CPU',
	'ram' => 'RAM',
	'ip_addresses' => 'IP-Adressen',
	'mac_addresses' => 'MAC-Adressen',
	'serial_no' => 'Seriennummer',
	'agent' => 'Agent',
	'last_seen' => 'Zuletzt gesehen',
	'last_updated' => 'Zuletzt aktualisiert',
	'elements' => 'Element(e)',
	'elements_checked' => 'Element(e) ausgewählt',
	'deploy' => 'Bereitstellen',
	'selected_elements' => 'Ausgewählte Elemente',
	'delete' => 'Löschen',
	'remove_from_group' => 'Aus Gruppe entfernen',
	'add_to' => 'Hinzufügen zu',
	'new_group' => 'Neue Gruppe',
	'new_subgroup' => 'Neue Untergruppe',
	'new_computer' => 'Neuer Computer',
	'all_computer' => 'Alle Computer',
	'deploy_for_all' => 'Für alle bereitstellen',
	'delete_group' => 'Gruppe löschen',
	'general' => 'Allgemein',
	'kernel_version' => 'Kernel-Version',
	'architecture' => 'Architektur',
	'vendor' => 'Hersteller',
	'model' => 'Modell',
	'bios_version' => 'BIOS-Version',
	'boot_type' => 'Boot-Typ',
	'secure_boot' => 'Secure Boot',
	'agent_version' => 'Agent-Version',
	'assigned_groups' => 'Zugewiesene Gruppen',
	'logins' => 'Anmeldungen',
	'computer' => 'Computer',
	'count' => 'Anzahl',
	'last_login' => 'Letzte Anmeldung',
	'network' => 'Netzwerk',
	'ip_address' => 'IP-Adresse',
	'mac_address' => 'MAC-Adresse',
	'netmask' => 'Netzmaske',
	'broadcast' => 'Broadcast',
	'domain' => 'Domäne',
	'screens' => 'Bildschirme',
	'name' => 'Name',
	'resolution' => 'Auflösung',
	'installed_packages' => 'Installierte Pakete',
	'package' => 'Paket',
	'procedure' => 'Prozedur',
	'installation_date' => 'Installationszeitpunkt',
	'action' => 'Aktion',
	'recognised_software' => 'Erkannte Software',
	'description' => 'Beschreibung',
	'deployment_assistant' => 'Bereitstellungs-Assistent',
	'start' => 'Start',
	'end' => 'Ende',
	'target_computer' => 'Zielcomputer',
	'computer_groups' => 'Computergruppen',
	'packages_to_deploy' => 'Zu verteilende Pakete',
	'packages' => 'Pakete',
	'download' => 'Download',
	'package_groups' => 'Paketgruppen',
	'all_domain_user' => 'Alle Domänen-Benutzer',
	'login_name' => 'Anmeldename',
	'jobs' => 'Jobs',
	'job_container' => 'Jobcontainer',
	'order' => 'Reihenfolge',
	'status' => 'Status',
	'last_change' => 'Letzte Änderung',
	'new_deployment_job' => 'Neuer Bereitstellungsauftrag',
	'created' => 'Erstellt',
	'waiting_for_client' => 'Wartet auf Client',
	'download_started' => 'Download gestartet',
	'execution_started' => 'Ausführung gestartet',
	'failed' => 'Fehlgeschlagen',
	'succeeded' => 'Erfolgreich',
	'complete_package_library' => 'Gesamte Paket-Bibliothek',
	'all_packages' => 'Alle Pakete',
	'new_package' => 'Neues Paket',
	'deploy_all' => 'Alle bereitstellen',
	'set_end' => 'Ende festlegen',
	'send_wol' => 'WOL-Paket senden',
	'no_jobs_created' => 'Ihre Anfrage erzeugte keine Jobs. Bitte prüfen Sie, ob Sie mindestens einen Computer und ein Paket ausgewählt haben.',
	'no_connection_to_server' => 'Keine Verbindung zum Server',
	'please_check_network' => 'Bitte prüfen Sie Ihre Netzwerkverbindung und laden Sie die Seite neu.',
	'author' => 'Autor',
	'install_procedure' => 'Installations-Prozedur',
	'uninstall_procedure' => 'Deinstallations-Prozedur',
	'zip_archive' => 'ZIP-Archiv',
	'installed_on' => 'Installiert auf',
	'send' => 'Senden',
	'users' => 'Benutzer',
	'package_created' => 'Paket wurde erstellt',
	'no_elements_selected' => 'Keine Elemente ausgewählt',
	'confirm_delete' => 'Wirklich löschen?',
	'confirm_delete_package' => 'Sind Sie sicher, dass Sie das Paket bzw. die Pakete löschen möchten?\n\nAlle Computerzuordungen gehen verloren und Sie können das Paket nicht länger über die Webanwendung deinstallieren.',
	'enter_name' => 'Bitte geben Sie einen Namen ein',
	'enter_new_hostname' => 'Bitte geben Sie einen neuen Hostnamen ein.\n\nAchtung: Wenn Sie den Hostnamen ändern müssen Sie den Namen auch auf dem Computer ändern, andernfalls kann der Agent keine Verbindung mehr mit dem Server herstellen!',
	'confirm_uninstall_package' => 'Möchten Sie das Paket wirklich deinstallieren? Es wird ein Deinstallationsjob erstellt.\n\nBitte geben Sie eine Startzeit ein.',
	'confirm_remove_package_assignment' => 'Möchten Sie die Computer-Paket-Zuordnung wirklich aufheben? Normalerweise sollte das Paket deinstalliert werden.',
	'confirm_delete_group' => 'Möchten Sie die Gruppe(n) wirklich löschen? Die Objekte in der Gruppe werden nicht gelöscht.',
	'confirm_delete_jobcontainer' => 'Möchten Sie diesen Jobcontainer wirklich löschen? Ausstehende Jobs werden nicht mehr ausgeführt.',
	'confirm_delete_job' => 'Möchten Sie die ausgewählten Jobs wirklich löschen?\nAusstehende Jobs werden nicht mehr ausgeführt. Bereits ausgeführte Jobs werden dadurch nicht automatisch rückgängig gemacht.',
	'computer_added' => 'Computer wurden hinzugefügt',
	'packages_added' => 'Pakete wurden hinzugefügt',
	'remove_assignment' => 'Zuweisung entfernen',
	'uninstall_package' => 'Paket deinstallieren',
	'uninstall' => 'Deinstallieren',
	'install' => 'Installieren',
	'settings' => 'Einstellungen',
	'full_name' => 'Anzeigename',
	'system_users' => 'Systembenutzer',
	'ldap_account' => 'LDAP-Account',
	'locked' => 'Gesperrt',
	'lock' => 'Sperren',
	'unlock' => 'Entsperren',
	'installations' => 'Installationen',
	'agent_registration_enabled' => 'Agent Selbst-Registrierung aktivieren',
	'agent_key' => 'Agent-Key',
	'agent_update_interval' => 'Agent Update-Intervall (Sekunden)',
	'purge_succeeded_jobs_after' => 'Entferne erfolgreiche Jobs nach (Sekunden)',
	'purge_failed_jobs_after' => 'Entferne fehlgeschlagene Jobs nach (Sekunden)',
	'save' => 'Speichern',
	'saved' => 'Gespeichert',
	'add' => 'Hinzufügen',
	'notes' => 'Notizen',
	'wol' => 'WOL',
	'wol_packet_sent' => 'WOL-Paket(e) gesendet',
	'move_up' => 'Nach oben schieben',
	'move_down' => 'Nach unten schieben',
	'client_extension_note' => 'Für diese Funktion muss die OCO-Client-Extension auf Ihrem Computer installiert sein.',
	'logons' => 'Anmeldungen',
	'computers' => 'Computer',
	'reports' => 'Reports',
	'id' => 'ID',
	'no_results' => 'Die Abfrage lieferte keine Ergebnisse.',
	'not_found' => 'Nicht gefunden',
	'windows' => 'Windows',
	'linux' => 'Linux',
	'macos' => 'macOS',
	'package_exists_with_version' => 'Es existiert bereits ein Paket mit diesem Namen und dieser Version.',
	'size' => 'Größe',
	'type' => 'Typ',
	'driver' => 'Treiber',
	'printers' => 'Drucker',
	'file_systems' => 'Dateisysteme',
	'file_system' => 'Dateisystem',
	'device' => 'Gerät',
	'mountpoint' => 'Mountpoint',
	'free' => 'Frei',
	'address' => 'Adresse',
	'used' => 'Verwendet',
	'server_overview' => 'Server-Übersicht',
	'disk_space' => 'Speicherplatz',
	'usage' => 'Auslastung',
	'progress' => 'Fortschritt',
	'expired' => 'Abgelaufen',
	'in_progress' => 'Wird verarbeitet...',
	'renew_failed_jobs' => 'Fehlgeschlagene Jobs erneuern',
	'confirm_renew_jobs' => 'Es wird ein neuer Jobcontainer mit allen fehlgeschlagenen Jobs erstellt. Anschließend werden die fehlgeschlagen Jobs vom ursprünglichen Container entfernt.',
	'renew' => 'Erneuern',
	'default_motd' => 'Danke, dass Sie sich für OCO entschieden haben. Falls Sie Fragen haben können Sie <a href="https://georg-sieber.de/?page=impressum" target="_blank">professionellen Support erhalten</a>.<br><br>Werfen Sie auch einen Blick auf die neue <a href="https://github.com/schorschii/oco-server/blob/master/docs/Client-API.md" target="_blank">JSON-RPC-API</a>.',
	'report_secureboot_disabled' => 'SecureBoot deaktiviert',
	'report_packages_without_installations' => 'Pakete ohne Installationen',
	'report_recognized_software_chrome' => 'Erkannte Software Chrome',
	'report_domainusers_multiple_computers' => 'Domänenbenutzer mit mehreren PCs',
	'report_expired_jobcontainers' => 'Abgelaufene Jobcontainer',
	'report_preregistered_computers' => 'Vorregistrierte Computer',
	'report_all_monitors' => 'Alle Monitore',
	'report_7_days_no_agent' => '7 Tage keine Agentenmeldung',
	'success_return_codes' => 'Erfolgreiche Return-Codes',
	'success_return_codes_comma_separated' => 'Mehrere Return-Codes mit Komma trennen',
	'auto_create_uninstall_jobs' => 'Automatisch Deinstallationsjobs erstellen, wenn bereits eine andere Version installiert ist',
	'download_for_uninstall' => 'Zum Deinstallieren herunterladen',
	'yes' => 'Ja',
	'no' => 'Nein',
	'csv' => 'CSV',
	'manufactured' => 'Hergestellt',
	'after_completion' => 'Nach Fertigstellung',
	'no_action' => 'Keine Aktion',
	'restart' => 'Neustart',
	'shutdown' => 'Herunterfahren',
	'restart_after' => 'Neustart nach spätestens',
	'shutdown_after' => 'Herunterfahren nach spätestens',
	'timeout_for_reboot' => 'Timeout für Reboot',
	'timeout_for_reboot_description' => 'Dies ermöglicht dem Nutzer seine Arbeit zu speichern, bevor der Rechner neu startet oder herunterfährt (wird nur angewendet, wenn Neustart/Herunterfahren im Paket aktiviert ist und mindestens ein Benutzer angemeldet ist).',
	'seconds' => 'Sekunden',
	'minutes' => 'Minuten',
	'report_predefined' => 'Vordefiniert',
	'rename_group' => 'Gruppe umbenennen',
	'rename' => 'Umbenennen',
	'group' => 'Gruppe',
	'no_mac_addresses_for_wol' => 'Es konnte kein WOL-Paket gesendet werden, da keine MAC-Adresse dieses Rechners bekannt ist. Bitte schließen Sie einen Netzwerkadapter an den Rechner an und führen Sie den Agenten aus, damit die MAC-Adresse an den Server gemeldet wird.',
	'name_cannot_be_empty' => 'Der Name darf nicht leer sein.',
	'hostname_cannot_be_empty' => 'Der Hostname darf nicht leer sein.',
	'username_cannot_be_empty' => 'Der Benutzername darf nicht leer sein.',
	'password_cannot_be_empty' => 'Das Passwort darf nicht leer sein.',
	'hostname_already_exists' => 'Der angegebene Hostname existiert bereits.',
	'pending_jobs' => 'Ausstehende Jobs',
	'remove_job' => 'Job entfernen',
	'license' => 'Lizenz',
	'activated' => 'Aktiviert',
	'not_activated' => 'Nicht aktiviert',
	'locale' => 'Sprache',
	'confirm_create_empty_package' => 'Keine Datei ausgewählt. Möchten Sie ein leeres Paket erstellen?',
	'package_family' => 'Name (Paketfamilie)',
	'other_packages_from_this_family' => 'Weitere Pakete dieser Familie',
	'search_computer_packages_job_container' => 'Suche Computer, Pakete, Jobcontainer, Domänenbenutzer, Reports...',
	'no_search_results' => 'Keine Suchergebnisse',
	'end_time_before_start_time' => 'Die Endzeit darf nicht vor der Startzeit liegen.',
	'waiting_for_start' => 'Wartet auf Start',
	'online' => 'Online',
	'offline' => 'Offline',
	'edit' => 'Bearbeiten',
	'enter_new_value' => 'Bitte geben Sie einen neuen Wert ein',
	'enter_start_time' => 'Bitte geben Sie eine Startzeit ein',
	'date_parse_error' => 'Parsen des Datums fehlgeschlagen. Bitte geben Sie ein Datum in folgendem Format ein: YYYY-MM-DD HH:MM:SS',
	'enter_new_procedure_post_action' => 'Bitte geben Sie eine neue Post-Prozedur-Aktion an:\n0 - Keine Aktion\n1 - Neustart\n2 - Herunterfahren',
	'enter_new_download_for_uninstall_action' => 'Bitte geben Sie an, ob das Paket für die Deinstallation heruntergeladen werden soll:\n0 - Nein\n1 - Ja',
	'agent_download' => 'Agenten-Download',
	'agent_download_description' => 'Sie müssen die Agenten-Software auf Ihren Clients installieren, damit Sie sie mit dem OCO-Server verwalten können.',
	'new_report' => 'Neuer Report',
	'database_schema' => 'Datenbankschema',
	'database_schema_description' => 'Schauen Sie sich das Datenbankschema an, um SQL-Reports für die OCO-Datenbank schreiben zu können.',
	'move_to' => 'Verschieben nach',
	'enter_query' => 'Bitte geben Sie eine Abfrage ein',
	'edit_query' => 'Abfrage bearbeiten',
	'edit_description' => 'Beschreibung bearbeiten',
	'unknown_error' => 'Unbekannter Fehler',
	'self_registration' => 'Selbstregistrierung',
	'desktop_notifications_not_supported' => 'Desktopbenachrichtigungen werden von Ihrem Browser nicht unterstützt.',
	'desktop_notifications_denied' => 'Sie haben die Desktopbenachrichtigungen in Ihrem Browser deaktiviert.',
	'desktop_notifications_already_permitted' => 'Desktopbenachrichtigungen wurden bereits aktiviert.',
	'job_container_status_changed' => 'Jobcontainer-Status hat sich geändert.',
	'user_settings' => 'Benutzereinstellungen',
	'enable_notifications' => 'Benachrichtigungen aktivieren',
	'compatible_os' => 'Kompatibles Betriebssystem',
	'compatible_os_version' => 'Kompatible Betriebssystemversion',
	'incompatible' => 'Inkompatibel',
	'package_conflict' => 'Paketkonflikt',
	'optional_hint' => '(optional)',
	'payload_corrupt' => 'Payload fehlerhaft',
	'cannot_move_uploaded_file' => 'Kann hochgeladenene Datei nicht verschieben',
	'cannot_create_zip_file' => 'Kann ZIP-Datei nicht anlegen',
	'invalid_api_key' => 'Ungültiger API-Key',
	'file_too_big' => 'Datei zu groß!',
	'change_icon' => 'Icon ändern',
	'remove_icon' => 'Icon entfernen',
	'are_you_sure' => 'Sind Sie sicher?',
	'restart_agent' => 'Agent neu starten',
	'interface' => 'Schnittstelle',
	'invalid_input' => 'Ungültiger Wert. Bitte prüfen Sie Ihre Eingaben.',
	'abort_after_failed' => 'Nach Fehler abbrechen',
	'aborted_after_failed' => 'Nach Fehler abgebrochen',
	'ignore_failed' => 'Fehler ignorieren',
	'sequence_mode' => 'Abarbeitungsstrategie',
	'package_creation_notes' => '
		<p>
			Ein Paket besteht aus einem ZIP-Archiv, welches bei der Bereitstellung in ein temporäres Verzeichnis entpackt wird. Anschließend wird ein Kommando (die Prozedur) ausgeführt, um die Installation zu starten. Längere Kommandos sollten in ein selbst geschriebenes Skript (.bat bzw. .sh) ausgelagert werden.
		</p>
		<p>
			Wenn Sie einen anderen Dateityp als ein ZIP-Archiv hochladen wird automatisch ein ZIP-Archiv mit der hochgeladenen Datei erstellt. Wenn Sie keine Datei auswählen wird ein leeres Acrhiv erstellt. Das kann nützlich sein, wenn Sie nur einen Befehl ohne bestimmte Dateien ausführen möchten (z.B. um etwas via <code>apt</code> unter Linux zu installieren).
		</p>
		<p>
			Beispiel-Prozeduren:
			<ul>
				<li>EXE-Setup unter Windows: <code>installer.exe /S</code>
				<li>EXE-Deinstallation unter Windows: <code>C:\Program Files\MyProgram\unins000.exe /S</code>
				<br>Das Deinstallations-Kommando ist von Software zu Software unterschiedlich, bitte ziehen Sie in Betracht EXE-Setups als MSI-Paket neu zu packen.</li>
				<li>MSI-Installation unter Windows: <code>msiexec /quiet /i package.msi</code></li>
				<li>MSI-Deinstallation unter Windows: <code>msiexec /quiet /x package.msi</code> oder <code>{PRODUCT-GUID}</code></li>
				<li>DEB-Paket unter Linux: <code>gdebi -n package.deb</code></li>
				<li>DEB-Paket unter Linux deinstallieren: <code>apt remove -y packagename</code></li>
				<li>.app-Verzeichnis für macOS: <code>cp -R program.app /Applications ; chmod -R +x /Applications/program.app</code></li>
				<li>.app-Verzeichnis für macOS deinstallieren: <code>rm -R /Applications/program.app</code></li>
				<li>.pkg-Paket für macOS: <code>installer -pkg package.pkg -target /</code> (kein Deinstallations-Support)</li>
				<li>Eigenes Batch-/Shell-Skript: <code>myscript.bat</code> oder <code>myscript.sh</code></li>
			</ul>
		</p>
	',
];
