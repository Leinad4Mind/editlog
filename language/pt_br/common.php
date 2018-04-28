<?php
/**
 *
 * Edit Log
 * @copyright (c) 2016 towen - [towenpa@gmail.com]
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.2.0] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'VIEW_EDIT_LOG'					=> ' <a href="%1s">(Log de edições)</a>',
    'NO_EDIT_LOG'					=> 'Não salve o histórico de edição',

    'COMPARE_VERSIONS'				=> 'Comparar versões',

    'EDIT_LOG'						=> 'Log de edições',
    'POST_TITLE'					=> 'Post',

    'USER'							=> 'Usuário',
    'EDIT_TIME'						=> 'Hora da edição',
    'EDIT_REASON'					=> 'Razão da edição',

    'ORIGINAL_MESSAGE'				=> 'Mensagem original',
    'TEXT_CHANGES'					=> 'Alterações no texto',

    'EDITLOG_BAD_OPTIONS_COUNT'		=> 'Você deve selecionar duas versões para fazer uma comparação.',
    'NO_POST_LOG'					=> 'Esta mensagem não salvou as edições no histórico.<br /><br /> <a href="%1s">Voltar para a mensagem</a>',
    'EDITLOG_NO_AUTH'				=> 'Você não está autorizado a visualizar o histórico de edição desta mensagem.<br /><br /> <a href="%1s">Voltar para a mensagem</a>',
    'EDITLOG_NO_DELETE_AUTH'		=> 'Você não está autorizado a deletar entradas de edições do histórico.<br /><br /> <a href="%1s">Voltar</a>',
    'EDITLOG_DELETE_SUCCESS'		=> 'As entradas foram deletadas do histórico.<br /><br /> <a href="%1s">Voltar</a>',
    'LOG_EDITLOG_DELETE_SUCCESS'	=> '<strong>Entrada do histórico de edições deletadas </strong><br />» <a href="%1s">%s2s</a>',
));
