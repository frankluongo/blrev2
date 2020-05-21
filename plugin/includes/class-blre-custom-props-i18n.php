<?php
class Blre_Custom_Props_i18n {
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'blre-custom-props',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
