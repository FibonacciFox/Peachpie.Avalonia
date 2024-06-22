<?php
namespace Avalonia\Rendering\Composition\Expressions;
class KeywordExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionKeyword
	 * @since readonly
	 */
	public $Keyword;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionKeyword $keyword
	 */
	public function __construct($keyword){}
}