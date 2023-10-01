<?php
namespace Avalonia\Markup\Parsers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectorGrammarMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function Parse_2($r, $end){}
}
/**
 */
class SelectorGrammar extends \System\Object
{
	/**
	 * @uses SelectorGrammarMethodsOverride::Parse_1 ($s)
	 * @uses SelectorGrammarMethodsOverride::Parse_2 ($r, $end)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseStart($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\Nullable_1 $end
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseMiddle($r, $end){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseCanHaveType($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseColon($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTraversal($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseClass($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTemplate($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseName($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTypeName($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseProperty($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseAttachedProperty($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \Avalonia\Markup\Parsers\TSyntax $syntax
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseType($r, $syntax){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseNthChildArguments($r){}
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Expect($r, $c){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
