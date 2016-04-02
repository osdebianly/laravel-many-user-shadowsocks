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
                'edit_explanation' => 'Se você executou alterações na hierarquia sem atualizar esta página, você precisará atualizar para refletir as mudanças aqui.',

                'groups' => [
                    'hierarchy_saved' => 'Hierarquia salva com sucesso.',
                ],

                'sort_explanation' => 'Esta seção permite que você organize suas permissões em grupos para manter-se organizado. Independentemente do grupo, as permissões são ainda atribuídas individualmente a cada função.',
            ],

            'users' => [
                'delete_user_confirm' => 'Tem certeza de que deseja excluir este usuário permanentemente? Em algum lugar do aplicativo pode fazer referência ao id deste usuário e possivelmente pode ocasionar um erro. Prossiga por sua conta e risco. Isso não pode ser desfeito.',
                'if_confirmed_off' => '(Se confirmado estiver desligado)',
                'restore_user_confirm' => 'Restaurar esse usuário ao seu estado original?',
            ],
        ],

        'dashboard' => [
            'title' => 'Painel de Controle Administrativo',
            'welcome' => 'Bem-vindo',
        ],

        'general' => [
            'all_rights_reserved' => 'Todos os direitos reservados.',
            'are_you_sure' => 'Tem certeza?',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => 'Continuar',
            'member_since' => 'Membro desde',
            'search_placeholder' => 'Buscar...',

            'see_all' => [
                'messages' => 'Ver todas as mensagens',
                'notifications' => 'Ver todas as notificações',
                'tasks' => 'Ver todas as tarefas',
            ],

            'status' => [
                'online' => 'Online',
                'offline' => 'Offline',
            ],

            'you_have' => [
                'messages' => '{0} Você não tem mensagens|{1} Você tem 1 mensagem|[2,Inf] Você tem :number mensagens',
                'notifications' => '{0} Você não tem notificações|{1} Você tem 1 notificação|[2,Inf] Você tem :number notificações',
                'tasks' => '{0} Você não tem tarefas|{1} Você tem 1 tarefa|[2,Inf] Você tem :number tarefas',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => 'Seu link para redefinição de senha',
            'reset_password' => 'Clique aqui para redefinir sua senha',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => 'Clique aqui para confirmar a sua conta:',
        ],

        'test' => 'Teste',

        'tests' => [
            'based_on' => [
                'permission' => 'Baseado na Permissão do Usuário - ',
                'role' => 'Baseado no Papel do Usuário - ',
            ],

            'js_injected_from_controller' => 'Javascript Injetado de um Controller',

            'using_blade_extensions' => 'Usando as Extensões Blade',

            'using_access_helper' => [
                'array_permissions' => 'Usando o "Access Helper" com um Array de Nomes de Permissões ou ID\'s onde o usuário precisa satisfazer ambas as condições.',
                'array_permissions_not' => 'Usando o "Access Helper" com um Array de Nomes de Permissões ou ID\'s onde o usuário não precisa satisfazer ambas as condições.',
                'array_roles' => 'Usando o "Access Helper" com um Array de Nomes de Papéis ou ID\'s onde o usuário precisa satisfazer ambas as condições.',
                'array_roles_not' => 'Usando o "Access Helper" com um Array de Nomes de Papéis ou ID\'s onde o usuário não precisa satisfazer ambas as condições.',
                'permission_id' => 'Usando o "Access Helper" com o ID da Permissão',
                'permission_name' => 'Usando o "Access Helper" com o Nome da Permissão',
                'role_id' => 'Usando o "Access Helper" com o ID do Papel',
                'role_name' => 'Usando o "Access Helper" com o Nome do Papel',

            ],

            'view_console_it_works' => 'Veja o console, você deverá ver a mensagem \'it works!\' que está vindo de FrontendController@index',
            'you_can_see_because' => 'Você pode ver isto porque você tem o papel de \':role\'!',
            'you_can_see_because_permission' => 'Você pode ver isto porque você tem a permissão de \':permission\'!',
        ],

        'user' => [
            'profile_updated' => 'Perfil atualizado com sucesso.',
            'password_updated' => 'Senha atualizada com sucesso.',
        ],

        'welcome_to' => 'Bem-vindo a :place',
    ],
];