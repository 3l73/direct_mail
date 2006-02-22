<?php
/**
 * Default  TCA_DESCR for "sys_dmail_category"
 *
 * @package TYPO3
 * @subpackage tx_directmail
 * @version $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'.description' => 'Direct mail category',
		'.details' => 'Direct mail categories are used to classify content elements by subject so that direct mails may be personalized.
Direct mail categories may be assigned to content elements in pages that are used to build direct mails.
Subscribers may also subscribe to direct mail categories of interest to them.
When sending direct mails, the Direct mail module uses this information to personalize the email message sent to each subscriber.',
		'_.seeAlso' => 'sys_dmail, sys_dmail_group',
	),
	'fr' => Array (
		'.description' => 'Rubrique de contenu',
		'.details' => 'Les rubriques de contenu sont utilis�es pour classifier les �l�ments de contenu par sujet de mani�re � ce que les bulletins puissent �tre personnalis�s.
Des rubriques de contenu peuvent �tre attribu�es aux �l�ments de contenu des pages utilis�es pour construire les bulletins.
Les abonn�s peuvent aussi s\'abonner � des rubriques de contenu selon leurs domaines d\'int�r�t.
Lors d\'un envoi, le module d\'Envoi cibl� utilise ces informations pour personnaliser le message �lectronique envoy� � chaque abonn�.',
	),

);
?>