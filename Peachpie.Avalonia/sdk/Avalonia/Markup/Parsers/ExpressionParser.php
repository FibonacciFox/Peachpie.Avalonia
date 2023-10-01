<?php
namespace Avalonia\Markup\Parsers;
/**
 */
class ExpressionParser extends \System\Object
{
	/**
	 * @param \Avalonia\Utilities\CharacterReader& $r
	 * @return \System\ValueTuple_2
	 */
	public  function Parse($r){}
	/**
	 * @param \Avalonia\Markup\Parsers\AncestorNode $node
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParseFindAncestor($node){}
	/**
	 * @param \Avalonia\Markup\Parsers\TypeCastNode $node
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParseTypeCastNode($node){}
	/**
	 * @param \Avalonia\Markup\Parsers\AttachedPropertyNameNode $node
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParseAttachedProperty($node){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
