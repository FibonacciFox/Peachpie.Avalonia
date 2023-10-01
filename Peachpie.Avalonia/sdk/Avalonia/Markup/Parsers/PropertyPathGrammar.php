<?php
namespace Avalonia\Markup\Parsers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PropertyPathGrammarMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function Parse_2($r){}
}
/**
 */
class PropertyPathGrammar extends \System\Object
{
	/**
	 * @uses PropertyPathGrammarMethodsOverride::Parse_1 ($s)
	 * @uses PropertyPathGrammarMethodsOverride::Parse_2 ($r)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseNext($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseStart($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTypeQualifiedProperty($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseXamlIdentifier($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseProperty($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\ValueTuple_2& $rv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseCasts($r, $rv){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseAfterProperty($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseEnsureType($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseCastType($r){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
