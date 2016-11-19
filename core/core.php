<?php

/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <moi@remijean.fr>
 * @copyright Copyright (C) 2008-2016, Rémi Jean
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

class common {

	public static $demo = false;
	public static $language = [];
	public static $coreModule = [
		'config',
		'page',
		'sitemap',
		'theme',
		'user'
	];
	private $data;
	private $defaultData = [
		'config' => [
			'analyticsId' => '',
			'autoBackup' => false,
			'cookieConsent' => true,
			'favicon' => 'favicon.ico',
			'footerText' => '',
			'homePageId' => 'accueil',
			'language' => '',
			'metaDescription' => 'Description',
			'social' => [
				'facebookId' => 'Zwii',
				'googleplusId' => '',
				'instagramId' => '',
				'pinterestId' => '',
				'twitterId' => 'Zwii',
				'youtubeId' => ''
			],
			'title' => 'Nom du site'
		],
		'page' => [
			'accueil' => [
				'content' => '<p>Trois utilisateurs de test (identifiant / mot de passe) :</p><ul><li>administrator / password</li><li>moderator / password</li><li>member / password</li></ul>',
				'hideName' => false,
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 1,
				'targetBlank' => false,
				'title' => 'Accueil'
			],
			'exemple' => [
				'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque cursus ipsum vitae posuere. Morbi vel arcu eget massa varius pretium. Aliquam pretium ante quis odio vestibulum, in laoreet ligula tincidunt. In non elementum ante, non vulputate urna. Donec tempor at metus eget pharetra. Aliquam laoreet sapien quis ligula fringilla sodales auctor ut elit. Vestibulum pellentesque magna ut condimentum feugiat. Curabitur mattis molestie nunc nec porta. Nulla et tincidunt leo. In hac habitasse platea dictumst.</p><p>Integer sit amet varius nisl, in euismod est. Suspendisse mollis varius tellus nec fermentum. Nam id risus erat. Nunc rutrum, dui non scelerisque commodo, sapien purus luctus eros, in maximus nunc sem quis urna. Nam vitae ornare arcu, at viverra est. Praesent tincidunt accumsan tristique. In elementum, nibh non convallis semper, mauris eros consequat dui, vel mattis ante quam in leo. Aenean sed turpis ultrices, dignissim ipsum a, maximus dolor. Nunc sodales sollicitudin ex id consectetur. Nam at nulla velit.</p><p>Pellentesque lacus tellus, tristique volutpat scelerisque id, pharetra nec leo. Ut finibus tempor risus, sit amet laoreet turpis maximus a. Morbi tempor, tortor at dictum facilisis, ipsum enim molestie odio, eu congue ex dolor dictum purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate neque ac lectus lacinia viverra. Donec vulputate cursus purus, sed volutpat nisl ornare cursus. In nec metus aliquam, vehicula nibh eu, volutpat ex. Nullam nisi mauris, iaculis posuere interdum vitae, dignissim ac est. Ut non erat diam. Pellentesque id tempus metus. Praesent sem urna, viverra sit amet elit at, vulputate imperdiet ligula. Duis porttitor quis tellus sit amet aliquet. In venenatis odio enim, vel facilisis mauris tempus vel.</p><p>Nulla et convallis ligula. Etiam ut pharetra arcu. Sed mollis magna consectetur sapien eleifend ullamcorper. Praesent posuere arcu quis tempor dictum. Nullam hendrerit molestie risus et pulvinar. Curabitur in orci ut quam porta dictum. Phasellus orci arcu, accumsan vitae dapibus ut, vestibulum dignissim tellus. Ut iaculis in urna ac vestibulum. Ut euismod blandit nunc, interdum varius ex finibus quis. Vivamus tempor porttitor viverra. Mauris efficitur neque faucibus tellus viverra rhoncus.</p>',
				'hideName' => false,
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 2,
				'targetBlank' => false,
				'title' => 'Exemple'
			]
		],
		'module' => [

		],
		'user' => [
			'administrator' => [
				'name' => 'Administrator',
				'password' => '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',
				'rank' => 3
			],
			'moderator' => [
				'name' => 'Moderator',
				'password' => '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',
				'rank' => 2
			],
			'member' => [
				'name' => 'Member',
				'password' => '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',
				'rank' => 1
			]
		],
		'theme' => [
			'body' => [
				'backgroundColor' => 'rgba(232, 232, 232, 1)',
				'image' => '',
				'imageAttachment' => 'scroll',
				'imageRepeat' => 'no-repeat',
				'imagePosition' => 'top center',
				'imageSize' => 'auto'
			],
			'button' => [
				'backgroundColor' => 'rgba(71, 123, 184, 1)',
			],
			'footer' => [
				'backgroundColor' => 'rgba(255, 255, 255, 1)',
				'copyrightAlign' => 'right',
				'height' => '10px',
				'position' => 'site',
				'socialsAlign' => 'left',
				'textAlign' => 'right'
			],
			'header' => [
				'backgroundColor' => 'rgba(255, 255, 255, 1)',
				'font' => 'Oswald',
				'height' => '150px',
				'image' => '',
				'imagePosition' => 'center center',
				'imageRepeat' => 'no-repeat',
				'position' => 'site',
				'textAlign' => 'center',
				'textColor' => 'rgba(85, 85, 85, 1)'
			],
			'link' => [
				'textColor' => 'rgba(71, 123, 184, 1)',
			],
			'menu' => [
				'backgroundColor' => 'rgba(71, 123, 184, 1)',
				'height' => '15px 10px',
				'position' => 'site',
				'textAlign' => 'left',
			],
			'site' => [
				'width' => '1170px'
			],
			'text' => [
				'font' => 'Open+Sans'
			],
			'title' => [
				'font' => 'Oswald',
				'textColor' => 'rgba(71, 123, 184, 1)'
			]
		]
	];
	private $hierarchy = [];
	private $input = [
		'_POST' => [],
		'_GET' => [],
		'_COOKIE' => []
	];
	public static $outputContent = '';
	public static $outputDisplay = self::DISPLAY_LAYOUT;
	public static $outputMetaDescription = '';
	public static $outputMetaTitle = '';
	public static $outputScript = '';
	public static $outputStyle = '';
	public static $outputTitle = '';
	public static $outputVendor = [
		'jquery',
		// 'jquery-ui', Désactivé par défaut mais disponible
		'normalize',
		// Ne pas déplacer les librairies ou placer de nouvelles librairies avant les librairies ci-dessus
		'lity',
		// 'responsive-filemanager', Désactivé par défaut mais disponible
		// 'tinymce', Désactivé par défaut mais disponible
		'zwiico'
	];
	private $url;

	const RANK_VISITOR = 0;
	const RANK_MEMBER = 1;
	const RANK_MODERATOR = 2;
	const RANK_ADMIN = 3;
	const ZWII_VERSION = '8.0.0';
	const DISPLAY_LAYOUT = 0;
	const DISPLAY_JSON = 1;

	/**
	 * Constructeur commun
	 */
	public function __construct() {
		// Supprime les données en mode démo
		if(self::$demo AND file_exists('site/data/data.json') AND filemtime('site/data/data.json') + 600 < time()) {
			@unlink('site/data/data.json');
		}
		// Génère le fichier de donnée
		if(file_exists('site/data/data.json') === false) {
			$this->setData([$this->defaultData]);
			$this->saveData();
		}
		// Import des données
		if(empty($this->data)) {
			$this->setData([json_decode(file_get_contents('site/data/data.json'), true)]);
		}
		// Construit la liste des pages parentes/enfants
		if(empty($this->hierarchy)) {
			$pages = helper::arrayCollumn($this->getData(['page']), 'position', 'SORT_ASC');
			foreach($pages as $pageId => $pagePosition) {
				// Page enfant
				if($parentId = $this->getData(['page', $pageId, 'parentPageId'])) {
					if(array_key_exists($pageId, $this->hierarchy) === false) {
						$this->hierarchy[$pageId] = [];
					}
					$this->hierarchy[$parentId][] = $pageId;
				}
				// Page parente (si pas déjà déclarée par une page enfant)
				elseif(array_key_exists($pageId, $this->hierarchy) === false){
					$this->hierarchy[$pageId] = [];
				}
			}
		}
		// Construit l'url
		if(empty($this->url)) {
			$this->url = $_SERVER['QUERY_STRING'];
		}
		// Extraction des données http
		if(isset($_POST)) {
			$this->input['_POST'] = $_POST;
		}
		if(isset($_GET)) {
			$this->input['_GET'] = $_GET;
		}
		if(isset($_COOKIE)) {
			$this->input['_COOKIE'] = $_COOKIE;
		}
		$this->setData([json_decode(file_get_contents('site/data/data.json'), true)]);
	}

