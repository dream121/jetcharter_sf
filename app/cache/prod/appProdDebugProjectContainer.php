<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appProdDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdDebugProjectContainer extends Container
{
    private $parameters;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            '11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_1' => 'get11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e37521Service',
            '11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_2' => 'get11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e37522Service',
            '11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_3' => 'get11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e37523Service',
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'captcha.type' => 'getCaptcha_TypeService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.deprecation_logger_listener' => 'getDebug_DeprecationLoggerListenerService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.scream_logger_listener' => 'getDebug_ScreamLoggerListenerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.autoselect' => 'getForm_Type_AutoselectService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datepicker' => 'getForm_Type_DatepickerService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'gaufrette.doc_fs_filesystem' => 'getGaufrette_DocFsFilesystemService',
            'gaufrette.video_fs_filesystem' => 'getGaufrette_VideoFsFilesystemService',
            'gregwar_captcha.captcha_builder' => 'getGregwarCaptcha_CaptchaBuilderService',
            'gregwar_captcha.generator' => 'getGregwarCaptcha_GeneratorService',
            'gregwar_captcha.image_file_handler' => 'getGregwarCaptcha_ImageFileHandlerService',
            'gregwar_captcha.phrase_builder' => 'getGregwarCaptcha_PhraseBuilderService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'login_listener' => 'getLoginListenerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.deprecation' => 'getMonolog_Logger_DeprecationService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.scream' => 'getMonolog_Logger_ScreamService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'property_accessor' => 'getPropertyAccessorService',
            'pugx_multi_user.listener.authentication' => 'getPugxMultiUser_Listener_AuthenticationService',
            'pugx_multi_user.orm.validator.unique' => 'getPugxMultiUser_Orm_Validator_UniqueService',
            'pugx_multi_user.profile_form_factory' => 'getPugxMultiUser_ProfileFormFactoryService',
            'pugx_multi_user.registration_controller' => 'getPugxMultiUser_RegistrationControllerService',
            'pugx_multi_user.registration_form_factory' => 'getPugxMultiUser_RegistrationFormFactoryService',
            'pugx_multi_user.registration_manager' => 'getPugxMultiUser_RegistrationManagerService',
            'pugx_user.manager.orm_user_manager' => 'getPugxUser_Manager_OrmUserManagerService',
            'pugx_user.manager.user_discriminator' => 'getPugxUser_Manager_UserDiscriminatorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension' => 'getTwig_ExtensionService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'twilio.api' => 'getTwilio_ApiService',
            'twilio.capability' => 'getTwilio_CapabilityService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'vich_uploader.file_injector' => 'getVichUploader_FileInjectorService',
            'vich_uploader.listener.uploader.propel' => 'getVichUploader_Listener_Uploader_PropelService',
            'vich_uploader.metadata_reader' => 'getVichUploader_MetadataReaderService',
            'vich_uploader.namer_origname' => 'getVichUploader_NamerOrignameService',
            'vich_uploader.namer_uniqid' => 'getVichUploader_NamerUniqidService',
            'vich_uploader.property_mapping_factory' => 'getVichUploader_PropertyMappingFactoryService',
            'vich_uploader.storage' => 'getVichUploader_StorageService',
            'vich_uploader.storage.file_system' => 'getVichUploader_Storage_FileSystemService',
            'vich_uploader.storage_factory' => 'getVichUploader_StorageFactoryService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
            'vzaar_adapter' => 'getVzaarAdapterService',
            'vzaar_helper' => 'getVzaarHelperService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'debug.templating.engine.twig' => 'templating',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_user.user_manager' => 'pugx_user.manager.orm_user_manager',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'gaufrette.vzaar_video_adapter_adapter' => 'vzaar_adapter',
            'mailer' => 'swiftmailer.mailer.default',
            'pugx_user_discriminator' => 'pugx_user.manager.user_discriminator',
            'pugx_user_manager' => 'pugx_user.manager.orm_user_manager',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }

    /**
     * Gets the '11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_1' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_Esmtp_Auth_CramMd5Authenticator A Swift_Transport_Esmtp_Auth_CramMd5Authenticator instance.
     */
    protected function get11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e37521Service()
    {
        return $this->services['11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_1'] = new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator();
    }

    /**
     * Gets the '11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_Esmtp_Auth_LoginAuthenticator A Swift_Transport_Esmtp_Auth_LoginAuthenticator instance.
     */
    protected function get11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e37522Service()
    {
        return $this->services['11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_2'] = new \Swift_Transport_Esmtp_Auth_LoginAuthenticator();
    }

    /**
     * Gets the '11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_3' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_Esmtp_Auth_PlainAuthenticator A Swift_Transport_Esmtp_Auth_PlainAuthenticator instance.
     */
    protected function get11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e37523Service()
    {
        return $this->services['11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_3'] = new \Swift_Transport_Esmtp_Auth_PlainAuthenticator();
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/annotations', true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/assetic/config'), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JetChartersAppBundle', 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources/JetChartersAppBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JetChartersAppBundle', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\src\\JetCharters\\AppBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources/FOSUserBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JetChartersPublicBundle', 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources/JetChartersPublicBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JetChartersPublicBundle', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\src\\JetCharters\\PublicBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the 'captcha.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gregwar\CaptchaBundle\Type\CaptchaType A Gregwar\CaptchaBundle\Type\CaptchaType instance.
     */
    protected function getCaptcha_TypeService()
    {
        return $this->services['captcha.type'] = new \Gregwar\CaptchaBundle\Type\CaptchaType($this->get('session'), $this->get('gregwar_captcha.generator'), $this->get('translator.default'), array('length' => 5, 'width' => 130, 'height' => 50, 'font' => 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle\\DependencyInjection/../Generator/Font/captcha.ttf', 'keep_value' => false, 'charset' => 'abcdefhjkmnprstuvwxyz23456789', 'as_file' => false, 'as_url' => false, 'reload' => false, 'image_folder' => 'captcha', 'web_path' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web', 'gc_freq' => 100, 'expiration' => 60, 'quality' => 30, 'invalid_message' => 'Bad code value', 'bypass_code' => NULL, 'whitelist_key' => 'captcha_whitelist_key', 'humanity' => 0, 'distortion' => true, 'max_front_lines' => NULL, 'max_behind_lines' => NULL, 'interpolation' => true, 'text_color' => array(), 'background_color' => array(), 'disabled' => false));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(array(0 => $this->get('http_kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE), 1 => 'terminateWithException'));
    }

    /**
     * Gets the 'debug.deprecation_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_DeprecationLoggerListenerService()
    {
        return $this->services['debug.deprecation_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('deprecation', $this->get('monolog.logger.deprecation', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.emergency_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('security.interactive_login', array(0 => 'login_listener', 1 => 'onSecurityInteractivelogin'), 0);
        $instance->addListenerService('console.command', array(0 => 'monolog.handler.console', 1 => 'onCommand'), 255);
        $instance->addListenerService('console.terminate', array(0 => 'monolog.handler.console', 1 => 'onTerminate'), -255);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('debug.deprecation_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('debug.scream_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('pugx_multi_user.listener.authentication', 'PUGX\\MultiUserBundle\\Listener\\AuthenticationListener');

        return $instance;
    }

    /**
     * Gets the 'debug.scream_logger_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener A Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener instance.
     */
    protected function getDebug_ScreamLoggerListenerService()
    {
        return $this->services['debug.scream_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('scream', $this->get('monolog.logger.scream', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'vich_uploader' => 'vich_uploader.templating.helper.uploader_helper'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return stdClass A stdClass instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('vich_uploader.metadata_reader');
        $b = $this->get('vich_uploader.upload_handler');

        $c = new \Doctrine\DBAL\Logging\LoggerChain();
        $c->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $c->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $d = new \Doctrine\DBAL\Configuration();
        $d->setSQLLogger($c);

        $e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();

        $f = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('images', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('charter', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('aircraft', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('operator', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('specsheets', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('product_image', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('videos', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('operator', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('images', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('operator', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('videos', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('images', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('charter', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('specsheets', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('aircraft', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('videos', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('aircraft', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('product_image', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('specsheets', $e, $a, $b));
        $f->addEventSubscriber(new \FOS\UserBundle\Doctrine\Orm\UserListener($this));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('charter', $e, $a, $b));
        $f->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('product_image', $e, $a, $b));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'symfony', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array()), $d, $f, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_7e42785922af23a5a34113f43386d3e4dcb4b587af010a374c70fdd1e1a4b6a4');

        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_7e42785922af23a5a34113f43386d3e4dcb4b587af010a374c70fdd1e1a4b6a4');

        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_7e42785922af23a5a34113f43386d3e4dcb4b587af010a374c70fdd1e1a4b6a4');

        $d = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\doctrine' => 'FOS\\UserBundle\\Entity'));
        $d->setGlobalBasename('mapping');

        $e = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\src\\JetCharters\\AppBundle\\Entity')), 'JetCharters\\AppBundle\\Entity');
        $e->addDriver($d, 'FOS\\UserBundle\\Entity');
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\doctrine\\model' => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $f = new \Doctrine\ORM\Configuration();
        $f->setEntityNamespaces(array('JetChartersAppBundle' => 'JetCharters\\AppBundle\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity'));
        $f->setMetadataCacheImpl($a);
        $f->setQueryCacheImpl($b);
        $f->setResultCacheImpl($c);
        $f->setMetadataDriverImpl($e);
        $f->setProxyDir('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/doctrine/orm/Proxies');
        $f->setProxyNamespace('Proxies');
        $f->setAutoGenerateProxyClasses(true);
        $f->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $f->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $f->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $f);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources');
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('datePicker' => 'form.type.datepicker', 'autoSelect' => 'form.type.autoselect', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'captcha' => 'captcha.type'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the 'form.type.autoselect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JetCharters\AppBundle\Form\Type\AutoSelectType A JetCharters\AppBundle\Form\Type\AutoSelectType instance.
     */
    protected function getForm_Type_AutoselectService()
    {
        return $this->services['form.type.autoselect'] = new \JetCharters\AppBundle\Form\Type\AutoSelectType();
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datepicker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JetCharters\AppBundle\Form\Type\DatePickerType A JetCharters\AppBundle\Form\Type\DatePickerType instance.
     */
    protected function getForm_Type_DatepickerService()
    {
        return $this->services['form.type.datepicker'] = new \JetCharters\AppBundle\Form\Type\DatePickerType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler());
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'fos_user_change_password', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance.
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('JetCharters\\AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance.
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /**
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance.
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
    }

    /**
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance.
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance.
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }

    /**
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Form\FormFactory A PUGX\MultiUserBundle\Form\FormFactory instance.
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \PUGX\MultiUserBundle\Form\FormFactory($this->get('pugx_user.manager.user_discriminator'), $this->get('form.factory'), 'profile');
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance.
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('JetCharters\\AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Form\FormFactory A PUGX\MultiUserBundle\Form\FormFactory instance.
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \PUGX\MultiUserBundle\Form\FormFactory($this->get('pugx_user.manager.user_discriminator'), $this->get('form.factory'), 'registration');
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('JetCharters\\AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'fos_user_resetting', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance.
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('JetCharters\\AppBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('pugx_user.manager.orm_user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance.
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance.
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('pugx_user.manager.orm_user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance.
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance.
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('pugx_user.manager.orm_user_manager'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true, $this->get('request_stack'));

        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        $instance->addRenderer($this->get('fragment.renderer.esi'));

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'gaufrette.doc_fs_filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gaufrette\Filesystem A Gaufrette\Filesystem instance.
     */
    protected function getGaufrette_DocFsFilesystemService()
    {
        return $this->services['gaufrette.doc_fs_filesystem'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/docs', true));
    }

    /**
     * Gets the 'gaufrette.video_fs_filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gaufrette\Filesystem A Gaufrette\Filesystem instance.
     */
    protected function getGaufrette_VideoFsFilesystemService()
    {
        return $this->services['gaufrette.video_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('vzaar_adapter'));
    }

    /**
     * Gets the 'gregwar_captcha.captcha_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gregwar\Captcha\CaptchaBuilder A Gregwar\Captcha\CaptchaBuilder instance.
     */
    protected function getGregwarCaptcha_CaptchaBuilderService()
    {
        return $this->services['gregwar_captcha.captcha_builder'] = new \Gregwar\Captcha\CaptchaBuilder();
    }

    /**
     * Gets the 'gregwar_captcha.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gregwar\CaptchaBundle\Generator\CaptchaGenerator A Gregwar\CaptchaBundle\Generator\CaptchaGenerator instance.
     */
    protected function getGregwarCaptcha_GeneratorService()
    {
        return $this->services['gregwar_captcha.generator'] = new \Gregwar\CaptchaBundle\Generator\CaptchaGenerator($this->get('router'), $this->get('gregwar_captcha.captcha_builder'), $this->get('gregwar_captcha.phrase_builder'), $this->get('gregwar_captcha.image_file_handler'));
    }

    /**
     * Gets the 'gregwar_captcha.image_file_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gregwar\CaptchaBundle\Generator\ImageFileHandler A Gregwar\CaptchaBundle\Generator\ImageFileHandler instance.
     */
    protected function getGregwarCaptcha_ImageFileHandlerService()
    {
        return $this->services['gregwar_captcha.image_file_handler'] = new \Gregwar\CaptchaBundle\Generator\ImageFileHandler('captcha', 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web', 100, 60);
    }

    /**
     * Gets the 'gregwar_captcha.phrase_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Gregwar\Captcha\PhraseBuilder A Gregwar\Captcha\PhraseBuilder instance.
     */
    protected function getGregwarCaptcha_PhraseBuilderService()
    {
        return $this->services['gregwar_captcha.phrase_builder'] = new \Gregwar\Captcha\PhraseBuilder();
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_gaufrette.filesystem_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Knp\Bundle\GaufretteBundle\FilesystemMap A Knp\Bundle\GaufretteBundle\FilesystemMap instance.
     */
    protected function getKnpGaufrette_FilesystemMapService()
    {
        return $this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap(array('video_fs' => $this->get('gaufrette.video_fs_filesystem'), 'doc_fs' => $this->get('gaufrette.doc_fs_filesystem')));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JetCharters\AppBundle\EventListener\SecurityListener A JetCharters\AppBundle\EventListener\SecurityListener instance.
     */
    protected function getLoginListenerService()
    {
        return $this->services['login_listener'] = new \JetCharters\AppBundle\EventListener\SecurityListener($this->get('router'), $this->get('security.context'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);
    }

    /**
     * Gets the 'monolog.handler.nested' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/logs/prod.log', 100, true);
    }

    /**
     * Gets the 'monolog.logger.deprecation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DeprecationService()
    {
        $this->services['monolog.logger.deprecation'] = $instance = new \Symfony\Bridge\Monolog\Logger('deprecation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.emergency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.scream' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ScreamService()
    {
        $this->services['monolog.logger.scream'] = $instance = new \Symfony\Bridge\Monolog\Logger('scream');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }

    /**
     * Gets the 'pugx_multi_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Listener\AuthenticationListener A PUGX\MultiUserBundle\Listener\AuthenticationListener instance.
     */
    protected function getPugxMultiUser_Listener_AuthenticationService()
    {
        return $this->services['pugx_multi_user.listener.authentication'] = new \PUGX\MultiUserBundle\Listener\AuthenticationListener($this->get('pugx_user.manager.user_discriminator'));
    }

    /**
     * Gets the 'pugx_multi_user.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Validator\Constraints\UniqueEntityValidator A PUGX\MultiUserBundle\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getPugxMultiUser_Orm_Validator_UniqueService()
    {
        return $this->services['pugx_multi_user.orm.validator.unique'] = new \PUGX\MultiUserBundle\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'pugx_multi_user.profile_form_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Form\FormFactory A PUGX\MultiUserBundle\Form\FormFactory instance.
     */
    protected function getPugxMultiUser_ProfileFormFactoryService()
    {
        return $this->services['pugx_multi_user.profile_form_factory'] = new \PUGX\MultiUserBundle\Form\FormFactory($this->get('pugx_user.manager.user_discriminator'), $this->get('form.factory'), 'profile');
    }

    /**
     * Gets the 'pugx_multi_user.registration_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return FOS\UserBundle\Controller\RegistrationController A FOS\UserBundle\Controller\RegistrationController instance.
     */
    protected function getPugxMultiUser_RegistrationControllerService()
    {
        return $this->services['pugx_multi_user.registration_controller'] = new \FOS\UserBundle\Controller\RegistrationController();
    }

    /**
     * Gets the 'pugx_multi_user.registration_form_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Form\FormFactory A PUGX\MultiUserBundle\Form\FormFactory instance.
     */
    protected function getPugxMultiUser_RegistrationFormFactoryService()
    {
        return $this->services['pugx_multi_user.registration_form_factory'] = new \PUGX\MultiUserBundle\Form\FormFactory($this->get('pugx_user.manager.user_discriminator'), $this->get('form.factory'), 'registration');
    }

    /**
     * Gets the 'pugx_multi_user.registration_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Controller\RegistrationManager A PUGX\MultiUserBundle\Controller\RegistrationManager instance.
     */
    protected function getPugxMultiUser_RegistrationManagerService()
    {
        return $this->services['pugx_multi_user.registration_manager'] = new \PUGX\MultiUserBundle\Controller\RegistrationManager($this->get('pugx_user.manager.user_discriminator'), $this, $this->get('pugx_multi_user.registration_controller'), $this->get('fos_user.registration.form.factory'));
    }

    /**
     * Gets the 'pugx_user.manager.orm_user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Doctrine\UserManager A PUGX\MultiUserBundle\Doctrine\UserManager instance.
     */
    protected function getPugxUser_Manager_OrmUserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['pugx_user.manager.orm_user_manager'] = new \PUGX\MultiUserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('doctrine')->getManager(NULL), 'JetCharters\\AppBundle\\Entity\\User', $this->get('pugx_user.manager.user_discriminator'));
    }

    /**
     * Gets the 'pugx_user.manager.user_discriminator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return PUGX\MultiUserBundle\Model\UserDiscriminator A PUGX\MultiUserBundle\Model\UserDiscriminator instance.
     */
    protected function getPugxUser_Manager_UserDiscriminatorService()
    {
        return $this->services['pugx_user.manager.user_discriminator'] = new \PUGX\MultiUserBundle\Model\UserDiscriminator($this->get('session'), array('operator' => array('entity' => array('class' => 'JetCharters\\AppBundle\\Entity\\OperatorUser', 'factory' => 'PUGX\\MultiUserBundle\\Model\\UserFactory'), 'registration' => array('form' => array('type' => 'JetCharters\\AppBundle\\Form\\RegistrationOperatorType', 'name' => 'fos_user_registration_form', 'validation_groups' => array(0 => 'Registration', 1 => 'Default')), 'template' => 'JetChartersAppBundle:Registration:operator.form.html.twig'), 'profile' => array('form' => array('type' => NULL, 'name' => 'fos_user_profile_form', 'validation_groups' => array(0 => 'Profile', 1 => 'Default')))), 'administrator' => array('entity' => array('class' => 'JetCharters\\AppBundle\\Entity\\Administrator', 'factory' => 'PUGX\\MultiUserBundle\\Model\\UserFactory'), 'registration' => array('form' => array('type' => 'JetCharters\\AppBundle\\Form\\RegistrationAdministratorType', 'name' => 'fos_user_registration_form', 'validation_groups' => array(0 => 'Registration', 1 => 'Default')), 'template' => 'JetChartersAppBundle:Registration:administrator.form.html.twig'), 'profile' => array('form' => array('type' => NULL, 'name' => 'fos_user_profile_form', 'validation_groups' => array(0 => 'Profile', 1 => 'Default')))), 'siteuser' => array('entity' => array('class' => 'JetCharters\\AppBundle\\Entity\\SiteUser', 'factory' => 'PUGX\\MultiUserBundle\\Model\\UserFactory'), 'registration' => array('form' => array('type' => 'JetCharters\\AppBundle\\Form\\RegistrationSiteUserType', 'name' => 'fos_user_registration_form', 'validation_groups' => array(0 => 'Registration', 1 => 'Default')), 'template' => 'JetChartersAppBundle:Registration:siteuser.form.html.twig'), 'profile' => array('form' => array('type' => NULL, 'name' => 'fos_user_profile_form', 'validation_groups' => array(0 => 'Profile', 1 => 'Default'))))));
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/config/routing.yml', array('cache_dir' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.context');
        $c = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');

        $g = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$');

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/register');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting$');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/operator-admin');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user');

        $m = new \Symfony\Component\Security\Http\AccessMap();
        $m->add($g, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $m->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $m->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $m->add($j, array(0 => 'ROLE_OPERATOR'), NULL);
        $m->add($k, array(0 => 'ROLE_ADMIN'), NULL);
        $m->add($l, array(0 => 'ROLE_USER'), NULL);

        $n = new \Symfony\Component\Security\Http\HttpUtils($d, $d);

        $o = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $n, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($n, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $o->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $p = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($n, array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $p->setProviderKey('main');

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($m, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('fos_user.user_provider.username')), 'main', $a, $c), 2 => $o, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $f, $this->get('security.authentication.session_strategy'), $n, 'main', $p, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $n, array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $a), array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $a, $c, $this->get('form.csrf_provider')), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '53e49363d59ea', $a), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $m, $f)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $n, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $n, '/login', false), NULL, NULL, $a));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/sessions', 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => $this->get('11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_1'), 1 => $this->get('11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_2'), 2 => $this->get('11ee15d310fd3dee4523bcbd8780ef0ace15948ef2a5a89e12f757d3c42e3752_3')));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'));

        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));

        return $instance;
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app', 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper instance.
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance.
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/translations', 'debug' => true));

        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf', 'th', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf', 'vi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf', 'zh_TW', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Exception/../Resources/translations\\security.ua.xlf', 'ua', 'security');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\src\\JetCharters\\AppBundle/Resources/translations\\messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ar.yml', 'ar', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.he.yml', 'he', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.id.yml', 'id', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.nb.yml', 'nb', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.th.yml', 'th', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.vi.yml', 'vi', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ar.yml', 'ar', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ca.yml', 'ca', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.he.yml', 'he', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.id.yml', 'id', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.nb.yml', 'nb', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.th.yml', 'th', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.vi.yml', 'vi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('yml', 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources/FOSUserBundle/translations\\FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\src\\JetCharters\\PublicBundle/Resources/translations\\messages.fr.xlf', 'fr', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.cs.yml', 'cs', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.de.yml', 'de', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.en.yml', 'en', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.es.yml', 'es', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.fr.yml', 'fr', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.it.yml', 'it', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.nl.yml', 'nl', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.pl.yml', 'pl', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.pt_BR.yml', 'pt_BR', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.ro.yml', 'ro', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.ru.yml', 'ru', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\gregwar_captcha.zh_CN.yml', 'zh_CN', 'gregwar_captcha');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.ro.yml', 'ro', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/translations\\validators.zh_CN.yml', 'zh_CN', 'validators');

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/twig', 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension($this->get('twig.extension'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this, $this->get('router.request_context')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'GregwarCaptchaBundle::captcha.html.twig', 1 => 'form_div_layout.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'JetChartersAppBundle', 1 => 'FOSUserBundle', 2 => 'JetChartersPublicBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension($this->get('vich_uploader.templating.helper.uploader_helper')));
        $instance->addGlobal('app', $this->get('templating.globals'));

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JetCharters\AppBundle\Twig\LocaleExtension A JetCharters\AppBundle\Twig\LocaleExtension instance.
     */
    protected function getTwig_ExtensionService()
    {
        return $this->services['twig.extension'] = new \JetCharters\AppBundle\Twig\LocaleExtension($this);
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views', 'Security');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views', 'Twig');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\swiftmailer-bundle\\Symfony\\Bundle\\SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\doctrine\\doctrine-bundle\\Doctrine\\Bundle\\DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\src\\JetCharters\\AppBundle/Resources/views', 'JetChartersApp');
        $instance->addPath('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources/FOSUserBundle/views', 'FOSUser');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\src\\JetCharters\\PublicBundle/Resources/views', 'JetChartersPublic');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle/Resources/views', 'GregwarCaptcha');
        $instance->addPath('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/Resources/views');
        $instance->addPath('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form');

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'twilio.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vresh\TwilioBundle\Service\TwilioWrapper A Vresh\TwilioBundle\Service\TwilioWrapper instance.
     */
    protected function getTwilio_ApiService()
    {
        return $this->services['twilio.api'] = new \Vresh\TwilioBundle\Service\TwilioWrapper('ACac7cd88103c563b7db7a36492812285a', '070733798efa34f15ff1add416e1cb2f', '2010-04-01', 3);
    }

    /**
     * Gets the 'twilio.capability' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vresh\TwilioBundle\Service\TwilioCapabilityWrapper A Vresh\TwilioBundle\Service\TwilioCapabilityWrapper instance.
     */
    protected function getTwilio_CapabilityService()
    {
        return $this->services['twilio.capability'] = new \Vresh\TwilioBundle\Service\TwilioCapabilityWrapper('ACac7cd88103c563b7db7a36492812285a', '070733798efa34f15ff1add416e1cb2f');
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\ValidatorInterface A Symfony\Component\Validator\ValidatorInterface instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance.
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'pugx.orm.validator.unique' => 'pugx_multi_user.orm.validator.unique')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml', 1 => 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml'));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('pugx_user.manager.orm_user_manager'))));
        $instance->addXmlMapping('C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\DependencyInjection\\Compiler/../../Resources/config/validation/orm.xml');

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance.
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'vich_uploader.file_injector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Injector\FileInjector A Vich\UploaderBundle\Injector\FileInjector instance.
     */
    protected function getVichUploader_FileInjectorService()
    {
        return $this->services['vich_uploader.file_injector'] = new \Vich\UploaderBundle\Injector\FileInjector($this->get('vich_uploader.storage'));
    }

    /**
     * Gets the 'vich_uploader.listener.uploader.propel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\EventListener\PropelUploaderListener A Vich\UploaderBundle\EventListener\PropelUploaderListener instance.
     */
    protected function getVichUploader_Listener_Uploader_PropelService()
    {
        return $this->services['vich_uploader.listener.uploader.propel'] = new \Vich\UploaderBundle\EventListener\PropelUploaderListener(new \Vich\UploaderBundle\Adapter\Propel\PropelORMAdapter(), $this->get('vich_uploader.upload_handler'));
    }

    /**
     * Gets the 'vich_uploader.namer_origname' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Naming\OrignameNamer A Vich\UploaderBundle\Naming\OrignameNamer instance.
     */
    protected function getVichUploader_NamerOrignameService()
    {
        return $this->services['vich_uploader.namer_origname'] = new \Vich\UploaderBundle\Naming\OrignameNamer();
    }

    /**
     * Gets the 'vich_uploader.namer_uniqid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Naming\UniqidNamer A Vich\UploaderBundle\Naming\UniqidNamer instance.
     */
    protected function getVichUploader_NamerUniqidService()
    {
        return $this->services['vich_uploader.namer_uniqid'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the 'vich_uploader.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Storage\StorageInterface A Vich\UploaderBundle\Storage\StorageInterface instance.
     */
    protected function getVichUploader_StorageService()
    {
        return $this->services['vich_uploader.storage'] = $this->get('vich_uploader.storage_factory')->createStorage();
    }

    /**
     * Gets the 'vich_uploader.storage.file_system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Storage\FileSystemStorage A Vich\UploaderBundle\Storage\FileSystemStorage instance.
     */
    protected function getVichUploader_Storage_FileSystemService()
    {
        return $this->services['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage($this->get('vich_uploader.property_mapping_factory'));
    }

    /**
     * Gets the 'vich_uploader.storage_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Storage\StorageFactory A Vich\UploaderBundle\Storage\StorageFactory instance.
     */
    protected function getVichUploader_StorageFactoryService()
    {
        return $this->services['vich_uploader.storage_factory'] = new \Vich\UploaderBundle\Storage\StorageFactory($this);
    }

    /**
     * Gets the 'vich_uploader.templating.helper.uploader_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Templating\Helper\UploaderHelper A Vich\UploaderBundle\Templating\Helper\UploaderHelper instance.
     */
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper($this->get('vich_uploader.storage'));
    }

    /**
     * Gets the 'vich_uploader.upload_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Vich\UploaderBundle\Handler\UploadHandler A Vich\UploaderBundle\Handler\UploadHandler instance.
     */
    protected function getVichUploader_UploadHandlerService()
    {
        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler($this->get('vich_uploader.property_mapping_factory'), $this->get('vich_uploader.storage'), $this->get('vich_uploader.file_injector'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'vzaar_adapter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JetCharters\AppBundle\Service\VzaarGaufretteAdapter A JetCharters\AppBundle\Service\VzaarGaufretteAdapter instance.
     */
    protected function getVzaarAdapterService()
    {
        return $this->services['vzaar_adapter'] = new \JetCharters\AppBundle\Service\VzaarGaufretteAdapter('xhAbRmVfuHlLhwE1NPAiEvGXuepFE8J0jpiaNG8', 'jetcharters');
    }

    /**
     * Gets the 'vzaar_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return JetCharters\AppBundle\Service\VzaarHelper A JetCharters\AppBundle\Service\VzaarHelper instance.
     */
    protected function getVzaarHelperService()
    {
        return $this->services['vzaar_helper'] = new \JetCharters\AppBundle\Service\VzaarHelper($this->get('vich_uploader.templating.helper.uploader_helper'), $this->get('knp_gaufrette.filesystem_map'));
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web', true);
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'fos_user.user_provider.username' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return FOS\UserBundle\Security\UserProvider A FOS\UserBundle\Security\UserProvider instance.
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('pugx_user.manager.orm_user_manager'));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');

        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)), 'affirmative', false, true);
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_provider.username'), $this->get('security.user_checker'), 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('53e49363d59ea')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance.
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance.
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod');
    }

    /**
     * Gets the 'vich_uploader.metadata_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Vich\UploaderBundle\Metadata\MetadataReader A Vich\UploaderBundle\Metadata\MetadataReader instance.
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Vich\UploaderBundle\Metadata\Driver\FileLocator(array());

        $b = new \Metadata\MetadataFactory(new \Vich\UploaderBundle\Metadata\Driver\ChainDriver(array(0 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')), 1 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a), 2 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a))));
        $b->setCache(new \Metadata\Cache\FileCache('C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/vich_uploader'));

        return $this->services['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the 'vich_uploader.property_mapping_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return Vich\UploaderBundle\Mapping\PropertyMappingFactory A Vich\UploaderBundle\Mapping\PropertyMappingFactory instance.
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->services['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, $this->get('vich_uploader.metadata_reader'), array('images' => array('uri_prefix' => '/uploads/images', 'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/images', 'delete_on_remove' => true, 'delete_on_update' => true, 'namer' => 'vich_uploader.namer_uniqid', 'directory_namer' => NULL, 'inject_on_load' => false, 'db_driver' => 'orm'), 'operator' => array('uri_prefix' => '/uploads/operator', 'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/operator', 'delete_on_remove' => true, 'delete_on_update' => true, 'namer' => 'vich_uploader.namer_uniqid', 'directory_namer' => NULL, 'inject_on_load' => false, 'db_driver' => 'orm'), 'aircraft' => array('uri_prefix' => '/uploads/aircraft', 'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/aircraft', 'delete_on_remove' => true, 'delete_on_update' => true, 'namer' => 'vich_uploader.namer_uniqid', 'directory_namer' => NULL, 'inject_on_load' => false, 'db_driver' => 'orm'), 'charter' => array('uri_prefix' => '/uploads/charter', 'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/charter', 'delete_on_remove' => true, 'delete_on_update' => true, 'namer' => 'vich_uploader.namer_uniqid', 'directory_namer' => NULL, 'inject_on_load' => false, 'db_driver' => 'orm'), 'videos' => array('upload_destination' => 'video_fs', 'delete_on_remove' => true, 'delete_on_update' => true, 'namer' => 'vzaar_adapter', 'uri_prefix' => '/uploads', 'directory_namer' => NULL, 'inject_on_load' => false, 'db_driver' => 'orm'), 'specsheets' => array('upload_destination' => 'doc_fs', 'delete_on_remove' => true, 'delete_on_update' => true, 'namer' => 'vich_uploader.namer_uniqid', 'uri_prefix' => '/uploads', 'directory_namer' => NULL, 'inject_on_load' => false, 'db_driver' => 'orm'), 'product_image' => array('uri_prefix' => 'images/uploads', 'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/images/uploads', 'namer' => NULL, 'directory_namer' => NULL, 'delete_on_remove' => true, 'delete_on_update' => true, 'inject_on_load' => false, 'db_driver' => 'orm')));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod',
            'kernel.logs_dir' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JetChartersAppBundle' => 'JetCharters\\AppBundle\\JetChartersAppBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'PUGXMultiUserBundle' => 'PUGX\\MultiUserBundle\\PUGXMultiUserBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'JetChartersPublicBundle' => 'JetCharters\\PublicBundle\\JetChartersPublicBundle',
                'VreshTwilioBundle' => 'Vresh\\TwilioBundle\\VreshTwilioBundle',
                'JetChartersConversionBundle' => 'JetCharters\\ConversionBundle\\JetChartersConversionBundle',
                'GregwarCaptchaBundle' => 'Gregwar\\CaptchaBundle\\GregwarCaptchaBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'symfony',
            'database_user' => 'root',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'en',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'vzaar_adapter.class' => 'JetCharters\\AppBundle\\Service\\VzaarGaufretteAdapter',
            'twig.extension.class' => 'JetCharters\\AppBundle\\Twig\\LocaleExtension',
            'vzaar_helper.class' => 'JetCharters\\AppBundle\\Service\\VzaarHelper',
            'vzaar_adapter.token' => 'xhAbRmVfuHlLhwE1NPAiEvGXuepFE8J0jpiaNG8',
            'vzaar_adapter.secret' => 'jetcharters',
            'form.type.datepicker.class' => 'JetCharters\\AppBundle\\Form\\Type\\DatePickerType',
            'form.type.autoselect.class' => 'JetCharters\\AppBundle\\Form\\Type\\AutoSelectType',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.container.dump' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/appProdDebugProjectContainer.xml',
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'gc_probability' => 1,
            ),
            'session.save_path' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/sessions',
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.helper.stopwatch.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'data_collector.templates' => array(

            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdUrlMatcher',
            'router.options.generator.cache_class' => 'appProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/config/routing.yml',
            'router.cache_class_prefix' => 'appProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(

            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'GregwarCaptchaBundle::captcha.html.twig',
                1 => 'form_div_layout.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/twig',
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/swiftmailer/spool/default',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/assetic',
            'assetic.bundles' => array(
                0 => 'JetChartersAppBundle',
                1 => 'FOSUserBundle',
                2 => 'JetChartersPublicBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web',
            'assetic.write_to' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web',
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'JetCharters\\AppBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'pugx_user_discriminator_users' => array(
                'operator' => array(
                    'entity' => array(
                        'class' => 'JetCharters\\AppBundle\\Entity\\OperatorUser',
                        'factory' => 'PUGX\\MultiUserBundle\\Model\\UserFactory',
                    ),
                    'registration' => array(
                        'form' => array(
                            'type' => 'JetCharters\\AppBundle\\Form\\RegistrationOperatorType',
                            'name' => 'fos_user_registration_form',
                            'validation_groups' => array(
                                0 => 'Registration',
                                1 => 'Default',
                            ),
                        ),
                        'template' => 'JetChartersAppBundle:Registration:operator.form.html.twig',
                    ),
                    'profile' => array(
                        'form' => array(
                            'type' => NULL,
                            'name' => 'fos_user_profile_form',
                            'validation_groups' => array(
                                0 => 'Profile',
                                1 => 'Default',
                            ),
                        ),
                    ),
                ),
                'administrator' => array(
                    'entity' => array(
                        'class' => 'JetCharters\\AppBundle\\Entity\\Administrator',
                        'factory' => 'PUGX\\MultiUserBundle\\Model\\UserFactory',
                    ),
                    'registration' => array(
                        'form' => array(
                            'type' => 'JetCharters\\AppBundle\\Form\\RegistrationAdministratorType',
                            'name' => 'fos_user_registration_form',
                            'validation_groups' => array(
                                0 => 'Registration',
                                1 => 'Default',
                            ),
                        ),
                        'template' => 'JetChartersAppBundle:Registration:administrator.form.html.twig',
                    ),
                    'profile' => array(
                        'form' => array(
                            'type' => NULL,
                            'name' => 'fos_user_profile_form',
                            'validation_groups' => array(
                                0 => 'Profile',
                                1 => 'Default',
                            ),
                        ),
                    ),
                ),
                'siteuser' => array(
                    'entity' => array(
                        'class' => 'JetCharters\\AppBundle\\Entity\\SiteUser',
                        'factory' => 'PUGX\\MultiUserBundle\\Model\\UserFactory',
                    ),
                    'registration' => array(
                        'form' => array(
                            'type' => 'JetCharters\\AppBundle\\Form\\RegistrationSiteUserType',
                            'name' => 'fos_user_registration_form',
                            'validation_groups' => array(
                                0 => 'Registration',
                                1 => 'Default',
                            ),
                        ),
                        'template' => 'JetChartersAppBundle:Registration:siteuser.form.html.twig',
                    ),
                    'profile' => array(
                        'form' => array(
                            'type' => NULL,
                            'name' => 'fos_user_profile_form',
                            'validation_groups' => array(
                                0 => 'Profile',
                                1 => 'Default',
                            ),
                        ),
                    ),
                ),
            ),
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'knp_gaufrette.stream_wrapper.protocol' => 'gaufrette',
            'knp_gaufrette.stream_wrapper.filesystems' => array(

            ),
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'vich_uploader.mappings' => array(
                'images' => array(
                    'uri_prefix' => '/uploads/images',
                    'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/images',
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'namer' => 'vich_uploader.namer_uniqid',
                    'directory_namer' => NULL,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
                'operator' => array(
                    'uri_prefix' => '/uploads/operator',
                    'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/operator',
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'namer' => 'vich_uploader.namer_uniqid',
                    'directory_namer' => NULL,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
                'aircraft' => array(
                    'uri_prefix' => '/uploads/aircraft',
                    'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/aircraft',
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'namer' => 'vich_uploader.namer_uniqid',
                    'directory_namer' => NULL,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
                'charter' => array(
                    'uri_prefix' => '/uploads/charter',
                    'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/uploads/charter',
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'namer' => 'vich_uploader.namer_uniqid',
                    'directory_namer' => NULL,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
                'videos' => array(
                    'upload_destination' => 'video_fs',
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'namer' => 'vzaar_adapter',
                    'uri_prefix' => '/uploads',
                    'directory_namer' => NULL,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
                'specsheets' => array(
                    'upload_destination' => 'doc_fs',
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'namer' => 'vich_uploader.namer_uniqid',
                    'uri_prefix' => '/uploads',
                    'directory_namer' => NULL,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
                'product_image' => array(
                    'uri_prefix' => 'images/uploads',
                    'upload_destination' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web/images/uploads',
                    'namer' => NULL,
                    'directory_namer' => NULL,
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ),
            ),
            'vich_uploader.storage_service' => 'vich_uploader.storage.file_system',
            'twilio.class' => 'Vresh\\TwilioBundle\\Service\\TwilioWrapper',
            'twilio.capability.class' => 'Vresh\\TwilioBundle\\Service\\TwilioCapabilityWrapper',
            'gregwar_captcha.captcha_type.class' => 'Gregwar\\CaptchaBundle\\Type\\CaptchaType',
            'gregwar_captcha.captcha_generator.class' => 'Gregwar\\CaptchaBundle\\Generator\\CaptchaGenerator',
            'gregwar_captcha.image_file_handler.class' => 'Gregwar\\CaptchaBundle\\Generator\\ImageFileHandler',
            'gregwar_captcha.captcha_builder.class' => 'Gregwar\\Captcha\\CaptchaBuilder',
            'gregwar_captcha.phrase_builder.class' => 'Gregwar\\Captcha\\PhraseBuilder',
            'gregwar_captcha.config' => array(
                'length' => 5,
                'width' => 130,
                'height' => 50,
                'font' => 'C:\\xampp\\htdocs\\Jeremi\\JetChartersPHP\\vendor\\gregwar\\captcha-bundle\\Gregwar\\CaptchaBundle\\DependencyInjection/../Generator/Font/captcha.ttf',
                'keep_value' => false,
                'charset' => 'abcdefhjkmnprstuvwxyz23456789',
                'as_file' => false,
                'as_url' => false,
                'reload' => false,
                'image_folder' => 'captcha',
                'web_path' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web',
                'gc_freq' => 100,
                'expiration' => 60,
                'quality' => 30,
                'invalid_message' => 'Bad code value',
                'bypass_code' => NULL,
                'whitelist_key' => 'captcha_whitelist_key',
                'humanity' => 0,
                'distortion' => true,
                'max_front_lines' => NULL,
                'max_behind_lines' => NULL,
                'interpolation' => true,
                'text_color' => array(

                ),
                'background_color' => array(

                ),
                'disabled' => false,
            ),
            'gregwar_captcha.config.image_folder' => 'captcha',
            'gregwar_captcha.config.web_path' => 'C:/xampp/htdocs/Jeremi/JetChartersPHP/app/../web',
            'gregwar_captcha.config.gc_freq' => 100,
            'gregwar_captcha.config.expiration' => 60,
            'gregwar_captcha.config.whitelist_key' => 'captcha_whitelist_key',
            'console.command.ids' => array(

            ),
        );
    }
}
