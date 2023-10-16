<?php
namespace System\Reflection\Emit;
/**
 */
enum SecurityControlFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case SkipVisibilityChecks = 1;
	case RestrictedSkipVisibilityChecks = 2;
	case HasCreationContext = 4;
	case CanSkipCSEvaluation = 8;
}