	/**
	 * Supprime des données
	 * @param array $keys Clé(s) des données
	 */
	public function deleteData($keys) {
		switch(count($keys)) {
			case 1 :
				unset($this->data[$keys[0]]);
				break;
			case 2:
				unset($this->data[$keys[0]][$keys[1]]);
				break;
			case 3:
				unset($this->data[$keys[0]][$keys[1]][$keys[2]]);
				break;
			case 4:
				unset($this->data[$keys[0]][$keys[1]][$keys[2]][$keys[3]]);
				break;
		}
	}

	/**
	 * Accède aux données
	 * @param array $keys Clé(s) des données
	 * @return mixed
	 */
	public function getData($keys = null) {
		// Retourne l'ensemble des données
		if($keys === null) {
			return $this->data;
		}
		// Décent dans les niveaux de la variable $data
		$data = $this->data;
		foreach($keys as $key) {
			// Si aucune donnée n'existe retourne null
			if(empty($data[$key])) {
				return null;
			}
			// Sinon décent dans les niveaux
			else {
				$data = $data[$key];
			}
		}
		// Retourne les données
		return $data;
	}

	/**
	 * Accède à la liste des pages parentes et de leurs enfants ou aux enfants d'une page parente
	 * @param int $parentId Id de la page parente
	 * @return array
	 */
	public function getHierarchy($parentId = null) {
		// Enfants d'un parent
		if($parentId) {
			if(array_key_exists($parentId, $this->hierarchy)) {
				return $this->hierarchy[$parentId];
			}
			else {
				return [];
			}
		}
		// Parents et leurs enfants
		else {
			return $this->hierarchy;
		}
	}

	/**
	 * Accède à une valeur des variables http (ordre de recherche en l'absence de type : POST, GET, COOKIE)
	 * @param mixed $key Clé de la valeur
	 * @param mixed $type Type de la valeur
	 * @param mixed $filter Filtre à appliquer à la valeur
	 * @return mixed
	 */
	public function getInput($key, $type = null, $filter = helper::FILTER_STRING) {
		// Cherche et retourne la valeur demandée dans un type précis
		if($type AND isset($this->input[$type][$key])) {
			return helper::filter($this->input[$type][$key], $filter);
		}
		// Cherche et retourne la valeur demandée
		foreach($this->input as $type => $values) {
			if(array_key_exists($key, $values)) {
				return helper::filter($this->input[$type][$key], $filter);
			}
		}
		// Sinon retourne null
		return null;
	}

	/**
	 * Accède à une partie l'url ou à l'url complète
	 * @param int $key Clé de l'url
	 * @return string|null
	 */
	public function getUrl($key = null) {
		// Url complète
		if($key === null) {
			return $this->url;
		}
		// Une partie de l'url
		else {
			$url = explode('/', $this->url);
			return isset($url[$key]) ? $url[$key] : null;
		}
	}

	/**
	 * Check qu'une valeur est transmise par la méthode _POST
	 * @return bool
	 */
	public function isPost() {
		return empty($this->input['_POST']) === false;
	}

	/**
	 * Enregistre les données
	 */
	public function saveData() {
		if(empty(template::$notices)) {
			file_put_contents('site/data/data.json', json_encode($this->getData()));
		}
	}

	/**
	 * Insert des données
	 * @param array $keys Clé(s) des données
	 */
	public function setData($keys) {
		switch(count($keys)) {
			case 1:
				$this->data = $keys[0];
				break;
			case 2:
				$this->data[$keys[0]] = $keys[1];
				break;
			case 3:
				$this->data[$keys[0]][$keys[1]] = $keys[2];
				break;
			case 4:
				$this->data[$keys[0]][$keys[1]][$keys[2]] = $keys[3];
				break;
			case 5:
				$this->data[$keys[0]][$keys[1]][$keys[2]][$keys[3]] = $keys[4];
				break;
		}
	}

}

class core extends common {

