<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GenericTextRunPropertiesMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class GenericTextRunProperties extends \Avalonia\Media\TextFormatting\TextRunProperties implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Media\Typeface
	 * @property
	 */
	public readonly $Typeface;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $FontRenderingEmSize;
	/**
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @property
	 */
	public readonly $TextDecorations;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public readonly $ForegroundBrush;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public readonly $BackgroundBrush;
	/**
	 * @var \Avalonia\Media\BaselineAlignment
	 * @property
	 */
	public readonly $BaselineAlignment;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public readonly $CultureInfo;
	/**
	 * @uses GenericTextRunPropertiesMethodsOverride::Equals_1 ($other)
	 * @uses GenericTextRunPropertiesMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
