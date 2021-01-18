<?php

namespace Homi\Shortcodes;

use Homi\Interfaces\ShortcodesInterface;

class ShortcodeBoilerplate implements ShortcodesInterface {

	/**
	 * The shortcode name
	 */
    const SHORTCODE_NAME = 'homi-custom-shortcode';


	/**
	 * Returns the name of the shortcode that will be registered
	 * @return string
	 */
	public function getShortcodeName() {

        return self::SHORTCODE_NAME;

	}


	/**
	 * The function responsible for displaying the shortcode
	 * @return string
	 */
	public function display(){

		ob_start();

		?>

        <h3>Boilerplate for custom shortcode</h3>

        <p>Code of this shortcode is defined on <strong>homi/src/Controller/Shortcodes/ShortcodeBoilerplate.php</strong></p>

		<?php

		return ob_get_clean();

	}

}
