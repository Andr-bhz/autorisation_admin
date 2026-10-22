<?php


declare(strict_types=1); //l'utlisateur doit entre ce qui est sensé exister

const APP_NAM = 'Mindsaw';
// dirname(__DIR__) . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'user.json'
const STORAGE_PATH =STORAGE_PATH . '/../storage';

const USER_FILE = STORAGE_PATH . '/user.json';
const TRANSACTION_FILE =STORAGE_PATH . '/transaction.json';

const SESSION_IDLE_TIMEOUT = 1800; /* temps d'inactiviter */
const SESSION_ABSOLUTE_TIMEOUT = 28800; //temps total actif de la seesion

date_default_timezone_set('Afrique/kishasa' +3600);  //temps de la zone 

$isHTTPS = (
(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']  !== 'off')
|| ($_SERVER['SERVER_PORT'] ?? '') == 443 
);// init_set ('session.use_')

ini_set('session.use_strict_mode','1');   //verifier le type d'identifiant du session
ini_set('session.use_only_cookies','1');  //verifier le type d'identifiant du cookie
                                            //un  peut exister avant un 
 
session_name('Mindsaw');  //nom de l'app 

session_set_cookie_params([
    'lifetime' => 0,             //temps de la valibilite de la cookie
    'path' => '/',               //url entre les fichiers
    'domain' => '',              //verifie le nom du domaine ex:.com
    'secure' => $isHTTPS,        
    'httponly' => true,          //desaexer avec le cookie en js dans le site p
    'samesite' => 'lax'          //limitter le requete sur d'autre serve
]);

if(!is_dir(STORAGE_PATH)) {
    mkdir(STORAGE_PATH,0750,true);
}
if(!file_exists(USER_FILE)) {
    file_put_contents(USER_FILE,"[]" , LOOK_EX);
}
if(!file_exits(TRANSACTION_FILE)) {
    file_put_contents(TRANSATION_FILE,"[]", LOOK_EX);
}



?>