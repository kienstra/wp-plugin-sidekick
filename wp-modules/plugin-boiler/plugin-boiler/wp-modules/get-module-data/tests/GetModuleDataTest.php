<?php
/**
 * Class GetModuleDataTest
 *
 * @package plugin-boiler
 */

/**
 * Test this module's functions.
 */
class GetModuleDataTest extends WP_UnitTestCase {

	public function test_module_dir_path() {
		$expected = '/var/www/html/wp-content/plugins/my-new-plugin/wp-modules/get-module-data/';
		$result   = module_dir_path( __FILE__ );

		$this->assertSame( $expected, $result );
	}

	public function test_module_dir_url() {
		$expected = 'http://localhost:1001/wp-content/plugins/my-new-plugin/wp-modules/get-module-data/';
		$result   = module_dir_url( __FILE__ );

		$this->assertSame( $expected, $result );
	}
}
