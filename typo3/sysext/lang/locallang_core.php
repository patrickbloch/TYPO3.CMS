<?php
/**
 * Core language labels.
 * (Originally found in ->mainLang and ->php3Lang)
 * TYPO3 CVS ID: $Id$
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'labels.openInNewWindow' => 'Open in new window',
		'labels.goBack' => 'Go back',
		'labels.makeShortcut' => 'Create a shortcut to this page?',
		'labels.lockedRecord' => 'The user \'%s\' began to edit this record %s ago.',
		'labels.lockedRecord_content' => 'The user \'%s\' began to edit content on this page %s ago.',
		'labels.showRecords' => 'Show records',
		'labels.path' => 'Path',
		'labels.table' => 'Table',
		'labels.upOneLevel' => 'Up one level',
		'labels.enterSearchString' => 'Search String:',
		'labels.enterSearchLevels' => 'This page|1 level down|2 levels down|3 levels down|4 levels down',
		'labels.noEditPermission' => 'Sorry, you didn\'t have proper permissions to perform this change.',
		'labels.fieldsMissing' => 'There are fields in the form which are not yet correctly filled in.
The fields are marked with a yellow exclamation mark.',
		'labels.fieldsChanged' => 'There are unsaved changes in the form!
Do you want to continue WITHOUT saving?',
		'labels.noRTEfound' => 'Notice: You cannot edit this field since it can only be edited with a Rich Text Editor, but no editor was available or editing with an RTE has been disabled.',
		'labels.showPalettes' => 'Show secondary options (palettes)',
		'labels.showDescriptions' => 'Show field descriptions',
		'labels.disableRTE' => 'Disable Rich Text Editor (RTE)',
		'labels._CONTROL_' => 'Control',
		'labels._PATH_' => 'Path',
		'labels.setFields' => 'Set fields',
		'labels.search' => 'Search',
		'labels.author' => 'Author:',
		'labels.note' => 'Note:',
		'labels.category' => 'Category:',
		'labels.reload' => 'Reload',
		'labels.csv' => 'Download CSV file',
		'labels.clear_cache' => 'Clear cache for this page',
		'labels.no_title' => 'No title',
		'labels.cancel' => 'Cancel',
		'labels.hidden' => 'Hidden',
		'labels.starttime' => 'Start',
		'labels.endtime' => 'End',
		'labels.minutesHoursDaysYears' => ' min| hrs| days| yrs',
		'labels.menu' => 'Menu:',
		'labels.showPage' => 'View webpage',
		'labels.showList' => 'Show record list',
		'labels.days' => 'days',
		'labels.depth_0' => 'This page',
		'labels.depth_1' => '1 level',
		'labels.depth_2' => '2 levels',
		'labels.depth_3' => '3 levels',
		'labels.refresh' => 'Reload the tree from server',
		'labels.temporaryDBmount' => 'Cancel temporary DB mount',
		'labels.refreshList' => 'Reload list from server',
		'labels.close' => 'Close',
		'labels.new' => 'NEW',
		'labels.selected' => 'Selected',
		'labels.items' => 'Items',
		'labels.remove_selected' => 'Remove selected items',
		'labels.move_to_top' => 'Move selected item upwards',
		'labels.browse_file' => 'Browse for files',
		'labels.browse_db' => 'Browse for records',
		'labels.clipInsert_file' => 'Insert %s file(s) from the clipboard',
		'labels.clipInsert_db' => 'Insert %s record(s) from the clipboard',
		'labels.generalOptions' => 'General options:',
		'labels.allTables' => '[All tables]',
		'labels.moreOptions' => 'More options...',
		'labels.noMatchingValue' => 'CURRENT VALUE IS NOT AVAILABLE (%s)',
		'labels.thumbmode_clip' => 'Show Thumbnails on ClipBoard',
		'labels.copymode' => 'Copy items instead of moving them',
		'labels.clipNoEl' => 'No elements',
		'labels.cliptabs' => 'Clipboard #',
		'labels.removeItem' => 'Remove item',
		'TYPO3_Element_Browser' => 'TYPO3 Element Browser',
		'show_item.php.viewItem' => 'View Item',
		'show_item.php.file' => 'File',
		'show_item.php.dimensions' => 'Dimensions',
		'show_item.php.filesize' => 'Size',
		'show_item.php.ftp_area' => 'FTP AREA',
		'db_new.php.pagetitle' => 'New record',
		'db_new.php.after' => 'after',
		'db_new.php.inside' => 'inside',
		'file_upload.php.pagetitle' => 'Upload files',
		'file_upload.php.submit' => 'Upload files',
		'file_upload.php.files' => 'files',
		'file_rename.php.pagetitle' => 'Rename',
		'file_rename.php.submit' => 'Rename',
		'file_edit.php.pagetitle' => 'Edit',
		'file_edit.php.submit' => 'Save',
		'file_edit.php.saveAndClose' => 'Save and Close',
		'file_edit.php.coundNot' => 'This filetype cannot be edited.<br />The file must have an extension like:<br /><br /> <b>%s</b>',
		'file_newfolder.php.pagetitle' => 'New file or folder',
		'file_newfolder.php.submit' => 'Create folders',
		'file_newfolder.php.folders' => 'folders',
		'file_newfolder.php.newfile_submit' => 'Create file',
		'file_newfolder.php.newfile' => 'Create new textfile',
		'file_clipupload.php.warning_head' => 'Upload path error',
		'file_clipupload.php.warning' => 'No upload-folder is found. You should create a TEMP-folder ("_temp_") in the root of one of your mounts first!',
		'mess.redraw' => 'Redrawing the page will discard the current data. Do you want to continue?',
		'mess.delete' => 'Are you sure you want to delete "%s"?',
		'mess.deleteClip' => 'Are you sure you want to delete ALL selected elements (%s) on the clipboard?',
		'mess.refresh_login' => 'Your login has probably expired.
Do you want to refresh it now?',
		'mess.noSelItemForEdit' => 'Please select one or more items in the list before you can edit.',
		'mess.onChangeAlert' => 'This change will affect which fields are available in the form.
Would you like to save now in order to refresh the display?',
		'mess.move_into' => 'Move "%s" into "%s"?',
		'mess.move_after' => 'Move "%s" to after "%s"?',
		'mess.copy_into' => 'Copy "%s" into "%s"?',
		'mess.copy_after' => 'Copy "%s" to after "%s"?',
		'mess.copycb_into' => 'Copy all elements (%s) from the clipboard into "%s"?',
		'mess.copycb_after' => 'Copy all elements (%s) from the clipboard to the position after "%s"?',
		'mess.movecb_into' => 'Move all elements (%s) from the clipboard into "%s"?',
		'mess.movecb_after' => 'Move all elements (%s) from the clipboard to the position after "%s"?',
		'rm.menu' => '[menu]',
		'rm.saveDoc' => 'Save document',
		'rm.saveDocShow' => 'Save document and view page',
		'rm.saveCloseDoc' => 'Save and close document',
		'rm.saveCloseAllDocs' => 'Save and close all documents',
		'rm.saveNewDoc' => 'Save document and create a new one',
		'rm.closeDoc' => 'Close document',
		'rm.closeAllDocs' => 'Close all documents',
		'rm.clearCache_clearCache' => 'Clear cache',
		'rm.clearCache_thisPage' => 'This page',
		'rm.clearCache_pages' => 'Clear Page Cache',
		'rm.clearCache_all' => 'Clear All Cache',
		'rm.clearCache_allTypo3Conf' => 'Clear temp_CACHED',
		'rm.adminFunctions' => 'Admin functions',
		'rm.edit' => 'Edit',
		'rm.delete' => 'Delete',
		'buttons.logout' => 'Logout',
		'buttons.selMenu_modules' => 'MODULES',
		'buttons.clear' => 'Clear',
		'buttons.clipboard' => 'Clipboard',
		'cm.copy' => 'Copy',
		'cm.cut' => 'Cut',
		'cm.view' => 'Show',
		'cm.edit' => 'Edit',
		'cm.new' => 'New',
		'cm.pasteinto' => 'Paste into',
		'cm.pasteafter' => 'Paste after',
		'cm.select' => 'Select',
		'cm.deselect' => 'Deselect',
		'cm.selectto' => 'Select to',
		'cm.deselectto' => 'Deselect to',
		'cm.delete' => 'Delete',
		'cm.hide' => 'Hide',
		'cm.unhide' => 'Unhide',
		'cm.upload' => 'Upload Files',
		'cm.rename' => 'Rename',
		'cm.open' => 'Open',
		'cm.save' => 'Save',
		'cm.unzip' => 'Unzip',
		'cm.info' => 'Info',
		'cm.createnew' => 'Create new',
		'cm.tempMountPoint' => 'Mount as treeroot',
	),
	'dk' => 'EXT',
	'de' => 'EXT',
	'no' => 'EXT',
	'it' => 'EXT',
	'fr' => 'EXT',
	'es' => 'EXT',
	'nl' => 'EXT',
	'cz' => 'EXT',
	'pl' => 'EXT',
	'si' => 'EXT',
	'fi' => 'EXT',
	'tr' => 'EXT',
	'se' => 'EXT',
	'pt' => 'EXT',
	'ru' => 'EXT',
	'ro' => 'EXT',
	'ch' => 'EXT',
	'sk' => 'EXT',
	'lt' => 'EXT',
	'is' => 'EXT',
	'hr' => 'EXT',
	'hu' => 'EXT',
	'gl' => 'EXT',
	'th' => 'EXT',
	'gr' => 'EXT',
	'hk' => 'EXT',
	'eu' => 'EXT',
	'bg' => 'EXT',
	'br' => 'EXT',
	'et' => 'EXT',
	'ar' => 'EXT',
	'he' => 'EXT',
	'ua' => 'EXT',
	'lv' => Array (
		'labels.openInNewWindow' => 'Atvērt jaunajā logā',
		'labels.goBack' => 'Atpakaļ',
		'labels.makeShortcut' => 'Izveidot norādi uz šo lapu?',
		'labels.lockedRecord' => 'Lietotājs \'%s\' sāka labot šo ierakstu %s atpakaļ.',
		'labels.lockedRecord_content' => 'Lietotājs \'%s\' sāka labot saturu šajā lapā %s atpakaļ.',
		'labels.showRecords' => 'Rādīt ierakstus',
		'labels.path' => 'Ceļš',
		'labels.upOneLevel' => 'Vienu līmeni uz augšu',
		'labels.enterSearchString' => 'Meklēt:',
		'labels.enterSearchLevels' => 'Šajā lapā|1 līmenis uz leju|2 līmeņi uz leju|3 līmeņi uz leju|4 līmeņi uz leju',
		'labels.noEditPermission' => 'Atvainojiet, jums nav tiesību veikt šo labojumu.',
		'labels.fieldsMissing' => 'Formā ir lauki, kurus jūs neazpildījāt pareizi. Tie ir atzīmēti ar dzelteno izsaukuma zīmi.',
		'labels.fieldsChanged' => 'Nav saglabātas izmaiņas formā! Vai vēlaties turpināt BEZ saglabāšanas?',
		'labels.showPalettes' => 'Rādīt sekundārās opcijas (paletes)',
		'labels.showDescriptions' => 'Rādīt lauku aprakstus',
		'labels.disableRTE' => 'Aizliegt "Rich Text Editor" (RTE)',
		'labels._CONTROL_' => 'Kontrole',
		'labels._PATH_' => 'Ceļš',
		'labels.setFields' => 'Iestādīt laukus',
		'labels.search' => 'Meklēt',
		'labels.author' => 'Autors:',
		'labels.note' => 'Piezīme:',
		'labels.category' => 'Kategorija:',
		'labels.reload' => 'Pārlādēt',
		'labels.csv' => 'Lejuplādēt CSV failu',
		'labels.clear_cache' => 'Iztīrīt kešu šai lapai',
		'labels.no_title' => 'Nav virsraksta',
		'labels.cancel' => 'Atcelt',
		'labels.hidden' => 'Paslēpts',
		'labels.starttime' => 'Sākums',
		'labels.endtime' => 'Beigas',
		'labels.minutesHoursDaysYears' => 'min.|st.|dienas|gadi',
		'labels.menu' => 'Izvēlne:',
		'labels.showPage' => 'Apskatīt web lapu',
		'labels.showList' => 'Rādīt ierakstu listi',
		'labels.days' => 'dienas',
		'labels.depth_0' => 'Šī lapa',
		'labels.depth_1' => '1 līmenis',
		'labels.depth_2' => '2 līmeņi',
		'labels.depth_3' => '3 līmeņi',
		'labels.refresh' => 'Pārlādēt koku no servera',
		'labels.close' => 'Aizvērt',
		'labels.new' => 'JAUNS',
		'labels.selected' => 'Iezīmēts',
		'labels.items' => 'Objekti',
		'labels.remove_selected' => 'Noņemt iezīmētos objektus',
		'labels.move_to_top' => 'Pārvietot iezīmētos objektus uz augšu',
		'labels.browse_file' => 'Pārlūkot failus',
		'labels.browse_db' => 'Pārlūkot ierakstus',
		'labels.generalOptions' => 'Galvenās opcijas:',
		'labels.allTables' => '[Visas tabulas]',
		'labels.moreOptions' => 'Vaiāk opciju...',
		'labels.noMatchingValue' => 'TEKOŠĀ VĒRTĪBA NAV PIEEJAMA (%s)',
		'labels.thumbmode_clip' => 'Rādīt sīkattēlus starpliktuvē',
		'labels.copymode' => 'Kopēt objektus, nevis pārvietot',
		'labels.clipNoEl' => 'Nav elementu',
		'labels.cliptabs' => 'Starpliktuve nr.',
		'labels.removeItem' => 'Noņemt objektu',
		'TYPO3_Element_Browser' => 'TYPO3 Elementu Pārlūks',
		'show_item.php.viewItem' => 'Apskatīt objektu',
		'show_item.php.file' => 'Fails',
		'show_item.php.dimensions' => 'Izmēri',
		'show_item.php.filesize' => 'Izmērs',
		'show_item.php.ftp_area' => 'FTP APGABALS',
		'db_new.php.pagetitle' => 'Jauns ieraksts',
		'db_new.php.after' => 'pēc',
		'db_new.php.inside' => 'iekš',
		'file_upload.php.pagetitle' => 'Augšuplādēt failu',
		'file_upload.php.submit' => 'Augšuplādēt failus',
		'file_upload.php.files' => 'faili',
		'file_rename.php.pagetitle' => 'Pārsaukt',
		'file_rename.php.submit' => 'Pārsaukt',
		'file_edit.php.pagetitle' => 'Labot',
		'file_edit.php.submit' => 'Saglabāt',
		'file_edit.php.saveAndClose' => 'Saglabāt un aizvērt',
		'file_edit.php.coundNot' => 'Šo faila tipu nevar labot.<br />Faila paplašinājumam jābūt:<br /><br /> <b>%s</b>',
		'file_newfolder.php.pagetitle' => 'Jauns folderis',
		'file_newfolder.php.submit' => 'Izveidot folderi',
		'file_newfolder.php.folders' => 'folderi',
		'file_newfolder.php.newfile_submit' => 'Izveidot failu',
		'file_newfolder.php.newfile' => 'Izveidot jaunu teksta failu',
		'file_clipupload.php.warning_head' => 'Augšupielādes ceļa kļūda',
		'file_clipupload.php.warning' => 'Augšupielādes folderis nav atrasts. Jums vispirms ir jāizveido TEMP-folderis ("_temp_") vienā no jūsu pieonteto folderu saknē!',
		'mess.redraw' => 'Lapas pārzīmēšana pazudinās tekošos datus. Vai vēlaties turpināt?',
		'mess.delete' => 'Vai jūs tiešām gribat dzēst "%s"?',
		'mess.deleteClip' => 'Vai jūs tiešām gribat dzēst VISUS atzīmētos elementus (%s) starpliktuvē?',
		'mess.refresh_login' => 'Jūsu autorizācijas termiņš laikam ir izbeidzies. Vai gribat atjaunot to tagad?',
		'mess.noSelItemForEdit' => 'Lūdzu izvēlieties vienu vai vairāk objektus liste, pirms jūs varat tos labot.',
		'mess.onChangeAlert' => 'Šī izmaiņa ietekmēs to, kādi lauki būs pieejami formā. Vai gribat saglabāt tagad, lai atjaunotu lapu?',
		'mess.move_into' => 'Pārvietot "%s" iekš "%s"?',
		'mess.move_after' => 'Pārvietot "%s" aiz "%s"?',
		'mess.copy_into' => 'Kopēt "%s" iekš "%s"?',
		'mess.copy_after' => 'Kopēt "%s" aiz "%s"?',
		'mess.copycb_into' => 'Kopēt visus elementus (%s) no starpliktuves iekš "%s"?',
		'mess.copycb_after' => 'Kopēt visus elementus (%s) no starpliktuves uz pozīciju pēc "%s"?',
		'mess.movecb_into' => 'Pārvietot visus elementus (%s) no starpliktuves iekš "%s"?',
		'mess.movecb_after' => 'Pārvietot visus elementus (%s) no starpliktuves uz pozīciju pēc "%s"?',
		'rm.menu' => '[izvēlne]',
		'rm.saveDoc' => 'Saglabāt dokumentu',
		'rm.saveDocShow' => 'Saglabāt dokumentu un apskatīt lapu',
		'rm.saveCloseDoc' => 'Saglabāt un aizvērt dokumentu',
		'rm.saveCloseAllDocs' => 'Saglabāt un aizvērt visus dokumentus',
		'rm.saveNewDoc' => 'Saglabāt dokumentu un izveidot jaunu',
		'rm.closeDoc' => 'Aizvērt dokumentu',
		'rm.closeAllDocs' => 'Aizvērt visus dokumentus',
		'rm.clearCache_clearCache' => 'Iztīrīt kešu',
		'rm.clearCache_thisPage' => 'Šīs lapas kešu',
		'rm.clearCache_pages' => 'Iztīrīt lapu kešu',
		'rm.clearCache_all' => 'Iztīrīt visu kešu',
		'rm.clearCache_allTypo3Conf' => 'Iztīrīt kešu typo3conf/',
		'rm.adminFunctions' => 'Darbības',
		'rm.edit' => 'Labot',
		'rm.delete' => 'Dzēst',
		'buttons.logout' => 'Iziet',
		'buttons.clear' => 'Iztīrīt',
		'buttons.clipboard' => 'Starpliktuve',
		'cm.copy' => 'Kopēt',
		'cm.cut' => 'Izgriezt',
		'cm.view' => 'Rādīt',
		'cm.edit' => 'Labot',
		'cm.new' => 'Jauns',
		'cm.pasteinto' => 'Ielīmēt iekš',
		'cm.pasteafter' => 'Ielīmēt pēc',
		'cm.select' => 'Iezīmēt',
		'cm.deselect' => 'Atcelt iezīmēšanu',
		'cm.selectto' => 'Iezīmēt līdz',
		'cm.deselectto' => 'Atcelt iezīmēšanu līdz',
		'cm.delete' => 'Dzēst',
		'cm.hide' => 'Paslēpt',
		'cm.unhide' => 'Parādīt',
		'cm.upload' => 'Augšuplādēt failus',
		'cm.rename' => 'Pārsaukt',
		'cm.open' => 'Atvērt',
		'cm.save' => 'Saglabāt',
		'cm.unzip' => 'Atzipot',
		'cm.info' => 'Informācija',
		'cm.createnew' => 'Izveidot jaunu',
	),
	'jp' => Array (
	),
	'vn' => Array (
	),
);
?>