<?php
namespace Avalonia\Media;
/**
 */
class EffectExtensions extends \System\Object
{
	/**
	 * @param \System\Double|double $radius
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AdjustPaddingRadius($radius){}
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @return \Avalonia\Thickness
	 */
	protected static function GetEffectOutputPadding($effect){}
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	public static function ToImmutable($effect){}
	/**
	 * @param \Avalonia\Media\IImmutableEffect $immutable
	 * @param \Avalonia\Media\IEffect $right
	 * @return \System\Boolean
	 */
	protected static function EffectEquals($immutable, $right){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
