<?php
/**
 *
 * Edit Log
 * @copyright (c) 2016 towen - [towenpa@gmail.com]
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
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
    'VIEW_EDIT_LOG'			=> ' <a href="%1s">(Editions log)</a>',
    'NO_EDIT_LOG'			=> 'Do not save editing history',

    'ACTUAL_MESSAGE'			=> 'Current',
    'COMPARE_VERSIONS'			=> 'Compare versions',

    'EDIT_LOG'			=> 'Editions log',
    'POST_TITLE'			=> 'Post',

    'OLD'		=> 'Old',
    'NEW'		=> 'New',
    'USER'		=> 'User',
    'EDIT_TIME'				=> 'Edition time',
    'EDIT_REASON'	=> 'Edition reason',

    'ORIGINAL_MESSAGE'			=> 'Original message',
    'TEXT_CHANGES'	=> 'Changes in the text',

    'EDIT_OPTIONS_EQUALS'			=> 'You can not choose the same versions to compare.',
    'NO_EDIT_OPTIONS'			=> 'You must select two versions to make a comparison.',
    'NO_POST_LOG'			=> 'This message has not saved edits in the history. <a href="%1s">Back to message</a>',
    'EDITLOG_NO_AUTH'			=> 'You are not authorized to view the edit history of this message. <a href="%1s">Back to message</a>',
    'EDITLOG_NO_DELETE_AUTH'	=> 'You are not authorized to delete history editions entries. <a href="%1s">Back</a>',
    'EDITLOG_DELETE_SUCCESS'	=> 'Entries were deleted from edit . <a href="%1s">Back</a>',
    'LOG_EDITLOG_DELETE_SUCCESS'	=> '<strong>Deleted editions history entry </strong><br />» <a href="%1s">%s2s</a>',
));
