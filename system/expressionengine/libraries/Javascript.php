<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2014, EllisLab, Inc.
 * @license		http://ellislab.com/expressionengine/user-guide/license.html
 * @link		http://ellislab.com
 * @since		Version 2.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * ExpressionEngine Javascript Class
 *
 * @package		ExpressionEngine
 * @subpackage	Core
 * @category	Core
 * @author		EllisLab Dev Team
 * @link		http://ellislab.com
 */
class EE_Javascript {

	var $global_vars = array();
	var $_javascript_location = 'js';

	public function __construct($params = array())
	{
		$defaults = array('js_library_driver' => 'jquery', 'autoload' => TRUE);

		foreach ($defaults as $key => $val)
		{
			if (isset($params[$key]) && $params[$key] !== "")
			{
				$defaults[$key] = $params[$key];
			}
		}

		extract($defaults);

		$this->CI =& get_instance();

		// load the requested js library
		$this->CI->load->library('javascript/'.$js_library_driver, array('autoload' => $autoload));
		// make js to refer to current library
		$this->js =& $this->CI->$js_library_driver;

		log_message('debug', "Javascript Class Initialized and loaded.  Driver used: $js_library_driver");
	}

	// --------------------------------------------------------------------
	// Event Code
	// --------------------------------------------------------------------

	/**
	 * Blur
	 *
	 * Outputs a javascript library blur event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function blur($element = 'this', $js = '')
	{
		return $this->js->_blur($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Change
	 *
	 * Outputs a javascript library change event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function change($element = 'this', $js = '')
	{
		return $this->js->_change($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Click
	 *
	 * Outputs a javascript library click event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @param	boolean	whether or not to return false
	 * @return	string
	 */
	function click($element = 'this', $js = '', $ret_false = TRUE)
	{
		return $this->js->_click($element, $js, $ret_false);
	}

	// --------------------------------------------------------------------

	/**
	 * Double Click
	 *
	 * Outputs a javascript library dblclick event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function dblclick($element = 'this', $js = '')
	{
		return $this->js->_dblclick($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Error
	 *
	 * Outputs a javascript library error event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function error($element = 'this', $js = '')
	{
		return $this->js->_error($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Focus
	 *
	 * Outputs a javascript library focus event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function focus($element = 'this', $js = '')
	{
		return $this->js->__add_event($focus, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Hover
	 *
	 * Outputs a javascript library hover event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- Javascript code for mouse over
	 * @param	string	- Javascript code for mouse out
	 * @return	string
	 */
	function hover($element = 'this', $over, $out)
	{
		return $this->js->__hover($element, $over, $out);
	}

	// --------------------------------------------------------------------

	/**
	 * Keydown
	 *
	 * Outputs a javascript library keydown event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function keydown($element = 'this', $js = '')
	{
		return $this->js->_keydown($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Keyup
	 *
	 * Outputs a javascript library keydown event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function keyup($element = 'this', $js = '')
	{
		return $this->js->_keyup($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Load
	 *
	 * Outputs a javascript library load event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function load($element = 'this', $js = '')
	{
		return $this->js->_load($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Mousedown
	 *
	 * Outputs a javascript library mousedown event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function mousedown($element = 'this', $js = '')
	{
		return $this->js->_mousedown($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Mouse Out
	 *
	 * Outputs a javascript library mouseout event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function mouseout($element = 'this', $js = '')
	{
		return $this->js->_mouseout($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Mouse Over
	 *
	 * Outputs a javascript library mouseover event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function mouseover($element = 'this', $js = '')
	{
		return $this->js->_mouseover($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Mouseup
	 *
	 * Outputs a javascript library mouseup event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function mouseup($element = 'this', $js = '')
	{
		return $this->js->_mouseup($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Output
	 *
	 * Outputs the called javascript to the screen
	 *
	 * @access	public
	 * @param	string	The code to output
	 * @return	string
	 */
	function output($js)
	{
		return $this->js->_output($js);
	}

	// --------------------------------------------------------------------

	/**
	 * Ready
	 *
	 * Outputs a javascript library mouseup event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function ready($js)
	{
		return $this->js->_document_ready($js);
	}

	// --------------------------------------------------------------------

	/**
	 * Resize
	 *
	 * Outputs a javascript library resize event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function resize($element = 'this', $js = '')
	{
		return $this->js->_resize($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Scroll
	 *
	 * Outputs a javascript library scroll event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function scroll($element = 'this', $js = '')
	{
		return $this->js->_scroll($element, $js);
	}

	// --------------------------------------------------------------------

	/**
	 * Unload
	 *
	 * Outputs a javascript library unload event
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	string	The code to execute
	 * @return	string
	 */
	function unload($element = 'this', $js = '')
	{
		return $this->js->_unload($element, $js);
	}

