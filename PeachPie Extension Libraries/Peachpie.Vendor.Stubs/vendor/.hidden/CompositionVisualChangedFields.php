<?php

enum CompositionVisualChangedFields
{
	
	case Root = '1';
	case Parent = '2';
	case Visible = '4';
	case VisibleAnimated = '8';
	case Opacity = '16';
	case OpacityAnimated = '32';
	case Clip = '64';
	case ClipToBounds = '128';
	case ClipToBoundsAnimated = '256';
	case Offset = '512';
	case OffsetAnimated = '1024';
	case Size = '2048';
	case SizeAnimated = '4096';
	case AnchorPoint = '8192';
	case AnchorPointAnimated = '16384';
	case CenterPoint = '32768';
	case CenterPointAnimated = '65536';
	case RotationAngle = '131072';
	case RotationAngleAnimated = '262144';
	case Orientation = '524288';
	case OrientationAnimated = '1048576';
	case Scale = '2097152';
	case ScaleAnimated = '4194304';
	case TransformMatrix = '8388608';
	case TransformMatrixAnimated = '16777216';
	case AdornedVisual = '33554432';
	case AdornerIsClipped = '67108864';
	case OpacityMaskBrush = '134217728';
	case Effect = '268435456';
	case RenderOptions = '536870912';

}