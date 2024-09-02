<?php
namespace Avalonia\Data\Core\Parsers;
class ExpressionVisitorNodeBuilder extends \System\Linq\Expressions\ExpressionVisitor
{
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Data\Core\ExpressionNode]
	 * @since readonly
	 */
	public $Nodes;
	private static function GetArgumentExpressionValue($expr){}
	private static function TryGetPropertyFromMethod($method){}
	/**
	 * @param \System\Boolean|bool $enableDataValidation
	 */
	public function __construct($enableDataValidation){}
}