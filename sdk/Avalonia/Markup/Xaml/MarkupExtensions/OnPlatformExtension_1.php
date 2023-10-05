<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class OnPlatformExtension_1 extends \Avalonia\Markup\Xaml\MarkupExtensions\OnPlatformExtensionBase_2 implements 
	\Avalonia\Metadata\IAddChild_1
{
	/**
	 * @var \TReturn
	 * @property
	 */
	public $Default;
	/**
	 * @var \TReturn
	 * @property
	 */
	public $Windows;
	/**
	 * @var \TReturn
	 * @property
	 */
	public $macOS;
	/**
	 * @var \TReturn
	 * @property
	 */
	public $Linux;
	/**
	 * @var \TReturn
	 * @property
	 */
	public $Android;
	/**
	 * @var \TReturn
	 * @property
	 */
	public $iOS;
	/**
	 * @var \TReturn
	 * @property
	 */
	public $Browser;
	/**
	 * @param \System\String|string $option
	 * @return \System\Boolean
	 */
	public static function ShouldProvideOption($option){}
	/**
	 * @param \Avalonia\Markup\Xaml\MarkupExtensions\On_1 $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddChild($child){}
}
