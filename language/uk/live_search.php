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
	'INCORRECT_SEARCH'			=> 'Некоректні параметри запитаної дії',
	'LIVE_SEARCH_CAPTION'		=> 'Швидкий пошук',
	'LIVE_SEARCH_FORUM'		=> 'Форуми',
	'LIVE_SEARCH_FORUM_TXT'		=> 'Назва форуму...',
	'LIVE_SEARCH_FORUM_T'			=> 'Для швидкого пошуку почніть набирати назву форуму/категорії',
	'LIVE_SEARCH_GO_PROFILE'				=> 'Перейти в профіль',
	'LIVE_SEARCH_POSTS_BY_USER'		=> 'Повідомлення користувача',
	'LIVE_SEARCH_TOOLTIP_ALL'		=> 'Пошук у всіх форумах конференції',
	'LIVE_SEARCH_TOOLTIP_BY_FORUM'		=> 'Пошук у форумі ',
	'LIVE_SEARCH_TOOLTIP_BY_TOPIC'		=> 'Пошук у темі ',
	'LIVE_SEARCH_TOPIC'		=> 'Теми',
	'LIVE_SEARCH_TOPICS_BY_USER'		=> 'Теми користувача',
	'LIVE_SEARCH_TXT'		=> 'Назва теми...',
	'LIVE_SEARCH_T'			=> 'Для швидкого пошуку почніть набирати назву теми',
	'LIVE_SEARCH_USER'		=> 'Користувачі',
	'LIVESEARCH_USER_TXT'	=> 'Ім\'я...',
	'LIVESEARCH_USER_T'	=> 'Для швидкого пошуку починайте друкувати ім\'я користувача',
));
