<?php
namespace Avalonia\Markup\Xaml\Styling;
/**
 */
class MergeResourceInclude extends \Avalonia\Markup\Xaml\Styling\ResourceInclude implements 
	\Avalonia\Controls\IResourceProvider,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IThemeVariantProvider
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Key(){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Key($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddOwner($owner){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveOwner($owner){}
}
