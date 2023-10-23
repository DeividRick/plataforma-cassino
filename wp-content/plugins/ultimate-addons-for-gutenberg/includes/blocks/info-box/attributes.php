<?php
/**
 * Attributes File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

$cta_border_attribute = UAGB_Block_Helper::uag_generate_border_attribute(
	'btn'
);
$inherit_from_theme   = 'enabled' === UAGB_Admin_Helper::get_admin_settings_option( 'uag_btn_inherit_from_theme', 'disabled' );
$image_width_default  = ( 'yes' === get_option( 'uagb-old-user-less-than-2' ) ) ? 120 : '';

return array_merge(
	array(
		'classMigrate'               => false,
		'inheritFromTheme'           => $inherit_from_theme,
		'headingAlign'               => 'center',
		'headingAlignTablet'         => '',
		'headingAlignMobile'         => '',
		'headingColor'               => '',
		'subHeadingColor'            => '',
		'prefixColor'                => '',
		'prefixFontSize'             => '',
		'prefixFontSizeType'         => 'px',
		'prefixFontSizeTypeTablet'   => 'px',
		'prefixFontSizeTypeMobile'   => 'px',
		'prefixFontSizeTablet'       => '',
		'prefixFontSizeMobile'       => '',
		'prefixFontFamily'           => '',
		'prefixFontWeight'           => '',
		'prefixFontStyle'            => '',
		'prefixLineHeightType'       => 'em',
		'prefixLineHeight'           => '',
		'prefixLineHeightTablet'     => '',
		'prefixLineHeightMobile'     => '',
		'prefixLoadGoogleFonts'      => false,
		'headFontSize'               => '',
		'headFontSizeType'           => 'px',
		'headFontSizeTypeTablet'     => 'px',
		'headFontSizeTypeMobile'     => 'px',
		'headFontSizeTablet'         => '',
		'headFontSizeMobile'         => '',
		'headFontFamily'             => '',
		'headFontWeight'             => '',
		'headFontStyle'              => '',
		'headLineHeightType'         => 'em',
		'headLineHeight'             => '',
		'headLineHeightTablet'       => '',
		'headLineHeightMobile'       => '',
		'headLoadGoogleFonts'        => false,
		'subHeadFontSize'            => '',
		'subHeadFontSizeType'        => 'px',
		'subHeadFontSizeTypeTablet'  => 'px',
		'subHeadFontSizeTypeMobile'  => 'px',
		'subHeadFontSizeTablet'      => '',
		'subHeadFontSizeMobile'      => '',
		'subHeadFontFamily'          => '',
		'subHeadFontWeight'          => '',
		'subHeadFontStyle'           => '',
		'subHeadLineHeightType'      => 'em',
		'subHeadLineHeight'          => '',
		'subHeadLineHeightTablet'    => '',
		'subHeadLineHeightMobile'    => '',
		'subHeadLoadGoogleFonts'     => false,
		'separatorWidth'             => '',
		'separatorWidthTablet'       => '',
		'separatorWidthMobile'       => '',
		'separatorHeight'            => '',
		'separatorWidthType'         => '%',
		'icon'                       => 'circle-check',
		'iconColor'                  => '#333',
		'iconSize'                   => '30',
		'iconSizeTablet'             => '',
		'iconSizeMobile'             => '',
		'iconSizeType'               => 'px',
		'iconimgPosition'            => 'above-title',
		'block_id'                   => '',
		'iconHover'                  => '',
		'iconimgBorderRadius'        => '0',
		'seperatorStyle'             => 'solid',
		'seperatorWidth'             => '30',
		'seperatorWidthMobile'       => '',
		'seperatorWidthTablet'       => '',
		'seperatorColor'             => '#333',
		'seperatorThickness'         => '2',
		'thicknessUnit'              => 'px',
		'ctaType'                    => 'none',
		'ctaBgType'                  => 'color',
		'ctaBgHoverType'             => 'color',
		'ctaLinkColor'               => '',
		'ctaFontSize'                => '',
		'ctaFontSizeType'            => 'px',
		'ctaFontSizeMobile'          => '',
		'ctaFontSizeTablet'          => '',
		'ctaFontFamily'              => '',
		'ctaFontWeight'              => '',
		'ctaFontStyle'               => '',
		'ctaLineHeightType'          => 'em',
		'ctaLineHeight'              => '',
		'ctaLineHeightTablet'        => '',
		'ctaLineHeightMobile'        => '',
		'ctaLetterSpacing'           => '',
		'ctaLetterSpacingTablet'     => '',
		'ctaLetterSpacingMobile'     => '',
		'ctaLetterSpacingType'       => 'px',

		'ctaLoadGoogleFonts'         => false,
		'ctaBtnLinkColor'            => '',
		'ctaBgColor'                 => '',
		'ctaBtnVertPadding'          => 10,
		'ctaBtnHrPadding'            => 14,
		'paddingBtnUnit'             => 'px',
		'mobilePaddingBtnUnit'       => 'px',
		'tabletPaddingBtnUnit'       => 'px',
		'paddingBtnTopTablet'        => '',
		'paddingBtnRightTablet'      => '',
		'paddingBtnBottomTablet'     => '',
		'paddingBtnLeftTablet'       => '',
		'paddingBtnTopMobile'        => '',
		'paddingBtnRightMobile'      => '',
		'paddingBtnBottomMobile'     => '',
		'paddingBtnLeftMobile'       => '',
		'iconLeftMargin'             => '10',
		'iconRightMargin'            => '10',
		'iconTopMargin'              => '5',
		'iconBottomMargin'           => '15',
		'iconMarginLeftTablet'       => '',
		'iconMarginRightTablet'      => '',
		'iconMarginTopTablet'        => '',
		'iconMarginBottomTablet'     => '',
		'iconMarginLeftMobile'       => '',
		'iconMarginRightMobile'      => '',
		'iconMarginTopMobile'        => '',
		'iconMarginBottomMobile'     => '',
		'iconMarginUnit'             => 'px',
		'iconTabletMarginUnit'       => 'px',
		'iconMobileMarginUnit'       => 'px',
		'imageSize'                  => 'thumbnail',
		'imageWidth'                 => $image_width_default,
		'ctaLinkHoverColor'          => '',
		'ctaBgHoverColor'            => '',
		'showCtaIcon'                => true,
		'ctaIcon'                    => 'right-long',
		'ctaIconSpace'               => '5',
		'ctaIconSpaceTablet'         => '',
		'ctaIconSpaceMobile'         => '',
		'ctaIconSpaceType'           => 'px',
		'ctaTransform'               => '',
		'ctaDecoration'              => '',
		'prefixTransform'            => '',
		'prefixDecoration'           => '',
		'headTransform'              => '',
		'headDecoration'             => '',
		'subHeadTransform'           => '',
		'subHeadDecoration'          => '',
		'imageWidthUnit'             => 'px',
		'imageWidthUnitTablet'       => 'px',
		'imageWidthUnitMobile'       => 'px',
		'iconimgBorderRadiusUnit'    => 'px',
		'imageWidthMobile'           => '',
		'imageWidthTablet'           => '',
		'ctaIconPosition'            => 'after',
		'imageWidthType'             => true,

		'headTabletSpace'            => '',
		'headMobileSpace'            => '',
		'headSpaceUnit'              => 'px',
		'headSpace'                  => '10',
		'headTopMargin'              => '',
		'headRightMargin'            => '',
		'headLeftMargin'             => '',
		'headMarginTopTablet'        => '',
		'headMarginRightTablet'      => '',
		'headMarginLeftTablet'       => '',
		'headMarginTopMobile'        => '',
		'headMarginRightMobile'      => '',
		'headMarginLeftMobile'       => '',
		'headMobileMarginUnit'       => 'px',
		'headTabletMarginUnit'       => 'px',
		'headLetterSpacing'          => '',
		'headLetterSpacingTablet'    => '',
		'headLetterSpacingMobile'    => '',
		'headLetterSpacingType'      => 'px',


		'seperatorMobileSpace'       => '',
		'seperatorTabletSpace'       => '',
		'seperatorSpaceUnit'         => 'px',
		'seperatorSpace'             => 0,
		'separatorTopMargin'         => '',
		'separatorRightMargin'       => '',
		'separatorLeftMargin'        => '',
		'separatorMarginTopTablet'   => '',
		'separatorMarginRightTablet' => '',
		'separatorMarginLeftTablet'  => '',
		'separatorMarginTopMobile'   => '',
		'separatorMarginRightMobile' => '',
		'separatorMarginLeftMobile'  => '',
		'separatorMobileMarginUnit'  => 'px',
		'separatorTabletMarginUnit'  => 'px',

		'subHeadTabletSpace'         => '',
		'subHeadMobileSpace'         => '',
		'subHeadSpaceUnit'           => 'px',
		'subHeadSpace'               => '20',
		'subHeadTopMargin'           => '',
		'subHeadRightMargin'         => '',
		'subHeadLeftMargin'          => '',
		'subHeadMarginTopTablet'     => '',
		'subHeadMarginRightTablet'   => '',
		'subHeadMarginLeftTablet'    => '',
		'subHeadMarginTopMobile'     => '',
		'subHeadMarginRightMobile'   => '',
		'subHeadMarginLeftMobile'    => '',
		'subHeadMobileMarginUnit'    => 'px',
		'subHeadTabletMarginUnit'    => 'px',
		'subHeadLetterSpacing'       => '',
		'subHeadLetterSpacingTablet' => '',
		'subHeadLetterSpacingMobile' => '',
		'subHeadLetterSpacingType'   => 'px',

		'prefixTabletSpace'          => '',
		'prefixMobileSpace'          => '',
		'prefixSpaceUnit'            => 'px',
		'prefixSpace'                => '10',
		'prefixTopMargin'            => '5',
		'prefixRightMargin'          => '',
		'prefixLeftMargin'           => '',
		'prefixMarginTopTablet'      => '',
		'prefixMarginRightTablet'    => '',
		'prefixMarginLeftTablet'     => '',
		'prefixMarginTopMobile'      => '',
		'prefixMarginRightMobile'    => '',
		'prefixMarginLeftMobile'     => '',
		'prefixMobileMarginUnit'     => 'px',
		'prefixTabletMarginUnit'     => 'px',
		'prefixLetterSpacing'        => '',
		'prefixLetterSpacingTablet'  => '',
		'prefixLetterSpacingMobile'  => '',
		'prefixLetterSpacingType'    => 'px',
		// icon image.
		'iconView'                   => 'none',
		'iconShape'                  => 'Circle',
		'iconBackgroundColor'        => '#6EC1E3',
		'iconBackgroundHoverColor'   => '',
		'iconBorderWidth'            => 3,
		// margin.
		'blockTopPadding'            => '',
		'blockRightPadding'          => '',
		'blockLeftPadding'           => '',
		'blockBottomPadding'         => '',
		'blockTopPaddingTablet'      => '',
		'blockRightPaddingTablet'    => '',
		'blockLeftPaddingTablet'     => '',
		'blockBottomPaddingTablet'   => '',
		'blockTopPaddingMobile'      => '',
		'blockRightPaddingMobile'    => '',
		'blockLeftPaddingMobile'     => '',
		'blockBottomPaddingMobile'   => '',
		'blockPaddingUnit'           => 'px',
		'blockPaddingUnitTablet'     => 'px',
		'blockPaddingUnitMobile'     => 'px',
		'blockPaddingLink'           => '',
		'ctaBorderStyle'             => 'solid',
		'ctaBorderColor'             => '',
		'ctaBorderWidth'             => 1,
		'ctaBorderRadius'            => 0,
		'ctaBorderhoverColor'        => '',
	),
	$cta_border_attribute
);
