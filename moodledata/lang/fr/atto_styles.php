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
 * Strings for component 'atto_styles', language 'fr', version '4.0'.
 *
 * @package     atto_styles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config'] = 'Configuration des styles';
$string['config_desc'] = 'Configuration pour les widgets de style pour Atto en format JSON.
<hr />
Par exemple:<br />
{<br />
    "title": "Boîte bleue",<br />
    "type": "block",<br />
    "classes": "box blue"<br />
},{<br />
    "title": "Texte rouge",<br />
    "type": "inline",<br />
    "classes": "red"<br />
}<br />
<hr />
L\'attribut <em>title</em> définit le nom pour le style dans le widget de styles Atto (entrée du menu).<br />
<br />
Un titre supporte aussi le filtre Moodle multilingue (si activé), toutefois des guillemets additionnels doivent être protégés avec une barre oblique inverse.<br />
Veuillez consulter le fichier README pour un exemple.<br />
<hr />
L\'attribut <em>type</em> peut contenir une des deux valeurs suivantes: "block" ou "inline".<br />
<br />
"block" crée une balise div avec les classes données et agira comme un bloc standard de niveau. Ceci s\'applique donc au delà du niveau de l\'élément actuel et pourrait s\'appliquer à plus que le texte actuellement sélectionné.<br />
<br />
"inline" créera une balise span avec les classes données et agira comme un élément standard inline. Ceci s\'appliquera donc seulement au texte sélectionné.
<hr />
L\'attribut <em>classes</em> prend le nom de la classe CSS qui sera appliquée au texte de type block ou inline.<br />
<br />
Plusieurs classes, chacune séparée par une virgule, peuvent être définies pour chaque élément. Elles seront appliquées au texte qu\'il soit de type block ou inline.<br />
<br />
La définition de classes CSS ne fonctionne pas avec ce plugin. Pour cela, vous devrez ajouter vos définitions de classe CSS dans votre thème ou dans les paramètres HTML additionnels de Moodle.
<hr />
Sur les installations de Moodle avec des thèmes basés sur bootstrap (spécialement <em>Boost</em>, <em>More</em> et <em>Clean</em>, vous pouvez aussi créer des styles avec des classes CSS bootstrap au lieu de définir vos propres classes.
<br /><br />
Par exemple:<br />
{<br />
    "title": "Notification de réussite",<br />
    "type": "block",<br />
    "classes": "alert alert-success"<br />
},{<br />
    "title": "Badge d\'information",<br />
    "type": "inline",<br />
    "classes": "badge badge-info"<br />
},{<br />
    "title": "Badge d\'avertissement",<br />
    "type": "inline",<br />
    "classes": "badge badge-warning"<br />
}<br /><br />
Pour plus d\'information sur les badges bootstrap, veuillez visiter les liens suivants de la documentation Bootstrap 2.3 (pour <em>Clean</em> et <em>More</em>):
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Badges et étiquettes Bootstrap</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Alertes Bootstrap</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Classes d\'assistance Bootstrap</a></li>
</ul>
ou dans la documentation de Bootstrap 4 (pour <em>Boost</em>):
<ul>
<li><a href="http://v4-alpha.getbootstrap.com/components/badge/">Badges Bootstrap</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/components/alerts/">Alertes bootstrap</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/utilities/">Utilitaires Bootstrap</a></li>
</ul>';
$string['inlinehint'] = 'Sélectionner d\'abord du texte pour appliquer ce style';
$string['nostyle'] = 'Aucun style';
$string['pluginname'] = 'Styles';
$string['privacy:metadata'] = 'Le plugin atto_styles ne conserve aucune donnée personnelle.';
$string['settings'] = 'Paramétrage des styles';