	/**
	 * Constructeur du coeur
	 */
	public function __construct() {
		// Hérite de la méthode __construct() parente
		parent::__construct();
		// Supprime les fichiers temporaires
		$it = new DirectoryIterator('core/tmp/');
		foreach($it as $file) {
			if($file->isFile() AND $file->getBasename() !== '.gitkeep' AND $file->getMTime() + 86400 < time()) {
				@unlink($file->getPathname());
			}
		}
		// Crée le fichier de personnalisation
		if(file_exists('site/data/' . md5(json_encode($this->getData(['theme']))) . '.css') === false) {
			// Import des polices de caractères
			$css = '@import url("https://fonts.googleapis.com/css?family=' . $this->getData(['theme', 'text', 'font']) . '|' . $this->getData(['theme', 'title', 'font']) . '|' . $this->getData(['theme', 'header', 'font']) . '");';
			// Fond du site
			$colors = helper::colorVariants($this->getData(['theme', 'body', 'backgroundColor']));
			$css .= 'body{background-color:' . $colors['normal'] . ';font-family:"' . str_replace('+', ' ', $this->getData(['theme', 'text', 'font'])) . '",sans-serif}';
			if($themeBodyImage = $this->getData(['theme', 'body', 'image'])) {
				$css .= 'body{background-image:url("../file/' . $themeBodyImage . '");background-position:' . $this->getData(['theme', 'body', 'imagePosition']) . ';background-attachment:' . $this->getData(['theme', 'body', 'imageAttachment']) . ';background-size:' . $this->getData(['theme', 'body', 'imageSize']) . ';background-repeat:' . $this->getData(['theme', 'body', 'imageRepeat']) . '}';
			}
			// Site
			$css .= '.container{max-width:' . $this->getData(['theme', 'site', 'width']) . '}';
			$css .= '#site{border-radius:' . $this->getData(['theme', 'site', 'radius']) . ';box-shadow:' . $this->getData(['theme', 'site', 'shadow']) . ' #3C3C3C}';
			$colors = helper::colorVariants($this->getData(['theme', 'button', 'backgroundColor']));
			$css .= '.button,input[type=\'submit\'],pagination a,input[type=\'checkbox\']:checked + label:before,input[type=\'radio\']:checked + label:before,.helpContent{background-color:' . $colors['normal'] . ';color:' . $colors['text'] . '}';
			$css .= '.tabTitle.current,.helpButton span{color:' . $colors['normal'] . '}';
			$css .= 'input[type=\'text\']:hover,input[type=\'password\']:hover,.inputFile:hover,select:hover,textarea:hover{border: 1px solid ' . $colors['normal'] . '}';
			$css .= '.button:hover,input[type=\'submit\']:hover,.pagination a:hover,input[type=\'checkbox\']:not(:active):checked:hover + label:before,input[type=\'checkbox\']:active + label:before,input[type=\'radio\']:checked:hover + label:before,input[type=\'radio\']:not(:checked):active + label:before{background-color:' . $colors['darken'] . ';color:' . $colors['text'] . '}';
			$css .= '.helpButton span:hover{color:' . $colors['darken'] . '}';
			$css .= '.button:active,input[type=\'submit\']:active,.pagination a:active{background-color:' . $colors['veryDarken'] . ';color:' . $colors['text'] . '}';
			$colors = helper::colorVariants($this->getData(['theme', 'link', 'textColor']));
			$css .= 'a{color:' . $colors['normal'] . '}';
			$css .= 'a:hover{color:' . $colors['darken'] . '}';
			$css .= 'a:active{color:' . $colors['veryDarken'] . '}';
			$colors = helper::colorVariants($this->getData(['theme', 'title', 'textColor']));
			$css .= 'h1,h2,h3,h4,h5,h6{color:' . $colors['normal'] . ';font-family:"' . str_replace('+', ' ', $this->getData(['theme', 'title', 'font'])) . '",sans-serif}';
			// Bannière
			$colors = helper::colorVariants($this->getData(['theme', 'header', 'backgroundColor']));
			$css .= 'header{background-color:' . $colors['normal'] . ';height:' . $this->getData(['theme', 'header', 'height']) . ';line-height:' . $this->getData(['theme', 'header', 'height']) . ';text-align:' . $this->getData(['theme', 'header', 'textAlign']) . '}';
			if($themeHeaderImage = $this->getData(['theme', 'header', 'image'])) {
				$css .= 'header{background-image:url("../file/' . $themeHeaderImage . '");background-position:' . $this->getData(['theme', 'header', 'imagePosition']) . ';background-repeat:' . $this->getData(['theme', 'header', 'imageRepeat']) . '}';
			}
			$colors = helper::colorVariants($this->getData(['theme', 'header', 'textColor']));
			$css .= 'header h1{color:' . $colors['normal'] . ';font-family:"' . str_replace('+', ' ', $this->getData(['theme', 'header', 'font'])) . '",sans-serif}';
			// Menu
			$colors = helper::colorVariants($this->getData(['theme', 'menu', 'backgroundColor']));
			$css .= 'nav{background-color:' . $colors['normal'] . '}';
			$css .= 'nav a{color:' . $colors['text'] . '}';
			$css .= 'nav a:hover{color:' . $colors['text'] . ';background-color:' . $colors['darken'] . '}';
			$css .= 'nav a.target,nav a:active{color:' . $colors['text'] . ';background-color:' . $colors['veryDarken'] . '}';
			$css .= '#menu{text-align:' . $this->getData(['theme', 'menu', 'textAlign']) . '}';
			$css .= '#menu a{padding:' . $this->getData(['theme', 'menu', 'height']) . '}';
			// Bas de page
			$colors = helper::colorVariants($this->getData(['theme', 'footer', 'backgroundColor']));
			$css .= 'footer{background-color:' . $colors['normal'] . ';color:' . $colors['text'] . '}';
			$css .= 'footer > div{margin:' . $this->getData(['theme', 'footer', 'height']) . ' 0}';
			$css .= '#socials{text-align:' . $this->getData(['theme', 'footer', 'socialsAlign']) . '}';
			$css .= '#footerText{text-align:' . $this->getData(['theme', 'footer', 'textAlign']) . '}';
			$css .= '#copyright{text-align:' . $this->getData(['theme', 'footer', 'copyrightAlign']) . '}';
			// Enregistre la personnalisation
			file_put_contents('site/data/' . md5(json_encode($this->getData(['theme']))) . '.css', $css);
		}
		// Importe les fichiers de langue
		$language = 'core/lang/' . $this->getData(['config', 'language']);
		if(is_file($language)) {
			self::$language = json_decode(file_get_contents($language), true);
		}
		$language = 'module/' . $this->getData(['page', $this->getUrl(0), 'module']) . '/lang/' . $this->getData(['config', 'language']);
		if(is_file($language)) {
			self::$language = array_merge(self::$language, json_decode(file_get_contents($language), true));
		}
	}

	/**
	 * Auto-chargement des classes
	 * @param string $className Nom de la classe à charger
	 */
	public static function autoload($className) {
		$classPath = 'module/' . $className . '/' . $className . '.php';
		if(is_readable($classPath)) {
			require $classPath;
		}
	}

	/**
	 * Routage des modules
	 */
	public function router() {
		// Importe la page
		$moduleId = $this->getUrl(0) ? $this->getUrl(0) : $this->getData(['config', 'homePageId']);
		if($this->getData(['page', $moduleId]) !== null) {
			self::$outputTitle = $this->getData(['page', $moduleId, 'title']);
			self::$outputContent = $this->getData(['page', $moduleId, 'content']);
			self::$outputMetaTitle = $this->getData(['page', $moduleId, 'metaTitle']);
			self::$outputMetaDescription = $this->getData(['page', $moduleId, 'metaDescription']);
			$moduleId = $this->getData(['page', $moduleId, 'moduleId']);
		}
		// Importe le module
		if($moduleId) {
			// Check l'existence du module
			if(class_exists($moduleId)) {
				$module = new $moduleId;
				$action = $this->getUrl(1) ? $this->getUrl(1) : 'index';
				// Check l'existence de l'action
				if(array_key_exists($action, $module::$actions)) {
					// Check le rang de l'utilisateur
					if(
						$module::$actions[$action] === 0
						OR (
							$this->getData(['user', $this->getInput('ZWII_USER_ID', '_COOKIE')])
							AND $this->getData(['user', $this->getInput('ZWII_USER_ID', '_COOKIE'), 'password']) === $this->getInput('ZWII_USER_PASSWORD', '_COOKIE')
							AND $this->getData(['user', $this->getInput('ZWII_USER_ID', '_COOKIE'), 'rank']) >= $module::$actions[$action]
						)
					) {
						$output = $module->$action();
						if(is_array($output)) {
							// Contenu du module
							if(array_key_exists('view', $output)) {
								// CSS
								$stylePath = 'module/' . $moduleId . '/view/' . $action . '/' . $action . '.css';
								if(file_exists($stylePath)) {
									self::$outputStyle = file_get_contents($stylePath);
								}
								// JS
								$scriptPath = 'module/' . $moduleId . '/view/' . $action . '/' . $action . '.js.php';
								if(file_exists($scriptPath)) {
									ob_start();
									include $scriptPath;
									self::$outputScript .= ob_get_clean();
								}
								// Vue
								$viewPath = 'module/' . $moduleId . '/view/' . $action . '/' . $action . '.php';
								if(file_exists($viewPath)) {
									ob_start();
									include $viewPath;
									self::$outputContent .= ob_get_clean();
								}
							}
							// Librairies
							if(array_key_exists('vendor', $output)) {
								self::$outputVendor = array_merge(self::$outputVendor, $output['vendor']);
							}
							// Titre
							if(array_key_exists('title', $output)) {
								self::$outputTitle = helper::translate($output['title']);
							}
							// En l'absence de notice
							if(empty(template::$notices)) {
								// Notification
								if(array_key_exists('notification', $output)) {
									$state = array_key_exists('state', $output) ? (bool) $output['state'] : false;
									$_SESSION[$state ? 'ZWII_NOTIFICATION_SUCCESS' : 'ZWII_NOTIFICATION_ERROR'] = $output['notification'];
								}
								// Redirection
								if(array_key_exists('redirect', $output)) {
									http_response_code(301);
									header('Location:' . helper::baseUrl() . $output['redirect']);
									exit();
								}
							}
						}
					}
					// Connexion
					else {
						http_response_code(301);
						header('Location:' . helper::baseUrl() . 'user/login');
						exit();
					}
				}
			}
		}
		// Erreur 404
		if(empty(self::$outputContent)) {
			http_response_code(404);
			self::$outputTitle = helper::translate('Erreur 404');
			self::$outputContent = '<p>' . helper::translate('Page introuvable !') . '</p>';
		}
		// Choix du type d'affichage
		switch(self::$outputDisplay) {
			// Layout
			case self::DISPLAY_LAYOUT:
				if(empty(self::$outputMetaTitle)) {
					self::$outputMetaTitle = self::$outputTitle . ' - ' . $this->getData(['config', 'title']);
				}
				if(empty(self::$outputMetaDescription)) {
					self::$outputMetaDescription = $this->getData(['config', 'metaDescription']);
				}
				require 'core/layout.php';
				break;
			// JSON
			case self::DISPLAY_JSON:
				echo json_encode(self::$outputContent);
				break;
		}
	}

}

class helper {

