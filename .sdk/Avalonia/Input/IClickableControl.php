<?php
namespace Avalonia\Input;
/**
 * @method \System\Void|void add_Click($value) [modifier: public]
 * @method \System\Void|void remove_Click($value) [modifier: public]
*/
interface IClickableControl
{


	/**
	 * @return \System\Void|void
	 */
	public function RaiseClick();
}