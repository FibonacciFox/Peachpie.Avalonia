<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class MemberAccessExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @property
	 */
	public readonly $Target;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Member;
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public  function get_Target(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Member(){}
}
