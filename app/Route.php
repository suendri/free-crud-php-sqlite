<?php

/**
 * https://github.com/JREAM/route
 */

namespace App;

class Route
{
	/**
	* @var array $_listUri List of URI's to match against
	*/
	private $_listUri = array();

	/**
	* @var array $_listCall List of closures to call
	*/
	private $_listCall = array();

	/**
	* @var string $_trim Used class-wide items to clean strings
	*/
	private $_trim = '/\^$';

	/**
	* add - Adds a URI and Function to the two lists
	*
	* @param string $uri A path such as about/system
	* @param object $function An anonymous function
	*/
	public function add($uri, $function)
	{
		$uri = trim($uri, $this->_trim);
		$this->_listUri[] = $uri;
		$this->_listCall[] = $function;
	}

	/**
	* listen
    * @desc Looks for a match for the URI and runs the related function
	*/
	public function listen()
	{
		$uri = isset($_REQUEST['uri']) ? $_REQUEST['uri'] : '/';
		$uri = trim($uri, $this->_trim);
		$uri = filter_var($uri, FILTER_SANITIZE_URL);

		$replacementValues = array();

		/**
		* List through the stored URI's
		*/
		foreach ($this->_listUri as $listKey => $listUri)
		{
			/**
			* See if there is a match
			*/
			if (preg_match("#^$listUri$#", $uri))
			{
				/**
				* Replace the values
				*/
				$realUri = explode('/', $uri);
				$fakeUri = explode('/', $listUri);

				/**
				* Gather the .+ values with the real values in the URI
				*/
				foreach ($fakeUri as $key => $value)
				{
					if ($value == '.+')
					{
						$replacementValues[] = $realUri[$key];
					}
				}

				/**
				* Pass an array for arguments
				*/
				call_user_func_array($this->_listCall[$listKey], $replacementValues);
			}

		} // End of Loop

	} // end of Listen

}
