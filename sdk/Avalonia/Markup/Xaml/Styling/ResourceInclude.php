<?php
namespace Avalonia\Markup\Xaml\Styling;
/**
 */
class ResourceInclude extends \System\Object implements 
	\Avalonia\Controls\IResourceProvider,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IThemeVariantProvider
{
	/**
	 * @var \Avalonia\Controls\IResourceDictionary
	 * @property
	 */
	public readonly $Loaded;
	/**
	 * @var \Avalonia\Controls\IResourceHost
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \System\Uri
	 * @property
	 */
	public $Source;
	/**
	 * @return \Avalonia\Controls\IResourceDictionary
	 */
	public  function get_Loaded(){}
	/**
	 * @return \Avalonia\Controls\IResourceHost
	 */
	public  function get_Owner(){}
	/**
	 * @return \System\Uri
	 */
	public  function get_Source(){}
	/**
	 * @param \System\Uri $value
	 * @return \System\Void|void
	 */
	public  function set_Source($value){}
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
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_OwnerChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_OwnerChanged($value){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public  function TryGetResource($key, $theme, $value){}
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
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
