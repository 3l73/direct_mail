<?php
/**
 * Default  TCA_DESCR for "sys_dmail_group"
 *
 * @package TYPO3
 * @subpackage tx_directmail
 * @version $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'.description' => 'A group of recipients of direct mails or, mailing list',
		'.details' => 'Direct mail groups are used by the Direct mail module to send newsletters to a group of recipients.
A Direct mail group may be compiled either from individual addresses, or from all Address/Website User/Website User Group records within a page or branch, or from the result of an SQL query, or perhaps from other Direct mail groups.',
		'_.seeAlso' => 'sys_dmail, sys_dmail_category',
	),
	'default' => Array (
		'.description' => 'Liste de distribution d\'envoi cibl�',
		'.details' => 'Les listes de distribution sont utilis�es dans le cadre du module d\'Envoi cibl� pour envoyer des bulletins � des groupes de destinataines ou d\'abonn�s.
Une liste de distribution peut �tre compil�e � partir d\'adresses individuelles, ou � partir de tous les enregistrements de type Adresse, Utilisateur de site ou Groupe d\'utilisateur de site d\'une page ou d\'une arborescence, ou � partir du r�sultat d\'une requ�te SQL, ou encore � partir d\'autre listes de distribution.',
		'_.seeAlso' => 'sys_dmail, sys_dmail_category',
	),
);
?>