	/** Statut de l'URL rewriting (pour éviter de lire le contenu du fichier .htaccess à chaque self::baseUrl()) */
	private static $rewriteStatus = null;

	/** Filtres personnalisés */
	const FILTER_PASSWORD = 'FILTER_SANITIZE_PASSWORD';
	const FILTER_BOOLEAN = 'FILTER_SANITIZE_BOOLEAN';
	const FILTER_URL = 'FILTER_SANITIZE_URL'; // N'utilise pas FILTER_SANITIZE_URL de PHP qui est trop efficace
	const FILTER_URL_STRICT = 'FILTER_SANITIZE_URL_STRICT'; // Supprime les "&", "?" et "/" (utile pour filtrer une partie d'URL, ne pas utiliser pour filtrer une URL complète)
	const FILTER_STRING = FILTER_SANITIZE_STRING;
	const FILTER_EMAIL = FILTER_SANITIZE_EMAIL;
	const FILTER_FLOAT = FILTER_SANITIZE_NUMBER_FLOAT;
	const FILTER_INT = FILTER_SANITIZE_NUMBER_INT;

	/**
	 * Retourne les valeurs d'une colonne du tableau de données
	 * @param array $array Tableau cible
	 * @param string $column Colonne à extraire
	 * @param string $sort Type de tri à appliquer au tableau (SORT_ASC, SORT_DESC, ou null)
	 * @return array
	 */
	public static function arrayCollumn($array, $column, $sort = null) {
		$newArray = array_map(function($element) use($column) {
			return $element[$column];
		}, $array);
		switch($sort) {
			case 'SORT_ASC':
				asort($newArray);
				break;
			case 'SORT_DESC':
				arsort($newArray);
				break;
		}
		return $newArray;
	}

	/**
	 * Retourne l'URL de base du site
	 * @param bool $queryString Affiche ou non le point d'interrogation
	 * @param bool $host Affiche ou non l'host
	 * @return string
	 */
	public static function baseUrl($queryString = true, $host = true) {
		$currentPath = $_SERVER['PHP_SELF'];
		$pathInfo = pathinfo($currentPath);
		$hostName = $_SERVER['HTTP_HOST'];
		$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https://' ? 'https://' : 'http://';
		return ($host ? $protocol . $hostName : '') . rtrim($pathInfo['dirname'], ' /') . '/' . (($queryString AND helper::checkRewrite() === false) ? '?' : '');
	}

	/**
	 * Check que le module d'URL rewriting est activé sur le serveur
	 * @return bool
	 */
	public static function checkServerModRewrite() {
		// Check si l'URL rewriting est activée
		if(function_exists('apache_get_modules') AND in_array('mod_rewrite', apache_get_modules())) {
			return true;
		}
		// Check si l'URL rewriting est activée (si la fonction apache_get_modules() n'existe pas)
		if(function_exists('phpinfo') AND strpos(ini_get('disable_functions'), 'phpinfo') === false) {
			ob_start();
			phpinfo(8);
			$phpinfo = ob_get_clean();
			if(strpos($phpinfo, 'mod_rewrite') !== false) {
				return true;
			}
		}
		// l'URL rewriting n'est pas prise en charge
		return false;
	}

	/**
	 * Check le statut de l'URL rewriting
	 * @return bool
	 */
	public static function checkRewrite() {
		if(self::$rewriteStatus === null) {
			// Ouvre et scinde le fichier .htaccess
			$htaccess = explode('# URL rewriting', file_get_contents('.htaccess'));
			// Retourne un boolean en fonction du contenu de la partie réservée à l'URL rewriting
			self::$rewriteStatus = empty($htaccess[1]) === false;
		}
		return self::$rewriteStatus;
	}

	/** Check la version de Zwii */
	public static function checkZwiiVersion() {
		return trim(@file_get_contents('http://zwiicms.com/version') === common::ZWII_VERSION);
	}

	/**
	 * Génère des variations d'une couleur
	 * @param string $rgba Code rgba de la couleur
	 * @return array
	 */
	public static function colorVariants($rgba) {
		preg_match('#\(+(.*)\)+#', $rgba, $matches);
		$rgba = explode(', ', $matches[1]);
		return [
			'normal' => 'rgba(' . $rgba[0] . ',' . $rgba[1] . ',' . $rgba[2] . ',' . $rgba[3] . ')',
			'darken' => 'rgba(' . max(0, $rgba[0] - 20) . ',' . max(0, $rgba[1] - 20) . ',' . max(0, $rgba[2] - 20) . ',' . $rgba[3] . ')',
			'veryDarken' => 'rgba(' . max(0, $rgba[0] - 25) . ',' . max(0, $rgba[1] - 25) . ',' . max(0, $rgba[2] - 25) . ',' . $rgba[3] . ')',
			'text' => self::relativeLuminanceW3C($rgba) > .22 ? "inherit" : "white"
		];
	}

	/**
	 * Supprime un cookie
	 * @param string $cookieKey Clé du cookie à supprimer
	 */
	public static function deleteCookie($cookieKey) {
		unset($_COOKIE[$cookieKey]);
		setcookie($cookieKey, '', time() - 3600);
	}

	/**
	 * Filtre une chaîne en fonction d'un tableau de données
	 * @param string $text Chaîne à filtrer
	 * @param int|string $filter Type de filtre à appliquer
	 * @return string
	 */
	public static function filter($text, $filter) {
		$search = '€,$,£,á,à,â,ä,ã,å,ç,é,è,ê,ë,í,ì,î,ï,ñ,ó,ò,ô,ö,õ,ú,ù,û,ü,ý,ÿ, ,¨,\',",’,;';
		$replace = 'e,s,l,a,a,a,a,a,a,c,e,e,e,e,i,i,i,i,n,o,o,o,o,o,u,u,u,u,y,y,-,-,-,-,-,-';
		switch($filter) {
			case self::FILTER_PASSWORD:
				$text = sha1($text);
				break;
			case self::FILTER_BOOLEAN:
				$text = (bool)$text;
				break;
			case self::FILTER_URL:
				$text = str_replace(explode(',', $search), explode(',', $replace), mb_strtolower($text, 'UTF-8'));
				break;
			case self::FILTER_URL_STRICT:
				$text = str_replace(explode(',', $search . ',?,&,/'), explode(',', $replace . ',-,-,-'), mb_strtolower($text, 'UTF-8'));
				break;
			case self::FILTER_INT:
				$text = filter_var($text, $filter);
				$text = (int)$text;
				break;
			case self::FILTER_FLOAT:
				$text = filter_var($text, $filter);
				$text = (float)$text;
				break;
			default:
				$text = filter_var($text, $filter);
		}
		return get_magic_quotes_gpc() ? stripslashes($text) : $text;
	}

	/**
	 * Incrémente une clé en fonction des clés ou des valeurs d'un tableau
	 * @param mixed $key Clé à incrémenter
	 * @param array $array Tableau à vérifier
	 * @return string
	 */
	public static function increment($key, $array) {
		// Pas besoin d'incrémenter si la clef n'existe pas
		if(empty($array)) {
			return $key;
		}
		// Incrémente la clef
		else {
			// Si la clef est numérique elle est incrémentée
			if(is_numeric($key)) {
				$newKey = $key;
				while(array_key_exists($newKey, $array) OR in_array($newKey, $array)) {
					$newKey++;
				}
			}
			// Sinon l'incrémentation est ajoutée après la clef
			else {
				$i = 2;
				$newKey = $key;
				while(array_key_exists($newKey, $array) OR in_array($newKey, $array)) {
					$newKey = $key . '-' . $i;
					$i++;
				}
			}
			return $newKey;
		}
	}

