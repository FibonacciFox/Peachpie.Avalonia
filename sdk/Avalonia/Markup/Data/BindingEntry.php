<?php
namespace Avalonia\Markup\Data;
/**
 */
class BindingEntry extends \Avalonia\Markup\Data\Entry
{
	/**
	 * @var \Avalonia\Data\IBinding
	 * @property
	 */
	public readonly $Binding;
	/**
	 * @var \Avalonia\AvaloniaProperty
	 * @property
	 */
	public readonly $Property;
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	public  function get_Binding(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
}
