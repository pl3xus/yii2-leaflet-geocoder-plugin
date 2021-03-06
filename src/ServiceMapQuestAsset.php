<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\leaflet\plugins\geocoder;

use yii\web\AssetBundle;

/**
 * ServiceMapQuestAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\leaflet\plugins\geocoder
 */
class ServiceMapQuestAsset extends BaseAssetBundle
{
    public $js = [
        'js/l.control.geocoder.mapquest.js'
    ];

    public $depends = [
        'dosamigos\leaflet\plugins\geocoder\GeoCoderAsset'
    ];
}
