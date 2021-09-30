<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_quickmail', language 'fr', version '3.11'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['additional_emails'] = 'Adresses électroniques secondaires';
$string['additional_emails_help'] = 'Autres adresses électroniques vers lesquelles vous souhaiteriez envoyer le message (séparez ces adresses par une virgule ou un point virgule). Exemple:

email1@exemple.com, email2@exemple.com';
$string['allowstudents'] = 'Autoriser les étudiants à utiliser Courriel';
$string['alternate'] = 'Adresses secondaires';
$string['alternate_body'] = '<p>
{$a->fullname} a ajouté {$a->address} comme adresse secondaire pour le cours {$a->course}.
</p>

<p>
Ce message a pour but de vérifier la validité de cette adresse, et si le destinataire a les droits nécessaires sur la plateforme.
</p>

<p>
Si vous souhaitez terminer le processus de validation, merci de cliquer sur le lien suivant :<br> {$a->url}.
</p>

<p>
Si le contenu de ce message n\'a aucun sens pour vous, c\'est qu\'il a été envoyé par erreur. Merci d\'ignorer simplement ce message.
</p>

Cordialement.';
$string['alternate_new'] = 'Ajouter des adresses secondaires';
$string['alternate_subject'] = 'Vérification de l\'adresse secondaire';
$string['backup_block_configuration'] = 'Sauvegarde des paramètres de configuration au niveau du bloc Courriel (Tel que [Autoriser les Étudiants à utilisé Courriel])';
$string['backup_history'] = 'Inclure l\'historique Courriel';
$string['body'] = 'Corps';
$string['courseferpa'] = 'Respecte le mode du cours';
$string['downloads'] = 'Nécessite d\'être connecter pour les pièces jointes';
$string['downloads_desc'] = 'Ce paramètre détermine si les pièces jointes sont accessibles uniquement aux utilisateurs Moodle connectés';
$string['drafts'] = 'Voir les brouillons';
$string['eventalternateemailadded'] = 'Adresse secondaire ajoutée';
$string['ferpa'] = 'Mode FERPA';
$string['ferpa_desc'] = 'Permet au système de prendre en compte soit le réglage des groupes du cours, soit en ignorant les réglage des groupes mais en faisant des groupes séparés, soit en ignorant la notion de groupe du cours.
<br>FERPA : Family Educational Rights and Privacy Act';
$string['no_alternates'] = 'Pas d\'adresse secondaire de trouvée pour {$a->fullname}. Poursuivre la création.';
$string['no_drafts'] = 'Vous n\'avez pas de brouillon.';
$string['noferpa'] = 'Pas de respect de groupe';
$string['overwrite_history'] = 'Écraser l\'historique Courriel';
$string['pluginname'] = 'Courriel';
$string['prepend_class'] = 'Nom du cours dans l\'objet';
$string['prepend_class_desc'] = 'Ajoute l\'identification du cours dans l\'objet du message.';
$string['quickmail:addinstance'] = 'Ajouter un nouveau bloc Courriel';
$string['quickmail:allowalternate'] = 'Autoriser les utilisateurs à ajouter une adresse secondaire pour les cours.';
$string['quickmail:canconfig'] = 'Autorise les utilisateurs à configurer l\'instance de Courriel.';
$string['quickmail:cansend'] = 'Autorise les utilisateurs à envoyer des messages par le biais de Courriel.';
$string['quickmail:myaddinstance'] = 'Ajouter un nouveau bloc Courriel à ma page';
$string['receipt'] = 'Recevoir une copie';
$string['receipt_help'] = 'Recevoir une copie du message envoyé';
$string['restore_history'] = 'Restaurer l\'historique Courriel';
$string['save_draft'] = 'Enregistrer le brouillon';
$string['signature'] = 'Signatures';
$string['status'] = 'état';
$string['strictferpa'] = 'Groupes séparés permanent';
$string['subject'] = 'Objet';
$string['title'] = 'Titre';
