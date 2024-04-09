<?php
namespace Avalonia\Rendering\Composition\Expressions;
class MemberAccessExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @since readonly
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Member;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $target
	 * @param \System\String|string $member
	 */
	public function __construct($target, $member){}
}