	/**
	 * Envoi un mail
	 * @param string $from Expéditeur
	 * @param string $to Destinataire
	 * @param string $subject Sujet
	 * @param string $message Message
	 * @return bool
	 */
	public static function mail($from, $to, $subject, $message) {
		// Retour chariot différent pour les adresses Microsoft
		$n = preg_match("#^[a-z0-9._-]+@(hotmail|live|msn|outlook).[a-z]{2,4}$#", $to) ? "\n" : "\r\n";
		// Définition du séparateur
		$boundary = '-----=' . md5(rand());
		// Création du template
		$html = '<html><head></head><body>' . nl2br($message) . '</body></html>';
		$txt = strip_tags($html);
		// Définition du header
		$header = 'Reply-To: ' . $to . $n;
		if($from) {
			$header .= 'From: ' . $from . $n;
		}
		else {
			$header .= 'From: ' . helper::translate('Votre site Zwii') . ' <no-reply@' . $_SERVER['SERVER_NAME'] . '>' . $n;
		}
		$header .= 'MIME-Version: 1.0' . $n;
		$header .= 'Content-Type: multipart/alternative;' . $n . ' boundary="' . $boundary . '"' . $n;
		// Message au format texte
		$message .= $n . '--' . $boundary . $n;
		$message .= 'Content-Type: text/plain; charset="utf-8"' . $n;
		$message .= 'Content-Transfer-Encoding: 8bit' . $n;
		$message .= $n . $txt . $n;
		// Message au format HTML
		$message .= $n . '--' . $boundary . $n;
		$message .= 'Content-Type: text/html; charset="utf-8"' . $n;
		$message .= 'Content-Transfer-Encoding: 8bit' . $n;
		$message .= $n . $html . $n;
		// Fermeture des séparateurs
		$message .= $n . '--' . $boundary . '--' . $n;
		$message .= $n . '--' . $boundary . '--' . $n;
		// Accents dans le sujet d'un mail
		$subject = mb_encode_mimeheader($subject,'UTF-8', 'Q', $n);
		// Envoi du mail
		return @mail($to, $subject, $message, $header);
	}

	/**
	 * Minimise du css
	 * @param string $css Css à minimiser
	 * @return string
	 */
	public static function minifyCss($css) {
		// Supprime les commentaires
		$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
		// Supprime les tabulations, espaces, nouvelles lignes, etc...
		$css = str_replace(["\r\n", "\r", "\n" ,"\t", ' ', ' ', ' '], '', $css);
		$css = preg_replace(['(( )+{)', '({( )+)'], '{', $css);
		$css = preg_replace(['(( )+})', '(}( )+)', '(;( )*})'], '}', $css);
		$css = preg_replace(['(;( )+)', '(( )+;)'], ';', $css);
		// Retourne le css minifié
		return $css;
	}

	/**
	 * Minimise du js
	 * @param string $js Js à minimiser
	 * @return string
	 */
	public static function minifyJs($js) {
		// Supprime les commentaires
		$js = preg_replace('/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|\s*(?<![\:\=])\/\/.*)/', '', $js);
		// Supprime les tabulations, espaces, nouvelles lignes, etc...
		$js = str_replace(["\r\n", "\r", "\t", "\n", ' ', ' ', ' '], '', $js);
		$js = preg_replace(['(( )+\))', '(\)( )+)'], ')', $js);
		// Retourne le js minifié
		return $js;
	}

	/**
	 * Crée un système de pagination (retourne un tableau contenant les informations sur la pagination (first, last, pages))
	 * @param array $array Tableau de donnée à utiliser
	 * @param string $url URL à utiliser, la dernière partie doit correspondre au numéro de page, par défaut utiliser $this->getUrl()
	 * @param null|int $tab ID d'un onglet
	 * @return array
	 */
	public static function pagination($array, $url, $tab = null) {
		// Scinde l'url
		$url = explode('/', $url);
		// Url de pagination
		$urlPagination = is_numeric(end($url)) ? array_pop($url) : 1;
		// Url de la page courante
		$urlCurrent = implode('/', $url);
		// Nombre d'éléments à afficher
		$nbElements = count($array);
		// Nombre de page
		$nbPage = ceil($nbElements / 10);
		// Page courante
		$currentPage = is_numeric($urlPagination) ? (int) $urlPagination : 1;
		// Premier élément de la page
		$firstElement = ($currentPage - 1) * 10;
		// Dernier élément de la page
		$lastElement = $firstElement + 10;
		$lastElement = ($lastElement > $nbElements) ? $nbElements : $lastElement;
		// Mise en forme de la liste des pages
		$pages = false;
		for($i = 1; $i <= $nbPage; $i++)
		{
			$disabled = ($i === $currentPage) ? ' class="disabled"' : false;
			$pages .= '<a href="' . helper::baseUrl() . $urlCurrent . '/' . $i . $tab . '"' . $disabled . '>' . $i . '</a>';
		}
		// Retourne un tableau contenant les informations sur la pagination
		return [
			'first' => $firstElement,
			'last' => $lastElement,
			'page' => '<div class="pagination">' . $pages . '</div>'
		];
	}

	/**
	 * Calcul de la luminance relative d'une couleur
	 */
	public static function relativeLuminanceW3C($rgba) {
		// Conversion en sRGB
		$RsRGB = $rgba[0] / 255;
		$GsRGB = $rgba[1] / 255;
		$BsRGB = $rgba[2] / 255;
		// Ajout de la transparence
		$RsRGBA = $rgba[3] * $RsRGB + (1 - $rgba[3]);
		$GsRGBA = $rgba[3] * $GsRGB + (1 - $rgba[3]);
		$BsRGBA = $rgba[3] * $BsRGB + (1 - $rgba[3]);
		// Calcul de la luminance
		$R = ($RsRGBA <= .03928) ? $RsRGBA / 12.92 : pow(($RsRGBA + .055) / 1.055, 2.4);
		$G = ($GsRGBA <= .03928) ? $GsRGBA / 12.92 : pow(($GsRGBA + .055) / 1.055, 2.4);
		$B = ($BsRGBA <= .03928) ? $BsRGBA / 12.92 : pow(($BsRGBA + .055) / 1.055, 2.4);
		return .2126 * $R + .7152 * $G + .0722 * $B;
	}

	/**
	 * Traduit les textes
	 * @param string $text Texte à traduire
	 * @return string
	 */
	public static function translate($text) {
		// Traduit le texte en cherchant dans le tableau de langue (ajout d'un (string) au cas ou un $key est vide)
		if(array_key_exists((string) $text, core::$language)) {
			$text = core::$language[$text];
		}
		return $text;
	}

}

class layout extends common {

	/**
	 * Affiche le script Google Analytics
	 */
	public function showAnalytics() {
		if($code = $this->getData(['config', 'analyticsId'])) {
			echo '<script>
				(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,"script","https://www.google-analytics.com/analytics.js","ga");
				ga("create", "' . $code . '", "auto");
				ga("send", "pageview");
			</script>';
		}
	}

	/**
	 * Affiche le contenu
	 */
	public function showContent() {
		if(
			self::$outputTitle
			AND (
				$this->getData(['page', $this->getUrl(0)]) === null
				OR $this->getData(['page', $this->getUrl(0), 'hideTitle']) === false
			)
		) {
			echo '<h2 id="pageTitle">' . self::$outputTitle . '</h2>' . self::$outputContent;
		}
		else {
			echo self::$outputContent;
		}
	}

	/**
	 * Affiche le coyright
	 */
	public function showCopyright() {
		echo '<div id="copyright">' . helper::translate('Motorisé par') . ' <a href="http://zwiicms.com/" target="_blank">Zwii</a> | <a href="' . helper::baseUrl() . 'sitemap">' . helper::translate('Plan du site') . '</a> | <a href="' . helper::baseUrl() . 'config">' . helper::translate('Connexion') . '</a></div>';
	}

	/**
	 * Affiche le favicon
	 */
	public function showFavicon() {
		if($favicon = $this->getData(['config', 'favicon'])) {
			echo '<link rel="shortcut icon" href="' . helper::baseUrl(false) . $favicon . '">';
		}
	}

	/**
	 * Affiche le texte du footer
	 */
	public function showFooterText() {
		if($footerText = $this->getData(['config', 'footerText'])) {
			echo '<div id="text">' . nl2br($footerText) . '</div>';
		}
	}

