<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
Copyright (C) 2013 Mindvolt, Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
ELLISLAB, INC. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Except as contained in this notice, the name of Mindvolt, Inc. shall not be
used in advertising or otherwise to promote the sale, use or other dealings
in this Software without prior written authorization from Mindvolt, Inc.
*/


$plugin_info = array(
						'pi_name'			=> 'Cookie Grab',
						'pi_version'		=> '1.0',
						'pi_author'			=> 'Josh Farneman',
						'pi_author_url'		=> 'http://mindvolt.com/',
						'pi_description'	=> 'Get the value of a cookie in templates',
						'pi_usage'			=> Cookie_grab::usage()
					);

/**
 * Cookie_grab Class
 */

class Cookie_grab {

	var $return_data;


	/**
	 * Constructor
	 *
	 */
	function Cookie_grab($str = '')
	{
		$this->EE =& get_instance();

		$name = $this->EE->TMPL->fetch_param('name');

 		$this->return_data = isset($_COOKIE[$name]) ? $_COOKIE[$name] : false;
	}

	// --------------------------------------------------------------------

	/**
	 * Usage
	 *
	 * Plugin Usage
	 *
	 * @access	public
	 * @return	string
	 */
	static function usage()
	{
		ob_start();
		?>
		{exp:cookie_grab name="cookie"}

		The "name" parameter lets you specify the name of the cookie. Nothing fancy.

		<?php
		$buffer = ob_get_contents();

		ob_end_clean();

		return $buffer;
	}

	// --------------------------------------------------------------------

}
// END CLASS

/* End of file pi.cookie_grab.php */
/* Location: ./system/expressionengine/cookie_grab/pi.cookie_grab.php */