	// --------------------------------------------------------------------
	// Effects
	// --------------------------------------------------------------------


	/**
	 * Add Class
	 *
	 * Outputs a javascript library addClass event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- Class to add
	 * @return	string
	 */
	function addClass($element = 'this', $class = '')
	{
		return $this->js->_addClass($element, $class);
	}

	// --------------------------------------------------------------------

	/**
	 * Animate
	 *
	 * Outputs a javascript library animate event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function animate($element = 'this', $params = array(), $speed = '', $extra = '')
	{
		return $this->js->_animate($element, $params, $speed, $extra);
	}

	// --------------------------------------------------------------------

	/**
	 * Fade In
	 *
	 * Outputs a javascript library hide event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function fadeIn($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_fadeIn($element, $speed, $callback);
	}

	// --------------------------------------------------------------------

	/**
	 * Fade Out
	 *
	 * Outputs a javascript library hide event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function fadeOut($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_fadeOut($element, $speed, $callback);
	}
	// --------------------------------------------------------------------

	/**
	 * Slide Up
	 *
	 * Outputs a javascript library slideUp event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function slideUp($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_slideUp($element, $speed, $callback);

	}

	// --------------------------------------------------------------------

	/**
	 * Remove Class
	 *
	 * Outputs a javascript library removeClass event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- Class to add
	 * @return	string
	 */
	function removeClass($element = 'this', $class = '')
	{
		return $this->js->_removeClass($element, $class);
	}

	// --------------------------------------------------------------------

	/**
	 * Slide Down
	 *
	 * Outputs a javascript library slideDown event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function slideDown($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_slideDown($element, $speed, $callback);
	}

	// --------------------------------------------------------------------

	/**
	 * Slide Toggle
	 *
	 * Outputs a javascript library slideToggle event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function slideToggle($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_slideToggle($element, $speed, $callback);

	}

	// --------------------------------------------------------------------

	/**
	 * Hide
	 *
	 * Outputs a javascript library hide action
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function hide($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_hide($element, $speed, $callback);
	}

	// --------------------------------------------------------------------

	/**
	 * Toggle
	 *
	 * Outputs a javascript library toggle event
	 *
	 * @access	public
	 * @param	string	- element
	 * @return	string
	 */
	function toggle($element = 'this')
	{
		return $this->js->_toggle($element);

	}

	// --------------------------------------------------------------------

	/**
	 * Toggle Class
	 *
	 * Outputs a javascript library toggle class event
	 *
	 * @access	public
	 * @param	string	- element
	 * @return	string
	 */
	function toggleClass($element = 'this', $class='')
	{
		return $this->js->_toggleClass($element, $class);
	}

	// --------------------------------------------------------------------

	/**
	 * Show
	 *
	 * Outputs a javascript library show event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function show($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_show($element, $speed, $callback);
	}

	/**
	 * Clear Compile
	 *
	 * Clears any previous javascript collected for output
	 *
	 * @access	public
	 * @return	void
	 */
	function clear_compile()
	{
		$this->js->_clear_compile();
	}

	// --------------------------------------------------------------------

	/**
	 * External
	 *
	 * Outputs a <script> tag with the source as an external js file
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @return	string
	 */
	function external($external_file = '', $relative = FALSE)
	{
		if ($external_file !== '')
		{
			$this->_javascript_location = $external_file;
		}
		else
		{
			if ($this->CI->config->item('javascript_location') != '')
			{
				$this->_javascript_location = $this->CI->config->item('javascript_location');
			}
		}

		if ($relative === TRUE OR strncmp($external_file, 'http://', 7) == 0 OR strncmp($external_file, 'https://', 8) == 0)
		{
			$str = $this->_open_script($external_file);
		}
		elseif (strpos($this->_javascript_location, 'http://') !== FALSE)
		{
			$str = $this->_open_script($this->_javascript_location.$external_file);
		}
		else
		{
			$str = $this->_open_script($this->CI->config->slash_item('base_url').$this->_javascript_location.$external_file);
		}

		$str .= $this->_close_script();
		return $str;
	}

	// --------------------------------------------------------------------

	/**
	 * Inline
	 *
	 * Outputs a <script> tag
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @param	boolean	If a CDATA section should be added
	 * @return	string
	 */
	function inline($script, $cdata = TRUE)
	{
		$str = $this->_open_script();
		$str .= ($cdata) ? "\n// <![CDATA[\n{$script}\n// ]]>\n" : "\n{$script}\n";
		$str .= $this->_close_script();

		return $str;
	}

	// --------------------------------------------------------------------

