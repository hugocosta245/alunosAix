<?php

return [

    // Titles
    'showing-all-users'     => 'Mostrar todos os alunos',
    'users-menu-alt'        => 'Mostrar admistrativos',
    'create-new-user'       => 'Criar Novo aluno',
    'show-deleted-users'    => 'Mostrar alunos apagados!',
    'editing-user'          => 'Editar aluno :name',
    'showing-user'          => 'Mostrar aluno :name',
    'showing-user-title'    => ':name\'s Informações',
    'showing-user-deleted'  => ' Apagados',
    'no-records'            => 'Não há registros de  apagados',

    //Users deleted
    'role'      => 'Nível do aluno',
    'IpDeleted' => 'Usuário apagado pelo Ip',
    'deleted'   => 'Usuário apagado em',
    'actions'   => 'Ações',

    // Flash Messages
    'createSuccess'   => 'Usuário criado com sucesso ',
    'updateSuccess'   => 'Usuário atualizado com sucesso ',
    'deleteSuccess'   => 'Usuario apagado com sucesso ',
    'deleteSelfError' => 'Você não pode se auto excluir ',

    // Show User Tab
    'viewProfile'            => 'Ver Perfil',
    'editUser'               => 'Editar Usuário',
    'deleteUser'             => 'Apagar ',
    'usersBackBtn'           => 'Voltar para ',
    'usersPanelTitle'        => 'Informações do usuário',
    'labelUserName'          => 'Nome do usuário:',
    'labelEmail'             => 'Email:',
    'labelFirstName'         => 'Nome:',
    'labelLastName'          => 'Sobrenome:',
    'labelRole'              => 'Campo:',
    'labelStatus'            => 'Status:',
    'labelAccessLevel'       => 'Accesso',
    'labelPermissions'       => 'Permissões:',
    'labelCreatedAt'         => 'Criado em:',
    'labelUpdatedAt'         => 'Atualizado em :',
    'labelIpEmail'           => 'Email Criado IP:',
    'labelIpEmail'           => 'Email Criado IP:',
    'labelIpConfirm'         => 'Confirmação de IP:',
    'labelIpSocial'          => 'Criação por rede social IP:',
    'labelIpAdmin'           => 'Administrador criando  IP:',
    'labelIpUpdate'          => 'Ultima atualização IP:',
    'labelDeletedAt'         => 'Deletado em',
    'labelIpDeleted'         => 'Deletado o IP:',
    'usersDeletedPanelTitle' => 'Informações de  apagados',
    'usersBackDelBtn'        => 'Voltar para  apagados',

    'successRestore'    => 'Usuário restaurado com sucesso.',
    'successDestroy'    => 'Usuário apgado com sucesso.',
    'errorUserNotFound' => 'Usuário não encontrado.',

    'labelUserLevel'  => 'Level',
    'labelUserLevels' => 'Levels',

    'users-table' => [
        'caption'    => '{1} :userscount user total|[2,*] :userscount total de alunos',
        'id'         => 'ID',
        'name'       => 'Nome de usúario',
        'fname'      => 'Nome',
        'lname'      => 'Sobrenome',
        'email'      => 'Email',
        'role'       => 'Campo',
        'created'    => 'Criar',
        'updated'    => 'Atualizar',
        'actions'    => 'Ações',
        'updated'    => 'Atualizar',
    ],

    'buttons' => [
        'create-new'    => '<span class="hidden-xs hidden-sm">Novo usuário</span>',
        'delete'        => '<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>  <span class="hidden-xs hidden-sm">Apagar</span><span class="hidden-xs hidden-sm hidden-md"> Usuário</span>',
        'show'          => '<i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Mostrar</span><span class="hidden-xs hidden-sm hidden-md"> Usuário</span>',
        'edit'          => '<i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Editar</span><span class="hidden-xs hidden-sm hidden-md"> Usuário</span>',
        'back-to-users' => '<span class="hidden-sm hidden-xs">Gerenciar </span><span class="hidden-xs">Alunos</span>',
        'back-to-user'  => 'Mostra  <span class="hidden-xs">aluno</span>',
        'delete-user'   => '<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>  <span class="hidden-xs">Apagar</span><span class="hidden-xs"> Usuário</span>',
        'edit-user'     => '<i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs">Editar</span><span class="hidden-xs"> Usuário</span>',
    ],

    'tooltips' => [
        'delete'        => 'Deletar',
        'show'          => 'Mostrar',
        'edit'          => 'Editar',
        'create-new'    => 'Criar um novo usuário',
        'back-users'    => 'Voltar para alunos',
        'email-user'    => 'Email :user',
        'submit-search' => 'Buscar usuarios para pesquisa',
        'clear-search'  => 'Limpar resultados da pesquisa',
    ],

    'messages' => [
        'userNameTaken'          => 'Nome de usuário não disponível',
        'userNameRequired'       => 'Nome de Usuário é obrigatório',
        'fNameRequired'          => 'Nome é obrigatório',
        'lNameRequired'          => 'Sobrenome é obrigatório',
        'emailRequired'          => 'Email é obrigatório',
        'emailInvalid'           => 'Email é inválido',
        'passwordRequired'       => 'Senha é obrigatório',
        'PasswordMin'            => 'Senha precisa ter pelo menos 6 caracteres',
        'PasswordMax'            => 'Senha precisa ter tamanho máximo de 20 caracteres',
        'captchaRequire'         => 'Captcha é obrigátorio',
        'CaptchaWrong'           => 'captcha errado, Por favor tente novamente.',
        'roleRequired'           => 'Usuário é um campo obrigatório.',
        'user-creation-success'  => 'Usuário criado com sucesso!',
        'update-user-success'    => 'Usuário atualizado com sucesso!',
        'delete-success'         => 'Usuário apagado com sucesso!',
        'cannot-delete-yourself' => 'Você não pode se auto excluir',
    ],

    'show-user' => [
        'id'                => 'Código do usuário',
        'name'              => 'Nome do Usuário',
        'email'             => '<span class="hidden-xs">User </span>Email',
        'role'              => 'Campo do usuário',
        'created'           => 'Criado <span class="hidden-xs">at</span>',
        'updated'           => 'Atualizado <span class="hidden-xs">at</span>',
        'labelRole'         => 'Campo do usuário',
        'labelAccessLevel'  => '<span class="hidden-xs">User</span> Nível de Acesso|<span class="hidden-xs">Usuário</span> Nível de Acesso|',
    ],

    'search'  => [
        'title'             => 'Mostrar resultados da pesquisa',
        'found-footer'      => ' Registro (s) encontrado (s)',
        'no-results'        => 'Não há resultados',
        'search-users-ph'   => 'Buscar ',
    ],

    'modals' => [
        'delete_user_message' => 'Tem certeza que deseja excluir o usuário :user?',
    ],
];
