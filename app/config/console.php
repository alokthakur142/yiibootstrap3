<?php
/**
 *
 * console.php configuration file
 *
 * @author Pascal Brewing <pascalbrewing@gmail.com>
 * @link http://www.pascal-brewing.de


 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'console');
return array(
	'commandMap' => array(
		'migrate' => array(
			'class' => 'system.cli.commands.MigrateCommand',
			'migrationPath' => 'application.cli.migrations'
		)
	)
);