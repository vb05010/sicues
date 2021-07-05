<?php

return [
    'auth' => [
        'title' => 'Admin felület',
        'invalid_login' => 'A megadott adatok nem egyeznek. Kérjük ellenőrizze őket és próbálja újra.'
    ],
    'field' => [
        'invalid_type' => 'A(z) :type mezőtípus érvénytelen.',
        'options_method_invalid_model' => "A(z) ':field' tulajdonság nem passzol a modellhez. Próbálja meghatározni a beállítást, ami megfelelő a(z) :model osztály számára.",
        'options_method_not_exists' => "A(z) :model modell osztálynak egy :method() nevű metódust kell definiálnia a(z) ':field' űrlapmező számára, ami visszaadja a beállításokat.",
        'colors_method_not_exists' => "A(z) :model modell osztálynak egy :method() nevű metódust kell definiálnia a(z) ':field' űrlapmező számára, ami visszaadja a html HEX kódot."
    ],
    'widget' => [
        'not_registered' => "A(z) ':name' widget osztálynév regisztrálása nem történt meg.",
        'not_bound' => "A(z) ':name' osztálynevű widget kötése nem történt meg a vezérlővel."
    ],
    'page' => [
        'untitled' => 'Névtelen',
        '404' => [
            'label' => 'Az oldal nem található',
            'help' => 'A megadott webcím alatt nem jeleníthető meg tartalom. Kérjük próbálkozzon más címmel.',
            'back_link' => 'Vissza az előző oldalra',
        ],
        'access_denied' => [
            'label' => 'Hozzáférés megtagadva',
            'help' => 'Nem rendelkezik a szükséges engedélyekkel ennek a lapnak a megtekintéséhez.',
            'cms_link' => 'Vissza a látogatói oldalra'
        ],
        'no_database' => [
            'label' => 'Az adatbázis nem elérhető',
            'help' => 'Kérjük ellenőrizze a hozzáférési adatok helyességét majd próbálja újra betölteni az oldalt.',
            'cms_link' => 'Vissza a weboldalra'
        ],
    ],
    'partial' => [
        'not_found_name' => "A(z) ':name' részlap nem található.",
        'invalid_name' => 'Helytelen részlap név: :name.'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Helytelen AJAX handler név: :name.',
        'not_found' => "A(z) ':name' AJAX handler nem található."
    ],
    'account' => [
        'impersonate' => 'Átjelentkezés a fiókba',
        'impersonate_confirm' => 'Biztos benne, hogy átjelentkezik a felhasználó saját fiókjába? Ezáltal a jelenlegi munkamenetből ki lesz jelentkeztetve.',
        'impersonate_success' => 'Sikeresen átjelentkezett a másik fiókba',
        'impersonate_working' => 'Átjelentkezés...',
        'impersonating' => 'Átjelentkezve mint :full_name',
        'stop_impersonating' => 'Visszajelentkezés',
        'signed_in_as' => 'Belépve mint :full_name',
        'sign_out' => 'Kijelentkezés',
        'login' => 'Belépés',
        'reset' => 'Alaphelyzet',
        'restore' => 'Visszaállítás',
        'login_placeholder' => 'felhasználónév',
        'password_placeholder' => 'jelszó',
        'remember_me' => 'Bejelentkezve maradok',
        'forgot_password' => 'Elfelejtette a jelszavát?',
        'enter_email' => 'Adja meg az e-mail címét',
        'enter_login' => 'Adja meg a felhasználói nevét',
        'email_placeholder' => 'e-mail cím',
        'enter_new_password' => 'Adjon meg egy új jelszót',
        'password_reset' => 'Új jelszó kiadása',
        'restore_success' => 'A visszaállítással kapcsolatos utasításokat tartalmazó levél elküldésre került.',
        'restore_error' => "Nem található a(z) ':login' nevű felhasználó.",
        'reset_success' => 'A jelszó átállítása sikerült. Most már bejelentkezhet.',
        'reset_error' => 'A megadott jelszó átállítási adatok érvénytelenek. Próbálja újra!',
        'reset_fail' => 'Nem állítható vissza a jelszava!',
        'apply' => 'Alkalmaz',
        'cancel' => 'Mégsem',
        'delete' => 'Törlés',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Vezérlőpult',
        'widget_label' => 'Widget',
        'widget_width' => 'Szélesség',
        'full_width' => 'teljes szélesség',
        'manage_widgets' => 'Widgetek kezelése',
        'add_widget' => 'Widget hozzáadása',
        'widget_inspector_title' => 'Widget testreszabása',
        'widget_inspector_description' => 'A jelenlegi widgethez tartozó beállítások.',
        'widget_columns_label' => 'Szélesség :columns',
        'widget_columns_description' => 'A widget szélessége, egy 1 és 10 közötti szám.',
        'widget_columns_error' => 'Adja meg a widget szélességét egy 1 és 10 közötti számként.',
        'columns' => '{1} oszlop|[2,Inf] oszlop',
        'widget_new_row_label' => 'Új sorba',
        'widget_new_row_description' => 'A widget új sorba helyezése.',
        'widget_title_label' => 'Megjelenő cím',
        'widget_title_error' => 'A widget címének megadása kötelező.',
        'reset_layout' => 'Elrendezés visszaállítása',
        'reset_layout_confirm' => 'Visszaállítás az alapértelmezettre?',
        'reset_layout_success' => 'A visszaállítás megtörtént.',
        'make_default' => 'Elrendezés mentése',
        'make_default_confirm' => 'A jelenlegi elrendezés legyen az alapértelmezett?',
        'make_default_success' => 'A jelenlegi elrendezés lett az alapértelmezett.',
        'collapse_all' => 'Összes becsukása',
        'expand_all' => 'Összes kibontása',
        'status' => [
            'widget_title_default' => 'Rendszer állapota',
            'update_available' => '{0} frissítés érhető el!|{1} frissítés érhető el!|[2,Inf] frissítés érhető el!',
            'updates_pending' => 'Függőben lévő frissítések',
            'updates_nil' => 'A weboldal naprakész',
            'updates_link' => 'Frissítés',
            'warnings_pending' => 'Függőben lévő teendők',
            'warnings_nil' => 'Minden rendben van',
            'warnings_link' => 'Megtekintés',
            'core_build' => 'Verzió',
            'event_log' => 'Esemény napló',
            'request_log' => 'Kérelem napló',
            'app_birthday' => 'Telepítve'
        ],
        'welcome' => [
            'widget_title_default' => 'Üdvözöljük!',
            'welcome_back_name' => 'Köszönjük, hogy visszatért a(z) :app weboldalra, :name.',
            'welcome_to_name' => 'Köszöntjük a(z) :app weboldalon, :name.',
            'first_sign_in' => 'Ez az első alkalom, hogy bejelentkezett.',
            'last_sign_in' => 'Legutóbbi bejelentkezése:',
            'view_access_logs' => 'Hozzáférés napló megtekintése',
            'nice_message' => 'Legyen jó napja!'
        ]
    ],
    'user' => [
        'name' => 'Admin',
        'menu_label' => 'Adminok',
        'menu_description' => 'Jogosultságok, szerepkörök és csoportok módosítása.',
        'list_title' => 'Adminok kezelése',
        'new' => 'Új admin',
        'login' => 'Felhasználói név',
        'first_name' => 'Vezetéknév',
        'last_name' => 'Keresztnév',
        'full_name' => 'Teljes név',
        'email' => 'E-mail cím',
        'role_field' => 'Szerepkör',
        'role_comment' => 'Meghatározza a felhasználó jogosultságait. Felülbírálható a felhasználó adatlapján, az Engedélyek fülön.',
        'groups' => 'Csoportok',
        'groups_comment' => 'Adja meg, hogy a felhasználó melyik csoport(ok)ba tartozzon.',
        'avatar' => 'Profilkép',
        'password' => 'Jelszó',
        'password_confirmation' => 'Jelszó megerősítése',
        'permissions' => 'Engedélyek',
        'account' => 'Profil',
        'superuser' => 'Szuperadmin',
        'superuser_comment' => 'Korlátlan hozzáférést biztosít az admin felülethez.',
        'send_invite' => 'Meghívó küldése e-mailben',
        'send_invite_comment' => 'Csak a belépéshez szükséges adatokat tartalmazza.',
        'delete_confirm' => 'Valóban törölni akarja ezt a felhasználót?',
        'return' => 'Vissza az adminokhoz',
        'allow' => 'Engedélyezés',
        'inherit' => 'Öröklés',
        'deny' => 'Tiltás',
        'activated' => 'Aktivált',
        'last_login' => 'Bejelentkezve',
        'created_at' => 'Létrehozva',
        'updated_at' => 'Módosítva',
        'deleted_at' => 'Törölve',
        'show_deleted' => 'Töröltek mutatása',
        'group' => [
            'name' => 'Csoport',
            'name_comment' => 'A név a csoport létrehozásnál és szerkesztésnél jelenik meg.',
            'name_field' => 'Név',
            'description_field' => 'Leírás',
            'is_new_user_default_field_label' => 'Alapértelmezett csoport',
            'is_new_user_default_field_comment' => 'Az új adminisztrátorok hozzáadása ehhez a csoporthoz.',
            'code_field' => 'Kód',
            'code_comment' => 'Adjon meg egy egyedi kódot, ha az API-val kíván hozzáférni.',
            'menu_label' => 'Csoportok',
            'list_title' => 'Csoportok',
            'new' => 'Új csoport',
            'delete_confirm' => 'Valóban törölni akarja az admin csoportot?',
            'return' => 'Vissza a csoportokhoz',
            'users_count' => 'Felhasználók'
        ],
        'role' => [
            'name' => 'Szerepkör',
            'name_field' => 'Név',
            'name_comment' => 'A szerepkör megnevezése, ami a listákban jelenik meg.',
            'description_field' => 'Leírás',
            'code_field' => 'Kód',
            'code_comment' => 'Egyedi értéket adjon meg, amit az API elérés során használhat.',
            'menu_label' => 'Szerepkörök',
            'list_title' => 'Szerepkörök',
            'new' => 'Új szerepkör',
            'delete_confirm' => 'Valóban törölni akarja a szerepkört?',
            'return' => 'Vissza a szerepkörhöz',
            'users_count' => 'Felhasználók'
        ],
        'preferences' => [
            'not_authenticated' => 'Nincs olyan hitelesített felhasználó, aki számára betölthetők vagy menthetők a beállítások.'
        ],
        'trashed_hint_title' => 'Ez a fiók törölve lett',
        'trashed_hint_desc' => 'A visszaállításához kattintson a jobb alsó sarokban található ikonra.'
    ],
    'list' => [
        'default_title' => 'Lista',
        'search_prompt' => 'Keresés...',
        'no_records' => 'Nincs megjeleníthető tartalom',
        'missing_model' => 'Nincs modell definiálva a(z) :class osztályban használt lista viselkedéshez.',
        'missing_column' => 'Nincsenek oszlop definíciók a(z) :columns oszlopok számára.',
        'missing_columns' => 'A(z) :class osztályban használt listának nincsenek definiált lista oszlopai.',
        'missing_definition' => "A lista viselkedés nem tartalmaz oszlopot a(z) ':field' mező számára.",
        'missing_parent_definition' => "A lista viselkedés nem tartalmaz definíciót az alábbihoz: ':definition'.",
        'behavior_not_ready' => 'Nem történt meg a lista viselkedés inicializálása. Kérjük ellenőrizze, hogy meghívta-e a makeLists() függvényt a vezérlőben.',
        'invalid_column_datetime' => "A(z) ':column' oszlopérték nem DateTime objektum, hiányzik egy \$dates hivatkozás a modellben?",
        'pagination' => 'Megjelenítve: :from-:to / :total',
        'first_page' => 'Első lap',
        'last_page' => 'Utolsó lap',
        'prev_page' => 'Előző lap',
        'next_page' => 'Következő lap',
        'refresh' => 'Frissítés',
        'updating' => 'Folyamatban...',
        'loading' => 'Betöltés...',
        'setup_title' => 'Lista testreszabása',
        'setup_help' => 'A jelölőnégyzetek használatával válassza ki azokat az oszlopokat, melyeket látni szeretne a listában. Az oszlopok pozícióját felfelé vagy lefelé húzással módosíthatja.',
        'records_per_page' => 'Listázás',
        'records_per_page_help' => 'Adja meg az elemek laponként megjelenítendő számát. Minél nagyobbat választ, annál több időbe kerül a lista frissítése. Az ajánlott érték 20 és 40 közötti.',
        'check' => 'Bejelöl',
        'delete_selected' => 'Eltávolítás',
        'delete_selected_empty' => 'A törléshez előbb ki kell választani elemet.',
        'delete_selected_confirm' => 'Valóban töröljük a kiválasztott elemeket?',
        'delete_selected_success' => 'Sikeresen törölve lettek a kiválasztott elemek.',
        'column_switch_true' => 'Igen',
        'column_switch_false' => 'Nem'
    ],
    'fileupload' => [
        'attachment' => 'Csatolmány',
        'help' => 'Adja meg a csatolmány címét és a leírását.',
        'title_label' => 'Cím',
        'description_label' => 'Leírás',
        'default_prompt' => 'Hozza ide a fájlt vagy kattintson erre: %s',
        'attachment_url' => 'Csatolmány webcíme',
        'upload_file' => 'Fájl feltöltése',
        'upload_error' => 'Feltöltési hiba',
        'remove_confirm' => 'Biztos benne?',
        'remove_file' => 'Fájl eltávolítása'
    ],
    'repeater' => [
        'min_items_failed' => 'A(z) :name mező legalább :max elemből állhat. Jelenleg csak :items mező van megadva.',
        'max_items_failed' => 'A(z) :name mező legfeljebb :max elemből állhat. Jelenleg :items mező van megadva.',
    ],
    'form' => [
        'create_title' => 'Új :name',
        'update_title' => ':name szerkesztése',
        'preview_title' => ':name gyorsnézete',
        'create_success' => 'A(z) :name létrehozása sikerült',
        'update_success' => 'A(z) :name módosítása sikerült',
        'delete_success' => 'A(z) :name törlése sikerült',
        'restore_success' => 'A(z) :name visszaállítása sikerült',
        'reset_success' => 'A visszaállítás sikerült',
        'missing_id' => 'Nincs megadva az űrlap rekord azonosítója.',
        'missing_model' => 'A(z) :class osztályban használt űrlap viselkedésének nincs definiált modellje.',
        'missing_definition' => "Az űrlap viselkedés nem tartalmaz mezőt a(z) ':field' mezőhöz.",
        'not_found' => 'A(z) :id azonosítójú űrlap rekord nem található.',
        'action_confirm' => 'Biztos benne?',
        'create' => 'Létrehozás',
        'create_and_close' => 'Létrehozás és bezárás',
        'creating' => 'Létrehozás...',
        'creating_name' => 'A(z) :name létrehozása...',
        'save' => 'Mentés',
        'save_and_close' => 'Mentés és bezárás',
        'saving' => 'Mentés...',
        'saving_name' => 'A(z) :name mentése...',
        'delete' => 'Törlés',
        'deleting' => 'Törlés...',
        'confirm_delete' => 'Biztos, hogy törölhető?',
        'confirm_delete_multiple' => 'Biztos, hogy mindegyik törölhető?',
        'deleting_name' => 'A(z) :name törlése...',
        'restore' => 'Visszaállítás',
        'restoring' => 'Visszaállítás...',
        'confirm_restore' => 'Biztos, hogy állítsuk vissza?',
        'reset_default' => 'Alaphelyzet',
        'resetting' => 'Visszaállítás',
        'resetting_name' => 'A(z) :name visszaállítása',
        'undefined_tab' => 'Egyebek',
        'field_off' => 'Ki',
        'field_on' => 'Be',
        'add' => 'Hozzáadás',
        'apply' => 'Alkalmaz',
        'cancel' => 'Mégsem',
        'close' => 'Bezárás',
        'confirm' => 'Megerősítés',
        'reload' => 'Újratöltés',
        'complete' => 'Befejezés',
        'ok' => 'OK',
        'or' => 'vagy',
        'confirm_tab_close' => 'Valóban be akarja zárni a fület? El fognak veszni a nem mentett módosítások.',
        'behavior_not_ready' => 'Nem történt meg az űrlap viselkedésének inicializálása. Kérjük ellenőrizze, hogy meghívta-e az initForm() függvényt a vezérlőben.',
        'preview_no_files_message' => 'Nincs megadva fájl.',
        'preview_no_media_message' => 'Nincs megadva kép.',
        'preview_no_record_message' => 'Nincs megadva mező.',
        'select' => 'Kiválaszt',
        'select_all' => 'mindegyik',
        'select_none' => 'egyik sem',
        'select_placeholder' => 'válasszon',
        'insert_row' => 'Sor beszúrása',
        'insert_row_below' => 'Sor beszúrása alá',
        'delete_row' => 'Sor törlése',
        'concurrency_file_changed_title' => 'A fájl megváltozott',
        'concurrency_file_changed_description' => 'A jelenleg szerkesztett fájlt egy másik felhasználó már módosította. Újratöltheti és elveszti a változtatásait, vagy felülírja a fájlt.',
        'return_to_list' => 'Vissza a listához'
    ],
    'recordfinder' => [
        'find_record' => 'Tartalom keresése',
        'invalid_model_class' => 'A(z) ":modelClass" modell osztály érvénytelen a tartalom kereséshez.',
        'cancel' => 'Mégsem'
    ],
    'pagelist' => [
        'page_link' => 'Lapok',
        'select_page' => '-- válasszon --'
    ],
    'relation' => [
        'missing_config' => "A reláció viselkedésnek nincs semmilyen konfigurációja a következőhöz: ':config'.",
        'missing_definition' => "A reláció viselkedés nem tartalmazza a(z) ':field' mező definícióját.",
        'missing_model' => 'A(z) :class osztályban használt reláció viselkedésnek nincs definiált modellje.',
        'invalid_action_single' => 'Ez a művelet nem hajtható végre egyetlen kapcsolaton.',
        'invalid_action_multi' => 'Ez a művelet nem hajtható végre több kapcsolaton.',
        'help' => 'Kattintson egy elemre a hozzáadásához',
        'related_data' => 'Kapcsolódó :name adatok',
        'add' => 'Hozzáadás',
        'add_selected' => 'Kijelöltek hozzáadása',
        'add_a_new' => 'Új :name hozzáadása',
        'link_selected' => 'Kijelöltek csatolása',
        'link_a_new' => 'Új :name csatolása',
        'cancel' => 'Mégsem',
        'close' => 'Bezárás',
        'add_name' => ':name hozzáadása',
        'create' => 'Létrehozás',
        'create_name' => ':name létrehozása',
        'update' => 'Frissítés',
        'update_name' => 'A(z) :name frissítése',
        'preview' => 'Előnézet',
        'preview_name' => 'Előnézet neve',
        'remove' => 'Eltávolítás',
        'remove_name' => 'A(z) :name eltávolítása',
        'delete' => 'Törlés',
        'delete_name' => 'A(z) :name törlése',
        'delete_confirm' => 'Biztos benne?',
        'link' => 'Csatolás',
        'link_name' => ':name csatolása',
        'unlink' => 'Csatolás megszüntetése',
        'unlink_name' => ':name csatolásának megszüntetése',
        'unlink_confirm' => 'Biztos benne?'
    ],
    'reorder' => [
        'default_title' => 'Elemek újrarendezése',
        'no_records' => 'Nincs elérhető tartalom a rendezéshez.'
    ],
    'model' => [
        'name' => 'Modell',
        'not_found' => "Nem található :id azonosítójú ':class' modell.",
        'missing_id' => 'Nincs azonosító megadva a modell rekord kereséséhez.',
        'missing_relation' => "A(z) ':class' modell nem tartalmaz definíciót a(z) ':relation' reláció számára.",
        'missing_method' => "A(z) ':class' modell nem tartalmaz ':method' metódust.",
        'invalid_class' => "A(z) :class osztályban használt :model modell nem érvényes, örökölnie kell a \Model osztályt.",
        'mass_assignment_failed' => "A tömeges hozzárendelés a(z) ':attribute' modell attribútumhoz nem sikerült."
    ],
    'warnings' => [
        'tips' => 'Beállítási tippek',
        'tips_description' => 'Az alábbi dolgokra figyeljen oda a rendszer megfelelő működése érdekében.',
        'permissions'  => 'A(z) :name könyvtár vagy alkönyvtárai a PHP számára nem írhatóak. Adjon megfelelő engedélyeket a kiszolgálónak erre a könyvtárra.',
        'extension' => 'A(z) :name PHP kiterjesztés nincs telepítve. Telepítse ezt a függvénytárat és aktiválja a kiterjesztést.',
        'plugin_missing' => 'A(z) :name bővítményre szükség van, de nincs telepítve. Kérjük telepítse ezt a bővítményt.',
        'debug' => 'A hibakeresési mód engedélyezve van. Ez nem ajánlott éles weboldal esetén.',
        'decompileBackendAssets' => 'Az admin felülethez tartozó fájlok nem véglegesek. Ez nem ajánlott éles weboldal esetén.'
    ],
    'editor' => [
        'menu_label' => 'Szövegszerkesztő',
        'menu_description' => 'A megjelenésének és működésének testreszabása.',
        'font_size' => 'Betűméret',
        'tab_size' => 'Tabulátor mérete',
        'use_hard_tabs' => 'Behúzás tabulátorokkal',
        'code_folding' => 'Kód összecsukása',
        'code_folding_begin' => 'Jelzés elejénél',
        'code_folding_begin_end' => 'Jelzés elejénél és végénél',
        'autocompletion' => 'Automatikus kiegészítés',
        'word_wrap' => 'Tördelés',
        'highlight_active_line' => 'Aktív sor kiemelése',
        'auto_closing' => 'Automatikus kódlezárás',
        'show_invisibles' => 'Láthatatlan karakterek mutatása',
        'show_gutter' => 'Margó megjelenítése',
        'basic_autocompletion'=> 'Egyszerű mód (Ctrl + Szóköz)',
        'live_autocompletion'=> 'Intelligens mód',
        'enable_snippets'=> 'Kódrészletek engedélyezése (Tab)',
        'display_indent_guides'=> 'Bekezdés megjelenítése',
        'show_print_margin'=> 'Nyomtatási margó mutatása',
        'mode_off' => 'Nincs',
        'mode_fluid' => 'Folytonos',
        '40_characters' => '40 karakter',
        '80_characters' => '80 karakter',
        'theme' => 'Színséma',
        'markup_styles' => 'Stílusok',
        'custom_styles' => 'Egyéni megjelenés',
        'custom styles_comment' => 'Saját stílusok és megjelenések megadása.',
        'markup_classes' => 'Értékek',
        'paragraph' => 'Bekezdés',
        'link' => 'Hivatkozás',
        'table' => 'Táblázat',
        'table_cell' => 'Táblázat cella',
        'image' => 'Kép',
        'label' => 'Megnevezés',
        'class_name' => 'CSS osztály',
        'markup_tags' => 'Szabályok',
        'allowed_empty_tags' => 'Engedélyezett üres elemek',
        'allowed_empty_tags_comment' => 'Azon HTML elemek, amik üres érték esetén sem lesznek eltávolítva.',
        'allowed_tags' => 'Engedélyezett elemek',
        'allowed_tags_comment' => 'Azon HTML elemek, amik használata megengedett.',
        'no_wrap' => 'Nem tördelhető elemek',
        'no_wrap_comment' => 'Azon HTML elemek, amik tartalma nem tördelhető.',
        'remove_tags' => 'Eltávolítható elemek',
        'remove_tags_comment' => 'Azon HTML elemek, amik a tartalmukkal együtt törölhetőek.',
        'line_breaker_tags' => 'Sortörő elemek',
        'line_breaker_tags_comment' => 'Azon HTML elemek, amik végén kötelezően egy új sor jelenik meg.',
        'toolbar_buttons' => 'Eszköztár',
        'toolbar_buttons_comment' => 'Használható értékek: [fullscreen, bold, italic, underline, strikeThrough, subscript, superscript, fontFamily, fontSize, |, color, emoticons, inlineStyle, paragraphStyle, |, paragraphFormat, align, formatOL, formatUL, outdent, indent, quote, insertHR, -, insertLink, insertImage, insertVideo, insertAudio, insertFile, insertTable, undo, redo, clearFormatting, selectAll, html]'
    ],
    'tooltips' => [
        'preview_website' => 'Weboldal megtekintése'
    ],
    'mysettings' => [
        'menu_label' => 'Beállításaim',
        'menu_description' => 'A fiókkal kapcsolatos beállítások'
    ],
    'myaccount' => [
        'menu_label' => 'Fiókom',
        'menu_description' => 'A felhasználói adatok módosítása.',
        'menu_keywords' => 'biztonságos bejelentkezés'
    ],
    'branding' => [
        'menu_label' => 'Testreszabás',
        'menu_description' => 'Az admin felület megjelenésének egyedivé tétele.',
        'brand' => 'Márka',
        'logo' => 'Logó',
        'logo_description' => 'Legalább közepes méretű legyen.',
        'favicon' => 'Favicon',
        'favicon_description' => 'Egyedi ikon az admin felülethez.',
        'app_name' => 'Név',
        'app_name_description' => 'A honlap megnevezése.',
        'app_tagline' => 'Szlogen',
        'app_tagline_description' => 'A weboldal mottója.',
        'colors' => 'Színek',
        'primary_color' => 'Alap szín',
        'secondary_color' => 'Másodlagos szín',
        'accent_color' => 'Hangsúlyos szín',
        'styles' => 'Stílusok',
        'custom_stylesheet' => 'Egyéni megjelenés',
        'navigation' => 'Navigáció',
        'menu_mode' => 'Menü stílusa',
        'menu_mode_inline' => 'Egysoros',
        'menu_mode_inline_no_icons' => 'Egysoros (nincs ikon)',
        'menu_mode_tile' => 'Csempés',
        'menu_mode_collapsed' => 'Összezárt'
    ],
    'backend_preferences' => [
        'menu_label' => 'Beállításaim',
        'menu_description' => 'A működésének testreszabása.',
        'region' => 'Régió',
        'code_editor' => 'Kódszerkesztő',
        'timezone' => 'Időzóna',
        'timezone_comment' => 'Válassza ki az alapértelmezett időzónát.',
        'locale' => 'Nyelv',
        'locale_comment' => 'Válassza ki az alapértelmezett nyelvet.'
    ],
    'access_log' => [
        'hint' => 'Ez a napló a felhasználók sikeres bejelentkezési kísérleteit listázza ki. A bejegyzéseket :days napig őrzi meg a rendszer.',
        'menu_label' => 'Hozzáférés napló',
        'menu_description' => 'A felhasználók sikeres bejelentkezéseinek megtekintése.',
        'id' => 'ID',
        'created_at' => 'Időpont',
        'type' => 'Típus',
        'login' => 'Felhasználónév',
        'ip_address' => 'IP cím',
        'first_name' => 'Keresztnév',
        'last_name' => 'Vezetéknév',
        'email' => 'E-mail cím'
    ],
    'filter' => [
        'all' => 'mind',
        'options_method_not_exists' => "A(z) :model osztálynak kötelező definiálni a(z) :method() metódust a(z) ':filter' szűrő feltételhez.",
        'date_all' => 'minden időszak',
        'number_all' => 'minden szám'
    ],
    'import_export' => [
        'upload_csv_file' => '1. CSV fájl',
        'import_file' => 'Fájl feltöltése',
        'row' => ':row sor',
        'first_row_contains_titles' => 'Az első sor tartalmazza az oszlop neveit',
        'first_row_contains_titles_desc' => 'Hagyja bejelölve, amennyiben a CSV fájl első sora az oszlop neveket tartalmazza.',
        'match_columns' => '2. Oszlopok párosítása',
        'file_columns' => 'Fájl oszlopok',
        'database_fields' => 'Adatbázis oszlopok',
        'set_import_options' => '3. További beállítások',
        'export_output_format' => '1. CSV fájl',
        'file_format' => 'Fájl formátuma',
        'standard_format' => 'Szabvány formátum',
        'custom_format' => 'Egyedi formátum',
        'delimiter_char' => 'Határoló karakter',
        'enclosure_char' => 'Elválasztó karakter',
        'escape_char' => 'Végjel karakter',
        'select_columns' => '2. Oszlopok kiválasztása',
        'column' => 'Oszlop',
        'columns' => 'Oszlopok',
        'set_export_options' => '3. Exportálási beállítások',
        'show_ignored_columns' => 'Figyelmen kívül hagyott oszlopok mutatása',
        'auto_match_columns' => 'Automatikus oszlop párosítás',
        'created' => 'Létrehozva',
        'updated' => 'Frissítve',
        'skipped' => 'Kihagyva',
        'warnings' => 'Figyelmeztetések',
        'errors' => 'Hibák',
        'skipped_rows' => 'Kihagyott sorok',
        'import_progress' => 'Importálás folyamatban...',
        'processing' => 'Folyamatban',
        'import_error' => 'Importálási hiba',
        'upload_valid_csv' => 'Kérjük töltsön fel érvényes CSV fájlt.',
        'drop_column_here' => 'Húzza ide az oszlopot...',
        'ignore_this_column' => 'Figyelmen kívül hagyott oszlop',
        'processing_successful_line1' => 'Az exportálási folyamat sikeresen lezárult!',
        'processing_successful_line2' => 'A böngésző elkezdi a fájl letöltését.',
        'export_progress' => 'Exportálás folyamatban',
        'export_error' => 'Exportálási hiba',
        'column_preview' => 'Oszlop előnézete',
        'file_not_found_error' => 'A fájl nem található',
        'empty_error' => 'Nincs adat az exportáláshoz.',
        'empty_import_columns_error' => 'Kérjük adjon meg néhány oszlopot az importáláshoz.',
        'match_some_column_error' => 'Kérjük elsőként párosítson össze oszlopokat.',
        'required_match_column_error' => 'Kérjük adja meg a párosítást ehhez a kötelező mezőhöz: :label.',
        'empty_export_columns_error' => 'Kérjük adjon meg néhány oszlopot az exportáláshoz.',
        'behavior_missing_uselist_error' => 'Szükséges implementálni a ListController vezérlőt a "useList" engedélyezése esetén.',
        'missing_model_class_error' => 'Kérjük adja meg a modelClass tulajdonságát ehhez: :type',
        'missing_column_id_error' => 'Hiányzó oszlop azonosító',
        'unknown_column_error' => 'Ismeretlen oszlop',
        'encoding_not_supported_error' => 'A forrásfájl kódolása nem felismerhető. Kérjük válassza ki a listából a megfelelő kódolást.',
        'encoding_format' => 'Fájl kódolása',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Nyugat-európai)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Közép-európai)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, Dél-európai)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, Észak-európai)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cirill)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arab)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Görög)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Héber)',
            'iso_8859_0' => 'ISO-8859-9 (Latin-5, Török)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Északi)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Balti)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Kelta)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Nyugat-európai Euró jellel)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)'
        ]
    ],
    'permissions' => [
        'manage_media' => 'Média kezelése'
    ],
    'mediafinder' => [
        'label' => 'Média',
        'default_prompt' => 'Kattintson a(z) %s gombra új média fájl kereséséhez.',
        'no_image' => 'A kép nem található'
    ],
    'media' => [
        'menu_label' => 'Média',
        'upload' => 'Feltöltés',
        'move' => 'Áthelyezés',
        'delete' => 'Törlés',
        'add_folder' => 'Könyvtár létrehozása',
        'search' => 'Keresés...',
        'display' => 'Megjelenítés',
        'filter_everything' => 'Összes',
        'filter_images' => 'Kép',
        'filter_video' => 'Videó',
        'filter_audio' => 'Audió',
        'filter_documents' => 'Dokumentum',
        'library' => 'Média',
        'size' => 'Méret',
        'title' => 'Név',
        'last_modified' => 'Módosítva',
        'public_url' => 'Webcím',
        'click_here' => 'Megtekintés',
        'thumbnail_error' => 'Hiba a bélyegkép létrehozásánál.',
        'return_to_parent' => 'Vissza a szülő könyvtárhoz',
        'return_to_parent_label' => 'Eggyel vissza ..',
        'nothing_selected' => 'Nincs kiválasztva fájl.',
        'multiple_selected' => 'Több fájl kiválasztva.',
        'uploading_file_num' => 'Feltöltve :number fájl...',
        'uploading_complete' => 'Feltöltés sikeresen befejezve',
        'uploading_error' => 'Feltöltés sikertelen',
        'type_blocked' => 'A fájltípus blokkolva lett biztonsági okokból.',
        'order_by' => 'Rendezés',
        'direction' => 'Irány',
        'direction_asc' => 'Növekvő',
        'direction_desc' => 'Csökkenő',
        'folder' => 'Könyvtár',
        'no_files_found' => 'Nem található fájl a lekérésben.',
        'delete_empty' => 'Kérjük válassza ki a törölni kívánt fájlokat.',
        'delete_confirm' => 'Valóban törölni akarja a kiválasztott fájlokat?',
        'error_renaming_file' => 'Hiba a fájl átnevezésében.',
        'new_folder_title' => 'Új könyvtár',
        'folder_name' => 'Könyvtár neve',
        'error_creating_folder' => 'Hiba a könyvtár létrehozásánál',
        'folder_or_file_exist' => 'Már létezik ilyen nevű fájl vagy könyvtár.',
        'move_empty' => 'Kérjük válasszon ki fájlt az áthelyezéshez.',
        'move_popup_title' => 'Fájlok vagy könyvtárak áthelyezése',
        'move_destination' => 'Célkönyvtár',
        'please_select_move_dest' => 'Kérjük válasszon célkönyvtárat.',
        'move_dest_src_match' => 'Kérjük válasszon másik célkönyvtárat.',
        'empty_library' => 'Kezdésként hozzon létre könyvtárat és töltsön fel fájlokat.',
        'insert' => 'Beillesztés',
        'crop_and_insert' => 'Vágás és beillesztés',
        'select_single_image' => 'Kérjük válasszon ki egy képet.',
        'selection_not_image' => 'A kiválasztott fájl nem kép.',
        'restore' => 'Összes változtatás visszavonása',
        'resize' => 'Átméretezés...',
        'selection_mode_normal' => 'Normál',
        'selection_mode_fixed_ratio' => 'Rögzített képarány',
        'selection_mode_fixed_size' => 'Rögzített méret',
        'height' => 'Magasság',
        'width' => 'Szélesség',
        'selection_mode' => 'Kiválasztás módja',
        'resize_image' => 'Kép átméretezése',
        'image_size' => 'Kép mérete:',
        'selected_size' => 'Kiválasztva:'
    ]
];
