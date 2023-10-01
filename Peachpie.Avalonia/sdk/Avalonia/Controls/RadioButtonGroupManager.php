<?php
namespace Avalonia\Controls;
/**
 */
class RadioButtonGroupManager extends \System\Object
{
	/**
	 * @param \Avalonia\Rendering\IRenderRoot $root
	 * @return \Avalonia\Controls\RadioButtonGroupManager
	 */
	public static function GetOrCreateForRoot($root){}
	/**
	 * @param \Avalonia\Controls\RadioButton $radioButton
	 * @return \System\Void|void
	 */
	public  function Add($radioButton){}
	/**
	 * @param \Avalonia\Controls\RadioButton $radioButton
	 * @param \System\String|string $oldGroupName
	 * @return \System\Void|void
	 */
	public  function Remove($radioButton, $oldGroupName){}
	/**
	 * @param \Avalonia\Controls\RadioButton $radioButton
	 * @return \System\Void|void
	 */
	public  function SetChecked($radioButton){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
