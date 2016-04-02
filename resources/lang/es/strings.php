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
                'edit_explanation' => 'Si ha realizaado cambios en la herarquia de esta pagina, deberá refrescarla para ver los cambios.',

                'groups' => [
                    'hierarchy_saved' => 'Herarquia guardada satisfactoriamente.',
                ],

                'sort_explanation' => 'Esta sección permite organizar los Permisos en Grupos. Independientemente de l Grupo, cada permiso debe ser asignado a los Roles de forma individual.',
            ],

            'users' => [
                'delete_user_confirm' => 'Estas seguro de querer eliminar este Usuario de forma permanente? Esto puede producir un error grave en aquéllas partes de la aplicación que hagan referencia al mismo. Proceda con cautela. Esta operación no puede ser revertida.',
                'if_confirmed_off' => '(Si la confirmación está desactivada)',
                'restore_user_confirm' => 'Restaurar este Usuario a su estado original?',
            ],
        ],

        'dashboard' => [
            'title' => 'Panel de Administración',
            'welcome' => 'Bienvenido',
        ],

        'general' => [
            'all_rights_reserved' => 'Todos los derechos reservados.',
            'are_you_sure' => 'Está seguro?',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => 'Continuar',
            'member_since' => 'Miembro desde',
            'search_placeholder' => 'Buscar...',

            'see_all' => [
                'messages' => 'Ver todos los mensajes',
                'notifications' => 'Ver todo',
                'tasks' => 'Ver todas las tareas',
            ],

            'status' => [
                'online' => 'Online',
                'offline' => 'Offline',
            ],

            'you_have' => [
                'messages' => '{0} No tiene nuevos mensajes|{1} Tiene 1 nuevo mensaje|[2,Inf] Tiene :number nuevos mensajes',
                'notifications' => '{0} No tiene nuevas notificaciónes|{1} Tiene 1 nueva notificación|[2,Inf] Tiene :number notificaciónes',
                'tasks' => '{0} No tiene nuevas tareas|{1} Tiene 1 nueva tarea|[2,Inf] Tiene :number nuevas tareas',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => 'Su enlace de reinicio de la contraseña',
            'reset_password' => 'Pulse aqui para reiniciar su contraseña',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => 'Pulse aqui para verificar su account:',
        ],

        'test' => 'Prueba',

        'tests' => [
            'based_on' => [
                'permission' => 'Basado en el Permiso - ',
                'role' => 'Basado en el Rol - ',
            ],

            'js_injected_from_controller' => 'Javascript inyectado desde Controller',

            'using_blade_extensions' => 'Usando las extenciónes de Blade',

            'using_access_helper' => [
                'array_permissions' => 'Uso de Access Helper con lista de nombres de Permisos o ID\'s donde usuario tiene que tenerlos todos.',
                'array_permissions_not' => 'Uso de Access Helper con lista de nombres de Permisos o ID\'s donde usuario no tiene por que tenerlos todos.',
                'array_roles' => 'Uso de Access Helper con lista de nombres de Roles o ID\'s donde usuario tiene que tenerlos todos.',
                'array_roles_not' => 'Uso de Access Helper con lista de nombres de Roles o ID\'s donde usuario no tiene que tenerlos todos.',
                'permission_id' => 'Uso de Access Helper mediante ID de Permiso',
                'permission_name' => 'Uso de Access Helper mediante nombre de Permiso',
                'role_id' => 'Uso de Access Helper mediante ID de Rol',
                'role_name' => 'Uso de Access Helper mediante nombre de Rol',
            ],

            'view_console_it_works' => 'Mire la consola del navegador, deberia ver \'it works!\' que tiene su origen en FrontendController@index',
            'you_can_see_because' => 'Puede ver esto, por que dispone del Rol \':role\'!',
            'you_can_see_because_permission' => 'Puede ver esto, por que dispone del Permiso \':permission\'!',
        ],

        'user' => [
            'profile_updated' => 'Perfil actualizado satisfactoriamente.',
            'password_updated' => 'Contraseña actualizada satisfactoriamente.',
        ],

        'welcome_to' => 'Bienvenido a :place',
    ],
];
