<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
enum ExpressionKeyword implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case StartingValue = 0;
	case CurrentValue = 1;
	case FinalValue = 2;
	case Target = 3;
	case Pi = 4;
	case True = 5;
	case False = 6;
}