	/**
	 * Affiche le menu
	 */
	public function showMenu() {
		// Met en forme les items du menu
		$items = '';
		foreach($this->getHierarchy() as $parentKey => $childrenKeys) {
			// Propriétés de l'item
			$current = '';
			if($parentKey === $this->getUrl(0) OR in_array($this->getUrl(0), $childrenKeys)) {
				$current = ' class="current"';
			}
			$blank = $this->getData(['page', $parentKey, 'blank']) ? ' target="_blank"' : '';
			// Mise en page de l'item
			$items .= '<li>';
			$items .= '<a href="' . helper::baseUrl() . $parentKey . '"' . $current . $blank . '>' . $this->getData(['page', $parentKey, 'title']) . '</a>';
			$items .= '<ul>';
			foreach($childrenKeys as $childKey) {
				// Propriétés de l'item
				$current = ($childKey === $this->getUrl(0)) ? ' class="current"' : '';
				$blank = $this->getData(['page', $childKey, 'blank']) ? ' target="_blank"' : '';
				// Mise en page du sous-item
				$items .= '<li><a href="' . helper::baseUrl() . $childKey . '"' . $current . $blank . '>' . $this->getData(['page', $childKey, 'title']) . '</a></li>';
			}
			$items .= '</ul>';
			$items .= '</li>';
		}
		// Retourne les items du menu
		echo '<ul>' . $items . '</ul>';
	}

	/**
	 * Affiche le meta titre
	 */
	public function showMetaTitle() {
		echo '<title>' . self::$outputMetaTitle . '</title>';
	}

	/**
	 * Affiche la meta description
	 */
	public function showMetaDescription() {
		echo '<meta name="description" content="' . self::$outputMetaDescription . '">';
	}

	/**
	 * Affiche la notification
	 */
	public function showNotification() {
		if(template::$notices) {
			echo '<div id="notification" class="notificationError">' . helper::translate('Impossible de soumettre le formulaire, car il contient des erreurs !') . '</div>';
		}
		elseif(empty($_SESSION['ZWII_NOTIFICATION_SUCCESS']) === false) {
			echo '<div id="notification" class="notificationSuccess">' . $_SESSION['ZWII_NOTIFICATION_SUCCESS'] . '</div>';
			unset($_SESSION['ZWII_NOTIFICATION_SUCCESS']);
		}
		elseif(empty($_SESSION['ZWII_NOTIFICATION_ERROR']) === false) {
			echo '<div id="notification" class="notificationError">' . $_SESSION['ZWII_NOTIFICATION_ERROR'] . '</div>';
			unset($_SESSION['ZWII_NOTIFICATION_ERROR']);
		}
	}

	/**
	 * Affiche le panneau d'administration
	 */
	public function showPanel() {
		if(
			$this->getData(['user', $this->getInput('ZWII_USER_ID', '_COOKIE')])
			AND $this->getData(['user', $this->getInput('ZWII_USER_ID', '_COOKIE'), 'password']) === $this->getInput('ZWII_USER_PASSWORD', '_COOKIE')
		) {
			$items = '<li><a href="' . helper::baseUrl() . 'create" title="' . helper::translate('Créer une page') . '">' . template::ico('plus') . '</a></li>';
			$items .= '<li><a href="' . helper::baseUrl() . 'page/edit/' . $this->getUrl(0) . '" title="' . helper::translate('Modifier la page') . '">' . template::ico('pencil') . '</a></li>';
			$items .= '<li><a href="' . helper::baseUrl() . 'page" title="' . helper::translate('Gérer les pages') . '">' . template::ico('page') . '</a></li>';
			$items .= '<li><a href="' . helper::baseUrl() . 'config" title="' . helper::translate('Configurer le site') . '">' . template::ico('gear') . '</a></li>';
			$items .= '<li><a href="' . helper::baseUrl() . 'theme" title="' . helper::translate('Personnaliser le site') . '">' . template::ico('brush') . '</a></li>';
			$items .= '<li><a href="' . helper::baseUrl() . 'user/logout" title="' . helper::translate('Se déconnecter') . '">' . template::ico('logout') . '</a></li>';
			echo '<div id="panel"><div class="container"><ul>' . $items . '</ul></div></div>';
		}
	}

	/**
	 * Affiche le script
	 */
	public function showScript() {
		echo '<script>';
		// Script du coeur
		require 'core/script.js.php';
		// Script du module
		echo self::$outputScript;
		echo '</script>';
	}

	/**
	 * Affiche le style
	 */
	public function showStyle() {
		if(self::$outputStyle) {
			echo '<style>' . self::$outputStyle . '</style>';
		}
	}

	/**
	 * Affiche les réseaux sociaux
	 */
	public function showSocials() {
		$socials = '';
		foreach($this->getData(['config', 'social']) as $socialName => $socialId) {
			switch($socialName) {
				case 'facebookId':
					$socialUrl = 'https://www.facebook.com/';
					break;
				case 'googleplusId':
					$socialUrl = 'https://plus.google.com/';
					break;
				case 'instagramId':
					$socialUrl = 'https://www.instagram.com/';
					break;
				case 'pinterestId':
					$socialUrl = 'https://pinterest.com/';
					break;
				case 'twitterId':
					$socialUrl = 'https://twitter.com/';
					break;
				case 'youtubeId':
					$socialUrl = 'https://www.youtube.com/channel/';
					break;
				default:
					$socialUrl = '';
			}
			if(empty($socialId) === false) {
				$socials .= '<a href="' . $socialUrl . $socialId . '" target="_blank">' . template::ico(substr($socialName, 0, -2)) . '</a>';
			}
		}
		if(empty($socials) === false) {
			echo '<div id="socials">' . $socials . '</div>';
		}
	}

	/**
	 * Affiche l'import des librairies
	 */
	public function showVendor() {
		foreach(self::$outputVendor as $vendorName) {
			// Check si le fichier d'inclusion existe dans le coeur
			if(file_exists('core/vendor/' . $vendorName . '/inc.json')) {
				$vendorPath = 'core/vendor/' . $vendorName . '/';
			}
			// Check si le fichier d'inclusion existe dans le module
			else if(file_exists('module/' . $this->getUrl(0) . '/vendor/' . $vendorName . '/inc.json')) {
				$vendorPath = 'module/' . $this->getUrl(0) . '/vendor/' . $vendorName . '/';
			}
			// Fichier d'inclusion introuvable
			else {
				continue;
			}
			// Détermine le type d'import en fonction de l'extension de la librairie
			$vendorFiles = json_decode(file_get_contents($vendorPath . 'inc.json'));
			foreach($vendorFiles as $vendorFile) {
				switch(pathinfo($vendorFile, PATHINFO_EXTENSION)) {
					case 'css':
						echo '<link rel="stylesheet" href="' . helper::baseUrl(false) . $vendorPath . $vendorFile . '">';
						break;
					case 'js':
						echo '<script src="' . helper::baseUrl(false) . $vendorPath . $vendorFile . '"></script>';
						break;
				}
			}
		}
	}

}

class template {

	############################################################
	# GETTERS / SETTERS

	public static $notices = [];
	public static $before = [];

	/**
	 * Valeur du champ avant validation et erreur dans le formulaire
	 * @param string $id Dd du champ
	 * @return mixed
	 */
	private static function getBefore($id) {
		return array_key_exists($id, self::$before) ? self::$before[$id] : null;
	}

	/**
	 * Retourne et met en forme une notice depuis une $id
	 * @param string $id Id du champ
	 * @return string
	 */
	private static function getNotice($id) {
		return '<div class="notice">' . helper::translate(self::$notices[$id]) . '</div>';
	}

	/**
	 * Retourne une notice pour les champs obligatoires
	 * @param string $name Nom du champ
	 */
	public static function getRequired($name) {
		if(
			empty($_SESSION['REQUIRED']) === false
			AND array_key_exists($name . '.' . md5($_SERVER['QUERY_STRING']), $_SESSION['REQUIRED'])
		) {
			self::$notices[$name] = 'Ce champ est requis';
		}
	}

