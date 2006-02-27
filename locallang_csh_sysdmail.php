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
		'type.details' => 'The Direct mail may be compiled from a page extracted from the page tree of the TYPO3 site: \'TYPO3 Page\', or from a page from another site: \'External URL\'.',
		'from_email.description' => 'Enter the sender email address. (Required)',
		'from_email.details' => 'This email address will appear as the originating address or sender address in the direct mails received by the recipients.',
		'from_name.description' => 'Enter the sender name. (Required)',
		'from_name.details' => 'This name will appear as the name of the author or sender in the direct mails received by the recipients.',
		'replyto_email.description' => 'Enter the email address to which replys are sent. (Optional)',
		'replyto_email.details' => 'If no reply address is specified, the sender email address will be used.',
		'replyto_name.description' => 'Enter the name of the \'Reply To\' email address. (Optional)',
		'replyto_name.details' => 'If no reply name is specified, the sender name will be used.',
		'return_path.description' => 'Enter the return path email address here.',
		'return_path.details' => 'This is the address to which non-deliverable mails will be returned to.
If you put in the marker ###XID### it\'ll be substituted with the unique id of the mail recipient.
Note that if PHP is executing in safe mode, the Direct mail module may not be able to set the return path to a value different than the value defined at the server level.',
		'organisation.description' => 'Enter the name of the sending organization.',
		'organisation.details' => 'The name of the organization will appear in the headers of the mails sent to subscribers.',
		'priority.description' => 'Enter the email delivery priority.',
		'priority.details' => 'The delivery priority will be set in the headers of the mails sent to subscribers.',
		'sendOptions.description' => 'Select the format of mail content.',
		'sendOptions.details' => 'If in doubt, set it to both Plain text and HTML. The messages will then be sent with both formats included, and the recipients are normally able to select their preferred format.',
		'includeMedia.description' => 'Set this option if you want to incorporate images and other media inside the HTML mail content.',
		'includeMedia.details' => 'If the option is set, images and other media are encoded and incorporated into the messages. Sent messages will be heavier to transport.
If the option is not set, images and media are included in HTML content by absolute reference (href) to their location on the site where they reside.',
		'flowedFormat.description' => 'Set this option if you want to use normally flowing text inside the plain text mail content.',
		'flowedFormat.details' => 'If the option is set, plain text mail content will be broken in fixed length lines, as is standard for plain text email content, but so-called flowed format will be used. This will allow client agents that support this format to display the text as normally flowing text. The option is ignored if \'quoted-printable\' is used.',
		'HTMLParams.description' => 'If the Direct mail is of type \'TYPO3 Page\', enter the additional URL parameters used to fetch the HTML content.

If the Direct Mail is of type \'External URL\',enter the complete URL used to fetch the HTML content.',
		'HTMLParams.details' => 'When the Direct mail is of type \'TYPO3 Page\', the specified parameters will be added to the URL used to fetch the HTML content of the direct mail. If in doubt, leave it blank.

When the Direct Mail is of type \'External URL\', this field should contain the complete URL used to fetch the HTML content.',
		'plainParams.description' => 'If the Direct mail is of type \'TYPO3 Page\', enter the additional URL parameters used to fetch the plain text content of the direct mail.

If the Direct Mail is of type \'External URL\',enter the complete URL used to fetch the plain text content.',
		'plainParams.details' => 'When the Direct mail is of type \'TYPO3 Page\', the specified parameters will be added to the URL used to fetch the plain text content of the direct mail. If in doubt, set it either to \'&type=99\' or, when using TemplaVoila, to \'&print=1\'.