	/**
	 * Open Script
	 *
	 * Outputs an opening <script>
	 *
	 * @access	private
	 * @param	string
	 * @return	string
	 */
	function _open_script($src = '')
	{
		$str = '<script type="text/javascript" charset="'.strtolower($this->CI->config->item('charset')).'"';
		$str .= ($src == '') ? '>' : ' src="'.$src.'">';
		return $str;
	}

	// --------------------------------------------------------------------

	/**
	 * Close Script
	 *
	 * Outputs an closing </script>
	 *
	 * @access	private
	 * @param	string
	 * @return	string
	 */
	function _close_script($extra = "\n")
	{
		return "</script>$extra";
	}


	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
	// AJAX-Y STUFF - still a testbed
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------

	/**
	 * Update
	 *
	 * Outputs a javascript library slideDown event
	 *
	 * @access	public
	 * @param	string	- element
	 * @param	string	- One of 'slow', 'normal', 'fast', or time in milliseconds
	 * @param	string	- Javascript callback function
	 * @return	string
	 */
	function update($element = 'this', $speed = '', $callback = '')
	{
		return $this->js->_updater($element, $speed, $callback);
	}

	// --------------------------------------------------------------------

	/**
	 * Is associative array
	 *
	 * Checks for an associative array
	 *
	 * @access	public
	 * @param	type
	 * @return	type
	 */
	function _is_associative_array($arr)
	{
		foreach (array_keys($arr) as $key => $val)
		{
			if ($key !== $val)
			{
				return TRUE;
			}
		}

		return FALSE;
	}

	// --------------------------------------------------------------------

	/**
	 * Prep Args
	 *
	 * Ensures a standard json value and escapes values
	 *
	 * @access	public
	 * @param	type
	 * @return	type
	 */
	function _prep_args($result, $is_key = FALSE)
	{
		if (is_null($result))
		{
			return 'null';
		}
		elseif (is_bool($result))
		{
			return ($result === TRUE) ? 'true' : 'false';
		}
		elseif (is_string($result) OR $is_key)
		{
			return '"'.str_replace(array('\\', "\t", "\n", "\r", '"', '/'), array('\\\\', '\\t', '\\n', "\\r", '\"', '\/'), $result).'"';

		}
		elseif (is_scalar($result))
		{
			return $result;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Set Global
	 *
	 * Add a variable to the EE javascript object.  Useful if you need
	 * to dynamically set variables for your external script.  Will intelligently
	 * resolve namespaces (i.e. filemanager.filelist) - use them.
	 *
	 * @access	public
	 */
	function set_global($var, $val = '')
	{
		if (is_array($var))
		{
			foreach($var as $k => $v)
			{
				$this->set_global($k, $v);
			}
			return;
		}

		$sections = explode('.', $var);
		$var_name = array_pop($sections);

		$current =& $this->global_vars;

		foreach($sections as $namespace)
		{
			if ( ! isset($current[$namespace]))
			{
				$current[$namespace] = array();
			}

			$current =& $current[$namespace];
		}

		if (is_array($val) &&
			isset($current[$var_name]) &&
			is_array($current[$var_name]) &&
			array_keys($val) !== range(0, count($val) - 1))
		{
			$current[$var_name] = array_unique(array_merge($current[$var_name], $val), SORT_STRING);
		}
		else
		{
			$current[$var_name] = $val;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Compile
	 *
	 * gather together all script needing to be output
	 *
	 * @access	public
	 * @param	string	The element to attach the event to
	 * @return	string
	 */
	function compile($view_var = 'script_foot', $script_tags = TRUE)
	{
		$this->js->_compile($view_var, $script_tags);

		$global_js = $this->inline('
			document.documentElement.className += "js";

			var EE = '.json_encode($this->global_vars).';

			if (typeof console === "undefined" || ! console.log) {
				console = { log: function() { return false; }};
			}
		');

		$this->CI->view->cp_global_js = $global_js;
	}

	/**
	 * Prepares and returns the HTML+JS for injecting variables into the EE
	 * namespace.
	 *
	 * @access public
	 * @return string The HTML markup containing our JS.
	 */
	function global_js()
	{
		return $this->inline('
			document.documentElement.className += "js";

			var EE = '.json_encode($this->global_vars).';

			if (typeof console === "undefined" || ! console.log) {
				console = { log: function() { return false; }};
			}
		');
	}

	/**
	 * Prepares and returns the JS to be output in the foot
	 *
	 * @return string The HTML markup for our foot JS
	 */
	function script_foot()
	{
		$this->js->_compile('script_foot', TRUE);
		return $this->CI->view->$view_var;
	}
}

// END EE_Javascript


/* End of file EE_Javascript.php */
/* Location: ./system/expressionengine/libraries/EE_Javascript.php */