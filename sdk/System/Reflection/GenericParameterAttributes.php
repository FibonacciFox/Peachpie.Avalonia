<?php
namespace System\Reflection;
/**
 */
enum GenericParameterAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case VarianceMask = 1;
	case Covariant = 2;
	case Contravariant = 3;
	case SpecialConstraintMask = 4;
	case ReferenceTypeConstraint = 8;
	case NotNullableValueTypeConstraint = 16;
	case DefaultConstructorConstraint = 28;
}
