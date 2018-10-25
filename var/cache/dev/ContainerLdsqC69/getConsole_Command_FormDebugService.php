<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'BitBag\\SyliusCmsPlugin\\Form\\Type', 2 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\Translation', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 4 => 'Sylius\\Bundle\\OrderBundle\\Form\\Type', 5 => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type', 6 => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type', 7 => 'Sylius\\Bundle\\LocaleBundle\\Form\\Type', 8 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type', 9 => 'Sylius\\Bundle\\ChannelBundle\\Form\\Type', 10 => 'Sylius\\Bundle\\AttributeBundle\\Form\\Type\\AttributeType', 11 => 'Sylius\\Bundle\\AttributeBundle\\Form\\Type\\AttributeType\\Configuration', 12 => 'Sylius\\Bundle\\AttributeBundle\\Form\\Type', 13 => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type', 14 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type', 15 => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type', 16 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type', 17 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type', 18 => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type', 19 => 'Sylius\\Bundle\\UserBundle\\Form\\Type', 20 => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type', 21 => 'Sylius\\Bundle\\UiBundle\\Form\\Type', 22 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout', 23 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product', 24 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User', 25 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Taxon', 26 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type', 27 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Rule', 28 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Filter', 29 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer', 30 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order', 31 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Shipping\\Calculator', 32 => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type', 33 => 'Sylius\\Bundle\\GridBundle\\Form\\Type\\Filter', 34 => 'Sonata\\CoreBundle\\Form\\Type', 35 => 'Sonata\\BlockBundle\\Form\\Type', 36 => 'Liip\\ImagineBundle\\Form\\Type', 37 => 'Payum\\Core\\Bridge\\Symfony\\Form\\Type', 38 => 'Sylius\\Bundle\\PayumBundle\\Form\\Type', 39 => 'Sylius\\Bundle\\ThemeBundle\\Form\\Type', 40 => 'FOS\\OAuthServerBundle\\Form\\Type', 41 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type', 42 => 'Loevgaard\\SyliusBrandPlugin\\Form\\Type', 43 => 'FOS\\CKEditorBundle\\Form\\Type'), array(0 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\BlockType', 1 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\Translation\\BlockTranslationType', 2 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\BlockImageType', 3 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\PageType', 4 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\PageImageType', 5 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\Translation\\PageTranslationType', 6 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\FrequentlyAskedQuestionType', 7 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\Translation\\FrequentlyAskedQuestionTranslationType', 8 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\SectionType', 9 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\Translation\\SectionTranslationType', 10 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\ImportType', 11 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\Translation\\MediaTranslationType', 12 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\MediaType', 13 => 'BitBag\\SyliusCmsPlugin\\Form\\Type\\WysiwygType', 14 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 15 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 16 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 17 => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderType', 18 => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\OrderItemType', 19 => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 20 => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartItemType', 21 => 'Sylius\\Bundle\\MoneyBundle\\Form\\Type\\MoneyType', 22 => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\CurrencyType', 23 => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\CurrencyChoiceType', 24 => 'Sylius\\Bundle\\CurrencyBundle\\Form\\Type\\ExchangeRateType', 25 => 'Sylius\\Bundle\\LocaleBundle\\Form\\Type\\LocaleType', 26 => 'Sylius\\Bundle\\LocaleBundle\\Form\\Type\\LocaleChoiceType', 27 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationType', 28 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeType', 29 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeTranslationType', 30 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeChoiceType', 31 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationsType', 32 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeType', 33 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeTranslationType', 34 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeChoiceType', 35 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAttributeValueType', 36 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductType', 37 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductTranslationType', 38 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductChoiceType', 39 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductCodeChoiceType', 40 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType', 41 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionType', 42 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionTranslationType', 43 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionChoiceType', 44 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueType', 45 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductOptionValueTranslationType', 46 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantType', 47 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantTranslationType', 48 => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductVariantGenerationType', 49 => 'Sylius\\Bundle\\ChannelBundle\\Form\\Type\\ChannelType', 50 => 'Sylius\\Bundle\\ChannelBundle\\Form\\Type\\ChannelChoiceType', 51 => 'Sylius\\Bundle\\AttributeBundle\\Form\\Type\\AttributeType\\SelectAttributeType', 52 => 'Sylius\\Bundle\\AttributeBundle\\Form\\Type\\AttributeType\\Configuration\\SelectAttributeChoicesCollectionType', 53 => 'Sylius\\Bundle\\AttributeBundle\\Form\\Type\\AttributeType\\Configuration\\SelectAttributeValueTranslationsType', 54 => 'Sylius\\Bundle\\AttributeBundle\\Form\\Type\\AttributeTypeChoiceType', 55 => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryType', 56 => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCategoryChoiceType', 57 => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxRateType', 58 => 'Sylius\\Bundle\\TaxationBundle\\Form\\Type\\TaxCalculatorChoiceType', 59 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodType', 60 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType', 61 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodChoiceType', 62 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryType', 63 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingCategoryChoiceType', 64 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentType', 65 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 66 => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\CalculatorChoiceType', 67 => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentType', 68 => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodType', 69 => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodTranslationType', 70 => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentMethodChoiceType', 71 => 'Sylius\\Bundle\\PaymentBundle\\Form\\Type\\PaymentGatewayChoiceType', 72 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionType', 73 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionType', 74 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleType', 75 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponType', 76 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionCollectionType', 77 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleCollectionType', 78 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionChoiceType', 79 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionRuleChoiceType', 80 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponToCodeType', 81 => 'Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponGeneratorInstructionType', 82 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\AddressType', 83 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryType', 84 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryChoiceType', 85 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\CountryCodeChoiceType', 86 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceType', 87 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceChoiceType', 88 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ProvinceCodeChoiceType', 89 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneType', 90 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneChoiceType', 91 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneCodeChoiceType', 92 => 'Sylius\\Bundle\\AddressingBundle\\Form\\Type\\ZoneMemberType', 93 => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 94 => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonTranslationType', 95 => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType', 96 => 'Sylius\\Bundle\\UserBundle\\Form\\Type\\UserLoginType', 97 => 'Sylius\\Bundle\\UserBundle\\Form\\Type\\UserRequestPasswordResetType', 98 => 'Sylius\\Bundle\\UserBundle\\Form\\Type\\UserResetPasswordType', 99 => 'Sylius\\Bundle\\UserBundle\\Form\\Type\\UserChangePasswordType', 100 => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerType', 101 => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 102 => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerChoiceType', 103 => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerGroupType', 104 => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerGroupChoiceType', 105 => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerGroupCodeChoiceType', 106 => 'Sylius\\Bundle\\UiBundle\\Form\\Type\\SecurityLoginType', 107 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 108 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 109 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\ShipmentType', 110 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 111 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\PaymentType', 112 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 113 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 114 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType', 115 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserType', 116 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\ShopUserRegistrationType', 117 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductImageType', 118 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Taxon\\TaxonImageType', 119 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\TaxCalculationStrategyChoiceType', 120 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Rule\\CustomerGroupConfigurationType', 121 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Rule\\HasTaxonConfigurationType', 122 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Rule\\TotalOfItemsFromTaxonConfigurationType', 123 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Rule\\ContainsProductConfigurationType', 124 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Filter\\TaxonFilterConfigurationType', 125 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Promotion\\Filter\\ProductFilterConfigurationType', 126 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerGuestType', 127 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerSimpleRegistrationType', 128 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 129 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\AddressChoiceType', 130 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 131 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ChannelPricingType', 132 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\ChannelCollectionType', 133 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Shipping\\Calculator\\ChannelBasedFlatRateConfigurationType', 134 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Shipping\\Calculator\\ChannelBasedPerUnitRateConfigurationType', 135 => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Taxon\\ProductTaxonAutocompleteChoiceType', 136 => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ResourceAutocompleteChoiceType', 137 => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\DefaultResourceType', 138 => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ResourceTranslationsType', 139 => 'Sylius\\Bundle\\GridBundle\\Form\\Type\\Filter\\StringFilterType', 140 => 'Sylius\\Bundle\\GridBundle\\Form\\Type\\Filter\\BooleanFilterType', 141 => 'Sylius\\Bundle\\GridBundle\\Form\\Type\\Filter\\DateFilterType', 142 => 'Sylius\\Bundle\\GridBundle\\Form\\Type\\Filter\\EntityFilterType', 143 => 'Sylius\\Bundle\\GridBundle\\Form\\Type\\Filter\\MoneyFilterType', 144 => 'Sylius\\Bundle\\GridBundle\\Form\\Type\\Filter\\ExistsFilterType', 145 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 146 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 147 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 148 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 149 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 150 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 151 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 152 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 153 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 154 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 155 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 156 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 157 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 158 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 159 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 160 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType', 161 => 'Payum\\Core\\Bridge\\Symfony\\Form\\Type\\CreditCardExpirationDateType', 162 => 'Payum\\Core\\Bridge\\Symfony\\Form\\Type\\CreditCardType', 163 => 'Payum\\Core\\Bridge\\Symfony\\Form\\Type\\GatewayConfigType', 164 => 'Payum\\Core\\Bridge\\Symfony\\Form\\Type\\GatewayFactoriesChoiceType', 165 => 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\GatewayConfigType', 166 => 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\PaypalGatewayConfigurationType', 167 => 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\StripeGatewayConfigurationType', 168 => 'Sylius\\Bundle\\ThemeBundle\\Form\\Type\\ThemeChoiceType', 169 => 'Sylius\\Bundle\\ThemeBundle\\Form\\Type\\ThemeNameChoiceType', 170 => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', 171 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ClientType', 172 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderType', 173 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderPromotionCouponType', 174 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType', 175 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 176 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 177 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\AddressType', 178 => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 179 => 'Loevgaard\\SyliusBrandPlugin\\Form\\Type\\BrandChoiceType', 180 => 'Loevgaard\\SyliusBrandPlugin\\Form\\Type\\BrandType', 181 => 'Loevgaard\\SyliusBrandPlugin\\Form\\Type\\BrandImageType', 182 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 7 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\CountryTypeExtension', 8 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\ChannelTypeExtension', 9 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\LocaleTypeExtension', 10 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\OrderTypeExtension', 11 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\CartTypeExtension', 12 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\CartItemTypeExtension', 13 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\PaymentMethodTypeExtension', 14 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\TaxRateTypeExtension', 15 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\TaxonTypeExtension', 16 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\CustomerTypeExtension', 17 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\PromotionTypeExtension', 18 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\PromotionCouponTypeExtension', 19 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\PromotionFilterCollectionTypeExtension', 20 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\ShippingMethodTypeExtension', 21 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\ProductTypeExtension', 22 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\ProductTranslationTypeExtension', 23 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\ProductVariantTypeExtension', 24 => 'Sylius\\Bundle\\CoreBundle\\Form\\Extension\\ProductVariantGenerationTypeExtension', 25 => 'Sylius\\Bundle\\ResourceBundle\\Form\\Extension\\CollectionTypeExtension', 26 => 'Payum\\Bundle\\PayumBundle\\Form\\Extension\\GatewayFactoriesChoiceTypeExtension', 27 => 'Sylius\\Bundle\\PayumBundle\\Form\\Extension\\CryptedGatewayConfigTypeExtension', 28 => 'Loevgaard\\SyliusBrandPlugin\\Form\\Extension\\ProductTypeExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
