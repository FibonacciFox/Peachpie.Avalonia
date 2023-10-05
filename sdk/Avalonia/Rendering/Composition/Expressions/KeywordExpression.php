<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class KeywordExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionKeyword
	 * @property
	 */
	public readonly $Keyword;
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionKeyword
	 */
	public  function get_Keyword(){}
}
