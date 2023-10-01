<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
enum ExpressionType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Add = 0;
	case Subtract = 1;
	case Divide = 2;
	case Multiply = 3;
	case MoreThan = 4;
	case LessThan = 5;
	case MoreThanOrEqual = 6;
	case LessThanOrEqual = 7;
	case LogicalAnd = 8;
	case LogicalOr = 9;
	case Remainder = 10;
	case Equals = 11;
	case NotEquals = 12;
	case Not = 13;
	case UnaryMinus = 14;
	case MemberAccess = 15;
	case Parameter = 16;
	case FunctionCall = 17;
	case Keyword = 18;
	case Constant = 19;
	case ConditionalExpression = 20;
}
