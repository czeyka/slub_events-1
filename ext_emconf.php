<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "slub_events".
 *
 * Auto generated 15-09-2014 11:01
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'SLUB: Event Registration',
	'description' => 'Tool for event registration and experts booking.

This extension is developped and used in production at the Saxony State and University Library (SLUB) Dresden, Germany.',
	'category' => 'plugin',
	'author' => 'Alexander Bigga',
	'author_email' => 'alexander.bigga@slub-dresden.de',
	'author_company' => 'SLUB Dresden',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => 'typo3temp/tx_slubevents/',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '2.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.2.12-6.2.99',
			'fluid' => '6.2.12-6.2.99',
			'typo3' => '6.2.12-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:202:{s:20:"class.ext_update.php";s:4:"6ad2";s:12:"ext_icon.gif";s:4:"97e3";s:17:"ext_localconf.php";s:4:"6b3f";s:14:"ext_tables.php";s:4:"2f4c";s:14:"ext_tables.sql";s:4:"e5e3";s:21:"ExtensionBuilder.json";s:4:"0d8e";s:10:"Readme.rst";s:4:"f13b";s:23:"Ajaxproxy/Ajaxproxy.php";s:4:"544a";s:48:"Classes/Command/CheckeventsCommandController.php";s:4:"a1db";s:41:"Classes/Controller/AbstractController.php";s:4:"b367";s:41:"Classes/Controller/CategoryController.php";s:4:"1f12";s:40:"Classes/Controller/ContactController.php";s:4:"ed30";s:38:"Classes/Controller/EventController.php";s:4:"e436";s:41:"Classes/Controller/LocationController.php";s:4:"454b";s:43:"Classes/Controller/SubscriberController.php";s:4:"4a95";s:33:"Classes/Domain/Model/Category.php";s:4:"d2cd";s:32:"Classes/Domain/Model/Contact.php";s:4:"2442";s:35:"Classes/Domain/Model/Discipline.php";s:4:"a106";s:30:"Classes/Domain/Model/Event.php";s:4:"ef79";s:33:"Classes/Domain/Model/Location.php";s:4:"d682";s:35:"Classes/Domain/Model/Subscriber.php";s:4:"7ff6";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"0700";s:47:"Classes/Domain/Repository/ContactRepository.php";s:4:"c10b";s:50:"Classes/Domain/Repository/DisciplineRepository.php";s:4:"28ee";s:45:"Classes/Domain/Repository/EventRepository.php";s:4:"be2c";s:48:"Classes/Domain/Repository/LocationRepository.php";s:4:"e9ff";s:50:"Classes/Domain/Repository/SubscriberRepository.php";s:4:"2421";s:62:"Classes/Domain/Validator/EventSubscriptionAllowedValidator.php";s:4:"10d9";s:48:"Classes/Domain/Validator/SubscriberValidator.php";s:4:"4000";s:36:"Classes/Slots/HookPostProcessing.php";s:4:"a8a9";s:35:"Classes/Slots/HookPreProcessing.php";s:4:"d6f8";s:26:"Classes/Slots/Tceforms.php";s:4:"ad59";s:38:"Classes/Slots/ValidationController.php";s:4:"81f7";s:45:"Classes/ViewHelpers/Be/CheckboxViewHelper.php";s:4:"8231";s:46:"Classes/ViewHelpers/Be/ContainerViewHelper.php";s:4:"ecb5";s:48:"Classes/ViewHelpers/Be/FunctionBarViewHelper.php";s:4:"58d5";s:46:"Classes/ViewHelpers/Be/TableListViewHelper.php";s:4:"04d8";s:60:"Classes/ViewHelpers/Condition/EventsOfCategoryViewHelper.php";s:4:"6b96";s:60:"Classes/ViewHelpers/Condition/HasSubcategoriesViewHelper.php";s:4:"20b0";s:65:"Classes/ViewHelpers/Condition/IsSubscriptionAllowedViewHelper.php";s:4:"1164";s:53:"Classes/ViewHelpers/Condition/IsWeekendViewHelper.php";s:4:"848d";s:53:"Classes/ViewHelpers/Format/BookedPlacesViewHelper.php";s:4:"bd1e";s:50:"Classes/ViewHelpers/Format/CsvEscapeViewHelper.php";s:4:"c017";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"0d13";s:49:"Classes/ViewHelpers/Format/EditCodeViewHelper.php";s:4:"b898";s:55:"Classes/ViewHelpers/Format/FreePlacesLeftViewHelper.php";s:4:"9c2a";s:54:"Classes/ViewHelpers/Format/NewMonthTitleViewHelper.php";s:4:"9589";s:48:"Classes/ViewHelpers/Format/OneLineViewHelper.php";s:4:"1953";s:50:"Classes/ViewHelpers/Format/StripTagsViewHelper.php";s:4:"0249";s:62:"Classes/ViewHelpers/Format/Fullcalendar/JsFooterViewHelper.php";s:4:"1397";s:48:"Classes/ViewHelpers/Link/Is3dModelViewHelper.php";s:4:"eb7d";s:46:"Classes/ViewHelpers/Link/IslocalViewHelper.php";s:4:"3196";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"04dc";s:51:"Configuration/FlexForms/flexform_eventgeniusbar.xml";s:4:"a79a";s:46:"Configuration/FlexForms/flexform_eventlist.xml";s:4:"e65a";s:51:"Configuration/FlexForms/flexform_eventsubscribe.xml";s:4:"af2a";s:51:"Configuration/FlexForms/flexform_eventuserpanel.xml";s:4:"0138";s:30:"Configuration/TCA/Category.php";s:4:"85dd";s:29:"Configuration/TCA/Contact.php";s:4:"5c1d";s:32:"Configuration/TCA/Discipline.php";s:4:"49cc";s:27:"Configuration/TCA/Event.php";s:4:"062d";s:30:"Configuration/TCA/Location.php";s:4:"c62e";s:32:"Configuration/TCA/Subscriber.php";s:4:"1b4e";s:38:"Configuration/TypoScript/constants.txt";s:4:"4020";s:34:"Configuration/TypoScript/setup.txt";s:4:"e3f7";s:26:"Documentation/Includes.txt";s:4:"6d5f";s:23:"Documentation/Index.rst";s:4:"e3ca";s:26:"Documentation/Settings.yml";s:4:"7144";s:43:"Documentation/AdministratorManual/Index.rst";s:4:"ebf1";s:62:"Documentation/Images/KnownProblems/slub-events-php-locales.jpg";s:4:"9747";s:62:"Documentation/Images/UserManual/slub-events-backend-module.jpg";s:4:"7881";s:83:"Documentation/Images/UserManual/slub-events-category-wissensbar-event-list-view.jpg";s:4:"0a44";s:72:"Documentation/Images/UserManual/slub-events-category-wissensbar-view.jpg";s:4:"7ec3";s:79:"Documentation/Images/UserManual/slub-events-error-cannot-find-configuration.jpg";s:4:"cc06";s:57:"Documentation/Images/UserManual/slub-events-list-view.jpg";s:4:"7699";s:65:"Documentation/Images/UserManual/slub-events-subscription-view.jpg";s:4:"ea8f";s:36:"Documentation/Introduction/Index.rst";s:4:"17ae";s:37:"Documentation/KnownProblems/Index.rst";s:4:"d7f7";s:31:"Documentation/Support/Index.rst";s:4:"4ca3";s:35:"Documentation/UsersManual/Index.rst";s:4:"75f0";s:46:"Resources/Private/Backend/Layouts/Default.html";s:4:"0822";s:59:"Resources/Private/Backend/Partials/Category/Properties.html";s:4:"0d3b";s:58:"Resources/Private/Backend/Partials/Contact/Properties.html";s:4:"f704";s:58:"Resources/Private/Backend/Partials/Event/CategoryTree.html";s:4:"26c8";s:56:"Resources/Private/Backend/Partials/Event/DateFromTo.html";s:4:"15a5";s:55:"Resources/Private/Backend/Partials/Event/DateFromTo.txt";s:4:"5c22";s:56:"Resources/Private/Backend/Partials/Event/FormFields.html";s:4:"dff4";s:50:"Resources/Private/Backend/Partials/Event/Item.html";s:4:"6205";s:56:"Resources/Private/Backend/Partials/Event/Properties.html";s:4:"71e8";s:56:"Resources/Private/Backend/Partials/Subscriber/CsvAll.csv";s:4:"11fd";s:61:"Resources/Private/Backend/Partials/Subscriber/FormFields.html";s:4:"5db2";s:58:"Resources/Private/Backend/Partials/Subscriber/ListAll.html";s:4:"8418";s:61:"Resources/Private/Backend/Partials/Subscriber/Properties.html";s:4:"dad3";s:54:"Resources/Private/Backend/Templates/Category/List.html";s:4:"e047";s:54:"Resources/Private/Backend/Templates/Category/Show.html";s:4:"a865";s:53:"Resources/Private/Backend/Templates/Contact/List.html";s:4:"a6b0";s:53:"Resources/Private/Backend/Templates/Contact/Show.html";s:4:"a9a5";s:58:"Resources/Private/Backend/Templates/Email/CancellEvent.csv";s:4:"0446";s:59:"Resources/Private/Backend/Templates/Email/CancellEvent.html";s:4:"9aeb";s:58:"Resources/Private/Backend/Templates/Email/CancellEvent.ics";s:4:"f989";s:61:"Resources/Private/Backend/Templates/Email/DeadlineReached.csv";s:4:"0446";s:62:"Resources/Private/Backend/Templates/Email/DeadlineReached.html";s:4:"c0a5";s:61:"Resources/Private/Backend/Templates/Email/DeadlineReached.ics";s:4:"16d8";s:56:"Resources/Private/Backend/Templates/Email/Invitation.csv";s:4:"0446";s:57:"Resources/Private/Backend/Templates/Email/Invitation.html";s:4:"7c10";s:56:"Resources/Private/Backend/Templates/Email/Invitation.ics";s:4:"16d8";s:59:"Resources/Private/Backend/Templates/Email/OnlineSurvey.html";s:4:"e654";s:56:"Resources/Private/Backend/Templates/Email/Statistics.csv";s:4:"cbe8";s:57:"Resources/Private/Backend/Templates/Email/Statistics.html";s:4:"cc0c";s:53:"Resources/Private/Backend/Templates/Event/BeList.html";s:4:"6a04";s:67:"Resources/Private/Backend/Templates/Subscriber/BeIcsInvitation.html";s:4:"fa42";s:58:"Resources/Private/Backend/Templates/Subscriber/BeList.html";s:4:"94f5";s:66:"Resources/Private/Backend/Templates/Subscriber/BeOnlineSurvey.html";s:4:"b597";s:43:"Resources/Private/Language/de.locallang.xlf";s:4:"31b4";s:46:"Resources/Private/Language/de.locallang_be.xlf";s:4:"1fe6";s:85:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_discipline.xlf";s:4:"0641";s:80:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_event.xlf";s:4:"4fd5";s:83:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_location.xlf";s:4:"13e2";s:85:"Resources/Private/Language/de.locallang_csh_tx_slubevents_domain_model_subscriber.xlf";s:4:"6ef8";s:46:"Resources/Private/Language/de.locallang_db.xlf";s:4:"1e22";s:54:"Resources/Private/Language/de.locallang_slubevents.xlf";s:4:"ad0b";s:40:"Resources/Private/Language/locallang.xlf";s:4:"cbec";s:43:"Resources/Private/Language/locallang_be.xlf";s:4:"f90b";s:80:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_category.xlf";s:4:"d762";s:79:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_contact.xlf";s:4:"410d";s:82:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_discipline.xlf";s:4:"4468";s:77:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_event.xlf";s:4:"ee47";s:80:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_location.xlf";s:4:"f61f";s:82:"Resources/Private/Language/locallang_csh_tx_slubevents_domain_model_subscriber.xlf";s:4:"6204";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"bb96";s:51:"Resources/Private/Language/locallang_slubevents.xlf";s:4:"1eba";s:39:"Resources/Private/Layouts/BeModule.html";s:4:"e940";s:38:"Resources/Private/Layouts/Default.html";s:4:"e856";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"caa7";s:45:"Resources/Private/Partials/Category/Item.html";s:4:"df6a";s:53:"Resources/Private/Partials/Category/ItemCheckbox.html";s:4:"0fe4";s:50:"Resources/Private/Partials/Contact/Properties.html";s:4:"f704";s:55:"Resources/Private/Partials/Discipline/ItemCheckbox.html";s:4:"6cd5";s:48:"Resources/Private/Partials/Event/DateFromTo.html";s:4:"15a5";s:47:"Resources/Private/Partials/Event/DateFromTo.txt";s:4:"5c22";s:48:"Resources/Private/Partials/Event/FormFields.html";s:4:"dff4";s:44:"Resources/Private/Partials/Event/GbItem.html";s:4:"4560";s:42:"Resources/Private/Partials/Event/Item.html";s:4:"c15f";s:53:"Resources/Private/Partials/Subscriber/FormFields.html";s:4:"3f3c";s:55:"Resources/Private/Partials/Subscriber/FormFieldsGb.html";s:4:"8195";s:48:"Resources/Private/Templates/Category/GbList.html";s:4:"ca15";s:46:"Resources/Private/Templates/Category/List.html";s:4:"8d51";s:45:"Resources/Private/Templates/Contact/List.html";s:4:"9ed5";s:52:"Resources/Private/Templates/Email/Maximumreached.csv";s:4:"b2c4";s:53:"Resources/Private/Templates/Email/Maximumreached.html";s:4:"340e";s:52:"Resources/Private/Templates/Email/Maximumreached.ics";s:4:"2365";s:58:"Resources/Private/Templates/Email/Minimumreachedagain.html";s:4:"5261";s:57:"Resources/Private/Templates/Email/Minimumreachedagain.ics";s:4:"f989";s:52:"Resources/Private/Templates/Email/Newsubscriber.html";s:4:"a66f";s:48:"Resources/Private/Templates/Email/Subscribe.html";s:4:"fc91";s:47:"Resources/Private/Templates/Email/Subscribe.ics";s:4:"8379";s:50:"Resources/Private/Templates/Email/Unsubscribe.html";s:4:"3f79";s:49:"Resources/Private/Templates/Email/Unsubscribe.ics";s:4:"f989";s:45:"Resources/Private/Templates/Event/BeList.html";s:4:"8861";s:43:"Resources/Private/Templates/Event/List.html";s:4:"3652";s:48:"Resources/Private/Templates/Event/ListMonth.html";s:4:"e609";s:46:"Resources/Private/Templates/Event/ListOwn.html";s:4:"f93b";s:43:"Resources/Private/Templates/Event/Show.html";s:4:"4d72";s:51:"Resources/Private/Templates/Event/ShowNotFound.html";s:4:"0dcb";s:50:"Resources/Private/Templates/Subscriber/Create.html";s:4:"51cd";s:50:"Resources/Private/Templates/Subscriber/Delete.html";s:4:"ff77";s:57:"Resources/Private/Templates/Subscriber/EventNotFound.html";s:4:"2279";s:47:"Resources/Private/Templates/Subscriber/New.html";s:4:"7dff";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"b78d";s:43:"Resources/Public/Css/slub-event-backend.css";s:4:"093e";s:41:"Resources/Public/Css/slub-event-basic.css";s:4:"9c16";s:48:"Resources/Public/Css/slub-event-fullcalendar.css";s:4:"9048";s:38:"Resources/Public/Css/slub-event-gb.css";s:4:"9ae6";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:62:"Resources/Public/Icons/tx_slubevents_domain_model_category.gif";s:4:"905a";s:61:"Resources/Public/Icons/tx_slubevents_domain_model_contact.gif";s:4:"905a";s:64:"Resources/Public/Icons/tx_slubevents_domain_model_discipline.gif";s:4:"4e5b";s:59:"Resources/Public/Icons/tx_slubevents_domain_model_event.gif";s:4:"905a";s:62:"Resources/Public/Icons/tx_slubevents_domain_model_location.gif";s:4:"905a";s:64:"Resources/Public/Icons/tx_slubevents_domain_model_subscriber.gif";s:4:"905a";s:54:"Resources/Public/Icons/fugue-icons/calendar-import.png";s:4:"d4e0";s:48:"Resources/Public/Icons/fugue-icons/mail-send.png";s:4:"6a8e";s:43:"Resources/Public/Images/knowledgeBaseBG.png";s:4:"3de6";s:48:"Resources/Public/Images/knowledgeBaseBubbles.png";s:4:"97c4";s:41:"Resources/Public/Js/slub-event-backend.js";s:4:"bf6f";s:52:"Resources/Public/Js/slub-events-fullcalendar-init.js";s:4:"e3ac";s:47:"Resources/Public/Js/slub-events-fullcalendar.js";s:4:"aed0";s:60:"Resources/Public/Js/Contrib/Fullcalendar/fullcalendar.min.js";s:4:"93a6";s:48:"Resources/Public/Js/Contrib/Fullcalendar/gcal.js";s:4:"13bf";s:51:"Resources/Public/Js/Contrib/Fullcalendar/lang/de.js";s:4:"652d";s:48:"Resources/Public/Js/Contrib/Moment/moment.min.js";s:4:"c837";s:48:"Tests/Unit/Controller/CategoryControllerTest.php";s:4:"4895";s:47:"Tests/Unit/Controller/ContactControllerTest.php";s:4:"4739";s:45:"Tests/Unit/Controller/EventControllerTest.php";s:4:"8c98";s:48:"Tests/Unit/Controller/LocationControllerTest.php";s:4:"d829";s:50:"Tests/Unit/Controller/SubscriberControllerTest.php";s:4:"7516";s:40:"Tests/Unit/Domain/Model/CategoryTest.php";s:4:"6b46";s:39:"Tests/Unit/Domain/Model/ContactTest.php";s:4:"a80b";s:42:"Tests/Unit/Domain/Model/DisciplineTest.php";s:4:"2076";s:37:"Tests/Unit/Domain/Model/EventTest.php";s:4:"54fa";s:40:"Tests/Unit/Domain/Model/LocationTest.php";s:4:"fb97";s:42:"Tests/Unit/Domain/Model/SubscriberTest.php";s:4:"257f";}',
);

?>
