<?php
/**
 * Default  TCA_DESCR for "sys_dmail"
 *
 * @package TYPO3
 * @subpackage tx_directmail
 * @version $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'.description' => 'Direct mail',
		'.details' => 'A \'Direct mail\' is a highly customized and personalized newsletter sent to subscribers either as HTML or Plain text, with or without attachments.
\'Direct mail\' records are produced by the \|Direct mail\' module.
A \'Direct mail\' record contains information about a newsletter such as subject, sender, priority, attachments and whether HTML or Plain text content is allowed. Furthermore, it also holds the compiled mail content which is sent to the subscribers.',
		'_.seeAlso' => 'sys_dmail_group, sys_dmail_category',
		'type.description' => 'Type of source of the Direct mail',
		'type.details' => 'The Direct mail may be compiled from a page extracted from the page tree of the TYPO3 site, or from a page from another site: and External URL.',
	),
	'fr' => Array (
		'.description' => 'Bulletin d\'Envoi cibl�',
		'.details' => 'Un \'Bulletin\' est un bulletin de nouvelles personnalis� envoy� � des abonn�s en format HTML ou texte simple, avec ou sans pi�ces jointes.
Les enregistrements de type \'Bulletin\' sont produits par le module d\'Envoi cibl�.
Un enregistrement de type \'Bulletin\' contient l\'information relative � un bulletin tel que le sujet, l\'exp�diteur, la priorit�, les pi�ces jointes, ainsi que ses caract�ristiques techniques. Cet enregistrement contient de plus le message compil� envoy� aux abonn�s.',
		'type.description' => 'Type de source du bulletin',
		'type.details' => 'Le bulletin peut �tre contruit � partie d\'une page tir�e de l\'arborescence des pages du site TYPO3, ou d\'une page tir�e d\'un autre site: une URL externe.',
	),
);
?>