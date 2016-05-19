<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Theme's migrations
 *
 * @filter us_config_migrations
 */

return array(
	'2.0' => 'functions/migrations/us_migration_2_0.php',
	'2.2' => 'functions/migrations/us_migration_2_2.php',
	'2.3' => 'functions/migrations/us_migration_2_3.php',
	'2.7' => 'functions/migrations/us_migration_2_7.php',
	'2.8' => 'functions/migrations/us_migration_2_8.php',
	'3.0' => 'functions/migrations/us_migration_3_0.php',
);
