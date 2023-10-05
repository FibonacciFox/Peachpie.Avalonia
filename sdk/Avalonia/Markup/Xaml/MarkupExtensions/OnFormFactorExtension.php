<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class OnFormFactorExtension extends \Avalonia\Markup\Xaml\MarkupExtensions\OnFormFactorExtensionBase_2 implements 
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
	public $Desktop;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Mobile;
	/**
	 * @param \System\IServiceProvider $serviceProvider
	 * @param \Avalonia\Platform\FormFactorType $option
	 * @return \System\Boolean
	 */
	public static function ShouldProvideOption($serviceProvider, $option){}
	/**
	 * @param \Avalonia\Markup\Xaml\MarkupExtensions\On $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddChild($child){}
}
