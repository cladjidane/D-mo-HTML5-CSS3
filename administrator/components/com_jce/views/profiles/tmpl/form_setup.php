<?php 
/**
 * @version		$Id: form_setup.php 201 2011-05-08 16:27:15Z happy_noodle_boy $
 * @package   	JCE
 * @copyright 	Copyright © 2009-2011 Ryan Demmer. All rights reserved.
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license   	GNU/GPL 2 or later
 * This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die('ERROR_403');

?>
<fieldset>
	<legend><?php echo WFText::_( 'WF_PROFILES_DETAILS' ); ?></legend>
	<ul class="adminformlist">
	    <li>
            <label for="profile_name" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_NAME').'::'.WFText::_( 'WF_PROFILES_NAME_DESC' ); ?>">
                <?php echo WFText::_( 'WF_PROFILES_NAME' ); ?>:
            </label>
			<?php if ($this->profile->name == 'Default'){ echo $this->profile->name; ?>
                <input type="hidden" name="name" id="profile_name" value="<?php echo $this->profile->name; ?>" />
            <?php }else{?>
                <input class="text_area" type="text" name="name" id="profile_name" size="35" value="<?php echo $this->profile->name; ?>" />
            <?php }?>
	    </li>
	    <li>
            <label for="profile_description" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_DESCRIPTION').'::'.WFText::_('WF_PROFILES_DESCRIPTION_DESC'); ?>">
                <?php echo WFText::_('WF_PROFILES_DESCRIPTION'); ?>:
            </label>
            <input class="text_area" type="text" name="description" id="profile_description" size="100" value="<?php echo $this->profile->description; ?>" />
	    </li>
	    <li>
        	<label for="profile_published" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_ENABLED').'::'.WFText::_('WF_PROFILES_ENABLED_DESC'); ?>">
        		<?php echo WFText::_( 'WF_PROFILES_ENABLED' ); ?>:
        	</label>
            <?php echo $this->lists['published'];?>
	    </li>
	    <li>
        	<label for="ordering" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_ORDERING').'::'.WFText::_('WF_PROFILES_ORDERING_DESC'); ?>">
            	<?php echo WFText::_( 'WF_PROFILES_ORDERING' ); ?>:
			</label>
            <?php echo $this->lists['ordering']; ?>
	    </li>
	</ul>
</fieldset>
<fieldset>
    <legend><?php echo WFText::_( 'WF_PROFILES_ASSIGNMENT' ); ?></legend>
    <ul class="adminformlist">
		<li>
            <label for="ordering" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_AREA').'::'.WFText::_('WF_PROFILES_AREA_DESC'); ?>">
                <?php echo WFText::_( 'WF_PROFILES_AREA' ); ?>:
			</label>
            <?php echo $this->lists['area']; ?>
        </li>
        <li>
            <label for="ordering" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_COMPONENTS').'::'.WFText::_('WF_PROFILES_COMPONENTS_DESC'); ?>">
                <?php echo WFText::_( 'WF_PROFILES_COMPONENTS' ); ?>:
			</label>
			<span style="display:inline-block;">
				<span style="display:block;">
					<?php echo $this->lists['components-select']; ?>
				</span>
				<span style="display:block;">
                	<?php echo $this->lists['components']; ?>
                </span>
			</span>
        </li>
        <li>
            <label for="ordering" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_GROUPS').'::'.WFText::_('WF_PROFILES_GROUPS_DESC'); ?>">
                <?php echo WFText::_( 'WF_PROFILES_GROUPS' ); ?>:
			</label>
			<span style="display:inline-block;">
	            <?php echo $this->lists['types']; ?>
	            <span style="display:block; margin:5px 0 0;">
	            	<button id="user-group-add"><?php echo WFText::_('WF_PROFILES_ADD_ALL');?></button>
	            	<button id="user-group-remove"><?php echo WFText::_('WF_PROFILES_REMOVE_ALL');?></button>
	           	</span>
	        </span>
        </li>
        <li>
            <label for="ordering" class="hasTip" title="<?php echo WFText::_('WF_PROFILES_USERS').'::'.WFText::_('WF_PROFILES_USERS_DESC'); ?>">
                <?php echo WFText::_('WF_PROFILES_USERS'); ?>:
			</label>
			<span style="display:inline-block;">
				<?php echo $this->lists['users'];?>
				<span style="display:block; margin:5px 0 0;">
					<a class="dialog users modal" data-options="{'width':760, 'height':540}" title="<?php echo WFText::_('WF_PROFILES_USERS_ADD');?>" href="index.php?option=com_jce&tmpl=component&view=users">
                		<button id="users-add"><?php echo WFText::_('WF_PROFILES_USERS_ADD');?></button>
					</a>
					<button id="users-remove"><?php echo WFText::_('WF_PROFILES_REMOVE_USERS');?></button>
				</span>
			</span>
        </li>
    </ul>
</fieldset>