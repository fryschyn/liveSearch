<?php
/** 
*
* liveSearch [Ukrainian]
*
* @package liveSearch
* @copyright (c) 2014 Oleksii Fryschyn (Sherlock)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_LIVE_SEARCH'						=> 'Швидкий (живий) пошук',
	'ACP_LIVE_SEARCH_MOD_VER'				=> 'Версія розширення: ',
	'ACP_LIVE_SEARCH_SETTINGS'				=> 'Налаштування швидкого пошуку',
	'ACP_LIVE_SEARCH_SETTINGS_FORUMS'				=> 'Швидкий пошук по форумам',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS'				=> 'Швидкий пошук по темам',
	'ACP_LIVE_SEARCH_SETTINGS_TOPICS_EXPLAIN'				=> 'Швидкий (живий) пошук за назвою теми, якщо включено, пошук здійснюється або по всій конференції з головної сторінки, або за конкретним форуму і всім содержашій в ньому підфоруму <br /><strong>Важливо: Для коректної роботи налаштувань розширення вимагається MySQL версії 4.1 або вище! <br />',
	'ACP_LIVE_SEARCH_SETTINGS_USERS'				=> 'Швидкий пошук по користувачам',

    'LIVE_SEARCH_FORUM_ON'				=> 'Включити швидкий пошук по форумам ',
    'LIVE_SEARCH_MIN_NUM_SYMBLOLS'				=> 'Мінімальне число символів для пошуку',
    'LIVE_SEARCH_MIN_NUM_SYMBLOLS_EXPLAIN'				=> 'Пошук починатиметься введеного кількості символів',
    'LIVE_SEARCH_MAX_ITEMS_TO_SHOW'				=> 'Число результатів',
    'LIVE_SEARCH_MAX_ITEMS_TO_SHOW_EXPLAIN'				=> ' Обмежує число результатів, які будуть показані в випадаючому списку .. Рекомендоване значення 20.',
   
    'LIVE_SEARCH_TOPIC_ON'				=> 'Включити швидкий пошук по темам ',
    'LIVE_SEARCH_USER_ON'				=> 'Включити швидкий пошук по користувачам ',
));
