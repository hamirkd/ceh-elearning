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
 * Strings for component 'qtype_coderunner', language 'fr', version '3.11'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['SHOW'] = 'Afficher';
$string['aborted'] = 'Le test a été interrompu à cause d\'une erreur.';
$string['addingcoderunner'] = 'Ajout d\'une question CodeRunner';
$string['advanced_customisation'] = 'Personnalisation avancée';
$string['allok'] = 'Tous les tests ont été réussis !';
$string['allowattachments'] = 'Documents joints autorisés';
$string['answer'] = 'Réponse';
$string['answerbox_group'] = 'Réponse';
$string['answerboxlines'] = 'Lignes';
$string['answerpreload'] = 'Réponse pré-remplie';
$string['answerpreload_help'] = 'Le texte indiqué ici apparaîtra dans le cadre réponse de l\'étudiant.';
$string['answerprompt'] = 'Réponse :';
$string['answerrequired'] = 'Veuillez fournir une réponse non vide';
$string['answertooshort'] = 'Réponse trop courte. Elle doit comporter au minimum {$a} caractères.';
$string['asolutionis'] = 'Solution de l\'auteur de la question :';
$string['atleastonetest'] = 'Vous devez au moins fournir un test type pour cette question.';
$string['attachmentoptions'] = 'Options pour les documents joints (expérimental)';
$string['attachmentsoptional'] = 'Les documents joints sont optionnels';
$string['attachmentsrequired'] = 'Requiert des documents joints';
$string['attachmentsrequired_help'] = 'Cette option spécifie le nombre minimum de documents joints requis pour qu\'une réponse soit évaluée.';
$string['bad_dotdotdot'] = 'Mauvais usage de « ... ». Doit se trouver à la fin, après deux pénalités croissantes numériques';
$string['bad_new_prototype_name'] = 'Nom illégal du nouveau prototype : déjà utilisé';
$string['badcputime'] = 'Le temps limite de CPU doit rester vide ou être un entier plus grand que zéro';
$string['badfilenamesregex'] = 'Expression régulière non valide';
$string['badfiles'] = 'Nom(s) de fichier non permis : {$a}';
$string['badmemlimit'] = 'La taille mémoire limite doit rester vide ou être un entier non négatif';
$string['badquestion'] = 'La question comporte une erreur';
$string['bulktestallincontext'] = 'Tout tester';
$string['coderunner'] = 'Code du programme';
$string['coderunner_install_testsuite_failures'] = 'Tests ayant échoué';
$string['coderunner_install_testsuite_intro'] = 'Cette page vous permet de tester si les questions CodeRunner avec des exemples de réponse fonctionnent correctement.';
$string['coderunner_install_testsuite_noanswer'] = 'Questions sans exemple de réponse';
$string['coderunner_question_type'] = 'Type de question CodeRunner :';
$string['coderunnercategories'] = 'Catégories avec des questions CodeRunner';
$string['coderunnersettings'] = 'Réglages CodeRunner';
$string['coderunnersummary'] = 'La réponse est le code d\'un programme dont l\'exécution sur les données de tests détermine l\'exactitude.';
$string['coderunnertype'] = 'Type de question';
$string['coderunnertype_help'] = 'Choisir le langage de programmation et le type de question. Une fois le type de question choisi, les détails peuvent être consultés ci-dessous.';
$string['customisation'] = 'Personnalisation';
$string['customisationcontrols'] = 'Personnalisation';
$string['default_penalty_regime'] = 'Régime de pénalités par défaut';
$string['empty_new_prototype_name'] = 'Le nouveau type de question ne peut pas être vide';
$string['emptypenaltyregime'] = 'Le régime de pénalités doit être défini (depuis la version 3.1)';
$string['expected'] = 'Sortie attendue';
$string['expectedcolhdr'] = 'Résultat attendu';
$string['exportthisquestion'] = 'Exporter cette question';
$string['failedhidden'] = 'Votre code a échoué dans un ou plusieurs tests cachés.';
$string['failedntests'] = '{$a->numerrors} test(s) en échec';
$string['forexample'] = 'Par exemple';
$string['gotcolhdr'] = 'Résultat obtenu';
$string['hidden'] = 'Caché';
$string['hidedifferences'] = 'Cacher les différences';
$string['inputcolhdr'] = 'Entrée';
$string['languages'] = 'Langages';
$string['languageselectlabel'] = 'Langage';
$string['noerrorsallowed'] = 'Votre code doit réussir tous les tests pour gagner des points.  Recommencer.';
$string['penaltyregime'] = '(régime de pénalités : {$a} %)';
$string['penaltyregimelabel'] = 'Régime de pénalité :';
$string['pluginnameadding'] = 'Ajout d\'une question CodeRunner';
$string['pluginnameediting'] = 'Modification d\'une question CodeRunner';
$string['precheck_examples'] = 'Exemples';
$string['questioncheckboxes'] = 'Personnalisation';
$string['questionloaderror'] = 'Le chargement de la question a échoué';
$string['questionpreview'] = 'Prévisualisation de la question';
$string['questiontype'] = 'Type de question';
$string['questiontype_required'] = 'Vous devez choisir un type de question';
$string['questiontypedetails'] = 'Détails de la question';
$string['regexgrader'] = 'Expression régulière';
$string['replacedollarscount'] = 'La catégorie contient {$a} questions CodeRunner';
$string['reset'] = 'Réinitialiser la réponse';
$string['resethover'] = 'Annuler les modifications et réinitialiser la zone réponse';
$string['resultcolumnheader'] = 'Résultat';
$string['resultcolumns'] = 'Colonnes des résultats';
$string['sandboxparams'] = 'Paramètres';
$string['seethisquestioninthequestionbank'] = 'Voir cette question dans la banque de questions';
$string['showdifferences'] = 'Montrer les différences';
$string['stdin'] = 'Entrée standard';
$string['syntax_errors'] = 'Erreur(s) de syntaxe';