When the Direct Mail is of type \'External URL\', this field should contain the complete URL used to fetch the plain text content.',
		'use_domain.description' => 'Optionnally, select a domain that should be used for fetching content from internal TYPO3 pages.',
		'use_domain.details' => 'If a domain is selected, it will also be used in all internal links contained in mail content. If no domain is selected, the domain in use in the backend when the direct mail is compiled will be used to fetch content.',
		'use_rdct.description' => 'Redirect long links found in plain text content.',
		'use_rdct.details' => 'If set, links longer than 76 characters found in plain text content will be redirected: long URL\'s will be substituted with ?RDCT=[md5hash] parameters.',
		'long_link_mode.description' => 'If set and if use_rdct is set, all links in plain text content will be redirected, not only links longer than 76 characters.',
		'authcode_fieldList.description' => 'List of fields used in the computation of the authentication code included in unsubscribe links and jump URL\'s in direct mails.',
	),
	'fr' => Array (
		'.description' => 'Bulletin d\'Envoi cibl�',
		'.details' => 'Un \'Bulletin\' est un bulletin de nouvelles personnalis� envoy� � des abonn�s en format HTML ou texte simple, avec ou sans pi�ces jointes.
Les enregistrements de type \'Bulletin\' sont produits par le module d\'Envoi cibl�.
Un enregistrement de type \'Bulletin\' contient l\'information relative � un bulletin tel que le sujet, l\'exp�diteur, la priorit�, les pi�ces jointes, ainsi que ses caract�ristiques techniques. Cet enregistrement contient de plus le message compil� envoy� aux abonn�s.',
		'type.description' => 'Type de source du bulletin',
		'type.details' => 'Le bulletin peut �tre contruit � partie d\'une page tir�e de l\'arborescence des pages du site TYPO3: \'Page TYPO3\', ou d\'une page tir�e d\'un autre site: \'URL externe\'.',
		'from_email.description' => 'L\'adresse de l\'exp�diteur du message. (Requis)',
		'from_email.details' => 'Cette adresse appara�tra comme adresse d\'origine ou adresse de l\'exp�diteur des bulletins re�us par les destinataires.',
		'from_name.description' => 'Le nom de l\'exp�diteur du message. (Requis)',
		'from_name.details' => 'Ce nom appara�tra comme le nom de l\'auteur ou de l\'exp�diteur des bulletins re�us par les destinataires.',
		'replyto_email.description' => 'L\'adresse �lectronique de r�ponse. (Optionnel)',
		'replyto_email.details' => 'Si aucune adresse de r�ponse n\'est sp�cifi�e, l\'adresse de l\'exp�diteur sera utilis�e.',
		'replyto_name.description' => 'Le nom de l\'adresse de r�ponse. (Optionnel)',
		'replyto_name.details' => 'Si aucun nom n\'est sp�cifi� pour l\'adresse de r�ponse, le nom de l\'exp�diteur sera utilis�.',
		'return_path.description' => 'Adresse de retour.',
		'return_path.details' => 'Il s\'agit the l\'adresse � laquelle seront retourn�s les messages qui ne peuvent pas �tre livr�s.
Si vous utilisez le marqueur ###XID###, il sera substitu� par l\'identification unique du destinataire du message.
Notez que si PHP est ex�cut� en mode s�curitaire (safe mode), le module d\'Envoi cibl� pourrait ne pas �tre en mesure d\'�tablir une adresse de retour diff�rente de l\'adresse de retour �tablie au niveau du serveur.',
		'organisation.description' => 'Nom de l\'organisation �mettrice.',
		'organisation.details' => 'Le nom de l\'organisation appara�tra dans les ent�tes des messages envoy�s aux abonn�s.',
		'priority.description' => 'La priorit� de livraison des mesages envoy�s.',
		'priority.details' => 'La priorit� de livraison sera sp�cifi�e dans les ent�tes des messages de courrier �lectronique envoy�s aux abonn�s.',
		'sendOptions.description' => 'Le format du contenu des messages envoy�s.',
		'sendOptions.details' => 'Dans le doute, sp�cifiez les deux formats: Texte simple et HTML. Les messages envoy�s inclueront alors les deux formats et les destinataires seront normalement en mesure de choisir le format qu\'ils pr�f�rent.',
		'includeMedia.description' => 'Sp�cifiez cette option si vous d�sirez que les images et autres m�dia soient incorpor�s dans le contenu HTML des messages envoy�s.',
		'includeMedia.details' => 'Si l\'option est sp�cifi�e, images et autres m�dia sont encod�s et incorpor�s aux messages. Les messages envoy�s peuvent �tre plus lourds � transporter.
Si l\'option n\'est pas sp�cifi�e, images et autres m�dia sont inclus dans le contenu HTML par r�f�rence (href) absolue � leur localisation sur le site o� ils r�sident.',
		'flowedFormat.description' => 'Sp�cifiez cette option si vous d�sirez que le format sans retour � la ligne soit utilis� dans le contenu texte simple des messages envoy�s.',
		'flowedFormat.details' => 'Si l\'option est sp�cifi�e, le contenu texte simple des messages sera coup� en lignes de longueur fixe, selon les normes habituellement applicables � ce type de contenu, mais le format sans retour � la ligne sera utilis�. Ceci permettra aux agents clients qui supportent ce format de pr�senter le texte sans retours � la ligne artificiels. L\'option est ignor�e si l\'encodage \'quoted-printable\' est utilis�.',
		'HTMLParams.description' => 'Si le bulletin est de type \'Page TYPO3\', param�tres additionnels de l\'URL d\'acquisition du contenu HTML.

Si le bulletin est de type \'URL externe\', URL compl�te d\'acquisition du contenu HTML.',
		'HTMLParams.details' => 'Lorsque le bulletin est de type \'Page TYPO3\', les param�tres sp�cifi�s seront ajout�s � l\'adresse URL utilis�e pour acqu�rir le contenu HTML du bulletin. Dans le doute, laisser cette variable vide.

Lorsque le bulletin est de type \'URL externe\', ce champ doit contenir l\'URL compl�te utilis�e pour acqu�rir le contenu HTML du bulletin.',
		'plainParams.description' => 'Si le bulletin est de type \'Page TYPO3\', param�tres additionnels de l\'URL d\'acquisition du contenu de format texte simple.

Si le bulletin est de type \'URL externe\', URL compl�te d\'acquisition du contenu de format texte simple.',
		'plainParams.details' => 'Lorsque le bulletin est de type \'Page TYPO3\', les param�tres sp�cifi�s seront ajout�s � l\'adresse URL utilis�e pour acqu�rir le contenu de format texte simple du bulletin. Dans le doute, sp�cifiez soit \'&type=99\' ou, si TemplaVoila est utilis�, \'&print=1\'.

Lorsque le bulletin est de type \'URL externe\', ce champ doit contenir l\'URL compl�te utilis�e pour acqu�rir le contenu de format texte simple du bulletin.',
		'use_domain.description' => 'Au besoin, s�lectionnez un domaine qui doit �tre utilis� pour l\'acquisition de contenu � partir de pages TYPO3.',
		'use_domain.details' => 'Lorsqu\'un domaine est sp�cifi� sur un bulletin, il est utilis� pour l\'acquisition de contenu interne ainsi que dans tous les liens internes contenu dans le bulletin. Lorsqu\'aucun domaine n\'est sp�cifi�, le domaine en usage � l\'arri�re-plan de TYPO3 au moment o� le bulletin est assembl� est utilis� pour l\'acquisition de contenu � partir de pages TYPO3.',
		'use_rdct.description' => 'Rediriger les liens longs rep�r�s dans le contenu de format texte simple.',
		'use_rdct.details' => 'Si cette option est activ�e, les liens de plus de 76 characters de lonueur rep�r�s dans le contenu de format texte simple seront redirig�s: les URL\'s longues seront substitu�es par des param�tres de la forme ?RDCT=[md5hash].',
		'long_link_mode.description' => 'Si cette option est activ�e et si l\'option use_rdct est �galement activ�e, tous les liens rep�r�s dans le contenu de format texte simple seront redirig�s, et non pas seulement les liens de plus de 76 caract�res de longueur.',
		'authcode_fieldList.description' => 'Liste des champs utilis�s dans le calcul du code d\'authentification inclus dans les liens de d�sabonnement et dans les URL\'s de saut dans les bulletins.',
	),
);
?>