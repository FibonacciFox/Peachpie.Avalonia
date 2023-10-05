<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringTokenizerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class StringTokenizer extends \System\ValueType implements 
	\System\IDisposable,
	\System\IEquatable_1
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $CurrentToken;
	/**
	 * @return \System\String|string
	 */
	public  function get_CurrentToken(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Int32& $result
	 * @param \System\Nullable_1 $separator
	 * @return \System\Boolean
	 */
	public  function TryReadInt32($result, $separator){}
	/**
	 * @param \System\Nullable_1 $separator
	 * @return \System\Int32|int
	 */
	public  function ReadInt32($separator){}
	/**
	 * @param \System\Double& $result
	 * @param \System\Nullable_1 $separator
	 * @return \System\Boolean
	 */
	public  function TryReadDouble($result, $separator){}
	/**
	 * @param \System\Nullable_1 $separator
	 * @return \System\Double|double
	 */
	public  function ReadDouble($separator){}
	/**
	 * @param \System\String& $result
	 * @param \System\Nullable_1 $separator
	 * @return \System\Boolean
	 */
	public  function TryReadString($result, $separator){}
	/**
	 * @param \System\Nullable_1 $separator
	 * @return \System\String|string
	 */
	public  function ReadString($separator){}
	/**
	 * @param \System\Char $separator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryReadToken($separator){}
	/**
	 * @param \System\Char $separator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SkipToNextToken($separator){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFormatException(){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSeparatorFromFormatProvider($provider){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Utilities\StringTokenizer $left
	 * @param \Avalonia\Utilities\StringTokenizer $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Utilities\StringTokenizer $left
	 * @param \Avalonia\Utilities\StringTokenizer $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses StringTokenizerMethodsOverride::Equals_1 ($obj)
	 * @uses StringTokenizerMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
