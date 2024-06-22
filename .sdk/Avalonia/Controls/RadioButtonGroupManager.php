<?php
namespace Avalonia\Controls;
class RadioButtonGroupManager extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Controls\RadioButton+RadioButtonGroupManager
	 */
	public static $Default;
	/**
	 * @param \Avalonia\Rendering\IRenderRoot $root
	 * @return \Avalonia\Controls\RadioButton+RadioButtonGroupManager
	 */
	public static function GetOrCreateForRoot($root){}
	/**
	 * @param \Avalonia\Controls\RadioButton $radioButton
	 * @return \System\Void|void
	 */
	public function Add($radioButton){}
	/**
	 * @param \Avalonia\Controls\RadioButton $radioButton
	 * @param \System\String|string $oldGroupName
	 * @return \System\Void|void
	 */
	public function Remove($radioButton, $oldGroupName){}
	/**
	 * @param \Avalonia\Controls\RadioButton $radioButton
	 * @return \System\Void|void
	 */
	public function SetChecked($radioButton){}
	/**
	 */
	public function __construct(){}
}