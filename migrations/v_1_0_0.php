<?php
/**
*
* @package liveSearch
* @copyright (c) alg
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace alg\liveSearch\migrations;


class v_1_0_0 extends \phpbb\db\migration\migration
{
    const MIN_CHARS = 1;
    const MAX_ITEMS_TO_SHOW = 20;
    const OFF = 0;
    const ON = 1;
    
	public function effectively_installed()
	{
		return isset($this->config['live_search']) && version_compare($this->config['live_search'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
        //return 	array(
        //    'add_columns' => array(
        //        $this->table_prefix . 'forums' => array(
        //            'forum_subforumslist_type' => array('TINT:4', '0'),
        //        ),
        //    ),
        //);
	}

	public function revert_schema()
	{
        //return 	array(	
        //    'drop_columns' => array(
        //        $this->table_prefix . 'forums' => array('forum_subforumslist_type'),
        //    ),
        //);
	}

	public function update_data()
	{
		return array(
			//  Remove old config
			array('if', array(
				(isset($this->config['live_search_on_off_forum'])),
				array('config.remove', array('live_search_on_off_forum')),
			)),
			array('if', array(
				(isset($this->config['live_search_on_off_topic'])),
				array('config.remove', array('live_search_on_off_topic')),
			)),
			array('if', array(
				(isset($this->config['live_search_on_off_user'])),
				array('config.remove', array('live_search_on_off_user')),
			)),
			array('if', array(
				(isset($this->config['live_search_min_num_symblols_forum'])),
				array('config.remove', array('live_search_min_num_symblols_forum')),
			)),
			array('if', array(
				(isset($this->config['live_search_max_items_to_show_forum'])),
				array('config.remove', array('live_search_max_items_to_show_forum')),
			)),
			array('if', array(
				(isset($this->config['live_search_min_num_symblols_topic'])),
				array('config.remove', array('live_search_min_num_symblols_topic')),
			)),
			array('if', array(
				(isset($this->config['live_search_max_items_to_show_topic'])),
				array('config.remove', array('live_search_max_items_to_show_topic')),
			)),
			array('if', array(
				(isset($this->config['live_search_min_num_symblols_user'])),
				array('config.remove', array('live_search_min_num_symblols_user')),
			)),
			array('if', array(
				(isset($this->config['live_search_max_items_to_show_user'])),
				array('config.remove', array('live_search_max_items_to_show_user')),
			)),
			array('if', array(
				(isset($this->config['live_search'])),
				array('config.remove', array('live_search')),
			)),
            // Add new configs 
            array('config.add', array('live_search_on_off_forum', v_1_0_0::ON)),
            array('config.add', array('live_search_on_off_topic',  v_1_0_0::ON)),
            array('config.add', array('live_search_on_off_user',  v_1_0_0::ON)),
            array('config.add', array('live_search_min_num_symblols_forum', v_1_0_0::MIN_CHARS)),
            array('config.add', array('live_search_max_items_to_show_forum', v_1_0_0::MAX_ITEMS_TO_SHOW)),
            array('config.add', array('live_search_min_num_symblols_topic', v_1_0_0::MIN_CHARS)),
            array('config.add', array('live_search_max_items_to_show_topic', v_1_0_0::MAX_ITEMS_TO_SHOW)),
            array('config.add', array('live_search_min_num_symblols_user', v_1_0_0::MIN_CHARS)),
            array('config.add', array('live_search_max_items_to_show_user', v_1_0_0::MAX_ITEMS_TO_SHOW)),
			// Current version
			array('config.add', array('live_search', '1.0.0')),
            
            // Remove old ACP modules
			array('if', array(
				array('module.exists', array('acp', 'ACP_LIVE_SEARCH', array(
					'module_basename'	=> '\alg\liveSearch\acp\acp_live_search_module',
					'module_langname'	=> 'ACP_LIVE_SEARCH_SETTINGS_FORUMS',
					'module_mode'		=> 'live_search',
					'module_auth'		=> 'ext_alg/liveSearch && acl_a_board',
					),
				)),
				array('module.remove', array('acp', 'ACP_LIVE_SEARCH', array(
					'module_basename'	=> '\alg\liveSearch\acp\acp_live_search_module',
					'module_langname'	=> 'ACP_LIVE_SEARCH_SETTINGS_FORUMS',
					'module_mode'		=> 'live_search',
					'module_auth'		=> 'ext_alg/liveSearch && acl_a_board',
					),
				)),
			)),			
            
            // Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_LIVE_SEARCH')),
			
            array('module.add', array('acp', 'ACP_LIVE_SEARCH', array(
					'module_basename'	=> '\alg\liveSearch\acp\acp_live_search_module',
					'module_langname'	=> 'ACP_LIVE_SEARCH_SETTINGS',
					'module_mode'		=> 'live_search',
					'module_auth'		=> 'ext_alg/liveSearch && acl_a_board',
			))),

            
            
        );
	}
	public function revert_data()
	{
		return array(
			// remove from configs
            array('config.remove', array('live_search_on_off_forum')),
            array('config.remove', array('live_search_on_off_topic')),
            array('config.remove', array('live_search_on_off_user')),
            array('config.remove', array('live_search_min_num_symblols_forum')),
            array('config.remove', array('live_search_max_items_to_show_forum')),
            array('config.remove', array('live_search_min_num_symblols_topic')),
            array('config.remove', array('live_search_max_items_to_show_topic')),
            array('config.remove', array('live_search_min_num_symblols_user')),
            array('config.remove', array('live_search_max_items_to_show_user')),
			// Current version
			array('config.remove', array('live_search')),

			// remove from ACP modules
            
            array('if', array(
				array('module.exists', array('acp', 'ACP_LIVE_SEARCH', array(
					'module_basename'	=> '\alg\liveSearch\acp\acp_live_search_module',
					'module_langname'	=> 'ACP_LIVE_SEARCH_SETTINGS_USERS',
					'module_mode'		=> 'live_search',
					'module_auth'		=> 'ext_alg/live_search && acl_a_board',
					),
				)),
				array('module.remove', array('acp', 'ACP_LIVE_SEARCH', array(
					'module_basename'	=> '\alg\liveSearch\acp\acp_live_search_module',
					'module_langname'	=> 'ACP_LIVE_SEARCH_SETTINGS_USERS',
					'module_mode'		=> 'live_search',
					'module_auth'		=> 'ext_alg/liveSearch && acl_a_board',
					),
				)),
			)),
            
            
			array('module.remove', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_LIVE_SEARCH')),
			
   
            
            
        );
	}
}