	/**
	 * Enregistre un champ comme obligatoire
	 * @param string $id Id du champ
	 * @param array $attributes Transmet l'attribut "required" à la méthode
	 */
	private static function setRequired($id, $attributes) {
		// Supprime l'id du champs si il existe déjà (au cas ou un champ devient non obligatoire)
		if(
			empty($_SESSION['REQUIRED']) === false
			AND array_key_exists($id . '.' . md5($_SERVER['QUERY_STRING']), $_SESSION['REQUIRED'])
		) {
			unset($_SESSION['REQUIRED'][$id . '.' . md5($_SERVER['QUERY_STRING'])]);
		}
		// Enregistre l'id du champ comme obligatoire
		if(
			empty($attributes['required']) === false
			AND (
				empty($_SESSION['REQUIRED'])
				OR array_key_exists($id . '.' . md5($_SERVER['QUERY_STRING']), $_SESSION['REQUIRED'])) === false
		) {
			$_SESSION['REQUIRED'][$id . '.' . md5($_SERVER['QUERY_STRING'])] = true;
		}
	}

	/**
	 * Retourne les attributs d'une balise au bon format
	 * @param array $array Liste des attributs ($key => $value)
	 * @param array $exclude Clés à ignorer ($key)
	 * @return string
	 */
	private static function sprintAttributes(array $array = [], array $exclude = []) {
		// Required est exclu pour privilégier le système de champs requis du système
		$exclude = array_merge(['col', 'offset', 'label', 'help', 'selected', 'required', 'classContainer'], $exclude);
		$attributes = [];
		foreach($array as $key => $value) {
			if($value AND in_array($key, $exclude) === false) {
				// Champs à traduire
				if(in_array($key, ['placeholder'])) {
					$attributes[] = sprintf('%s="%s"', $key, helper::translate($value));
				}
				// Disabled
				elseif($key === 'disabled') {
					$attributes[] = sprintf('%s', $key);
				}
				else {
					$attributes[] = sprintf('%s="%s"', $key, $value);
				}
			}
		}
		return implode(' ', $attributes);
	}

	############################################################
	# CHAMPS

	/**
	 * Crée un bouton
	 * @param string $nameId Nom et id du champ
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function button($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'value' => 'Bouton',
			'href' => 'javascript:void(0);',
			'target' => '',
			'onclick' => '',
			'disabled' => false,
			'class' => ''
		], $attributes);
		// Retourne le html
		return sprintf(
			'<a %s class="button %s %s">%s</a>',
			self::sprintAttributes($attributes, ['value', 'class', 'disabled']),
			$attributes['disabled'] ? 'disabled' : '',
			$attributes['class'],
			helper::translate($attributes['value'])
		);
	}

	/**
	 * Crée un champ capcha
	 * @param string $nameId Nom et id du champ
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function capcha($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'value' => '',
			'required' => true,
			'help' => '',
			'class' => '',
			'classContainer' => ''
		], $attributes);
		// Champ requis
		self::setRequired($attributes['id'], $attributes);
		// Génère deux nombres pour le capcha
		$firstNumber = mt_rand(1, 15);
		$secondNumber = mt_rand(1, 15);
		// Début du container
		$html = '<div class="inputContainer ' . $attributes['classContainer'] . '">';
		// Label
		$html .= self::label($attributes['id'], helper::translate('Quelle est la somme de') . ' ' . $firstNumber . ' + ' . $secondNumber . ' ?', [
			'help' => $attributes['help']
		]);
		// Notice
		if(empty(self::$notices[$attributes['id']]) === false) {
			$html .= self::getNotice($attributes['id']);
			$attributes['class'] .= ' notice';
		}
		// Capcha
		$html .= sprintf(
			'<input type="text" %s>',
			self::sprintAttributes($attributes)
		);
		// Champs cachés contenant les nombres
		$html .= self::hidden($nameId . 'FirstNumber', [
			'value' => $firstNumber,
			'before' => false
		]);
		$html .= self::hidden($nameId . 'SecondNumber', [
			'value' => $secondNumber,
			'before' => false
		]);
		// Fin du container
		$html .= '</div>';
		// Retourne le html
		return $html;
	}

	/**
	 * Crée une case à cocher à sélection multiple
	 * @param string $nameId Nom et id du champ
	 * @param string $value Valeur de la case à cocher
	 * @param string $label Label de la case à cocher
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function checkbox($nameId, $value, $label, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'checked' => '',
			'disabled' => false,
			'required' => false,
			'help' => '',
			'class' => '',
			'classContainer' => ''
		], $attributes);
		// Champ requis
		self::setRequired($attributes['id'], $attributes);
		// Début du container
		$html = '<div class="inputContainer ' . $attributes['classContainer'] . '">';
		// Notice
		if(empty(self::$notices[$attributes['id']]) === false) {
			$html .= self::getNotice($attributes['id']);
			$attributes['class'] .= ' notice';
		}
		// Case à cocher
		$html .= sprintf(
			'<input type="checkbox" value="%s" %s>',
			$value,
			self::sprintAttributes($attributes)
		);
		// Label
		$html .= self::label($attributes['id'], $label, [
			'help' => $attributes['help']
		]);
		// Fin du container
		$html .= '</div>';
		// Retourne le html
		return $html;
	}

	/**
	 * Crée un champ d'upload de fichier
	 * @param string $nameId Nom et id du champ
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function file($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'value' => '',
			'disabled' => false,
			'required' => false,
			'label' => '',
			'help' => '',
			'class' => '',
			'extensions' => '',
			'type' => '',
			'classContainer' => ''
		], $attributes);
		// Champ requis
		self::setRequired($attributes['id'], $attributes);
		// Sauvegarde des données en cas d'erreur
		if(($value = self::getBefore($attributes['id'])) !== null) {
			$attributes['value'] = $value;
		}
		// Début du container
		$html = '<div class="inputContainer ' . $attributes['classContainer'] . '">';
		// Label
		if($attributes['label']) {
			$html .= self::label($attributes['id'], $attributes['label'], [
				'help' => $attributes['help']
			]);
		}
		// Notice
		if(empty(self::$notices[$attributes['id']]) === false) {
			$html .= self::getNotice($attributes['id']);
			$attributes['class'] .= ' notice';
		}
		// Champ caché contenant l'url de la page
		$html .= self::hidden($nameId, [
			'value' => $attributes['value'],
			'disabled' => $attributes['disabled'],
			'class' => 'inputFileHidden'
		]);
		// Champ d'upload
		$html .= sprintf(
			'<a
				href="' .
					helper::baseUrl(false) . 'core/vendor/filemanager/dialog.php' .
					'?relative_url=1' .
					($attributes['type'] ? '&type=' . $attributes['type'] : '') .
					($attributes['extensions'] ? '&extensions=' . $attributes['extensions'] : '') .
					'&field_id=' . $nameId
				. '"
				class="inputFile %s %s"!
				%s
				data-lity
			>
				' . self::ico('download', 'right') . '
				<span class="inputFileLabel"></span>
			</a>',
			$attributes['class'],
			$attributes['disabled'] ? 'disabled' : '',
			self::sprintAttributes($attributes, ['class', 'extensions', 'type'])
		);
		// Bouton de suppression
		$html .= self::button($nameId . 'Delete', [
			'class' => 'inputFileDelete',
			'value' => self::ico('cancel')
		]);
		// Fin du container
		$html .= '</div>';
		// Retourne le html
		return $html;
	}

	/**
	 * Crée une aide qui s'affiche au survole
	 * @param string $text Texte de l'aide
	 * @return string
	 */
	public static function help($text) {
		return '<span class="helpButton">' . self::ico('help') . '<div class="helpContent">' . helper::translate($text) . '</div></span>';
	}

