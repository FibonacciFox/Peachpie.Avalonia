<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
enum VariantType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Boolean = 1;
	case Scalar = 2;
	case Double = 3;
	case Vector2 = 4;
	case Vector3 = 5;
	case Vector4 = 6;
	case Vector = 7;
	case Vector3D = 8;
	case AvaloniaMatrix = 9;
	case Matrix3x2 = 10;
	case Matrix4x4 = 11;
	case Quaternion = 12;
	case Color = 13;
}
