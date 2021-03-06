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
 * Strings for component 'zoom', language 'fr', version '4.0'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['addtocalendar'] = 'Ajouter au calendrier';
$string['allmeetings'] = 'Toutes les réunions';
$string['allmeetings_desc'] = 'Ce paramètre vous permet de contrôler si un lien vers la page d\'index de l\'activité Zoom s\'affiche ou non au bas de chaque page de présentation de l\'instance d\'activité. Ce paramètre n\'affecte que la présentation du lien sur les pages de présentation de l\'activité Zoom. Même si vous décidez de ne pas afficher le lien à cet endroit, l\'utilisateur peut toujours accéder à la page d\'index de l\'activité Zoom via d\'autres liens dans le cours.';
$string['allmeetings_disable'] = 'Désactiver le lien vers toutes les réunions';
$string['allmeetings_enable'] = 'Activer le lien vers toutes les réunions';
$string['alternative_hosts'] = 'Hôtes alternatifs';
$string['alternative_hosts_desc'] = 'Avec ce paramètre, vous pouvez contrôler si l\'option de choisir des hôtes alternatifs est montrée aux utilisateurs dans les paramètres de l\'instance d\'activité ou non. Deux types de widgets sont disponibles : Un champ de saisie simple qui accepte les adresses électroniques séparées par des virgules. Et un sélecteur d\'utilisateur avec autocomplétion qui permet de sélectionner facilement les utilisateurs qui sont inscrits au cours, ont un compte Zoom et ont un rôle parmi {$a->roles}. Les hôtes alternatifs qui ont pu être définis par l\'enseignant dans Zoom directement, mais qui ne sont pas sélectionnables à partir du sélecteur d\'utilisateur de Moodle, sont toujours affichés sur la page de présentation de l\'activité et sont également préservés lorsqu\'une réunion est mise à jour à partir de Moodle.';
$string['alternative_hosts_disable'] = 'Désactiver l\'option des hôtes alternatifs';
$string['alternative_hosts_help'] = 'L\'option d\'hôte alternatif vous permet de programmer des réunions et de désigner un ou plusieurs autres utilisateurs Zoom pour démarrer la réunion. Ces utilisateurs recevront un e-mail de Zoom les informant qu\'ils ont été ajoutés en tant qu\'hôte alternatif, ainsi qu\'un lien leur permettant de démarrer la réunion. Comme format d\'entrée, veuillez fournir l\'adresse électronique du ou des hôtes alternatifs. Vous pouvez séparer plusieurs adresses électroniques par une virgule (sans espace).';
$string['alternative_hosts_inputfield'] = 'Afficher l\'option des hôtes alternatifs en tant que champ de saisie simple';
$string['alternative_hosts_picker'] = 'Afficher l\'option des hôtes alternatifs en tant que sélecteur d\'utilisateur avec autocomplétion';
$string['alternative_hosts_picker_help'] = 'L\'option d\'hôte alternatif vous permet de programmer des réunions et de désigner un ou plusieurs autres utilisateurs Zoom inscrits à ce cours pour démarrer la réunion également. Ces utilisateurs recevront un e-mail de Zoom les informant qu\'ils ont été ajoutés en tant qu\'hôte alternatif, avec un lien pour démarrer la réunion. Vous pouvez choisir un ou plusieurs hôtes alternatifs en fonction des besoins de votre réunion. Si vous ne trouvez pas un utilisateur particulier dans ce sélecteur d\'utilisateurs, cela signifie que cet utilisateur n\'est pas inscrit à ce cours avec un rôle approprié ou qu\'il ne possède pas de compte éligible sur Zoom.';
$string['alternative_hosts_picker_noneselected'] = 'Aucun hôte alternatif sélectionné';
$string['alternative_hosts_picker_placeholder'] = 'Sélectionner le(s) utilisateur(s)';
$string['apikey'] = 'Clé API Zoom';
$string['apisecret'] = 'Secret API Zoom';
$string['apiurl'] = 'Url API Zoom';
$string['audio_both'] = 'Audio ordinateur et téléphone';
$string['audio_telephony'] = 'Téléphone seulement';
$string['audio_voip'] = 'Audio ordinateur seulement';
$string['audiodefault'] = 'Audio par défaut';
$string['authentication'] = 'Authentification';
$string['cachedef_sessions'] = 'Informations sur une demande de rapport utilisateur Zoom';
$string['cachedef_zoomid'] = 'L\'ID utilisateur Zoom';
$string['cachedef_zoommeetingsecurity'] = 'Paramètres de sécurité des réunions Zoom, y compris le respect des exigences du compte en matière de mot de passe';
$string['calendardescriptionURL'] = 'URL pour participer à la réunion : {$a}.';
$string['calendardescriptionintro'] = '\\nDescription :\\n{\\$a}';
$string['calendariconalt'] = 'Icône du calendrier';
$string['changehost'] = 'Changer d\'hôte';
$string['clickjoin'] = 'Cliquez sur le bouton pour rejoindre la réunion';
$string['connectionfailed'] = 'Échec de connexion :';
$string['connectionok'] = 'Connexion opérationnelle';
$string['connectionsettings'] = 'Paramètres de la connexion';
$string['connectionsettings_desc'] = 'Ces paramètres définissent la manière dont Moodle se connecte à Zoom.';
$string['connectionstatus'] = 'Statut de connexion';
$string['defaultsettings'] = 'Paramètres de Zoom par défaut';
$string['defaultsettings_help'] = 'Ces paramètres définissent les valeurs par défaut pour toutes les nouvelles réunions et webinaires Zoom.';
$string['displayleadtime'] = 'Afficher l\'intervalle de temps avant';
$string['displayleadtime_desc'] = 'Si cette option est activée, l\'intervalle de temps avant la réunion sera affiché aux utilisateurs. Ainsi, les utilisateurs sont informés de la date et de l\'heure auxquelles ils peuvent rejoindre la réunion avant l\'heure de début prévue. Cela peut éviter aux utilisateurs de recharger constamment la page jusqu\'à ce qu\'ils puissent se joindre à la réunion.';
$string['displayleadtime_nohideif'] = 'Remarque : Ce paramètre n\'est pris en compte que si le paramètre « {$a} » a une valeur supérieure à zéro.';
$string['displaypassword'] = 'Afficher le mot de passe';
$string['displaypassword_help'] = 'Si activé, le mot de passe de la réunion sera toujours affiché aux personnes non-hôtes.';
$string['downloadical'] = 'Téléchargez iCal';
$string['downloadical_desc'] = 'Ce paramètre vous permet de contrôler si un lien permettant de télécharger un fichier iCal pour la réunion s\'affiche ou non sur la page de présentation de l\'instance d\'activité. Ce paramètre n\'affecte que la possibilité de télécharger un fichier iCal pour les outils de calendrier tiers. Indépendamment de ce paramètre, l\'activité de réunion Zoom ajoutera une entrée de calendrier dans le calendrier Moodle dès qu\'une date de début de réunion sera définie.';
$string['downloadical_disable'] = 'Désactiver le téléchargement du lien iCal';
$string['downloadical_enable'] = 'Activer le téléchargement du lien iCal';
$string['duration'] = 'Durée (minutes)';
$string['encryptiontype'] = 'Type de cryptage';
$string['encryptiontype_alwaysshow'] = 'Toujours afficher le sélecteur de type de cryptage, que l\'utilisateur puisse utiliser le cryptage de bout en bout ou non.';
$string['encryptiontype_desc'] = 'Avec ce paramètre, vous pouvez contrôler si l\'option de choisir le cryptage de bout en bout plutôt que le cryptage renforcé est montrée aux utilisateurs dans les paramètres de l\'instance d\'activité ou non. Ce paramètre n\'affecte que les paramètres de l\'instance d\'activité Moodle. Même si vous décidez de toujours montrer l\'option, l\'utilisateur aura toujours besoin du cryptage de bout en bout dans Zoom pour finalement activer le cryptage de bout en bout.';
$string['encryptiontype_disable'] = 'Désactiver le sélecteur de type de cryptage';
$string['encryptiontype_showonlyife2epossible'] = 'Afficher le sélecteur de type de cryptage uniquement si l\'utilisateur peut utiliser le cryptage de bout en bout.';
$string['endtime'] = 'Heure de fin';
$string['err_downloadicaldisabled'] = 'Le téléchargement des fichiers iCal des réunions Zoom a été désactivé.';
$string['err_duration_nonpositive'] = 'La durée doit être positive.';
$string['err_duration_too_long'] = 'La durée ne peut excéder 150 heures.';
$string['err_invalid_password'] = 'Le code secret contient des caractères non valides.';
$string['err_long_timeframe'] = 'Le laps de temps demandé est trop long et affiche les résultats du dernier mois dans la plage.';
$string['err_password'] = 'Le code secret peut seulement contenir les caractères suivants : [a-z A-Z 0-9 @ - _ *]. Maximum de 10 caractères.';
$string['err_password_required'] = 'Le code secret est requis.';
$string['err_start_time_past'] = 'La date de début ne peut pas être dans le passé.';
$string['errorwebservice'] = 'Erreur webservice Zoom : {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom a reçu une mauvaise requête : {$a}';
$string['errorwebservice_notfound'] = 'La ressource n\'existe pas';
$string['export'] = 'Export';
$string['externaluser'] = 'Utilisateur externe';
$string['firstjoin'] = 'Intervalle de temps avant la réunion';
$string['firstjoin_desc'] = 'La valeur indiquée précise l\'intervalle de temps avant l\'ouverture d\'une réunion programmée pendant lequel un utilisateur peut rejoindre cette réunion (minutes avant le début).';
$string['getmeetingreports'] = 'Obtenir un rapport des réunions de Zoom.';
$string['globalsettings'] = 'Paramètres globaux';
$string['globalsettings_desc'] = 'Ces paramètres s\'appliquent à l\'ensemble du plugin Zoom.';
$string['host'] = 'Hôte';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/en-us/articles/208220166">Les hôtes alternatifs</a> peuvent démarrer des réunions Zoom et gérer la salle d\'attente.';
$string['indicator:cognitivedepth'] = 'Cognition Zoom';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la capacité à apprendre atteinte par l\'étudiant dans une activité Zoom.';
$string['indicator:socialbreadth'] = 'Participation Zoom';
$string['indicator:socialbreadth_help'] = 'Cet indicateur est basé sur la participation atteinte par l\'étudiant dans une activité Zoom.';
$string['invalid_status'] = 'Statut invalide, vérifiez la base de données.';
$string['invalidscheduleuser'] = 'Vous ne pouvez pas planifier pour l\'utilisateur spécifié.';
$string['join'] = 'Rejoindre';
$string['join_meeting'] = 'Rejoindre la réunion';
$string['joinbeforehost'] = 'Rejoindre la réunion avant l\'hôte';
$string['joinbeforehostenable'] = 'Permettre aux participants de se joindre à tout moment';
$string['joinlink'] = 'Lien pour se joindre';
$string['jointime'] = 'Heure d\'arrivée';
$string['leavetime'] = 'Heure de départ';
$string['licenseonjoin'] = 'Sélectionnez cette option si vous souhaitez que l\'hôte reçoive une licence au démarrage de la réunion, <i>ainsi que</i> lors de la création.';
$string['licensesettings'] = 'Paramètres de licence';
$string['licensesettings_desc'] = 'Ces paramètres définissent la manière dont Moodle gère votre licence Zoom.';
$string['licensesnumber'] = 'Nombre de licences';
$string['lowlicenses'] = 'Si le nombre de vos licences dépasse le nombre requis, chaque fois que vous créez une nouvelle activité, l\'utilisateur se voit attribuer une licence PRO en réduisant le statut d\'un autre utilisateur. L\'option est effective lorsque le nombre de licences PRO actives est supérieur à 5.';
$string['maskparticipantdata'] = 'Masquer les données des participants';
$string['maskparticipantdata_help'] = 'Empêche les données des participants d\'apparaître dans les rapports (utile pour les sites qui masquent les données des participants, par exemple pour HIPAA loi américaine sur la santé et l\'assurance maladie).';
$string['media'] = 'Média';
$string['meeting_finished'] = 'Terminer';
$string['meeting_invite'] = 'Information sur le téléphone/appel entrant';
$string['meeting_invite_hide'] = 'Cacher l\'invitation de la réunion';
$string['meeting_invite_show'] = 'Afficher l\'invitation de la réunion';
$string['meeting_nonexistent_on_zoom'] = 'Inexistant dans Zoom';
$string['meeting_not_started'] = 'Pas commencé';
$string['meeting_started'] = 'En cours';
$string['meeting_time'] = 'Heure de début';
$string['meetingcapacitywarning'] = 'Avertissement sur la capacité de réunion';
$string['meetingcapacitywarning_desc'] = 'Ce paramètre vous permet d\'afficher une notification d\'avertissement si le nombre de participants actifs et inscrits au cours est supérieur à la capacité de réunion de la licence Zoom de l\'organisateur. La notification sera affichée à l\'hôte (et aux hôtes alternatifs) sur la page de présentation de l\'activité Zoom. Elle recommandera à l\'hôte de se tourner vers le propriétaire du compte Zoom pour obtenir une licence Zoom plus importante si nécessaire. Vous pouvez modifier ce message par le biais de la personnalisation de la langue de Moodle.';
$string['meetingcapacitywarning_disable'] = 'Désactiver l\'avertissement de capacité de réunion';
$string['meetingcapacitywarning_enable'] = 'Activer l\'avertissement de capacité de réunion';
$string['meetingcapacitywarningbodyalthost'] = 'La licence Zoom de l\'hôte de cette réunion, {$a->hostname}, a une capacité de <strong>{$a->meetingcapacity} participants</strong>, mais ce cours a <strong><a href="{$a->courseparticipantsl}">{$a->eligiblemeetingparticipants} participants inscrits et actifs</a></strong>.';
$string['meetingcapacitywarningbodyrealhost'] = 'Votre licence Zoom a une capacité de <strong><a href="{$a->zoomprofileurl}" target="_blank">{$a->meetingcapacity} participants à la réunion</a></strong>, mais ce cours a <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} participants inscrits et actifs</a></strong>.';
$string['meetingcapacitywarningcontactalthost'] = 'Veuillez demander à l\'hôte de se tourner vers le propriétaire du compte Zoom pour obtenir une licence Zoom plus importante si tous ces participants au cours doivent rejoindre la réunion.';
$string['meetingcapacitywarningcontactrealhost'] = 'Veuillez vous tourner vers le propriétaire du compte Zoom pour obtenir une licence Zoom plus importante si tous ces participants au cours doivent se joindre à la réunion.';
$string['meetingcapacitywarningheading'] = 'Avertissement sur la capacité de réunion :';
$string['modulename'] = 'Réunion Zoom';
$string['modulename_help'] = 'Zoom est une plate-forme de conférence vidéo et Web qui donne aux utilisateurs autorisés la possibilité d’organiser des réunions en ligne.';
$string['modulenameplural'] = 'Réunions Zoom';
$string['newmeetings'] = 'Nouvelles réunions';
$string['nomeetinginstances'] = 'Aucune session trouvée pour cette réunion.';
$string['noparticipants'] = 'Aucun participant trouvé pour cette session actuellement.';
$string['nosessions'] = 'Aucune session trouvée pour la plage spécifiée.';
$string['nozooms'] = 'Pas de réunion';
$string['nozoomsfound'] = 'Aucune réunion trouvée pour le cours donné.';
$string['off'] = 'Désactivé';
$string['oldmeetings'] = 'Réunions terminées';
$string['on'] = 'Activé';
$string['option_audio'] = 'Options audio';
$string['option_audio_help'] = 'Cette option vous permet d\'autoriser les utilisateurs à appeler en utilisant le téléphone uniquement, l\'audio de l\'ordinateur uniquement ou les deux.';
$string['option_authenticated_users'] = 'Exiger une authentification pour se joindre';
$string['option_authenticated_users_help'] = 'L\'activation de cette option nécessite que tous les participants se connectent avec leur compte zoom autorisé pour pouvoir rejoindre la réunion. Elle <em>ne concerne</em> en aucun cas la connexion à Moodle.';
$string['option_encryption_type'] = 'Cryptage';
$string['option_encryption_type_endtoendencryption'] = 'Cryptage de bout en bout';
$string['option_encryption_type_enhancedencryption'] = 'Cryptage renforcé';
$string['option_encryption_type_help'] = 'Avec cette option, vous contrôlez le niveau de cryptage et de confidentialité de cette réunion. Le « cryptage renforcé » signifie que la clé de cryptage est stockée dans le cloud Zoom. Le « cryptage de bout en bout » signifie que la clé de cryptage est stockée sur votre appareil local et que personne ne peut obtenir votre clé de cryptage, pas même Zoom. Veuillez noter que lorsque vous activez le cryptage de bout en bout, plusieurs fonctionnalités ne seront pas disponibles dans la réunion - (Voir les détails dans la documentation Zoom (https://support.zoom.us/hc/en-us/articles/360048660871)).';
$string['option_host_video'] = 'Vidéo hôte';
$string['option_host_video_help'] = 'Si vous activez cette option, la vidéo de l\'hôte sera activée lorsqu\'il rejoindra la réunion. Même si vous choisissez de désactiver cette option, l\'hôte aura la possibilité de lancer sa vidéo.';
$string['option_jbh'] = 'Rejoindre avant l\'hôte';
$string['option_jbh_help'] = 'L\'activation de cette option permet aux participants de se joindre à la réunion avant que l\'hôte ne le fasse ou lorsque l\'hôte ne peut pas y assister. Cette option s\'exclut mutuellement avec l\'option « Salle d\'attente », de sorte que la sélection de l\'une désactive l\'autre.';
$string['option_mute_upon_entry'] = 'Mise en sourdine des participants à l\'entrée';
$string['option_mute_upon_entry_help'] = 'Si vous activez cette option, tous les participants seront automatiquement mis en muet lorsqu\'ils se joindront à la réunion. Les participants peuvent rétablir le son après avoir rejoint la réunion.';
$string['option_participants_video'] = 'Vidéo des participants';
$string['option_participants_video_help'] = 'Si vous activez cette option, la vidéo des participants sera activée lorsqu\'ils rejoindront la réunion. Même si vous choisissez de la désactiver, les participants auront la possibilité de lancer leur vidéo.';
$string['option_proxyhost'] = 'Utiliser un proxy';
$string['option_proxyhost_desc'] = 'Le proxy défini ici comme \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\' est utilisé uniquement pour communiquer avec Zoom. Laissez vide pour utiliser les paramètres de proxy par défaut de Moodle. Vous ne devez le définir que si vous ne souhaitez pas définir de proxy global dans Moodle.';
$string['option_waiting_room'] = 'Salle d\'attente';
$string['option_waiting_room_help'] = 'L\'activation de cette option permet à l\'hôte de contrôler le moment où un participant se joint à la réunion. Cette option s\'exclut mutuellement avec l\'option « Rejoindre avant l\'hôte », de sorte que la sélection de l\'une désactive l\'autre.';
$string['participantdatanotavailable'] = 'Détails indisponibles';
$string['participantdatanotavailable_help'] = 'Les données des participants ne sont pas disponibles pour cette session Zoom (par exemple, en raison de la conformité HIPAA).';
$string['participants'] = 'Participants';
$string['password'] = 'Code secret';
$string['password_allowed_char'] = 'Le code d\'accès ne peut contenir que les caractères suivants : [a-z A-Z 0-9 @ - _ *].';
$string['password_consecutive'] = 'Maximum de {$a} caractères consécutifs (abcd, 1111, 1234, etc.).';
$string['password_length'] = 'Minimu de {$a} caractère(s).';
$string['password_letter'] = 'Le code d\'accès doit au moins 1 lettre.';
$string['password_lower_upper'] = 'Le code d\'accès doit comprendre des caractères minuscules et majuscules.';
$string['password_max_length'] = 'Maximum de 10 caractères.';
$string['password_number'] = 'Le code d\'accès doit contenir au moins 1 chiffre.';
$string['password_only_numeric'] = 'Le code d\'accès ne peut contenir que des chiffres et aucun autre caractère.';
$string['password_special'] = 'Le code d\'accès doit comporter au moins 1 caractère spécial (@-_*).';
$string['passwordprotected'] = 'Protégé par code secret';
$string['pluginadministration'] = 'Gérer réunion Zoom';
$string['pluginname'] = 'Réunion Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'La table de base de données qui stocke des informations sur chaque instance de réunion.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Le nom de la réunion à laquelle l\'utilisateur a assisté.';
$string['privacy:metadata:zoom_meeting_participants'] = 'La table de base de données qui enregistre des informations sur les participants à la réunion.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Le temps de présence du participant à la réunion';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'L\'heure à laquelle le participant a rejoint la réunion';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'L\'heure à laquelle le participant a quitté la réunion';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Le nom du participant';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'L\'adresse de courriel du participant';
$string['recreatesuccessful'] = 'Réunion recréée avec succès';
$string['recurringmeeting'] = '';
$string['recurringmeeting_help'] = 'En activant cette option, la réunion devient une réunion récurrente sans date ni heure de fin. Il est alors possible d\'y accéder à tout moment.';
$string['recurringmeetingexplanation'] = 'La réunion n\'a pas de date ou d\'heure de fin.';
$string['recurringmeetinglong'] = 'Réunion périodique (réunion sans date ou heure de fin)';
$string['recurringmeetingthisis'] = 'Il s\'agit d\'une réunion récurrente';
$string['recycleonjoin'] = 'Recycler la licence lors de l\'adhésion';
$string['redefinelicenses'] = 'Redéfinir les licences';
$string['refreshreports'] = 'Rafraîchir les rapports de session';
$string['report'] = 'Rapports';
$string['reportapicalls'] = 'Rapporter les appels API épuisés';
$string['requirepasscode'] = 'Nécessite le mot de passe de la réunion';
$string['requirepasscode_help'] = 'Si vous activez cette option, l\'hôte devra définir un code d\'accès pour la réunion. Les participants qui se joignent à la réunion devront le saisir avant de se joindre à la réunion. Les participants qui se joignent à la réunion depuis l\'activité Moodle n\'ont pas besoin de saisir ce code.';
$string['resetapicalls'] = 'Réinitialiser le nombre d\'appels API disponibles';
$string['schedule'] = 'Planification';
$string['schedulefor'] = 'Planifier réunion pour';
$string['schedulefor_help'] = 'Vous pouvez programmer des réunions au nom d\'un autre utilisateur. Comme condition préalable, cet utilisateur doit vous avoir attribué le privilège de planification dans Zoom. L\'utilisateur sélectionné sera l\'hôte de la réunion et sera celui dont la licence Zoom sera utilisée pour la réunion.';
$string['scheduleforself'] = 'Vous-même';
$string['schedulingprivilege'] = 'Privilège de planification';
$string['schedulingprivilege_desc'] = 'Avec ce paramètre, vous pouvez contrôler si l\'option de privilège de planification est montrée aux utilisateurs dans les paramètres de l\'instance d\'activité ou non. Ce paramètre n\'affecte que les paramètres de l\'instance d\'activité Moodle. Même si vous décidez d\'afficher l\'option, l\'utilisateur devra toujours obtenir le privilège de planification accordé par un autre utilisateur dans Zoom pour finalement planifier une réunion pour cet autre utilisateur.';
$string['schedulingprivilege_disable'] = 'Désactiver l\'option de privilège de planification';
$string['schedulingprivilege_enable'] = 'Activer l\'option de privilège de planification';
$string['search:activity'] = 'Zoom - informations sur l\'activité';
$string['security'] = 'Sécurité';
$string['sessions'] = 'Sessions';
$string['sessionsreport'] = 'Rapport des sessions';
$string['setpasscode'] = 'Définir le mot de passe';
$string['start'] = 'Commencer';
$string['start_meeting'] = 'Démarrer la réunion';
$string['start_time'] = 'Quand';
$string['starthostjoins'] = 'Démarrer la vidéo lorsque l\'hôte est en ligne';
$string['startpartjoins'] = 'Lancer la vidéo lorsque le participant est en ligne';
$string['starttime'] = 'Heure de début';
$string['status'] = 'Statut';
$string['supplementaryfeaturessettings'] = 'Paramètres des fonctions supplémentaires';
$string['supplementaryfeaturessettings_desc'] = 'Ces paramètres contrôlent si et comment les fonctionnalités supplémentaires de Zoom sont fournies aux utilisateurs.';
$string['title'] = 'Titre';
$string['topic'] = 'Sujet';
$string['unavailable'] = 'Vous ne pouvez pas vous joindre pour le moment.';
$string['unavailablefinished'] = 'La réunion est déjà terminée.';
$string['unavailablefirstjoin'] = 'Vous pouvez rejoindre, au plus tôt, {$a->mins} minutes avant l\'heure de début prévue.';
$string['unavailablenotstartedyet'] = 'La réunion n\'a pas encore commencé.';
$string['updatemeetings'] = 'Mettre à jour les paramètres de réunion à partir de Zoom';
$string['usepersonalmeeting'] = 'Utiliser un identifiant de réunion personnel {$a}';
$string['waitingroom'] = 'Salle d\'attente';
$string['waitingroomenable'] = 'Activer la salle d\'attente';
$string['webinar'] = 'Webinaire';
$string['webinar_already_false'] = '<p><b> Ce module était déjà défini en tant que réunion, et non webinaire. Vous ne pouvez pas modifier ce paramètre après avoir créé la réunion. </b></p>';
$string['webinar_already_true'] = '<p><b> Ce module était déjà défini en tant que webinaire, et non réunion. Vous ne pouvez pas modifier ce paramètre après avoir créé le webinaire. </b></p>';
$string['webinar_alwaysshow'] = 'Toujours afficher l\'option webinaire, que l\'utilisateur ait ou non une licence pour organiser des webinaires.';
$string['webinar_desc'] = 'Avec ce paramètre, vous pouvez contrôler si l\'option de créer un webinaire est montrée aux utilisateurs lors de la création d\'une réunion ou non. Ce paramètre n\'affecte que les paramètres de l\'instance de l\'activité Moodle. Même si vous décidez de toujours montrer l\'option, l\'utilisateur aura toujours besoin d\'une licence valide pour les webinaires pour finalement organiser un webinaire.';
$string['webinar_disable'] = 'Désactiver les webinaires';
$string['webinar_help'] = 'Les webinaires offrent aux hôtes un contrôle et une flexibilité accrus pour organiser des réunions avec un public plus large. Cette option est uniquement disponible pour les comptes Zoom pré-autorisés.';
$string['webinar_showonlyiflicense'] = 'Afficher l\'option webinaire uniquement si l\'utilisateur dispose d\'une licence pour organiser des webinaires';
$string['webinarthisis'] = 'Il s\'agit d\'un webinaire';
$string['zoom:addinstance'] = 'Ajouter une nouvelle réunion Zoom';
$string['zoom:eligiblealternativehost'] = 'Sélectionnable comme hôte alternatif dans les réunions Zoom';
$string['zoom:refreshsessions'] = 'Rafraîchir les rapports de réunion Zoom';
$string['zoom:view'] = 'Afficher les réunions Zoom';
$string['zoomerr'] = 'Une erreur est survenue avec Zoom.';
$string['zoomerr_alternativehostusernotfound'] = 'L\'utilisateur {$a} n\'a pas été trouvé sur Zoom.';
$string['zoomerr_apikey_missing'] = 'Clé de l\'API Zoom introuvable';
$string['zoomerr_apilimit'] = 'La limite d\'utilisation quotidienne de cette API a été atteinte. Réessayez à {$a}';
$string['zoomerr_apisecret_missing'] = 'Secret API Zoom introuvable';
$string['zoomerr_id_missing'] = 'Vous devez spécifier un ID de course_module ou un ID d\'instance.';
$string['zoomerr_licensesnumber_missing'] = 'Paramètre de Zoom maximum trouvé mais paramètre de numéro de licence introuvable';
$string['zoomerr_maxretries'] = '{$a->maxretries} tentatives pour passer l\'appel, mais l\'appel a échoué : {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Cette réunion est introuvable sur Zoom. Vous pouvez <a href="{$a-> recreate}"> la recréer ici</a> ou <a href="{$a->delete}"> la supprimer complètement</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Cette réunion est introuvable sur Zoom. Veuillez contacter l\'hôte de la réunion si vous avez des questions.';
$string['zoomerr_usernotfound'] = 'Impossible de trouver votre compte sur Zoom. Si vous utilisez Zoom pour la première fois, vous devez activer votre compte en vous connectant à Zoom <a href="{$a}" target="_blank">{$a}</a>. Une fois que vous avez activé votre compte Zoom, rechargez cette page et continuez la configuration de votre réunion. Sinon, assurez-vous que votre adresse de courriel sur Zoom correspond à votre courriel sur ce système.';
$string['zoomurl'] = 'URL de la page d\'accueil Zoom';