	/**
	 * Crée un champ caché
	 * @param string $nameId Nom et id du champ
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function hidden($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'value' => '',
			'class' => '',
			'before' => true
		], $attributes);
		// Sauvegarde des données en cas d'erreur
		if(($value = self::getBefore($attributes['id'])) !== null AND $attributes['before']) {
			$attributes['value'] = $value;
		}
		// Texte
		$html = sprintf('<input type="hidden" %s>', self::sprintAttributes($attributes, ['before']));
		// Retourne le html
		return $html;
	}

	/**
	 * Affiche un icône
	 * @param string $ico Classe de l'icône
	 * @param string $margin Ajoute un margin autour de l'icône (choix : left, right, all)
	 * @param bool $animate Ajoute une animation à l'icône
	 * @param string $fontSize Taille de la police
	 * @return string
	 */
	public static function ico($ico, $margin = '', $animate = false, $fontSize = '1em') {
		return '<span class="zwiico-' . $ico . ($margin ? ' zwiico-margin-' . $margin : '') . ($animate ? ' animate-spin' : '') . '" style="font-size:' . $fontSize . '"></span>';
	}

	/**
	 * Crée un label
	 * @param string $for For du label
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @param string $text Texte du label
	 * @return string
	 */
	public static function label($for, $text, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'for' => $for,
			'help' => '',
			'class' => ''
		], $attributes);
		// Traduit le text
		$text = helper::translate($text);
		// Ajout d'une aide
		if(empty($attributes['help']) === false) {
			$text = $text . self::help($attributes['help']);
		}
		// Retourne le html
		return sprintf(
			'<label %s>%s</label>',
			self::sprintAttributes($attributes),
			$text
		);
	}

	/**
	 * Crée un champ mot de passe
	 * @param string $nameId Nom et id du champ
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function password($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'autocomplete' => 'on',
			'placeholder' => '',
			'disabled' => false,
			'readonly' => '',
			'required' => false,
			'label' => '',
			'help' => '',
			'class' => '',
			'classContainer' => ''
		], $attributes);
		// Champ requis
		self::setRequired($attributes['id'], $attributes);
		// Début du container
		$html = '<div class="inputContainer ' . $attributes['classContainer'] . '">';
		// Label
		if($attributes['label']) {
			$html .= self::label($attributes['id'], $attributes['label'], [
				'help' => $attributes['help']
			]);
		}
		// Notice
		if(empty(self::$notices[$attributes['id']]) === false) {
			$html .= self::getNotice($attributes['id']);
			$attributes['class'] .= ' notice';
		}
		// Mot de passe
		$html .= sprintf(
			'<input type="password" %s>',
			self::sprintAttributes($attributes)
		);
		// Fin du container
		$html .= '</div>';
		// Retourne le html
		return $html;
	}

	/**
	 * Crée un champ sélection
	 * @param string $nameId Nom et id du champ
	 * @param array $options Liste des options du champ de sélection ($value => $text)
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function select($nameId, array $options, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'selected' => '',
			'disabled' => false,
			'required' => false,
			'label' => '',
			'help' => '',
			'class' => '',
			'classContainer' => ''
		], $attributes);
		// Champ requis
		self::setRequired($attributes['id'], $attributes);
		// Sauvegarde des données en cas d'erreur
		if($selected = self::getBefore($attributes['id'])) {
			$attributes['selected'] = $selected;
		}
		// Début du container
		$html = '<div class="inputContainer ' . $attributes['classContainer'] . '">';
		// Label
		if($attributes['label']) {
			$html .= self::label($attributes['id'], $attributes['label'], [
				'help' => $attributes['help']
			]);
		}
		// Notice
		if(empty(self::$notices[$attributes['id']]) === false) {
			$html .= self::getNotice($attributes['id']);
			$attributes['class'] .= ' notice';
		}
		// Début sélection
		$html .= sprintf('<select %s>',
			self::sprintAttributes($attributes)
		);
		// Options
		foreach($options as $value => $text) {
			$html .= sprintf(
				'<option value="%s"%s>%s</option>',
				$value,
				$attributes['selected'] === $value ? ' selected' : '',
				helper::translate($text)
			);
		}
		// Fin sélection
		$html .= '</select>';
		// Fin du container
		$html .= '</div>';
		// Retourne le html
		return $html;
	}

	/**
	 * Crée un bouton validation
	 * @param string $nameId Nom & id du bouton validation
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function submit($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'value' => 'Enregistrer',
			'disabled' => false,
			'class' => ''
		], $attributes);
		// Retourne le html
		return sprintf(
			'<input type="submit" value="%s" %s>',
			helper::translate($attributes['value']),
			self::sprintAttributes($attributes, ['value'])
		);
	}

	/**
	 * Crée un tableau
	 * @param array $cols Cols des colonnes du tableau (format: [col colonne1, col colonne2, col colonne3, etc])
	 * @param array $body Contenu du tableau (format: [[contenu1, contenu2, contenu3, etc], [contenu1, contenu2, contenu3, etc]])
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function table(array $cols = [], array $body = [], array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'class' => ''
		], $attributes);
		// Début tableau
		$html = '<table class="' . $attributes['class']. '">';
		// Début contenu
		$html .= '<tbody>';
		foreach($body as $tr) {
			$html .= '<tr>';
			$i = 0;
			foreach($tr as $td) {
				$html .= '<td class="col' . $cols[$i] . '">' . $td . '</td>';
				$i++;
			}
			$html .= '</tr>';
		}
		// Fin contenu
		$html .= '</tbody>';
		// Fin tableau
		$html .= '</table>';
		// Retourne le html
		return $html;
	}

	/**
	 * Crée un champ texte court
	 * @param string $nameId Nom et id du champ
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function text($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'value' => '',
			'placeholder' => '',
			'disabled' => false,
			'readonly' => '',
			'required' => false,
			'label' => '',
			'help' => '',
			'class' => '',
			'classContainer' => ''
		], $attributes);
		// Champ requis
		self::setRequired($attributes['id'], $attributes);
		// Sauvegarde des données en cas d'erreur
		if(($value = self::getBefore($attributes['id'])) !== null) {
			$attributes['value'] = $value;
		}
		// Début du container
		$html = '<div class="inputContainer ' . $attributes['classContainer'] . '">';
		// Label
		if($attributes['label']) {
			$html .= self::label($attributes['id'], $attributes['label'], [
				'help' => $attributes['help']
			]);
		}
		// Notice
		if(empty(self::$notices[$attributes['id']]) === false) {
			$html .= self::getNotice($attributes['id']);
			$attributes['class'] .= ' notice';
		}
		// Texte
		$html .= sprintf(
			'<input type="text" %s>',
			self::sprintAttributes($attributes)
		);
		// Fin du container
		$html .= '</div>';
		// Retourne le html
		return $html;
	}

	/**
	 * Crée un champ texte long
	 * @param string $nameId Nom et id du champ
	 * @param array $attributes Liste des attributs en fonction des attributs disponibles dans la méthode ($key => $value)
	 * @return string
	 */
	public static function textarea($nameId, array $attributes = []) {
		// Attributs possibles
		$attributes = array_merge([
			'id' => $nameId,
			'name' => $nameId,
			'value' => '',
			'disabled' => false,
			'readonly' => '',
			'required' => false,
			'label' => '',
			'help' => '',
			'editor' => false,
			'class' => '',
			'classContainer' => ''
		], $attributes);
		// Champ requis
		self::setRequired($attributes['id'], $attributes);
		// Sauvegarde des données en cas d'erreur
		if(($value = self::getBefore($attributes['id'])) !== null) {
			$attributes['value'] = $value;
		}
		// Début du container
		$html = '<div class="inputContainer ' . $attributes['classContainer'] . '">';
		// Label
		if($attributes['label']) {
			$html .= self::label($attributes['id'], $attributes['label'], [
				'help' => $attributes['help']
			]);
		}
		// Notice
		if(empty(self::$notices[$attributes['id']]) === false) {
			$html .= self::getNotice($attributes['id']);
			$attributes['class'] .= ' notice';
		}
		// Texte long
		$html .= sprintf(
			'<textarea %s>%s</textarea>',
			self::sprintAttributes($attributes, ['value', 'editor']),
			$attributes['value']
		);
		// Fin du container
		$html .= '</div>';
		// Retourne le html
		return $html;
	}

}