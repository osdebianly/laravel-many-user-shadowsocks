<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'permissions' => [
                'edit_explanation' => 'Se hai svolto sulla gerarchia senza ricaricare questa pagina, dovrai ricaricarla per vedere i cambiamenti introdotti.',

                'groups' => [
                    'hierarchy_saved' => 'Gerarchia salvata con successo.',
                ],

                'sort_explanation' => 'Questa sezione permette di organizzare i permessi in gruppi per praticità. Nonostante il raggruppamento, i permessi vengono associati individualmente a ciascun ruolo.',
            ],

            'users' => [
                'delete_user_confirm' => "Sei sicuro di voler eliminare definitivamente questo utente? Ovunque ci sia un riferimento a questo utente all'interno dell'applicazione si vedrà un errore. Procedi a tuo rischio e pericolo, non si potrà annullare questa operazione.",
                'if_confirmed_off' => '(Se non è confermato)',
                'restore_user_confirm' => "Ripristinare l'utente al suo stato originario?",
            ],
        ],

        'dashboard' => [
            'title' => 'Dashboard Amministrazione',
            'welcome' => 'Benvenuto',
        ],

        'general' => [
            'all_rights_reserved' => 'Tutti i diritti riservati.',
            'are_you_sure' => 'Sei sicuro?',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => 'Continua',
            'member_since' => 'Membro dal',
            'search_placeholder' => 'Cerca...',

            'see_all' => [
                'messages' => 'Visualizza tutti i messaggi',
                'notifications' => 'Visualizza tutte',
                'tasks' => 'Visualizza tutti i compiti',
            ],

            'status' => [
                'online' => 'Online',
                'offline' => 'Offline',
            ],

            'you_have' => [
                'messages' => '{0} Non hai messaggi|{1} Hai un messaggio|[2,Inf] Hai :number messaggi',
                'notifications' => '{0} Non hai notifiche|{1} Hai una notifica|[2,Inf] Hai :number notifiche',
                'tasks' => '{0} Non hai compiti|{1} Hai un compito|[2,Inf] Hai :number compiti',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => 'Il tuo link per il reset della password',
            'reset_password' => 'Clicca qui per resettare la tua password',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => 'Clicca qui per confermare il tuo account:',
        ],

        'test' => 'Test',

        'tests' => [
            'based_on' => [
                'permission' => 'Basato su permessi - ',
                'role' => 'Basato su ruoli - ',
            ],

            'js_injected_from_controller' => 'Javascript iniettato da un controller',

            'using_blade_extensions' => 'Usando estensioni Blade',

            'using_access_helper' => [
                'array_permissions' => "Si sta usando l'Access Helper con un array di nomi o ID di permessi, l'utente li deve possedere tutti.",
                'array_permissions_not' => "Si sta usando l'Access Helper con un array di nomi o ID di permessi, l'utente non li deve possedere tutti.",
                'array_roles' => "Si sta usando l'Access Helper con un array di nomi o ID di ruoli, l'utente li deve possedere tutti.",
                'array_roles_not' => "Si sta usando l'Access Helper con un array di nomi o ID di ruoli, l'utente non li deve possedere tutti.",
                'permission_id' => "Si sta usando l'Access Helper con un ID di permesso",
                'permission_name' => "Si sta usando l'Access Helper con un nome di permesso",
                'role_id' => "Si sta usando l'Access Helper con un ID di ruolo",
                'role_name' => "Si sta usando l'Access Helper con un nome di ruolo",
            ],

            'view_console_it_works' => 'Apri la console Javascript del browser, dovresti vedere \'it works!\' generato da FrontendController@index',
            'you_can_see_because' => 'Puoi vedere questo perché il tuo ruolo è \':role\'!',
            'you_can_see_because_permission' => 'Puoi vedere questo perché hai il permesso \':permission\'!',
        ],

        'user' => [
            'profile_updated' => 'Profilo aggiornato con successo.',
            'password_updated' => 'Password aggiornata con successo.',
        ],

        'welcome_to' => 'Benvenuto su :place',
    ],
];
