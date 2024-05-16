<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80ce4473100edd20fd6c17775a76ce9a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPChill\\DownloadMonitor\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPChill\\DownloadMonitor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DLM_API_Key' => __DIR__ . '/../..' . '/src/KeyGeneration/class-dlm-api-key.php',
        'DLM_API_Keys_Table' => __DIR__ . '/../..' . '/src/KeyGeneration/admin/class-dlm-api-keys-table.php',
        'DLM_Admin' => __DIR__ . '/../..' . '/src/Admin/Admin.php',
        'DLM_Admin_Dashboard' => __DIR__ . '/../..' . '/src/Admin/Dashboard.php',
        'DLM_Admin_Extensions' => __DIR__ . '/../..' . '/src/Admin/Extensions.php',
        'DLM_Admin_Fields_Field' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Field.php',
        'DLM_Admin_Fields_Field_Accordion' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Accordion.php',
        'DLM_Admin_Fields_Field_ActionButton' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/ActionButton.php',
        'DLM_Admin_Fields_Field_Checkbox' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Checkbox.php',
        'DLM_Admin_Fields_Field_Desc' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Desc.php',
        'DLM_Admin_Fields_Field_Editor' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Editor.php',
        'DLM_Admin_Fields_Field_EnhancedRadio' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/EnghancedRadio.php',
        'DLM_Admin_Fields_Field_Factory' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/FieldFactory.php',
        'DLM_Admin_Fields_Field_HtaccessStatus' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/HtaccessStatus.php',
        'DLM_Admin_Fields_Field_InstallPlugin' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/InstallPlugin.php',
        'DLM_Admin_Fields_Field_Lazy_Select' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/LazySelect.php',
        'DLM_Admin_Fields_Field_Password' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Password.php',
        'DLM_Admin_Fields_Field_Radio' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Radio.php',
        'DLM_Admin_Fields_Field_Select' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Select.php',
        'DLM_Admin_Fields_Field_Text' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Text.php',
        'DLM_Admin_Fields_Field_Textarea' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Textarea.php',
        'DLM_Admin_Fields_Field_Title' => __DIR__ . '/../..' . '/src/Admin/Settings/Fields/Title.php',
        'DLM_Admin_Helper' => __DIR__ . '/../..' . '/src/Admin/class-dlm-admin-helper.php',
        'DLM_Admin_List_Table' => __DIR__ . '/../..' . '/src/Admin/class-dlm-admin-list-table.php',
        'DLM_Admin_Media_Browser' => __DIR__ . '/../..' . '/src/Admin/MediaBrowser.php',
        'DLM_Admin_Media_Insert' => __DIR__ . '/../..' . '/src/Admin/MediaInsert.php',
        'DLM_Admin_OptionsUpsells' => __DIR__ . '/../..' . '/src/Admin/OptionsUpsells.php',
        'DLM_Admin_Scripts' => __DIR__ . '/../..' . '/src/Admin/AdminScripts.php',
        'DLM_Admin_Settings' => __DIR__ . '/../..' . '/src/Admin/Settings/Settings.php',
        'DLM_Admin_Writepanels' => __DIR__ . '/../..' . '/src/Admin/WritePanels.php',
        'DLM_Ajax' => __DIR__ . '/../..' . '/src/Ajax/Ajax.php',
        'DLM_Ajax_CreatePage' => __DIR__ . '/../..' . '/src/Ajax/CreatePage.php',
        'DLM_Ajax_GetDownloads' => __DIR__ . '/../..' . '/src/Ajax/GetDownloads.php',
        'DLM_Ajax_GetVersions' => __DIR__ . '/../..' . '/src/Ajax/GetVersions.php',
        'DLM_Ajax_Handler' => __DIR__ . '/../..' . '/src/AjaxHandler.php',
        'DLM_Ajax_Manager' => __DIR__ . '/../..' . '/src/Ajax/Manager.php',
        'DLM_Backwards_Compatibility' => __DIR__ . '/../..' . '/includes/backwards-compatibility/class-dlm-backwards-compatibility.php',
        'DLM_Beta_Testers' => __DIR__ . '/../..' . '/includes/admin/class-dlm-beta-testers.php',
        'DLM_CRON_Jobs' => __DIR__ . '/../..' . '/src/class-dlm-cron-jobs.php',
        'DLM_Category_Walker' => __DIR__ . '/../..' . '/src/Admin/CategoryWalker.php',
        'DLM_Constants' => __DIR__ . '/../..' . '/src/Constants.php',
        'DLM_Cookie_Manager' => __DIR__ . '/../..' . '/src/CookieManager.php',
        'DLM_Custom_Actions' => __DIR__ . '/../..' . '/src/Admin/CustomActions.php',
        'DLM_Custom_Labels' => __DIR__ . '/../..' . '/src/Admin/CustomLabels.php',
        'DLM_DB_Upgrader' => __DIR__ . '/../..' . '/src/Admin/class-dlm-db-upgrader.php',
        'DLM_Debug' => __DIR__ . '/../..' . '/src/Admin/class-dlm-admin-debug.php',
        'DLM_Debug_Logger' => __DIR__ . '/../..' . '/src/DebugLogger.php',
        'DLM_Download' => __DIR__ . '/../..' . '/src/Download/Download.php',
        'DLM_DownloadPreview_Config' => __DIR__ . '/../..' . '/src/DownloadPreview/Config.php',
        'DLM_DownloadPreview_Preview' => __DIR__ . '/../..' . '/src/DownloadPreview/Preview.php',
        'DLM_Download_Duplicator_AAM' => __DIR__ . '/../..' . '/src/Admin/Duplicate/DownloadDuplicatorAAM.php',
        'DLM_Download_Factory' => __DIR__ . '/../..' . '/src/Download/DownloadFactory.php',
        'DLM_Download_Handler' => __DIR__ . '/../..' . '/src/DownloadHandler.php',
        'DLM_Download_No_Access_Page_Endpoint' => __DIR__ . '/../..' . '/src/DownloadNoAccessPageEndpoint.php',
        'DLM_Download_REST' => __DIR__ . '/../..' . '/src/RestAPI/class-dlm-download-rest.php',
        'DLM_Download_Repository' => __DIR__ . '/../..' . '/src/Download/DownloadRepository.php',
        'DLM_Download_Version' => __DIR__ . '/../..' . '/src/Version/Version.php',
        'DLM_Downloads_Path' => __DIR__ . '/../..' . '/src/Admin/DownloadPaths/class-dlm-downloads-path.php',
        'DLM_Downloads_Path_Helper' => __DIR__ . '/../..' . '/src/Admin/DownloadPaths/class-dlm-downloads-path-helper.php',
        'DLM_Downloads_Path_Table' => __DIR__ . '/../..' . '/src/Admin/DownloadPaths/class-dlm-downloads-path-table.php',
        'DLM_Empty_Table' => __DIR__ . '/../..' . '/src/Admin/class-dlm-empty-table.php',
        'DLM_Extensions_Handler' => __DIR__ . '/../..' . '/src/Admin/ExtensionsHandler.php',
        'DLM_File_Manager' => __DIR__ . '/../..' . '/src/FileManager.php',
        'DLM_Frontend_Templates' => __DIR__ . '/../..' . '/src/class-dlm-frontend-templates.php',
        'DLM_Gutenberg' => __DIR__ . '/../..' . '/src/Gutenberg.php',
        'DLM_Hasher' => __DIR__ . '/../..' . '/src/Hasher.php',
        'DLM_Installer' => __DIR__ . '/../..' . '/src/Installer.php',
        'DLM_Integrated_Terms_And_Conditions' => __DIR__ . '/../..' . '/src/TermsAndConditions/dlm-integrated-terms-and-conditions.php',
        'DLM_Integrations_PostTypesOrder' => __DIR__ . '/../..' . '/src/Integrations/PostTypesOrder.php',
        'DLM_Integrations_YoastSEO' => __DIR__ . '/../..' . '/src/Integrations/YoastSEO.php',
        'DLM_Key_Generation' => __DIR__ . '/../..' . '/src/KeyGeneration/class-dlm-key-generation.php',
        'DLM_LU_Ajax' => __DIR__ . '/../..' . '/src/LegacyUpgrader/Ajax.php',
        'DLM_LU_Checker' => __DIR__ . '/../..' . '/src/LegacyUpgrader/Checker.php',
        'DLM_LU_Content_Queue' => __DIR__ . '/../..' . '/src/LegacyUpgrader/ContentQueue.php',
        'DLM_LU_Content_Upgrader' => __DIR__ . '/../..' . '/src/LegacyUpgrader/ContentUpgrader.php',
        'DLM_LU_Download_Queue' => __DIR__ . '/../..' . '/src/LegacyUpgrader/DownloadQueue.php',
        'DLM_LU_Download_Upgrader' => __DIR__ . '/../..' . '/src/LegacyUpgrader/DownloadUpgrader.php',
        'DLM_LU_Message' => __DIR__ . '/../..' . '/src/LegacyUpgrader/Message.php',
        'DLM_LU_Page' => __DIR__ . '/../..' . '/src/LegacyUpgrader/Page.php',
        'DLM_License' => __DIR__ . '/../..' . '/src/Admin/class-dlm-license.php',
        'DLM_Log_Filters' => __DIR__ . '/../..' . '/src/Logs/LogFilters.php',
        'DLM_Log_Item' => __DIR__ . '/../..' . '/src/Logs/LogItem.php',
        'DLM_Log_Item_Repository' => __DIR__ . '/../..' . '/src/Logs/LogItemRepository.php',
        'DLM_Logging' => __DIR__ . '/../..' . '/src/Logs/Logging.php',
        'DLM_Media_Library' => __DIR__ . '/../..' . '/src/Admin/class-dlm-media-library.php',
        'DLM_Modal' => __DIR__ . '/../..' . '/src/class-dlm-modal.php',
        'DLM_Plugin_Status' => __DIR__ . '/../..' . '/src/Admin/class-dlm-plugin-status.php',
        'DLM_Post_Type_Manager' => __DIR__ . '/../..' . '/src/PostTypeManager.php',
        'DLM_Product' => __DIR__ . '/../..' . '/src/Product/Product.php',
        'DLM_Product_Error_Handler' => __DIR__ . '/../..' . '/src/Product/ProductErrorHandler.php',
        'DLM_Product_License' => __DIR__ . '/../..' . '/src/Product/ProductLicense.php',
        'DLM_Product_Manager' => __DIR__ . '/../..' . '/src/Product/ProductManager.php',
        'DLM_Reports' => __DIR__ . '/../..' . '/src/Admin/Reports/class-dlm-reports.php',
        'DLM_Reports_Page' => __DIR__ . '/../..' . '/src/Admin/Reports/Page.php',
        'DLM_Rest_API' => __DIR__ . '/../..' . '/src/RestAPI/class-dlm-rest-api.php',
        'DLM_Review' => __DIR__ . '/../..' . '/includes/admin/class-dlm-review.php',
        'DLM_Search' => __DIR__ . '/../..' . '/src/Search.php',
        'DLM_Services' => __DIR__ . '/../..' . '/src/Services.php',
        'DLM_Settings_Helper' => __DIR__ . '/../..' . '/src/Admin/Settings/SettingsHelper.php',
        'DLM_Settings_Page' => __DIR__ . '/../..' . '/src/Admin/Settings/Page.php',
        'DLM_Shortcodes' => __DIR__ . '/../..' . '/src/Shortcodes.php',
        'DLM_TC_Access_Manager' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-access-manager.php',
        'DLM_TC_Assets' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-assets.php',
        'DLM_TC_Backwards_Compatibility' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-backwards-compatibility.php',
        'DLM_TC_Constants' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-constants.php',
        'DLM_TC_Download_Option' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-download-option.php',
        'DLM_TC_Log_Manager' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-log-manager.php',
        'DLM_TC_Modal' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-modal.php',
        'DLM_TC_Options' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-options.php',
        'DLM_TC_Page_Addon' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-page-addon.php',
        'DLM_TC_Shortcodes' => __DIR__ . '/../..' . '/src/TermsAndConditions/classes/class-dlm-tc-shortcodes.php',
        'DLM_Taxonomy_Manager' => __DIR__ . '/../..' . '/src/TaxonomyManager.php',
        'DLM_Template_Handler' => __DIR__ . '/../..' . '/src/TemplateHandler.php',
        'DLM_Transient_Manager' => __DIR__ . '/../..' . '/src/TransientManager.php',
        'DLM_Uninstall' => __DIR__ . '/../..' . '/includes/admin/uninstall/class-dlm-uninstall.php',
        'DLM_Upgrade_Manager' => __DIR__ . '/../..' . '/src/UpgradeManager.php',
        'DLM_Upgrader_Skin' => __DIR__ . '/../..' . '/src/Admin/class-dlm-upgrader-skin.php',
        'DLM_Upsells' => __DIR__ . '/../..' . '/includes/admin/class-dlm-upsells.php',
        'DLM_Utils' => __DIR__ . '/../..' . '/src/Utils.php',
        'DLM_Version_Manager' => __DIR__ . '/../..' . '/src/Version/VersionManager.php',
        'DLM_Version_REST' => __DIR__ . '/../..' . '/src/RestAPI/class-dlm-version-rest.php',
        'DLM_Version_Repository' => __DIR__ . '/../..' . '/src/Version/VersionRepository.php',
        'DLM_View_Manager' => __DIR__ . '/../..' . '/src/Admin/ViewManager.php',
        'DLM_Widget_Downloads' => __DIR__ . '/../..' . '/src/Widgets/Downloads.php',
        'DLM_Widget_Manager' => __DIR__ . '/../..' . '/src/Widgets/Manager.php',
        'DLM_WordPress_Download_Repository' => __DIR__ . '/../..' . '/src/Download/WordPressDownloadRepository.php',
        'DLM_WordPress_Log_Item_Repository' => __DIR__ . '/../..' . '/src/Logs/WordPressLogItemRepository.php',
        'DLM_WordPress_Version_Repository' => __DIR__ . '/../..' . '/src/Version/WordPressVersionRepository.php',
        'DateTimeImmutable' => __DIR__ . '/../..' . '/src/Polyfill/DateTimeImmutable/DateTimeImmutable.php',
        'DateTimeInterface' => __DIR__ . '/../..' . '/src/Polyfill/DateTimeImmutable/DateTimeInterface.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Curl' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Curl.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Encoder' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Encoder.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Environment' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Environment.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\HttpClient' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/HttpClient.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\HttpException' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/HttpException.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\HttpRequest' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/HttpRequest.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\HttpResponse' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/HttpResponse.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\IOException' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/IOException.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Injector' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Injector.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Serializer' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Serializer.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Serializer\\Form' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Serializer/Form.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Serializer\\FormPart' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Serializer/FormPart.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Serializer\\Json' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Serializer/Json.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Serializer\\Multipart' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Serializer/Multipart.php',
        'WPChill\\DownloadMonitor\\Dependencies\\PayPalHttp\\Serializer\\Text' => __DIR__ . '/../..' . '/src/Dependencies/PayPalHttp/Serializer/Text.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Container' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Container.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Exception\\ExpectedInvokableException' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Exception/ExpectedInvokableException.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Exception\\FrozenServiceException' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Exception/FrozenServiceException.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Exception\\InvalidServiceIdentifierException' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Exception/InvalidServiceIdentifierException.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Exception\\UnknownIdentifierException' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Exception/UnknownIdentifierException.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Psr11\\Container' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Psr11/Container.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Psr11\\ServiceLocator' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Psr11/ServiceLocator.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\ServiceIterator' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/ServiceIterator.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\ServiceProviderInterface' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/ServiceProviderInterface.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\Fixtures\\Invokable' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/Fixtures/Invokable.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\Fixtures\\NonInvokable' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/Fixtures/NonInvokable.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\Fixtures\\Service' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/Fixtures/Service.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\PimpleTest' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/PimpleTest.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\Psr11\\ContainerTest' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/Psr11/ContainerTest.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\Psr11\\ServiceLocatorTest' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/Psr11/ServiceLocatorTest.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Pimple\\Tests\\ServiceIteratorTest' => __DIR__ . '/../..' . '/src/Dependencies/Pimple/Tests/ServiceIteratorTest.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/../..' . '/src/Dependencies/Psr/Container/ContainerExceptionInterface.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Psr\\Container\\ContainerInterface' => __DIR__ . '/../..' . '/src/Dependencies/Psr/Container/ContainerInterface.php',
        'WPChill\\DownloadMonitor\\Dependencies\\Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/../..' . '/src/Dependencies/Psr/Container/NotFoundExceptionInterface.php',
        'WPChill\\DownloadMonitor\\Shop\\Access\\Manager' => __DIR__ . '/../..' . '/src/Shop/Access/Manager.php',
        'WPChill\\DownloadMonitor\\Shop\\Admin\\DownloadOption' => __DIR__ . '/../..' . '/src/Shop/Admin/DownloadOption.php',
        'WPChill\\DownloadMonitor\\Shop\\Admin\\Fields\\GatewayOverview' => __DIR__ . '/../..' . '/src/Shop/Admin/Fields/GatewayOverview.php',
        'WPChill\\DownloadMonitor\\Shop\\Admin\\OrderTable' => __DIR__ . '/../..' . '/src/Shop/Admin/OrderTable.php',
        'WPChill\\DownloadMonitor\\Shop\\Admin\\Pages\\Orders' => __DIR__ . '/../..' . '/src/Shop/Admin/Pages/Orders.php',
        'WPChill\\DownloadMonitor\\Shop\\Admin\\ProductTableColumns' => __DIR__ . '/../..' . '/src/Shop/Admin/ProductTableColumns.php',
        'WPChill\\DownloadMonitor\\Shop\\Admin\\ShopAdminHelper' => __DIR__ . '/../..' . '/src/Shop/Admin/ShopAdminHelper.php',
        'WPChill\\DownloadMonitor\\Shop\\Admin\\WritePanels' => __DIR__ . '/../..' . '/src/Shop/Admin/WritePanels.php',
        'WPChill\\DownloadMonitor\\Shop\\Ajax\\AdminChangeOrderStatus' => __DIR__ . '/../..' . '/src/Shop/Ajax/AdminChangeOrderStatus.php',
        'WPChill\\DownloadMonitor\\Shop\\Ajax\\Ajax' => __DIR__ . '/../..' . '/src/Shop/Ajax/Ajax.php',
        'WPChill\\DownloadMonitor\\Shop\\Ajax\\Manager' => __DIR__ . '/../..' . '/src/Shop/Ajax/Manager.php',
        'WPChill\\DownloadMonitor\\Shop\\Ajax\\PlaceOrder' => __DIR__ . '/../..' . '/src/Shop/Ajax/PlaceOrder.php',
        'WPChill\\DownloadMonitor\\Shop\\Cart\\Cart' => __DIR__ . '/../..' . '/src/Shop/Cart/Cart.php',
        'WPChill\\DownloadMonitor\\Shop\\Cart\\Coupon' => __DIR__ . '/../..' . '/src/Shop/Cart/Coupon.php',
        'WPChill\\DownloadMonitor\\Shop\\Cart\\Hooks' => __DIR__ . '/../..' . '/src/Shop/Cart/Hooks.php',
        'WPChill\\DownloadMonitor\\Shop\\Cart\\Item\\Factory' => __DIR__ . '/../..' . '/src/Shop/Cart/Item/Factory.php',
        'WPChill\\DownloadMonitor\\Shop\\Cart\\Item\\Item' => __DIR__ . '/../..' . '/src/Shop/Cart/Item/Item.php',
        'WPChill\\DownloadMonitor\\Shop\\Cart\\Manager' => __DIR__ . '/../..' . '/src/Shop/Cart/Manager.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\Field' => __DIR__ . '/../..' . '/src/Shop/Checkout/Field.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\Manager' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/Manager.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\Address' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/Address.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\Amount' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/Amount.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\BaseAddress' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/BaseAddress.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\CartBase' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/CartBase.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\Details' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/Details.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\FormatConverter' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/FormatConverter.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\Item' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/Item.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\ItemList' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/ItemList.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\NumericValidator' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/NumericValidator.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\Payer' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/Payer.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\PayerInfo' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/PayerInfo.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\RedirectUrls' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/RedirectUrls.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\Transaction' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/Transaction.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\TransactionBase' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/TransactionBase.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Api\\UrlValidator' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Api/UrlValidator.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\CaptureOrder' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/CaptureOrder.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\AccessToken' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/AccessToken.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\AccessTokenRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/AccessTokenRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\AuthorizationInjector' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/AuthorizationInjector.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\FPTIInstrumentationInjector' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/FPTIInstrumentationInjector.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\GzipInjector' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/GzipInjector.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\PayPalEnvironment' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/PayPalEnvironment.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\PayPalHttpClient' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/PayPalHttpClient.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\ProductionEnvironment' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/ProductionEnvironment.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\RefreshTokenRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/RefreshTokenRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\SandboxEnvironment' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/SandboxEnvironment.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\UserAgent' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/UserAgent.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Core\\Version' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Core/Version.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\CreateOrder' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/CreateOrder.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\ExecutePaymentListener' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/ExecutePaymentListener.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Orders\\OrdersAuthorizeRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Orders/OrdersAuthorizeRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Orders\\OrdersCaptureRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Orders/OrdersCaptureRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Orders\\OrdersCreateRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Orders/OrdersCreateRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Orders\\OrdersGetRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Orders/OrdersGetRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Orders\\OrdersPatchRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Orders/OrdersPatchRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Orders\\OrdersValidateRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Orders/OrdersValidateRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\PayPalGateway' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/PayPalGateway.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Payments\\AuthorizationsCaptureRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Payments/AuthorizationsCaptureRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Payments\\AuthorizationsGetRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Payments/AuthorizationsGetRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Payments\\AuthorizationsReauthorizeRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Payments/AuthorizationsReauthorizeRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Payments\\AuthorizationsVoidRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Payments/AuthorizationsVoidRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Payments\\CapturesGetRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Payments/CapturesGetRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Payments\\CapturesRefundRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Payments/CapturesRefundRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PayPal\\Payments\\RefundsGetRequest' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PayPal/Payments/RefundsGetRequest.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\PaymentGateway' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/PaymentGateway.php',
        'WPChill\\DownloadMonitor\\Shop\\Checkout\\PaymentGateway\\Result' => __DIR__ . '/../..' . '/src/Shop/Checkout/PaymentGateway/Result.php',
        'WPChill\\DownloadMonitor\\Shop\\Email\\Handler' => __DIR__ . '/../..' . '/src/Shop/Email/Handler.php',
        'WPChill\\DownloadMonitor\\Shop\\Email\\Message' => __DIR__ . '/../..' . '/src/Shop/Email/Message.php',
        'WPChill\\DownloadMonitor\\Shop\\Email\\VarParser' => __DIR__ . '/../..' . '/src/Shop/Email/VarParser.php',
        'WPChill\\DownloadMonitor\\Shop\\Helper\\Country' => __DIR__ . '/../..' . '/src/Shop/Helper/Country.php',
        'WPChill\\DownloadMonitor\\Shop\\Helper\\Currency' => __DIR__ . '/../..' . '/src/Shop/Helper/Currency.php',
        'WPChill\\DownloadMonitor\\Shop\\Helper\\Format' => __DIR__ . '/../..' . '/src/Shop/Helper/Format.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Factory' => __DIR__ . '/../..' . '/src/Shop/Order/Factory.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Manager' => __DIR__ . '/../..' . '/src/Shop/Order/Manager.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Order' => __DIR__ . '/../..' . '/src/Shop/Order/Order.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\OrderCoupon' => __DIR__ . '/../..' . '/src/Shop/Order/OrderCoupon.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\OrderCustomer' => __DIR__ . '/../..' . '/src/Shop/Order/OrderCustomer.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\OrderItem' => __DIR__ . '/../..' . '/src/Shop/Order/OrderItem.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Repository' => __DIR__ . '/../..' . '/src/Shop/Order/Repository.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Status\\Factory' => __DIR__ . '/../..' . '/src/Shop/Order/Status/Factory.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Status\\Manager' => __DIR__ . '/../..' . '/src/Shop/Order/Status/Manager.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Status\\OrderStatus' => __DIR__ . '/../..' . '/src/Shop/Order/Status/OrderStatus.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Transaction\\Factory' => __DIR__ . '/../..' . '/src/Shop/Order/Transaction/Factory.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Transaction\\OrderTransaction' => __DIR__ . '/../..' . '/src/Shop/Order/Transaction/OrderTransaction.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\Transaction\\OrderTransactionStatus' => __DIR__ . '/../..' . '/src/Shop/Order/Transaction/OrderTransactionStatus.php',
        'WPChill\\DownloadMonitor\\Shop\\Order\\WordPressRepository' => __DIR__ . '/../..' . '/src/Shop/Order/WordPressRepository.php',
        'WPChill\\DownloadMonitor\\Shop\\Product\\Factory' => __DIR__ . '/../..' . '/src/Shop/Product/Factory.php',
        'WPChill\\DownloadMonitor\\Shop\\Product\\Product' => __DIR__ . '/../..' . '/src/Shop/Product/Product.php',
        'WPChill\\DownloadMonitor\\Shop\\Product\\Repository' => __DIR__ . '/../..' . '/src/Shop/Product/Repository.php',
        'WPChill\\DownloadMonitor\\Shop\\Product\\WordPressRepository' => __DIR__ . '/../..' . '/src/Shop/Product/WordPressRepository.php',
        'WPChill\\DownloadMonitor\\Shop\\Services\\ServiceProvider' => __DIR__ . '/../..' . '/src/Shop/Services/ServiceProvider.php',
        'WPChill\\DownloadMonitor\\Shop\\Services\\Services' => __DIR__ . '/../..' . '/src/Shop/Services/Services.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\Cookie' => __DIR__ . '/../..' . '/src/Shop/Session/Cookie.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\Factory' => __DIR__ . '/../..' . '/src/Shop/Session/Factory.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\Item\\Factory' => __DIR__ . '/../..' . '/src/Shop/Session/Item/Factory.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\Item\\Item' => __DIR__ . '/../..' . '/src/Shop/Session/Item/Item.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\Manager' => __DIR__ . '/../..' . '/src/Shop/Session/Manager.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\Repository' => __DIR__ . '/../..' . '/src/Shop/Session/Repository.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\Session' => __DIR__ . '/../..' . '/src/Shop/Session/Session.php',
        'WPChill\\DownloadMonitor\\Shop\\Session\\WordPressRepository' => __DIR__ . '/../..' . '/src/Shop/Session/WordPressRepository.php',
        'WPChill\\DownloadMonitor\\Shop\\Shortcode\\Buy' => __DIR__ . '/../..' . '/src/Shop/Shortcode/Buy.php',
        'WPChill\\DownloadMonitor\\Shop\\Shortcode\\Cart' => __DIR__ . '/../..' . '/src/Shop/Shortcode/Cart.php',
        'WPChill\\DownloadMonitor\\Shop\\Shortcode\\Checkout' => __DIR__ . '/../..' . '/src/Shop/Shortcode/Checkout.php',
        'WPChill\\DownloadMonitor\\Shop\\Tax\\TaxClassManager' => __DIR__ . '/../..' . '/src/Shop/Tax/TaxClassManager.php',
        'WPChill\\DownloadMonitor\\Shop\\Tax\\TaxRate' => __DIR__ . '/../..' . '/src/Shop/Tax/TaxRate.php',
        'WPChill\\DownloadMonitor\\Shop\\Util\\Assets' => __DIR__ . '/../..' . '/src/Shop/Util/Assets.php',
        'WPChill\\DownloadMonitor\\Shop\\Util\\Page' => __DIR__ . '/../..' . '/src/Shop/Util/Page.php',
        'WPChill\\DownloadMonitor\\Shop\\Util\\PostType' => __DIR__ . '/../..' . '/src/Shop/Util/PostType.php',
        'WPChill\\DownloadMonitor\\Shop\\Util\\Redirect' => __DIR__ . '/../..' . '/src/Shop/Util/Redirect.php',
        'WPChill\\DownloadMonitor\\Shop\\Util\\TemplateInjector' => __DIR__ . '/../..' . '/src/Shop/Util/TemplateInjector.php',
        'WPChill\\DownloadMonitor\\Util\\ExtensionLoader' => __DIR__ . '/../..' . '/src/Util/ExtensionLoader.php',
        'WPChill\\DownloadMonitor\\Util\\PageCreator' => __DIR__ . '/../..' . '/src/Util/PageCreator.php',
        'WPChill_Welcome' => __DIR__ . '/../..' . '/includes/submodules/banner/class-wpchill-welcome.php',
        'WP_DLM' => __DIR__ . '/../..' . '/src/DLM.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80ce4473100edd20fd6c17775a76ce9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80ce4473100edd20fd6c17775a76ce9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80ce4473100edd20fd6c17775a76ce9a::$classMap;

        }, null, ClassLoader::class);
    }
}
