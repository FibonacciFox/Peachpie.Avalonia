<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class OnPlatformExtension extends \Avalonia\Markup\Xaml\MarkupExtensions\OnPlatformExtensionBase_2 implements 
	\Avalonia\Metadata\IAddChild_1
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Default;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Windows;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $macOS;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Linux;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Android;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $iOS;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Browser;
	/**
	 * @param \System\String|string $option
	 * @return \System\Boolean
	 */
	public static function ShouldProvideOption($option){}
	/**
	 * @param \Avalonia\Markup\Xaml\MarkupExtensions\On $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddChild($child){}
}
