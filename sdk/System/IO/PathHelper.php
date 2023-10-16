<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PathHelperMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function Normalize_1($path){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function Normalize_2($path){}
}
/**
 */
class PathHelper extends \System\Object
{
	/**
	 * @uses PathHelperMethodsOverride::Normalize_1 ($path)
	 * @uses PathHelperMethodsOverride::Normalize_2 ($path)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Normalize(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @param \System\Text\ValueStringBuilder& $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFullPathName($path, $builder){}
	/**
	 * @param \System\Text\ValueStringBuilder& $content
	 * @param \System\Boolean $isDosUnc
	 * @param \System\Text\ValueStringBuilder& $buffer
	 * @return \System\Int32|int
	 */
	protected static function PrependDevicePathChars($content, $isDosUnc, $buffer){}
	/**
	 * @param \System\Text\ValueStringBuilder& $outputBuilder
	 * @param \System\String|string $originalPath
	 * @return \System\String|string
	 */
	protected static function TryExpandShortFileName($outputBuilder, $originalPath){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
