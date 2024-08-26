<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ResourceNodeExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IResourceHost $control
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function FindResource_1 ($control, $key){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IResourceHost $control
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function FindResource_2 ($control, $theme, $key){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IResourceHost $control
	 * @param \System\Object|object $key
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryFindResource_1 ($control, $key, &$value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IResourceHost $control
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryFindResource_2 ($control, $key, $theme, &$value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IResourceHost $control
	 * @param \System\Object|object $key
	 * @param \System\Func_2 $converter [generic: System\Object,System\Object]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetResourceObservable_1 ($control, $key, $converter){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IResourceProvider $resourceProvider
	 * @param \System\Object|object $key
	 * @param \System\Func_2 $converter [generic: System\Object,System\Object]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetResourceObservable_2 ($resourceProvider, $key, $converter){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IResourceProvider $resourceProvider
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $defaultThemeVariant
	 * @param \System\Func_2 $converter [generic: System\Object,System\Object]
	 * @return \System\IObservable_1
	 */
	#[MethodOverride]public static function GetResourceObservable_3 ($resourceProvider, $key, $defaultThemeVariant, $converter){}
}
class ResourceNodeExtensions extends \System\Object
{
	use ResourceNodeExtensionsOverride;

	/**
	 * @uses ResourceNodeExtensionsOverride::FindResource_1 <br>public , args: ($control, $key)<br>
	 * @uses ResourceNodeExtensionsOverride::FindResource_2 <br>public , args: ($control, $theme, $key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function FindResource (\override ...$args){}
	/**
	 * @uses ResourceNodeExtensionsOverride::TryFindResource_1 <br>public , args: ($control, $key, &$value)<br>
	 * @uses ResourceNodeExtensionsOverride::TryFindResource_2 <br>public , args: ($control, $key, $theme, &$value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryFindResource (\override ...$args){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $control
	 * @param \System\Object|object $key
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryGetResource($control, $key, &$value){}
	/**
	 * @uses ResourceNodeExtensionsOverride::GetResourceObservable_1 <br>public , args: ($control, $key, $converter)<br>
	 * @uses ResourceNodeExtensionsOverride::GetResourceObservable_2 <br>public , args: ($resourceProvider, $key, $converter)<br>
	 * @uses ResourceNodeExtensionsOverride::GetResourceObservable_3 <br>public , args: ($resourceProvider, $key, $defaultThemeVariant, $converter)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IObservable_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetResourceObservable (\override ...$args){}
}